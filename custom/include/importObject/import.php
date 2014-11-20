<?php
// Импорт объектов в CRM. А точнее добавление, изменение, удаление.

// обязательные поля для новой записи
$required_fields = array("id_object_c" => "", );

$objectRF = new sphr_Object();
foreach ($objectRF->field_defs as $name => $field) {
    if ($name != 'id' && $name != 'country' && $name != 'region' && $name !=
        'square' && $name != 'status')
        if ($field['required'] === true)
            $required_fields[$name] = "";
}

global $sugar_config;

$user = new User();
$success = false;
$returArray = array();

// проверка существует ли пользователь и пытаемся залогинить его
$authController = new AuthenticationController((!empty($sugar_config['authenticationClass']) ?
    $sugar_config['authenticationClass'] : 'SugarAuthenticate'));

$isLoginSuccess = $authController->login($_POST['user_name'], $_POST['password'],
    array('passwordEncrypted' => true));
$usr_id = $user->retrieve_user_id($_POST['user_name']);
if ($usr_id)
    $user->retrieve($usr_id);

if (!$isLoginSuccess || !$usr_id) {
    $returArray['isError'] = array('Ошибка авторизации.');
    echo json_encode($returArray);
    exit(0);
}

// проверка на существование метода
$actions = array(
    'create',
    'update',
    'delete',
    'multimethod');

if (!in_array($_POST['action'], $actions)) {
    $returArray['isError'] = array('Метод (' . $_POST['action'] . ') не существует.');
    echo json_encode($returArray);
    exit(0);
}

$criticalError = 0;
$criticalMessage = array();

$notCriticalError = 0;
$notCriticalMessage = array();

if (isset($_POST['action'])) {
    $decoded = str_replace(' ', '+', $_POST['data']);
    $decoded = base64_decode($decoded );

    $data = unserialize($decoded); // разберем данные
  //привоим поля в соответствие с БД
  $db_map = array(
    'rawdata_sea_distance' => 'sea_distance_c',
    'rawdata_sea_view' => 'view_sea_c',
    'rawdata_furniture' => 'mebel_c',
    'rawdata_first_line' => 'first_line_c',
    'rawdata_economy' => 'economy_c',
    'rawdata_hot' => 'hot_c',
    'rawdata_exclusive' => 'exclusive_c',
    'rawdata_sold' => 'sold_c',
    'raw_createdon' => 'date_entered',
    'raw_editedon' => 'date_modified',
    'rawdata_owner_fio' => 'owner_fio_c',
    'rawdata_owner_contacts' => 'owner_contacts_c',
  );
  foreach($db_map as $kin => $kout) {
    if (isset($data[$kin])) {
      $data[$kout] = $data[$kin];
    }
  }
  if (!empty ($data['price_sale_int_c'])) {
    if (!empty ($data['total_area_c']) ) {
      $data['price_sale_meter_c'] = intval($data['price_sale_int_c']/$data['total_area_c']);
    } elseif (!empty ($data['area_area_c'])) {
      $data['price_sale_meter_c'] = intval( $data['price_sale_int_c']/$data['area_area_c']);
    }
  }
  $data['assigned_user_id'] = sphr_Object::articule2assigned_user_id($data['name_eng_c']);
    if (!empty($data) && is_array($data)) {
        $object = new sphr_Object();
        if (isset($data['id_object_c']) && is_numeric($data['id_object_c'])) {
            $object->retrieve_by_string_fields(array('id_object_c' => $data['id_object_c']));
        } elseif (isset($data['id']) && $data['id'] != '') {
            $object->retrieve($data['id']);
        }
      if(!$object->id) {
        $oid = $object->save();
        $object->retrieve($oid);
      }
        if (($_POST['action'] == 'update' || $_POST['action'] == 'delete') && $object->
            id === null) {
            $returArray['isError'] = array('Не указан ID записи. Или отсутствует запись с данным ID');
            echo json_encode($returArray);
            exit(0);
        }
        if (($_POST['action'] == 'multimethod' || $_POST['action'] == 'create') && $object->
            id !== null) {
            $object->deleted = 0;
            $_POST['action'] = 'update';
        } elseif (($_POST['action'] == 'multimethod' || $_POST['action'] == 'create') &&
        $object->id === null) {
            $_POST['action'] = 'create';
        }

        $not_save = false;

        if ($_POST['action'] == 'create') {
            // проверим чтобы были все обязательные поля и заполним их
            foreach ($required_fields as $crm_field => $value) {
                if (!isset($data[$crm_field]) || $data[$crm_field] == '') {
                    $not_save = true;
                    $criticalError = 1;
                    $criticalMessage[] = 'Обязательно поле (' . $crm_field .
                        ') не существует или пустое';
                    break;
                }

                if (validateField($object, $crm_field, $data[$crm_field]) === true)
                    $object->$crm_field = $data[$crm_field];
                else {
                    $not_save = true;
                    $criticalError = 1;
                    $criticalMessage[] = 'Обязательно поле (' . $crm_field . ') не прошло валидацию';
                    break;
                }
            }

            // выберем остальные поля
            $data = array_diff_key($data, $required_fields);
        }

        foreach ($data as $crm_field => $value) {
            if (property_exists($object, "$crm_field") === true && $crm_field != 'id' && $crm_field !=
                'id_object_c') {
              if (validateField($object, $crm_field, $value) === true) {
                $object->$crm_field = $value;
              }
              else {
                $notCriticalError = 1;
                $notCriticalMessage[] = 'Неправильное имя поля (' . $crm_field .
                  ') или данные не прошли валидацию';
              }
            }
        }


        switch ($_POST['action']) {
            case "update": // обновляем данные
                if ($object->id !== null) {
                  // проверим чтобы были все обязательные поля и заполним их
                  foreach ($required_fields as $crm_field => $value) {
                    if (!isset($data[$crm_field]) || $data[$crm_field] == '') {
                      $not_save = true;
                      $criticalError = 1;
                      $criticalMessage[] = 'Обязательно поле (' . $crm_field .
                        ') не существует или пустое';
                      break;
                    }

                    if (validateField($object, $crm_field, $data[$crm_field]) === true)
                      $object->$crm_field = $data[$crm_field];
                    else {
                      $not_save = true;
                      $criticalError = 1;
                      $criticalMessage[] = 'Обязательно поле (' . $crm_field . ') не прошло валидацию';
                      break;
                    }
                  }

                    $object->save();
                    if ($data['pictures'] != '') {
                        $errorArray = setImages($data['pictures'], $object->id);
                        if (!empty($errorArray)) {
                            $notCriticalError = 1;
                            $notCriticalMessage = $errorArray;
                        }
                    }
                } else {
                    $criticalError = 1;
                    $criticalMessage[] = 'Неверный/отсутствует запись с данным ID';
                }
                break;
            case "create": // добавляем данные
                 if ($not_save === false) {
                    $newId = $object->save();
                    if ($newId !== null) {
                        if ($data['pictures'] != '') {
                            $errorArray = setImages($data['pictures'], $newId);
                            if (!empty($errorArray)) {
                                $notCriticalError = 1;
                                $notCriticalMessage = $errorArray;
                            }
                        }
                    } else {
                        $criticalError = 1;
                        $criticalMessage[] = 'Ошибка добавления записи';
                    }
                } else {
                    $criticalError = 1;
                    $criticalMessage[] = 'Не заполнены обязательные поля для новой записи';
                }
                break;
            case "delete": // удалим данные
                $object->deleted = 1;

                if ($object->id !== null) {
                    $object->save();
                } else {
                    $criticalError = 1;
                    $criticalMessage[] = 'Неверный/отсутствует запись с данным ID';
                }
                break;
        }
    } else {
        $criticalError = 1;
        $criticalMessage[] = 'Отсутствуют данные или неверный формат данных.';
    }
} else {
    $criticalError = 1;
    $criticalMessage[] = 'Неопределенно действие (Action).';
}

if ($criticalError == 1) {
    $returArray['isError'] = $criticalMessage;
}
if ($notCriticalError == 1) {
    $returArray['isErrorNoCritical'] = $notCriticalMessage;
}

echo json_encode($returArray);
exit(0);

// Доп. функции
function validateField(&$obj, $fieldName, $value)
{
    global $app_list_strings;

    $rule = $obj->field_defs[$fieldName];
    switch ($rule['type']) {
        case "int":
            if (!is_numeric($value))
                return false;
            break;
        case "bool":
            if (is_numeric($value)) {
                if ($value != 1 && $value != 0)
                    return false;
            } elseif (!is_bool($value))
                return false;
            break;
        case "string":
        case "varchar":
            if (!is_string($value) || strlen($value) > $rule['len'])
                return false;
            break;
        case "multienum":
            $array_options = $app_list_strings[$rule['options']];
            $array_values = explode(',', str_replace('^', '', $value));
            foreach ($array_values as $val)
                if ($val != '' && !array_key_exists(trim($val), $array_options))
                    return false;
            break;
        case "enum":
            $array_options = $app_list_strings[$rule['options']];
            if (!array_key_exists($value, $array_options))
                return false;
            break;
    }

    return true;
}

function setImages($images_data, $object_id)
{
    global $db;

    $notCriticalMessage = array();

    $path_images = 'cache/upload/object/';
    $uniqId = md5(uniqid('', true));

    // Предполагаем что картинки приходят в виде строки разделенной запятой (,)
    $images_array = explode(',', $images_data);

    if (!empty($images_array) && is_array($images_array)) {
        // удалим старые файлы с сервера, и подчистим базу
        $sql = "SELECT id FROM `sphr_object_photo_c` WHERE `sphr_object_id`='" . $object_id .
            "'";
        $resPhoto = $db->query($sql);
        if ($resPhoto) {
            while (($row = $db->fetchByAssoc($resPhoto))) {
                unlink($path_images . $row['id']);
                unlink($path_images . 'cut_' . $row['id']);
            }
            $sql = "DELETE FROM `sphr_object_photo_c` WHERE `sphr_object_id`='" . $object_id .
                "'";
            $db->query($sql);
        }
        foreach ($images_array as $i => $file_name) {
            $file_name = trim($file_name);
            if (@GetImageSize($file_name)) // проверим если картинка сушествует
                {
                $extFile = substr(strrchr($file_name, '.'), 1);
                if ($extFile == 'jpg' || $extFile == 'jpeg' || $extFile == 'png')
                    // можно только jpg\png файлы
                    {
                    $fullNameFile = $uniqId . '_' . ($i + 1) . '.' . $extFile;
                    $realNameFile = basename($file_name);
                    if (file_put_contents($path_images . $fullNameFile, file_get_contents($file_name))
                        !== false) {
                        $sql = "INSERT INTO `sphr_object_photo_c` SET 
                                    `id`='" . $fullNameFile . "', 
                                    `sphr_object_id`='" . $object_id . "', 
                                    `main`='" . $i . "' ";
                        if ($db->query($sql)) {
                            if (imageresizejpg($path_images . 'cut_' . $fullNameFile, $path_images . $fullNameFile,
                                30, 75) === false) {
                                $notCriticalMessage[] = 'Ошибка создания preview (' . $file_name . ')';
                            }
                        } else {
                            // Поле ID является уникальным. При обновлении картинок запрос не будет выполнен. В противном случае, добавиться новая запись
                        }
                    } else {
                        $notCriticalMessage[] = 'Ошибка копирования картинки (' . $file_name . ')';
                    }
                } else {
                    $notCriticalMessage[] = 'Разрешены только картинки формата JPG\JPEG (' . $file_name .
                        ')';
                }
            } else {
                $notCriticalMessage[] = 'Картинка не обнаружена ' . $file_name;
            }
        }
    }

    return $notCriticalMessage;
}

function imageresizejpg($outfile, $infile, $percents, $quality)
{
    $result = true;

    if (!$im = imagecreatefromjpeg($infile)) {
        $result = false;
    }

    if (!$w = imagesx($im) * $percents / 100) {
        $result = false;
    }

    if (!$h = imagesy($im) * $percents / 100) {
        $result = false;
    }

    if (!$im1 = imagecreatetruecolor($w, $h)) {
        $result = false;
    }

    if (!imagecopyresampled($im1, $im, 0, 0, 0, 0, $w, $h, imagesx($im), imagesy($im))) {
        $result = false;
    }

    if (!imagejpeg($im1, $outfile, $quality)) {
        $result = false;
    }
    imagedestroy($im);
    imagedestroy($im1);

    return $result;
}
