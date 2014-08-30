<?php
//prevents directly accessing this file from a web browser
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

include_once("modules/ClearSearch/ClearSearch.php");
$ClearSearchObj = new ClearSearch ();

switch ($_REQUEST["action"])
{
	case "update_last_time_access" :
		$module_name = '';
		if (isset($_REQUEST['module_name'])) $module_name = $_REQUEST['module_name'];
		echo $ClearSearchObj->update_last_time_access($module_name);
		break;
	default :
		break;
}
?>