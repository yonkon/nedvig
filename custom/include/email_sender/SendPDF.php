<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
global $db;
global $sugar_config;

$photo_dir = $sugar_config['upload_dir']."object/";
$current_user_id = $_POST['current_user_id'];
$clients_id = explode (",",  $_POST['clients']);
$objects_id = explode (",",  $_POST['objects']);

require_once('include/phpmailer/class.phpmailer.php'); //настройки полeй класса см в методе sendEmailTest класса Email
$mailer = new PHPMailer();
$mailer->Priority = 3;
$mailer->IsHTML(true);

require_once('include/OutboundEmail/OutboundEmail.php');
$oe = new OutboundEmail();
$oe->getSystemMailerSettings();

if ($oe->mail_sendtype == 'SMTP'){
  $mailer->Mailer = "smtp";
} else {
  $mailer->Mailer = 'sendmail';
}

$mailer->Host = $oe->mail_smtpserver;
$mailer->Port = $oe->mail_smtpport;

if ($oe->mail_smtpauth_req) {
  $mailer->SMTPAuth = TRUE;
  $mailer->Username = $oe->mail_smtpuser;
  $mailer->Password = $oe->mail_smtppass;
}

switch ($oe->mail_smtpssl){
  case 0: $mailer->SMTPSecure = ""; break;
  case 1: $mailer->SMTPSecure = "ssl"; break;
  case 2: $mailer->SMTPSecure = "tls"; break;
}

//нижеследующий код взят из метода getSystemDefaultEmail класса Email
//назначаем по умолчанию отправителем из настроек
$r1 = $db->query('SELECT config.value FROM config WHERE name=\'fromaddress\'');
$r2 = $db->query('SELECT config.value FROM config WHERE name=\'fromname\'');
$a1 = $db->fetchByAssoc($r1);
$a2 = $db->fetchByAssoc($r2);

$mailer->From = $a1['value'];
$mailer->FromName = $a2['value'];
$mailer->Sender = $mailer->From;

$sugarSmarty = new Sugar_Smarty();
//require_once('custom/modules/sphr_Object/language/ru_ru.lang.php');
$mod_strings =  return_module_language("ru_ru",'sphr_Object' );

$fob = new sphr_Object();

foreach ($clients_id as $id){
  if (empty($id)) continue;
  $query = "SELECT c.first_name,e.email_address as email FROM sphr_client as c
			JOIN  email_addr_bean_rel eb ON eb.bean_id=c.id
				AND eb.bean_module ='sphr_Client' and eb.deleted=0 AND primary_address=1
			JOIN  email_addresses as e ON e.id=eb.email_address_id AND e.deleted=0
            WHERE (c.id = '".$id."');";
  $result=$db->query($query, true);
  if (($row = $db->fetchByAssoc($result)) != null )
  {
    if ($row['email'] != NULL)
    {
      $first_name=$row['first_name'];
      $email=$row['email'];
      //Переназначаем отправителя назначенным менеджером
      $r_assigned = $db->query(
        'SELECT u.first_name, u.last_name, ea.email_address
        FROM users u
        JOIN email_addr_bean_rel eabr ON
          eabr.bean_id = u.id  AND
          eabr.bean_module = "Users" AND
          eabr.primary_address = 1
        JOIN email_addresses ea ON
          ea.id = eabr.email_address_id
        WHERE u.id = '. $row['assigned_user_id'] . ' ');
      $assigned = $db->fetchByAssoc($r1);
      if (!empty($assigned['email_address'])) {
        $mailer->From = $assigned['email_address'];
        if (!empty($assigned['first_name'])) {
          $mailer->FromName = $assigned['first_name'];
        } else {
          $mailer->FromName = $assigned['last_name'];
        }
        $mailer->Sender = $mailer->From;
      }
    } else {
      echo "Письма не будут отправлены клиенту '" . $first_name . "', т.к. не указан E-mail клиента \r\n";
      continue;
    }
  }

  foreach ($objects_id as $id2){
    $query = "SELECT * FROM `sphr_object_photo_c` WHERE `sphr_object_id` = '".$id2."'";
    $result2=$db->query($query);
    $query = "
        SELECT * FROM `sphr_object`
        LEFT JOIN `sphr_object_cstm` on id_c='$id2'
        WHERE id = '$id2'
        ";
    $result=$db->query($query, true);
    $row = $db->fetchByAssoc($result);
    $str1 = '';
    $str2 = '';
    $str3 = '';
    $ar_price = array();
    $ar_lang = array();
    $ar_obj = array();
    $ar_area = array();
    $ar_adr = array();
    $ar_dist = array();
    $ar_dop = array ();
    foreach($row as $k=>$v){
      $f_type = $fob->field_name_map[$k]['type'];
      $f_opt = $fob->field_name_map[$k]['options'];
      $f_vname = $fob->field_name_map[$k]['vname'];
      if($f_type == 'enum'){
        $v = $GLOBALS['app_list_strings'][$f_opt][$v];
      }
      if($f_type == 'multienum'){
        $v = substr($v, 1, strlen($v)-2);
        $v = $GLOBALS['app_list_strings'][$f_opt][$v];
      }

      if($k=='complex_c' || $k=='garage_c' || $k=='parking_area_c' || $k=='private_swimpool_c'
        || $k=='general_swimpool_c' || $k=='children_area_c' || $k=='sport_area_c' || $k=='area_c'
        || $k=='terrace_c' || $k=='balcony_c' || $k=='solarium_c' || $k=='basement_c'
        || $k=='storeroom_c')
      {
        if($v != 0){
          $k = $mod_strings[$f_vname];
          $str1 .= $k.', ';
        }
      }
      if($k=='mebel_c' || $k=='kitchen_mebel_c' || $k=='life_equipment_c' || $k=='safe_c'
        || $k=='jacuzzi_c' || $k=='conditioner_c' || $k=='install_conditioner_c' || $k=='view_golf_pole_c'
        || $k=='alarm_c' || $k=='heating_c')
      {
        if($v != 0){
          $k = $mod_strings[$f_vname];
          $str2 .= $k.', ';
        }
      }
      if($k=='city_area_c' || $k=='green_area_c' || $k=='view_sea_c' || $k=='view_mount_c'
        || $k=='view_forest_c' || $k=='view_park_c' || $k=='view_salt_lake_c')
      {
        if($v != 0){
          $k = $mod_strings[$f_vname];
          $str3 .= $k.', ';
        }
      }
      //-------------------
      if($k=='id_object_c'){
        $sugarSmarty->assign("id_ob",$v);
      }
      if($k=='published_site_c'){
        $sugarSmarty->assign("public",$v);
      }
      //-----------------------
      if($k=='price_rent_int_c' || $k=='price_sale_int_c')
      {
        if($v != ''){
          $k = $mod_strings[$f_vname];
          $ar_price[$k] = $v;
        }
      }
      //----------------------
      if($k=='name_rus_c' || $k=='name_eng_c' || $k=='name_sp_c')
      {
        if($v != ''){
          $k = $mod_strings[$f_vname];
          $ar_lang[$k] = $v;
        }
      }
      if($k=='type' || $k=='object_status_c' || $k=='category_c' || $k=='special_status_c')
      {
        if($v != ''){
          $k = $mod_strings[$f_vname];
          $ar_obj[$k] = $v;
        }
      }
      if($k=='total_area_c' || $k=='apartment_area_c' || $k=='area_area_c' || $k=='number_bedroom_c'
        || $k=='number_bathroom_c')
      {
        $k = $mod_strings[$f_vname];
        $ar_area[$k] = $v;
      }
      if($k=='province_select_c' || $k=='coast_select_c' || $k=='community_select_c' || $k=='address')
      {
        if($v != ''){
          $k = $mod_strings[$f_vname];
          $ar_adr[$k] = $v;
        }
      }
      if($k=='nearest_airport_c' || $k=='sea_distance_c' || $k=='comm_center_distance_c')
      {
        if($v != ''){
          $k = $mod_strings[$f_vname];
          $ar_dist[$k] = $v;
        }
      }
      if($k=='additional_description_c' || $k=='additional_description_eng_c' || $k=='additional_description_sp_c')
      {
        if($v != ''){
          $k=$mod_strings[$f_vname];
          $ar_dop[$k]=url2html(nl2br($v));
        }
      }
    }
    if (!empty($str1)){
      $begin = substr($str1, 0, 2);
      $str1 = mb_convert_case($str1, MB_CASE_LOWER, "UTF-8");
      $end = substr($str1, 2, strlen($str1));
      $str1 = rtrim($begin.$end, ', ');
      $str1 = $str1.'.';
    }
    if(!empty($str2)){
      $begin = substr($str2, 0, 2);
      $str2 = mb_convert_case($str2, MB_CASE_LOWER, "UTF-8");
      $end = substr($str2, 2, strlen($str2));
      $str2 = rtrim($begin.$end, ', ');
      $str2 = $str2.'.';
    }
    if(!empty($str3)){
      $begin = substr($str3, 0, 2);
      $str3 = mb_convert_case($str3, MB_CASE_LOWER, "UTF-8");
      $end = substr($str3, 2, strlen($str3));
      $str3 = rtrim($begin.$end, ', ');
      $str3 = $str3.'.';
    }
    $sugarSmarty->assign("str1", $str1);
    $sugarSmarty->assign("str2", $str2);
    $sugarSmarty->assign("str3", $str3);

    $sugarSmarty->assign("ar_price", $ar_price);
    $sugarSmarty->assign("ar_lang", $ar_lang);
    $sugarSmarty->assign("ar_obj", $ar_obj);
    $sugarSmarty->assign("ar_area", $ar_area);
    $sugarSmarty->assign("ar_adr", $ar_adr);
    $sugarSmarty->assign("ar_dist", $ar_dist);
    $sugarSmarty->assign("ar_dop", $ar_dop);

    //    $message_body =  $sugarSmarty->fetch('custom/include/email_sender/tmpl/body.tpl');

    $object_name = $row['name'];
    $object_articule = $row['name_eng_c'];
    $mailer->Subject = "От Вячеслава Tradegoria: $object_name";
    $sugarSmarty->assign("user",$user);
    $sugarSmarty->assign("first_name",$first_name);
    $sugarSmarty->assign("id2",$id2);
    $sugarSmarty->assign("objects",$objects);
    $sugarSmarty->assign("site_url", $sugar_config["site_url"]);
    $message_body =  $sugarSmarty->fetch('custom/include/email_sender/tmpl/body.tpl');

    $mailer->AddAddress($email, $first_name);
    $ar_note = array();
    $attachmentsFSize = 0;
    while ($row = $db->fetchByAssoc($result2)) {
      if($attachmentsFSize >= 9*1024*1024) {
        break;
      }
      $photo=$row["id"];
      $main=$row["main"];
      $image_size = getimagesize($photo_dir.$photo);
      if($image_size && $image_size[0] > 1024 || $image_size[1] > 1024 ) {
        if($image_size[0] > $image_size[1] ) {
          $percents = 1024 / $image_size[0] * 100;
        } else {
          $percents = 1024 / $image_size[1] * 100;
        }
        imageresizejpg($photo_dir.$photo, $photo_dir.$photo, $percents, 100);
      }
      $fsize = filesize($photo_dir.$photo);
      if ($fsize)
        $attachmentsFSize += $fsize;
      if($attachmentsFSize < 9*1024*1024) {
        $mailer->AddAttachment($photo_dir.$photo);
      }
//            imagesx($photo_dir.$photo)
      if($main == 0)
        $f_note = $photo_dir.$photo;
    }

    $mailer->Body = $message_body;

    if ($mailer->Send()) {
      //добавление записей в историю клиента
      $new_note = new Note();
      $now = time();
      $history_query = "REPLACE INTO sphr_object_send_history SET client_id = '$id', object_id = '$id2'";
      $db->query($history_query);
      $new_note->name = $object_articule;
      $new_note->description = 'Осуществлена отправка объекта '. $object_name;
      $new_note->assigned_user_id = $current_user_id;
      $new_note->parent_type = 'sphr_Client';
      $new_note->parent_id = $id; //id клиента

      $note_id = ($new_note->save()); //получили id заметки
      //копируем файл для заметки
      if (copy($f_note, $sugar_config['upload_dir'] . $note_id)){
        $new_note->filename = $photo;
        $new_note->file_mime_type = 'application/octetstream';
        $new_note->save(); //сохраняем изменения заметки - присоединение к ней файла
      }

      unset ($new_note);
    } else {
      echo $mailer->ErrorInfo, "\r\n";
    }
    $mailer->ClearAttachments();
  }//$objects_id
  $mailer->ClearAddresses();
  $mailer->ClearAttachments();

  //возвращаем отправителя по умолчанию, если не найдётся email менеджера, назначенного на следующего клиента
  $mailer->From = $a1['value'];
  $mailer->FromName = $a2['value'];
  $mailer->Sender = $mailer->From;
}//$clients_id

if ($mailer->IsError())
  echo "В процессе отправки писем произошли ошибки.";
else
  echo "Письма, содержащие " . count($objects_id) . " объектов были отправлены " . count($clients_id) . " клиентам.";

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
?>