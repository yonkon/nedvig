<?php
require_once('include/MVC/Controller/SugarController.php');
require_once('custom/modules/sphr_Object/SearchModificator.php');

class sphr_ObjectController extends SugarController {
        var $photos_changed=false;
        var $is_new_bean = false;
	function sphr_ObjectController(){
		parent::SugarController();
	}
	function post_delete()
	{
		//Specify what happens after the deletion has occurred.
		parent::post_delete();
	}
 	function action_save()
	{
		global $db;
                
                //получаем новые фото, сохраняем, записываем в БД
		function imageresizejpg($outfile,$infile,$percents,$quality,$type="image/jpeg") {
			$result = true;
                                                switch ($type) {
                                                        case "image/jpeg":
                                                            $im = imagecreatefromjpeg($infile);
                                                        break;
                                                        case  'image/gif' :
                                                            $im =imagecreatefromgif($infile);
                                                        break;
                                                        case 'image/png':
                                                            $im =imagecreatefrompng($infile);
                                                        break;
                                                         default:
                                                        $im = FALSE;
                                                        break;
                                                }

			if(!$im) {                                                       
				$result = false;
			}

			if(!$w=imagesx($im)*$percents/100) {
				$result = false;
			}

			if(!$h=imagesy($im)*$percents/100) {
				$result = false;
			}

			if(!$im1=imagecreatetruecolor($w,$h)) {
				$result = false;
			}

			if(!imagecopyresampled($im1,$im,0,0,0,0,$w,$h,imagesx($im),imagesy($im))) {
				$result = false;
			}

			switch ($type) {
                                                        case "image/jpeg":
                                                           if(!imagejpeg($im1,$outfile,$quality)) {
				$result = false;
                                                            }
                                                        break;
                                                        case  'image/gif' :
                                                           if(!imagegif($im1,$outfile)) {
				$result = false;
                                                            }
                                                        break;
                                                        case 'image/png':
                                                           if(!imagepng($im1,$outfile)) {
				$result = false;
                                                            }
                                                        break;
                                                         default:
                                                        $result = false;
                                                        break;
                                                }
                                                
			imagedestroy($im);
			imagedestroy($im1);

			return $result;
		}
                
		$db->query("SET NAMES utf8");
                
                $focus = new sphr_Object();
                $focus->retrieve($this->bean->id);
                
		
                
		parent::action_save();
                
                                 if (!file_exists('cache/upload') && !is_dir('cache/upload')) {
                                    mkdir('cache/upload',775);         
                                } 
                                if (!file_exists('cache/upload/object') && !is_dir('cache/upload/object')) {
                                    mkdir('cache/upload/object',775);         
                                } 
                                
                 //проверяем статус старых фотографий, ненужные удалям
		foreach($_POST['oldPhotos'] as $k => $v) {
			if($v == '0') {
				unlink('cache/upload/object/'.$k);
				unlink('cache/upload/object/cut_'.$k);
				$db->query("DELETE FROM `sphr_object_photo_c` WHERE `id`='".$k."'");
                                //for export
                                if(!$this->photos_changed) $this->photos_changed=true;
			}
		}
                
                //обновляем сортировку
                $photos_order = $_REQUEST['photo_order'];
                
                foreach($photos_order as $pok => $pov){
                    if(preg_match('/^new_\d+$/',$pok)==0){
                        
                       $db->query('UPDATE `sphr_object_photo_c` SET main = "'.(int)$pov.'" WHERE id="'.$db->quote($pok).'"');
                       //for export                    
                       if(!$this->photos_changed&&$db->getAffectedRowCount()>0) $this->photos_changed=true;
                       
                    }
                }
                
		
		if(isset($_FILES['objectPhoto'])) {

			//$GLOBALS['log']->fatal('OK | Массив картинок получен.');

			$uniqId = md5(uniqid('', true));
			$picturesNumber = count($_FILES['objectPhoto']['name']);
			$baseName = array();                        
                        $j=-1;
                        
                        foreach($_FILES['objectPhoto']['name'] as $i => $file_name){                            
                                $j++;echo $j,'-->';
				if($_FILES['objectPhoto']['error'][$i] == 0) {

					//$GLOBALS['log']->fatal('OK | Картинка '.$i.' в объектах. Загружена на сервер успешно.');

					if($_FILES['objectPhoto']['type'][$i] == 'image/jpeg' || $_FILES['objectPhoto']['type'][$i] == 'image/png') {
                                                
						//$GLOBALS['log']->fatal('OK | Картинка '.$i.' в объектах. Расширение в порядке.');
                                               
						$baseName[$i] = '.'.substr(strrchr(basename($_FILES['objectPhoto']['name'][$i]), '.'), 1);
                                                $newFullName = $uniqId.'_'.($j+1).$baseName[$i];
                                                
						if(move_uploaded_file($_FILES['objectPhoto']['tmp_name'][$i], 'cache/upload/object/'.$newFullName)) {

							//$GLOBALS['log']->fatal('OK | Картинка '.$i.' в объектах. Успешно перемещена в "cache/upload/object/".');

							if(imageresizejpg('cache/upload/object/cut_'.$newFullName,'cache/upload/object/'.$newFullName,30,75,$_FILES['objectPhoto']['type'][$i])) {
								//$GLOBALS['log']->fatal('OK | Картинка '.$i.' в объектах. Успешно создана уменьшенная копия.');
							}
							else {
								$GLOBALS['log']->fatal('BAD | Картинка '.$i.' в объектах. Не создалась уменьшенная копия.');
							}
							if($db->query("INSERT INTO `sphr_object_photo_c` SET `id`='".$newFullName."', `sphr_object_id`='".$this->bean->id."', `main`='".(int)$photos_order[$i]."' ")) {
								//$GLOBALS['log']->fatal('OK | Картинка '.$i.' в объектах. Информация о картинке записанна в БД.');
                                                                //for export
                                                            echo '|',$j,'|';
                                                                if(!$this->photos_changed) $this->photos_changed=true;
							}
							else {
								
                                                            $GLOBALS['log']->fatal('BAD | Картинка '.$i.' в объектах. Не записалась информация о картинки в БД.');
							}
						}
						else {
							$GLOBALS['log']->fatal('BAD | проблема загрузки картинки '.$i.' в объектах, не переместился из tmp в catch/uploaded/object/');
						}
					}
					else {
						$GLOBALS['log']->fatal('BAD | Картинка '.$i.' в объектах. Неккоректое расширение полученного файла: '.$_FILES['objectPhoto']['type'][$i]);
					}
				}
				else {
					$GLOBALS['log']->fatal('BAD | Картинка '.$i.' в объектах. Возникла ошибка загрузки номер: '.$_FILES['objectPhoto']['error'][$i]);
				}
			}
		}
		else {
			$GLOBALS['log']->fatal('BAD | Массив картинок пуст.');
		}
               //die; 
        //сохраняем id_object_c

        if($this->bean->id_object_c<=0){
           $this->set_id_object_c();
        }
		//записываем имя в БД
		if($_POST['name_rus_c'] == '') {
			if($_POST['name_eng_c'] == '') {
				$mainName = $_POST['name_sp_c'];
			}
			else {
				$mainName = $_POST['name_eng_c'];
			}
		}
		else {
			$mainName = $_POST['name_rus_c'];
		}
		$db->query("UPDATE `sphr_object` SET `name`='".$mainName."' WHERE `id`='".$this->bean->id."'");

		//записываем провинцую, побережье, и населенный пункт в БД (id)
		//$db->query("UPDATE `sphr_object_cstm` SET `province_c`='".$_POST['province']."', `coast_c`='".$_POST['coast']."', `community_c`='".$_POST['community']."' WHERE `id_c`='".$this->bean->id."'");

		//записываем провинцую, побережье, и населенный пункт в БД (название)
		//$db->query("UPDATE `sphr_object_cstm` SET `province_text_c`='".$_POST['province_text']."', `coast_text_c`='".$_POST['coast_text']."', `community_text_c`='".$_POST['community_text']."' WHERE `id_c`='".$this->bean->id."'");
                
               //проверяем, надо ли экспортировать на сайт
                $this->handle_save_export_parametrs($focus);
	}

    function action_listview() {
		$this->view = 'list';
		$GLOBALS['view'] = $this->view;
		$this->bean = new SearchModificator();
    }
    function action_popup() {
		$this->view = 'popup';
		$GLOBALS['view'] = $this->view;
		$this->bean = new SearchModificator();
    }
    
    function action_create_pdf(){
     	require_once('custom/modules/sphr_Object/pdf/pdf.php');
     	echo json_encode( array('echo' => $echo,
     							'file_name' =>$PDF_name,
     							'file_link' => $PDF_dir.$PDF_name,
     							'pdf_ok' => $pdf_ok,
     							'file_no'=>$mod_strings["LBL_PDF_NO"]));
        die;
    }
    
    function set_id_object_c(){
    	global $db;
        $query = 'SELECT MAX(id_object_c)+1 AS next_id FROM sphr_object_cstm';
        $result = $db->query($query);
        if($res = $db->fetchByAssoc($result)){
        	$db->query('UPDATE sphr_object_cstm SET id_object_c ='.$res['next_id'].' WHERE id_c="'.$this->bean->id.'"');
        	 return $res['next_id'];
        }
        return false;

    }
    
    function handle_save_export_parametrs($focus){
        if (file_exists('custom/include/exportObject/export_config.php')){
            require_once('custom/include/exportObject/export_config.php');            
        }else return false;
        $status = 0;
        
        if($focus->id==""){//new record publshed
            
           if($this->bean->published_site_c==1) $status = 1;
           
        }else{//published/unpublished check            
           
            if($this->bean->published_site_c==0&&$focus->published_site_c==1) $status=3;
            elseif($this->bean->published_site_c==1&&$focus->published_site_c==0){
                $status = 1;
                
            }elseif($this->bean->published_site_c==1&&$focus->published_site_c==1){
              //to update published check  
                
                if($this->photos_changed){ $status = 2;
                }
                else{
                   
                    foreach($export_config["fields"] as $soap_field => $crm_field){ 
                        
                        if ($status===2) break;
                       
                        if(is_array($crm_field)){//check array
                            
                            $special_field_key="";
                            //check for special keys 
                            
                            if(isset($crm_field["language"])) $special_field_key = "language";
                            elseif(isset($crm_field["dependence"])) $special_field_key = "dependence";
                            elseif(isset($crm_field["value"])) $special_field_key = "value";
                            
                            //check fields to fined changes
                            if($special_field_key!== "value") {
                                                                
                                foreach( ($special_field_key!=="")?$crm_field[$special_field_key]:$crm_field  as $value){
                                    
                                    if ($status===2) break;
                                                                      
                                     $val_bean = ($this->bean->$value!=='NULL')? $this->bean->$value : "";
                                     $val_focus = ($focus->$value!=='NULL')? $focus->$value : "";
                                    
                                    if($val_focus !=$val_bean){ 
                                        $status = 2;
                                    }
                                }
                            }
                        }elseif($crm_field!=""){//check field;
                            
                            $val_bean = ($this->bean->$crm_field!=='NULL')? $this->bean->$crm_field : "";
                            $val_focus = ($focus->$crm_field!=='NULL')? $focus->$crm_field : ""; 
                            
                            if($val_focus !=$val_bean) $status=2;
                        }                        
                     } //foreach
                }                
            }
        }
        
        //to database
        global $db;
        if($status>0){            
        
            $result = $db->query("SELECT * FROM sphr_object_publications WHERE id='".$this->bean->id."'");
            if($row = $db->fetchByAssoc($result)){
                
               if ($row['status']!=$status){
                   
                    if($status==3&&$row["status"]==1)   {
                        
                        //not been published delete from base
                        $db->query("DELETE FROM sphr_object_publications WHERE id='".$this->bean->id."'");
                    }elseif(!($status==2&&$row["status"]==1)){
                        
                        if($status==1) $status=2;
                        $db->query("UPDATE sphr_object_publications SET status = ".$status." WHERE id='".$this->bean->id."'" );
                    }
            }
            }elseif($status==1||$status==2) { $db->query("INSERT INTO sphr_object_publications(id,status) VALUES('".$this->bean->id."',1)"); echo "INSERT INTO sphr_object_publications(id,satus) VALUES('".$this->bean->id."',".$status.")";};
        }
    }

  function action_import_from_excel() {
    ini_set('memory_limit', '1000M');
    ini_set('display_errors', true);
    set_time_limit(0);
    require_once $_SERVER['DOCUMENT_ROOT']. '/include/phpexcel/Classes/PHPExcel/IOFactory.php';
    require_once $_SERVER['DOCUMENT_ROOT']. '/include/phpexcel/Classes/chunkReadFilter.php';
    $ok = true;
    $path = $_REQUEST['path'];
    if(empty($path) ) {
      echo 'Не указан файл импорта';
      return;
    }
    if(!is_dir(PATH_EXCEL_IMPORT_FILES)) {
      mkdir(PATH_EXCEL_IMPORT_FILES);
      chmod(PATH_EXCEL_IMPORT_FILES, 0777);
    }
    $path = PATH_EXCEL_IMPORT_FILES . $path;
    if(!is_file($path)) {
      echo 'Указанный файл импорта не существует';
      return;
    }
    echo "<p>Чтение файла...</p>";
    if ($_SESSION['startRow']) {
      $startRow = $_SESSION['startRow'];
    } else {
      $_SESSION['startRow'] = $startRow = 2;
    }
    $objects_readed = false;

    try {
      $inputFileType = 'Excel5';
      PHPExcel_Settings::setCacheStorageMethod( PHPExcel_CachedObjectStorageFactory::cache_to_phpTemp );
      $objReader = PHPExcel_IOFactory::createReader($inputFileType);
      $chunkSize = 2;
      $chunkFilter = new chunkReadFilter();
      $objReader->setReadDataOnly(true);
      $chunkFilter->setRows($startRow,$chunkSize);
      $objReader->setReadFilter($chunkFilter);
      $excel = $objReader->load($path);
      unset($objReader);
      //Что-то с этими строками делаем
    } catch (PHPExcel_Exception $e) {
      echo nl2br($e->getMessage());
      return;
    }
    echo "<p>Чтение файла OK</p>";

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
      echo "<p>Чтение строки $startRow...</p>";
      unset($ci);
      $ci = $cr->getCellIterator();
      $ci->setIterateOnlyExistingCells(false);
      $cc = $ci->current();
      $colind = $ci->key();
      $row_data = array();
      $object = new sphr_Object();
      while($colind < 11 && $cc) {
        $o_key = $col2sphrObj_map[$colind];
        $o_val = $cc->getCalculatedValue();
        if(isset($o_val)) {
          $row_data[$o_key] = $o_val;
        }
        $ci->next();
        unset($cc);
        $cc = $ci->current();
        $colind = $ci->key();
      }
      echo "<p>OK. Обрабртка строки $startRow</p>";
      if(empty($row_data) ) {
        $empty_rows++;
        break;
      } else {
        $objects_readed = true;
        if (empty($row_data['name_eng_c'])) {
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
        echo "<p>Обрабртка OK. Сохранение в БД</p>";
        $oid = $object->save();
        echo $oid?"<p>OK</p>":"<p>ERROR</p>";

        $empty_rows = 0;
      }
      $ri->next();
//      if (!$ri->current()) {
//        break;
//      }
      unset($cr);
      $cr = $ri->current();
      unset ($object);
      unset ($cc);
      unset ($ci);
      $startRow++;
      $_SESSION['startRow'] = $startRow;
    }
    if (!$objects_readed) { //Если ничего не прочли - значит конец файла, пустых строк в файле не допускаем
      unset($_SESSION['startRow']);
    }
//    echo $sheet->getCellByColumnAndRow($cell, $row)->getValue();

    echo $ok?'OK' : '';
    return;
  }

}
?>