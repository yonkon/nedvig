<?php
/**
 * Created by PhpStorm.
 * User: shikon
 * Date: 22.11.14
 * Time: 17:07
 */
//session_start();
define('sugarEntry', 'excel_import');
if($argc<2) {
  echo 'No file specified', PHP_EOL;
}
$path = $argv[1];
if(empty($path) ) {
  echo "Не указан файл импорта\n";
  return;
}
//ini_set('memory_limit', '1000M');
//ini_set('display_errors', true);
//set_time_limit(0);
mb_internal_encoding("UTF-8");
require_once('include/entryPoint.php');
//ob_start();
require_once('include/MVC/SugarApplication.php');
$app = new SugarApplication();
//$app->startSession();
//session_start();
//session_id('crm.tardegoria.com/excel_import');

define("PATH_EXCEL_IMPORT_FILES", dirname(__FILE__).'/'.$sugar_config['upload_dir'].'excel_import_files/');
require_once './include/phpexcel/Classes/PHPExcel/IOFactory.php';
require_once './include/phpexcel/Classes/chunkReadFilter.php';
//require_once './custom/include/importObject/import.php';

const EXCEL_IMPORT_SESSION_FILE = './excel_import_session_file';
echo "<p>Проверка сессии...</p>\n";
if(is_file(EXCEL_IMPORT_SESSION_FILE)) {
  $dat = file_get_contents(EXCEL_IMPORT_SESSION_FILE);
  $_SESSION = unserialize($dat);
  echo "<p>Сессия обнаружена</p>\n";
} else {
  echo "<p>Сессия не обнаружена</p>\n";
}

if(!is_file($path)) {
  echo "Указанный файл импорта не существует\n";
  return;
}
echo "<p>Подготовка директорий с фотографиями...</p>\n","<p>scandir...</p>\n";
//$curdir = dirname($path);
$dir = scandir(PATH_EXCEL_IMPORT_FILES);
$dir_L1 = array();
$orig_dir_count = 0;
$moved_dir_count = 0;
$error_dir_count = 0;

foreach($dir as $d){
  if($d == "." || $d == ".." || strpos($d, 'error') === 0) {
    continue;
  }
  $abs_d = PATH_EXCEL_IMPORT_FILES . $d;
  if(is_dir($abs_d)){
    $d_formated = preg_replace('/\s/', '', $d);
    $dash_pos = strpos($d_formated, '-');
    if($dash_pos != 4) {
      $d_formated = 'error_'.$d;
      $error_dir_count++;
    } else {
      $d_formated = substr($d_formated, 0, 9);
    }
    $d_formated = PATH_EXCEL_IMPORT_FILES . $d_formated;
    $orig_dir_count++;
    $dir_L1[] = array('from' => $abs_d, 'to' => $d_formated);
      echo "\t-", $d, PHP_EOL;
  }
}
echo "<p>Форматирование папок...</p>\n";
foreach ($dir_L1 as $mvdir) {
  if (rename($mvdir['from'], $mvdir['to']) ) {
    $moved_dir_count++;
  };
}
echo "\t-Всего найдено: $orig_dir_count\n";
echo "\t-Папок с неправильными именами: $error_dir_count\n";
echo "\t-Всего переименовано: $orig_dir_count\n";
unset ($d);
unset ($dash_pos);
unset ($dir);
unset ($dir_L1);
unset ($orig_dir_count);
unset ($moved_dir_count);
unset ($error_dir_count);
unset ($d_formated);
unset ($orig_dir_count);
unset ($abs_d);
unset ($mvdir);

echo "<p>Чтение файла импорта...</p>\n";
if (!empty($_SESSION['startRow'])) {
  $startRow = $_SESSION['startRow'];
} else {
  $_SESSION['startRow'] = $startRow = 1;
}
$objects_readed = false;

try {
  $inputFileType = 'Excel5';
  PHPExcel_Settings::setCacheStorageMethod( PHPExcel_CachedObjectStorageFactory::cache_to_phpTemp );
  $objReader = PHPExcel_IOFactory::createReader($inputFileType);
  $chunkSize = 500;
  $chunkFilter = new chunkReadFilter();
  $objReader->setReadDataOnly(true);
  $chunkFilter->setRows($startRow,$chunkSize);
  $objReader->setReadFilter($chunkFilter);
  $excel = $objReader->load($path);
  unset($objReader);
  //Что-то с этими строками делаем
} catch (PHPExcel_Exception $e) {
  echo nl2br($e->getMessage()), PHP_EOL;
  return;
}
echo "<p>Чтение файла OK</p>\n";

$col2sphrObj_map = array(
  0 => 'name_eng_c',
  1 => 'total_area_c',
  2 => 'area_area_c',
  3 => 'sea_distance_c',
  4 => 'additional_description_c',
  5 => 'price_sale_int_c',
  6 => 'price_sale_meter_c',
  7 => 'name',
  8 => 'type',
  9 => 'address',
  10 => 'province_select_c',
);
$sheet = $excel->getActiveSheet();
unset($excel);
$ri = $sheet->getRowIterator(1); //Пропускаем верхнюю строку с названием полей
$cr =  $ri->current();
$empty_rows = 0;

while(!empty($cr ) && $empty_rows < 1 ) {
//      $crind = $cr->getRowIndex();
  echo "<p>Чтение строки $startRow...</p>\n";
  unset($ci);
  $ci = $cr->getCellIterator();
  $ci->setIterateOnlyExistingCells(false);
  $cc = $ci->current();
  $colind = $ci->key();
  $row_data = array();
  $orig_data = array();
  $object = new sphr_Object();
  while($colind < 11 && $cc) {
    $o_key = $col2sphrObj_map[$colind];
    $o_val = $cc->getCalculatedValue();
    if(isset($o_val)) {
      $row_data[$o_key] = trim($o_val);
    }
    $orig_data[$colind] = $cc->getValue();
    $ci->next();
    unset($cc);
    $cc = $ci->current();
    $colind = $ci->key();
  }
  echo "<p>OK. Обрабртка строки $startRow</p>\n";
  if(empty($row_data) ) {
    $empty_rows++;
    break;
  } else {
    //ОБРАБАТЫВАЕМ ВОЗМОЖНЫЕ ОШИБКИ ФАЙЛА
    if (empty($row_data['name_eng_c']) ||
      strlen($row_data['name_eng_c'])!==9 ||
//      strlen($row_data['name_eng_c'])>10 ||
      !is_numeric($row_data['price_sale_int_c']) ||
      !is_numeric($row_data['price_sale_meter_c']) ||
//      !is_numeric($row_data['sea_distance_c']) ||
      (
        !is_numeric($row_data['area_area_c']) &&
        !is_numeric($row_data['total_area_c'])
      ) ||
      empty($row_data['name']) ||
      empty($row_data['type']) ||
      empty($row_data['address']) ||
      empty($row_data['province_select_c'])
//      empty($row_data['additional_description_c'])
    ) {
      echo "<p>Ошибка соержания файла, копирование строки в память для записи в файл</p>\n";
      $w_xls = empty($w_xls) ? new PHPExcel() : $w_xls;
      $w_xls->setActiveSheetIndex(0);
      $w_sheet = empty($w_sheet) ? $w_xls->getActiveSheet() : $w_sheet;
      $w_col = 0;
      $w_row = empty($w_row) ? 0 : $w_row;
      for ($w_i = 0; $w_i<11; $w_i++) {
        $w_sheet->setCellValueByColumnAndRow($w_i, $w_row, $orig_data[$w_i]);
      }
      $w_row++;
      $w_col = 0;
      $ri->next();
      unset($cr);
      $cr = $ri->current();
      unset ($object);
      unset ($cc);
      unset ($ci);
      $startRow++;
      $_SESSION['startRow'] = $startRow;
      continue;
      //TODO ДОБАВИТЬ ЗАПИСЬ НЕУДАЧНЫХ СТРОК В ОТДЕЛЬНЫЙ ФАЙЛ?
    }
    $objects_readed = true;
    $object->retrieve_by_string_fields(array('name_eng_c' => $row_data['name_eng_c']));
    if (isset($row_data['type'])) {
      $row_data['type'] = sphr_Object::type_string2id($row_data['type']);
    }
    if (isset($row_data['province_select_c'])) {
      $row_data['province_select_c'] = sphr_Object::province_string2id($row_data['province_select_c']);
    }
    foreach($row_data as $field => $value) {
      $object->$field = $value;
    }
    $object->assigned_user_id = sphr_Object::articule2assigned_user_id($row_data['name_eng_c']);
    echo "<p>Обрабртка OK. Сохранение в БД</p>\n";
    $oid = $object->save();
    echo $oid?"<p>OK</p>\n":"<p>ERROR</p>\n";
    if (!empty ($oid)) {
      echo "<p>Сохранение фотографий...</p>\n";
      $object_img_array = array();
      if (is_dir(PATH_EXCEL_IMPORT_FILES . $row_data['name_eng_c'])) {
        Dir2ImagesArray(PATH_EXCEL_IMPORT_FILES . $row_data['name_eng_c'] .'/*', $object_img_array);
        setImages(implode(', ', $object_img_array), $oid);
       }
     }

    $empty_rows = 0;
  }
  $ri->next();
  unset($cr);
  $cr = $ri->current();
  unset ($object);
  unset ($cc);
  unset ($ci);
  $startRow++;
  $_SESSION['startRow'] = $startRow;
}
$objWriter = new PHPExcel_Writer_Excel5($w_xls);
$objWriter->save($path.'.error.xls');
if (!$objects_readed) { //Если ничего не прочли - значит конец файла, пустых строк в файле не допускаем
  unset($_SESSION['startRow']);
}
//    echo $sheet->getCellByColumnAndRow($cell, $row)->getValue();

echo "SCRIPT END OK\n";
//session_write_close();
$dat = serialize($_SESSION);
file_put_contents( EXCEL_IMPORT_SESSION_FILE, $dat);

return;

function Dir2ImagesArray($dir, &$img_array) {
  $items = glob($dir);
  foreach($items as $item) {
    if(is_dir($item)) {
      Dir2ImagesArray($item . '/*', $img_array);
    } else {
      $img_array[] = $item;
    }
  }
}

function setImages($images_data, $object_id)
{
  global $db;

  $notCriticalMessage = array();

  $path_images = 'cache/upload/object/';
  if (!is_dir($path_images)) {
    mkdir($path_images);
  }
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
              $origx = GetImageSize($file_name)[0];
              $origy = GetImageSize($file_name)[1];
              $resize_percent = ($origx>$origy)?102400/$origx:102400/$origy;
              if (
                (
                  $extFile == 'png' &&
                  !imageresizepng($path_images.$fullNameFile, 1024, 1024, $path_images.$fullNameFile )
                ) ||
                (
                  $extFile != 'png' &&
                  imageresizejpg($path_images.$fullNameFile, $path_images.$fullNameFile,
                    $resize_percent, 100) === false
                )
              ) {
                $notCriticalMessage[] = 'Ошибка создания resized (' . $file_name . ')';
              }
              if (
                (
                  $extFile == 'png' &&
                  !imageresizepng($path_images.$fullNameFile, 75, 75, $path_images . 'cut_' . $fullNameFile )
                ) ||
                (
                  $extFile != 'png' &&
                  imageresizejpg($path_images . 'cut_' . $fullNameFile, $path_images . $fullNameFile,
                  30, 75) === false
                )
              ) {
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

function setTransparency($new_image, $image_source)
{

  $transparencyIndex = imagecolortransparent($image_source);
  $transparencyColor = array('red' => 255, 'green' => 255, 'blue' => 255);

  if ($transparencyIndex >= 0)
  {
    $transparencyColor = imagecolorsforindex($image_source, $transparencyIndex);
  }

  $transparencyIndex = imagecolorallocate($new_image, $transparencyColor['red'], $transparencyColor['green'], $transparencyColor['blue']);
  imagefill($new_image, 0, 0, $transparencyIndex);
  imagecolortransparent($new_image, $transparencyIndex);
}

function imageresizepng($image_path, $new_width, $new_height, $new_path ){
  $image_source = imagecreatefrompng($image_path);
  $result = true;
  if (!$image_source) {
    $result = false;
  }
// Старые размеры
  $old_width = imagesx($image_source);
  $old_height = imagesy($image_source);
  $resize_rate = $xrate = $old_width / $new_width;
  $yrate = $old_height / $new_height;
  if ($xrate < $yrate) {
    $resize_rate = $yrate;
  }
  $new_width = $old_width/$resize_rate;
  $new_height = $old_height/$resize_rate;

// Размеры новой картинки
  $new_image = imagecreatetruecolor($new_width, $new_height);
  if (!$new_image) {
    $result = false;
  }

// Устанавливаем прозрачность
  setTransparency($new_image, $image_source);

// Изменяем размер
  if (!imagecopyresampled($new_image, $image_source, 0, 0, 0, 0, $new_width, $new_height, $old_width, $old_height)) {
      $result = false;
  }

// Сохраняем уменьшенное изображение
  if (!imagepng($new_image, $new_path) ) {
    $result = false;
  }

// Закрываем дескрипторы
  imagedestroy($image_source);
  imagedestroy($new_image);
  return $result;
}
