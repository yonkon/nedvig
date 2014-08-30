<?php
if(ACLController::checkAccess('Cosib_client_trips', 'calendar', true))$module_menu[]=Array("index.php?module=Cosib_client_trips&action=Calendar&return_module=Cosib_client_trip&return_action=index", $mod_strings['LBL_CALENDAR_TRIPS'],"Calendar", 'Cosib_client_trips');
?>