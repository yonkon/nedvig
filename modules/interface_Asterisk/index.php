<?php
//prevents directly accessing this file from a web browser
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');


include_once("modules/interface_Asterisk/InterfaceAsterisk.php");
$interfaceAsteriskEngine_ = new InterfaceAsterisk ();



switch ($_REQUEST["action"])
{
	case "interfaceasteriskstart" :
	default :
		{
			echo $interfaceAsteriskEngine_->onlineFormStart();
			die();
		}
		break;
	
	case "interfaceasteriskgetinfo" :
		{
			echo $interfaceAsteriskEngine_->onlineFormGetInfo();
			die();
		}
		break;	
}

?>