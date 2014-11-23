<?php
/**
 * Created by PhpStorm.
 * User: shikon
 * Date: 22.11.14
 * Time: 17:07
 */
//session_start();
define('sugarEntry', 'exel_import');
if($argc<2) {
  echo 'No file specified', PHP_EOL;
}
//$path = $_REQUEST['path'];
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
session_start();
session_id('crm.tardegoria.com/excel_import');

define("PATH_EXCEL_IMPORT_FILES", $_SERVER['DOCUMENT_ROOT'].'/'.$sugar_config['upload_dir'].'/excel_import_files/');
require_once './include/phpexcel/Classes/PHPExcel/IOFactory.php';
require_once './include/phpexcel/Classes/chunkReadFilter.php';
/*require_once './data/SugarBean.php';
require_once './include/SugarObjects/templates/basic/Basic.php';
require_once './modules/sphr_Object/sphr_Object.php';
require_once './include/database/DBManagerFactory.php';
require_once './include/SugarLogger/LoggerManager.php';
//require_once './include/SugarObjects/SugarConfig.php';
require_once './include/utils.php';
require_once './include/utils/autoloader.php';
require_once './include/utils/sugar_file_utils.php';
require_once './include/utils/file_utils.php';
require_once './include/utils/LogicHook.php';
require_once './include/utils/LogicHook.php';
require_once './include/database/DBManagerFactory.php';
require_once './include/database/DBHelper.php';
require_once './include/SugarTheme/SugarTheme.php';*/

//require_once './';

//$sugar_config = new SugarConfig();
//$log =  LoggerManager::getLogger();
//$app_strings = return_application_language('ru_ru');
//$db = DBManagerFactory::getInstance();
//$ok = true;

//if(!is_dir(PATH_EXCEL_IMPORT_FILES)) {
//  mkdir(PATH_EXCEL_IMPORT_FILES);
//  chmod(PATH_EXCEL_IMPORT_FILES, 0777);
//}
//$path = PATH_EXCEL_IMPORT_FILES . $path;
const EXCEL_IMPORT_SESSION_FILE = './excel_import_session_file';
if(is_file(EXCEL_IMPORT_SESSION_FILE)) {
  $dat = file_get_contents(EXCEL_IMPORT_SESSION_FILE);
  $_SESSION = unserialize($dat);
}
if(!is_file($path)) {
  echo "Указанный файл импорта не существует\n";
  return;
}
echo "<p>Чтение файла...</p>\n";
if (!empty($_SESSION['startRow'])) {
  $startRow = $_SESSION['startRow'];
} else {
  $_SESSION['startRow'] = $startRow = 2;
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
  echo nl2br($e->getMessage()), EOL;
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
    $objects_readed = true;
    //ОБРАБАТЫВАЕМ ВОЗМОЖНЫЕ ОШИБКИ ФАЙЛА
    if (empty($row_data['name_eng_c']) ||
      strlen($row_data['name_eng_c'])<9 ||
//      strlen($row_data['name_eng_c'])>10 ||
      !is_numeric($row_data['price_sale_int_c']) ||
      !is_numeric($row_data['price_sale_meter_c']) ||
      !is_numeric($row_data['sea_distance_c']) ||
      (
        !is_numeric($row_data['area_area_c']) &&
        !is_numeric($row_data['total_area_c'])
      ) ||
      empty($row_data['name']) ||
      empty($row_data['type']) ||
      empty($row_data['address']) ||
      empty($row_data['province_select_c']) ||
      empty($row_data['additional_description_c'])
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
    echo $oid?"<p>OK</p>":"<p>ERROR</p>\n";
    echo "<p>Сохранение фотографий</p>\n";

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
file_put_contents($dat, EXCEL_IMPORT_SESSION_FILE);

return;