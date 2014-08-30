<?php
require_once('modules/Accounts/Account.php');

class sphr_ObjectLogicHook{    
   
    function handle_delete_export_parametrs(SugarBean $bean, $event, $arguments){
       global $db;
       
       $result = $db->query("SELECT * FROM sphr_object_publications WHERE id='".$bean->id."'");
       if($row = $db->fetchByAssoc($result)){
           if ($row['status']==1){
               $db->query("DELETE FROM sphr_object_publications WHERE id='".$bean->id."'");
           }else{
               $db->query("UPDATE sphr_object_publications SET status = 3 WHERE id='".$bean->id."'" );
           }
       }
    }

}
?>