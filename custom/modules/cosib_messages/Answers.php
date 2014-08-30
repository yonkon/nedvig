<?php
 $defaultAction = 'list';
 $subaction = array( 'List','Save' );

 $defaultAction = (in_array($_REQUEST['subaction'],$subaction ))?$_REQUEST['subaction']:$defaultAction;
 $action = 'answers_'.$defaultAction;
 $result = $this->bean->$action($_REQUEST['record']);
 global $mod_strings;
 if( $result=='' ) $result = '<em>'.$mod_strings['LBL_ANSWER_ABSENT'].'</em>';
 echo $result;

?>
