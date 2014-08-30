<?php
require_once('include/MVC/Controller/SugarController.php');
class sphr_ClientController extends SugarController{
	function sphr_ClientController(){
		parent::SugarController();
	}
	function post_delete()
	{
		//Specify what happens after the deletion has occurred.
		parent::post_delete();
	}
 	function action_save()
	{
		//проверяем телефоны

        foreach ($this->bean->field_name_map as $fnm => $fnmv){
	         if ($fnmv['type']=='phone'&&$this->bean->$fnm!='')	{
	            $phold=trim($this->bean->$fnm);
	            $res=preg_match('/^\+(\d{1,3})((\s(\d+)\s)|(\((\d+)\)))(\d{1,3}-\d{2}-\d{2})$/',$phold,$arrphone);
	            if($res==0||($res!=0&&$arrphone[0]!=$phold)){

				 	if (preg_match('/(\d|\s|\(|\)|-)+/',$phold,$pmres)){
					 	 $ptmp=$pmres[0];

					 	 $ptmp=str_replace(' ','',$ptmp);

					 	 if(substr_count($ptmp,'(')>1){
			                $mas=explode('(',$ptmp);
			                $ptmp=$mas[0].$mas[1];
					 	 }
					 	 $ptmp=str_replace('(','',$ptmp);
					 	 $ptmp=str_replace(')','',$ptmp);
					 	 $ptmp=str_replace('-','',$ptmp);
					 	 if (strlen($ptmp)==10) {
			                  $ptmp='7'.$ptmp;
					 	 };
			              if ($ptmp[0]=='8') $ptmp[0]='7';
			              $ptmp= preg_replace('/(\d{3})(\d{2})(\d{2})$/','\\1-\\2-\\3',$ptmp) ;
			              if ($ptmp[0]=='9' && strlen($ptmp)==12) $ptmp='7'.$ptmp;
			              //коды стран
			              $ptmp= preg_replace('/^(7|35.|37.|38.|3.)(\d+)(\d{3}-\d{2}-\d{2})$/',' \\1 \\2 \\3',$ptmp);
			              $new_phone=(strlen($ptmp)>10)?'+'.$ptmp:$ptmp;
                          $this->bean->$fnm=$new_phone;
	        		 }
                }
             }
        }

		parent::action_save();

		global $db;

		//сохраняем фотографию клиента
                                 if (!file_exists('cache/upload') && !is_dir('cache/upload')) {
                                    mkdir('cache/upload',775);         
                                } 
                                if (!file_exists('cache/upload/client') && !is_dir('cache/upload/client')) {
                                    mkdir('cache/upload/client',775);         
                                } 
		function imageresize($outfile,$infile,$percents,$quality,$type="image/jpeg") {
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
		if(isset($_FILES['client_photo'])&&$_FILES['client_photo']['error']==0) {
			//$GLOBALS['log']->fatal('OK | Картинка в клиентах. Получена.');
			$query_getPhoto = "SELECT `photo_c` FROM `sphr_client_cstm` WHERE `id_c` = '".$this->bean->id."'";
			$request = $db->query($query_getPhoto);
			$fromDB = $db->fetchByAssoc($request);
			if($fromDB['photo_c'] != '') {
				//$GLOBALS['log']->fatal('OK | Картинка в клиентах. Старая картинка существует.');
				if(unlink('cache/upload/client/'.$fromDB['photo_c'])) {
					//$GLOBALS['log']->fatal('OK | Картинка в клиентах. Старая картинка удалина.');
				}
				else {
					$GLOBALS['log']->fatal('BAD | Картинка в клиентах. Сатарая картинка не удалина.');
				}
			}
			else {
				//$GLOBALS['log']->fatal('OK | Картинка в клиентах. Старой картинки не существует.');
			}
			$uniqId = md5(uniqid('', true));
			if($_FILES['client_photo']['error'] == 0) {
				//$GLOBALS['log']->fatal('OK | Картинка в клиентах. Загруженна без ошибки.');
				if($_FILES['client_photo']['type'] == 'image/jpeg' || $_FILES['client_photo']['type'] == 'image/gif' || $_FILES['client_photo']['type'] == 'image/png') {
					//$GLOBALS['log']->fatal('OK | Картинка в клиентах. Расширение в порядке.');
					$baseName = '.'.pathinfo(basename($_FILES['client_photo']['name']), PATHINFO_EXTENSION);
					if(imageresize('cache/upload/client/'.$uniqId.$baseName, $_FILES['client_photo']['tmp_name'],30,75,$_FILES['client_photo']['type'] )) {
						//$GLOBALS['log']->fatal('OK | Картинка в клиентах. Уменьшена и перемещена в "cache/upload/client/".');
					}
					else {
						$GLOBALS['log']->fatal('BAD | Картинка в клиентах. Не уменьшилась или не переместилась в "cache/upload/client/"');
					}
					if($db->query("UPDATE `sphr_client_cstm` SET `photo_c`='".$uniqId.$baseName."' WHERE `id_c`='".$this->bean->id."'")) {
						//$GLOBALS['log']->fatal('OK | Картинка в клиентах. Информация записана в БД.');
					}
					else {
						$GLOBALS['log']->fatal('BAD | Картинка в клиентах. Ошибка записи информации о картинке в БД.');
					}
				}
				else {
					$GLOBALS['log']->fatal('BAD | Картинка в клиентах. Расширение неправильно: '.$_FILES['client_photo']['type']);
				}
			}
			else {
				$GLOBALS['log']->fatal('BAD | Картинка в клиентах. Загружена с ошибкой: '.$_FILES['client_photo']['error']);
			}
		}
		else {
			$GLOBALS['log']->fatal('BAD | Картинка в клиентах. Не получена.');
		}

		//сохраняем родственников
		$count = $_POST['numBlocks'];
		for($i = 0; $i < $count; $i++) {
			$i2 = $i + 1;
			if($_POST['kindred_is_'.$i2] == '1') {
				$first_name = $_POST['kindred_first_name_'.$i2];
				$last_name = $_POST['kindred_last_name_'.$i2];
				$middle_name = $_POST['kindred_middle_name_'.$i2];
				$birthday = $_POST['kindred_birthday_'.$i2];
				$mobile = $_POST['kindred_mobile_'.$i2];
				$mobile_2 = $_POST['kindred_mobile_2_'.$i2];
				$email = $_POST['kindred_email_'.$i2];
				$email_2 = $_POST['kindred_email_2_'.$i2];
				$degree = $_POST['kindred_degree_'.$i2];
				$query_setKindred = "INSERT INTO `sphr_client_kindred` SET `id_client`='".$this->bean->id."', `first_name`='".$first_name."', `last_name`='".$last_name."', `middle_name`='".$middle_name."', `birthday`='".$birthday."', `mobile`='".$mobile."', `mobile_2`='".$mobile_2."', `email`='".$email."', `email_2`='".$email_2."', `degree`='".$degree."'";
				$this->bean->db->query($query_setKindred);
			}
			elseif ($_POST['kindred_is_'.$i2] == '2') {
				$k_id = $_POST['kindred_k_id_'.$i2];
				$first_name = $_POST['kindred_first_name_'.$i2];
				$last_name = $_POST['kindred_last_name_'.$i2];
				$middle_name = $_POST['kindred_middle_name_'.$i2];
				$birthday = $_POST['kindred_birthday_'.$i2];
				$mobile = $_POST['kindred_mobile_'.$i2];
				$mobile_2 = $_POST['kindred_mobile_2_'.$i2];
				$email = $_POST['kindred_email_'.$i2];
				$email_2 = $_POST['kindred_email_2_'.$i2];
				$degree = $_POST['kindred_degree_'.$i2];
				$query_setKindred = "UPDATE `sphr_client_kindred` SET `id_client`='".$this->bean->id."', `first_name`='".$first_name."', `last_name`='".$last_name."', `middle_name`='".$middle_name."', `birthday`='".$birthday."', `mobile`='".$mobile."', `mobile_2`='".$mobile_2."', `email`='".$email."', `email_2`='".$email_2."', `degree`='".$degree."' WHERE `id`='".$k_id."'";
				$this->bean->db->query($query_setKindred);
			}
			elseif ($_POST['kindred_is_'.$i2] == '3') {
				$k_id = $_POST['kindred_k_id_'.$i2];
				$query_setKindred = "DELETE FROM `sphr_client_kindred` WHERE `id` ='".$k_id."'";
				$this->bean->db->query($query_setKindred);
			}
			else {
				continue;
			}
		}

		//сохраняем страну и город
		$current_country_id = $_POST['current_country'];
		$current_city_id = $_POST['current_city'];
		$set_city = $_POST['set_current_city'];

		$getCitiesReplay = "SELECT * FROM `sphr_client_cities` WHERE `name`='".$set_city."'";
		$resource_getCitiesReplay = $this->bean->db->query($getCitiesReplay);
		$numCitiesReplay = $this->bean->db->getRowCount($resource_getCitiesReplay);
		if($numCitiesReplay > 0) {
			$current_city = $set_city;
			$set_city = "replay";
		}

		if($set_city == "") {
			$query_getCountry = "SELECT `name` FROM `sphr_client_countries` WHERE `id`='".$current_country_id."'";
			$resource_getCountry = $this->bean->db->query($query_getCountry);
			$fromDB_getCountry = $this->bean->db->fetchByAssoc($resource_getCountry);
			$current_country = $fromDB_getCountry['name'];

			$query_getCity = "SELECT `name` FROM `sphr_client_cities` WHERE `id`='".$current_city_id."'";
			$resource_getCity = $this->bean->db->query($query_getCity);
			$fromDB_getCity = $this->bean->db->fetchByAssoc($resource_getCity);
			$current_city = $fromDB_getCity['name'];

			$query_setCC = "UPDATE `sphr_client_cstm` SET `current_country_c`='".$current_country."', `current_city_c`='".$current_city."' WHERE `id_c`='".$this->bean->id."'";
			$this->bean->db->query($query_setCC);
		}
		elseif($set_city == "replay") {
			$query_getCountry = "SELECT `name` FROM `sphr_client_countries` WHERE `id`='".$current_country_id."'";
			$resource_getCountry = $this->bean->db->query($query_getCountry);
			$fromDB_getCountry = $this->bean->db->fetchByAssoc($resource_getCountry);
			$current_country = $fromDB_getCountry['name'];

			$query_setCC = "UPDATE `sphr_client_cstm` SET `current_country_c`='".$current_country."', `current_city_c`='".$current_city."' WHERE `id_c`='".$this->bean->id."'";
			$this->bean->db->query($query_setCC);
		}
		else {

			$writeCity = "INSERT INTO `sphr_client_cities` SET `name`='".$set_city."', `country_id`='".$current_country_id."'";
			$this->bean->db->query($writeCity);

			$query_getCountry = "SELECT `name` FROM `sphr_client_countries` WHERE `id`='".$current_country_id."'";
			$resource_getCountry = $this->bean->db->query($query_getCountry);
			$fromDB_getCountry = $this->bean->db->fetchByAssoc($resource_getCountry);
			$current_country = $fromDB_getCountry['name'];

			$query_setCC = "UPDATE `sphr_client_cstm` SET `current_country_c`='".$current_country."', `current_city_c`='".$set_city."' WHERE `id_c`='".$this->bean->id."'";
			$this->bean->db->query($query_setCC);
		}
		//сохраняем название города в current_city_c
		//$current_country = trim($_POST['current_country_c']);
		//$current_city = trim($_POST['current_city_c']);
		$country_c = trim($_POST['country_c']);
		$city_c = trim($_POST['city_c']);
		$region_c = trim($_POST['region_c']);

		require_once("custom/modules/sphr_Client/metadata/update_dropdown_field_defs.php");

		if(isset($GLOBALS['app_list_strings'][$update_dropdown_field_defs['country_c'][$country_c]['city_c']][$city_c]))
			$current_city = $GLOBALS['app_list_strings'][$update_dropdown_field_defs['country_c'][$country_c]['city_c']][$city_c];
		else  $current_city = "";

		$query_setCC = "UPDATE `sphr_client_cstm` SET `current_country_c`='".$current_country."', `current_city_c`='".$current_city."' WHERE `id_c`='".$this->bean->id."'";
		$this->bean->db->query($query_setCC);


	}
}
?>