<?php
//prevents directly accessing this file from a web browser
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

include_once("modules/interface_Asterisk/InterfaceAsterisk.php");
$interfaceAsteriskEngine_ = new InterfaceAsterisk ();


// определяем какое действие нужно совершить в текущий момент
switch ($_GET["mode"])
{
	default:
	case "start_inbound" :
		echo $interfaceAsteriskEngine_->searchUserByPhone();
		break;
		
	case "start_redirect" :
		echo $interfaceAsteriskEngine_->redirectUserCall();
		break;
		
	case "start_outbound" :
		echo $interfaceAsteriskEngine_->searchUserByInternalPhone();
		break;
		
	case "end" :
		echo $interfaceAsteriskEngine_->setCallDuration();
		break;
}

?>