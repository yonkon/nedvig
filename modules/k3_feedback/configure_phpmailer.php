<?
function configure_phpmailer(&$mailer = null)
{
	global $db, $sugar_config;
	if ($mailer == null)
	{
		require_once('include/phpmailer/class.phpmailer.php'); //настройки полeй класса см в методе sendEmailTest класса Email
		$mailer = new PHPMailer();
	}
	$mailer->Priority = 3;
	$mailer->IsHTML(false);
	$oe_cfg_section = 'override_system_outbound_email_settings';
	if (isset($sugar_config[$oe_cfg_section]) && !empty($sugar_config[$oe_cfg_section])) //есть альтернативне настройки - используем их
	{
		$mailer->Mailer = $sugar_config[$oe_cfg_section]['sendtype'];
		$mailer->Host = $sugar_config[$oe_cfg_section]['host'];
		$mailer->Port =  $sugar_config[$oe_cfg_section]['port'];
		
		$mailer->Username =	$sugar_config[$oe_cfg_section]['username'];
		$mailer->Password = $sugar_config[$oe_cfg_section]['password'];
		
		if ( !empty($sugar_config[$oe_cfg_section]['username']) && !empty( $sugar_config[$oe_cfg_section]['password']) ) 
			$mailer->SMTPAuth = TRUE;
		
		$mailer->From = $sugar_config[$oe_cfg_section]['from'];
		$mailer->FromName = $sugar_config[$oe_cfg_section]['from_name'];
		$mailer->SMTPSecure = $sugar_config[$oe_cfg_section]['smtp_secure'];
	} else {
		require_once('include/OutboundEmail/OutboundEmail.php');
		$oe = new OutboundEmail();
		$oe->getSystemMailerSettings();

		if ($oe->mail_sendtype == 'SMTP') $mailer->Mailer = "smtp";
			else $mailer->Mailer = 'sendmail';
		
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
	}
	$mailer->Sender = $mailer->From; //Sets the Sender email (Return-Path)
}
?>