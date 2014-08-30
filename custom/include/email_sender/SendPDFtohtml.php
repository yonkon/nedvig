<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
//echo "REQUEST<br><pre>"; print_r($_REQUEST);
//echo "GET<br><pre>";   print_r($_GET);
//echo "POST<br><pre>";  print_r($_POST);

/* if ((!isset($_POST['clients'])) || (!isset($_POST['clients'])))
{
	echo "Неполные параметры";
	die();
} */
$current_user_id = $_POST['current_user_id'];
$clients_id = explode (",",  $_POST['clients']);
$objects_id = explode (",",  $_POST['objects']);
$clients=array();
$objects=array();

global $db,$current_language,$app_strings,$app_list_strings,$sugar_config ;


foreach ($clients_id as $id)
{
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
			$clients[$id]=array();
			$clients[$id]['first_name']=$row['first_name'];
			$clients[$id]['email']=$row['email'];
		} else {
			echo "Письма не будут отправлены клиенту '" . $row['first_name'] . "', т.к. не указан E-mail клиента \r\n";
		}
	}
}


global $sugar_config;
//$PDF_dir = $sugar_config['upload_dir']."pdf/";
//$PDF_name_prefix = "offer_";
$tmpl_dir = 'custom/include/email_sender/tmpl/';
$body='';
$header_tmpl = 'header.html';
$body_tmpl = 'body.html';
$footer_tmpl = 'footer.html';
$object = new sphr_Object();
	$mod_strings = return_module_language($current_language, 'sphr_Object');

$sugarSmarty = new Sugar_Smarty();
switch($current_language){
	case 'ru_ru': $lang = 'rus';
	break;
	case 'en_us': $lang = 'eng';
	break;
	case 'es_es': $lang = 'sp';
	break;
	default :  $lang = 'rus';
	break;
}
$name = 'name_'.$lang.'_c';
$desc = ($lang!='rus')?'additional_description_'.$lang.'_c':'additional_description_c';

$sugarSmarty->assign("MOD",$mod_strings);
$sugarSmarty->assign("APP",$app_list_strings);
$sugarSmarty->assign("SURL",$sugar_config['site_url']);

foreach ($objects_id as $id)
{
	if (empty($id)) continue;
	$object->retrieve($id);


	if ($object->id!='' )
	{
		$objects[$id] = array();
		$objects[$id]['name'] = $object->$name;
        $sugarSmarty->assign("TITLE",$object->$name);
        $sugarSmarty->assign("DESCRIPTION",$object->$desc);
        $sugarSmarty->assign("fields", $object);
        $photos=array();$ip=0;
        $query_getPhotos = "SELECT * FROM `sphr_object_photo_c` WHERE `sphr_object_id`='".$object->id."' ORDER BY `main` DESC";
		$resource_getPhotos = $db->query($query_getPhotos);
		while($fromDB_getPhotos = $db->fetchByAssoc($resource_getPhotos)) {
			$photos[$ip] = $fromDB_getPhotos['id'];
			$ip++;
		}
		$sugarSmarty->assign("photos", $photos);
		$sugarSmarty->assign("photos_count",$ip);

        $body.= $sugarSmarty->fetch($tmpl_dir.$body_tmpl);
	}

}

unset ($clients_id);
unset ($objects_id);

//print_r($clients);
//print_r($objects);
if (count($clients) == 0) echo "Нет клиентов для отправки\r\n";
if (count($objects) == 0) echo "Нет объектов для отправки\r\n";
if ((count($objects) == 0) || (count($clients) == 0)) die();


require_once('include/OutboundEmail/OutboundEmail.php');
$oe = new OutboundEmail();
$oe->getSystemMailerSettings();
require_once('include/phpmailer/class.phpmailer.php'); //настройки полeй класса см в методе sendEmailTest класса Email
$mailer = new PHPMailer();
$mailer->Priority = 3;
$mailer->IsHTML(true);
$message_subject="SugarCRM: Объект {first_object}";
$message_body="{objects}";

if ($oe->mail_sendtype == 'SMTP')
{
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
switch ($oe->mail_smtpssl)
{
	case 0: $mailer->SMTPSecure = "";	  	/*$mailer->protocol = "tcp://"; */	break;
	case 1: $mailer->SMTPSecure = "ssl";	/*$mailer->protocol = "ssl://";	*/  break;
	case 2: $mailer->SMTPSecure = "tls";	/*$mailer->protocol = "ssl://"; */  break;
}

//нижеследующий код взят из метода getSystemDefaultEmail класса Email
$r1 = $db->query('SELECT config.value FROM config WHERE name=\'fromaddress\'');
$r2 = $db->query('SELECT config.value FROM config WHERE name=\'fromname\'');
$a1 = $db->fetchByAssoc($r1);
$a2 = $db->fetchByAssoc($r2);
//$mailer->SetFrom($a1['value'], $a2['value']); // или
$mailer->From = $a1['value'];
$mailer->FromName = $a2['value'];
$mailer->Sender = $mailer->From; //Sets the Sender email (Return-Path)
//$mailer->AddReplyTo($mailer->$From , $mailer->$FromName); //адрес ответа
//$mailer->Receipt(); //уведомление о прочтении
//$mailer->ConfirmReadingTo = $mailer->$FromName; //кому будет отправлено уведомление
//$mailer->autoCheck(true);             // Проверка адресатов на валидность

reset($objects);
$first_object = each($objects);
$first_object_string = $first_object['value']['name']; //название первого объекта
if (count($objects) > 1) $first_object_string .= " ...";
$mailer->Subject = str_replace("{first_object}",$first_object_string,$message_subject);
$objects_string = "";
$objects_full_string = "";
foreach ($objects as $id => $object)
{
	$objects_string = $objects_string . $object['name'] . "\r\n";
	//$object_detail_view_url="index.php?module=sphr_Object&action=DetailView&record=".$id;
	//$objects_full_string = $objects_full_string . $object['name'] .'(<a href="' .$object_detail_view_url. '">Карточка</a>, <a href="' .$object['path'] . '">PDF</a>)' . "\r\n";
	$objects_full_string = $objects_full_string . $object['name'] . "\r\n";
	$mailer->AddAttachment($object['path']); //[string $name = ''][string $encoding = 'base64'], [string $type = 'application/octet-stream'])
}
$header = $sugarSmarty->fetch($tmpl_dir.$body_tmpl);
$mailer->Body = $sugarSmarty->fetch($tmpl_dir.$header_tmpl).$body.$sugarSmarty->fetch($tmpl_dir.$footer_tmpl);
//print_r($oe);
//print_r($mailer);

global $beanFiles;
require_once($beanFiles['Task']);
require_once('include/TimeDate.php');
$timedate = new TimeDate();
foreach ($clients as $id_client => $client)
{
	$mailer->ClearAddresses(); // или void ClearAllRecipients ()
	$mailer->AddAddress($client['email'], $client['first_name']); //или $mailer->to_name; $mailer->to_email;
	if ($mailer->Send()) {
		//добавление записей в историю клиента
		foreach ($objects as $id_object => $object)
		{
			$new_note = new Note();
			//$new_note->id=create_guid();
			$new_note->name = 'Осуществлена отправка объекта '. $object['name'];
			$new_note->description = '';

			$new_note->assigned_user_id = $current_user_id;
			//$new_note->modified_user_id;	//в эти поля записать не удается
			//$new_note->created_by;

			$new_note->parent_type = 'sphr_Client';
			$new_note->parent_id = $id_client; //id клиента

			$note_id = ($new_note->save()); //получили id заметки

			/*if (copy($object['path'], $sugar_config['upload_dir'] . $note_id)) //копируем файл для заметки
			{
				$new_note->filename = $object['filename'];
				$new_note->file_mime_type = 'application/octetstream';
				$new_note->save(); //сохраняем изменения заметки - присоединение к ней файла
			}   */
			unset ($new_note);

		}
	} else {
		echo $mailer->ErrorInfo, "\r\n";
	}
}
if ($mailer->IsError())
	echo "В процессе отправки писем произошли ошибки.";
else
	echo "Письма, содержащие " . count($objects) . " объектов были отправлены " . count($clients) . " клиентам.";
//try {} catch (phpmailerException $e) { echo $e->errorMessage();}


?>