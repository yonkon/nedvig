<?php  
//prevents directly accessing this file from a web browser
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');	
require_once('include/phpmailer/class.phpmailer.php'); 
require_once('modules/k3_feedback/configure_phpmailer.php');
function processFeedbackForm()
{
	global $current_language;
	$mod_strings = return_module_language($current_language, 'k3_feedback');
	
	global $sugar_config, $system_config, $current_user;
	$sender = $system_config->settings['system_name'];
	$currentUserId = (is_object($current_user) ? $current_user->id : $current_user);
	$currentUserName = get_assigned_user_name($currentUserId);
	$toAddr = $sugar_config['k3_feedback_address'];
	if (empty($toAddr)) return $mod_strings['ERR_MISSING_TO_ADDR'];
	if (isset($_FILES['feedbackFile']) && is_uploaded_file($_FILES['feedbackFile']['tmp_name'])) 
	{
		$filename = basename($_FILES['feedbackFile']['name']);  
		$fullfilename = $sugar_config['upload_dir'] . $filename;  
		if (file_exists($fullfilename)) unlink($fullfilename);
		if (!move_uploaded_file($_FILES['feedbackFile']['tmp_name'], $fullfilename))
			return $mod_strings['ERR_FILE_UPLOAD'];
	}
	$mailer = new PHPMailer();
	configure_phpmailer($mailer);
	$mailer->Subject = "Обращение от ".$sender;
	$mailer->Body = "";
	$mailer->Body .= "Пользователь: ".$currentUserName;
	$mailer->Body .= "\r\nТема обращения: ".$_REQUEST['feedbackSubject'];
	$mailer->Body .= "\r\nТекст обращения: ".$_REQUEST['feedbackText'];
	$mailer->Body .= "\r\nКонтактные данные для ответа: ".$_REQUEST['feedbackContact'];
	$mailer->Body .= "\r\nДата и время сообщения: ".date('d.m.Y H:i:s');
	//return ($mailer->Body);
	if (isset($fullfilename))
	{
		$mailer->Body .= "\r\nФайл: ".$filename;
		$mailer->AddAttachment($fullfilename); 
	}
	
	$mailer->AddAddress($toAddr/*, $to_name*/); //или $mailer->to_name; $mailer->to_email;
	if ( !$mailer->Send()) $GLOBALS['log']->fatal('k3_feedback: send stats error is '.$mailer->ErrorInfo);
	if ($mailer->IsError())  return $mod_strings['LBL_SEND_FAIL']; else return $mod_strings['LBL_SEND_OK'];
}

error_reporting(E_ERROR); 
ob_clean();	
$answer = processFeedbackForm();
$answer = str_replace(array("\r\n"), " ", $answer);
if (isset($_REQUEST['callback']))
{ 
	$answer = '<script type="text/javascript">window.parent.'.$_REQUEST['callback'].'("'.$answer.'");</script>';  
}
echo $answer;
exit();
?>  