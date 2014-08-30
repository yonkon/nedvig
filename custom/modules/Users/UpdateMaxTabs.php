<?php
//change max_tabs by default_max_Tabs

    global $db,$current_user;
  
    if($current_user->is_admin!=1) die("Access denided");
    $result = $db->query("SELECT id FROM users WHERE deleted=0");
    echo $GLOBALS['sugar_config']['default_max_tabs'];
    $focus = new User();
    
    $count=0;
    while($users = $db->fetchByAssoc($result)){
       $focus->retrieve($users["id"]);       
       $focus->setPreference('max_tabs', $GLOBALS['sugar_config']['default_max_tabs'], 0, 'global');
       $focus->save();
       $count++;
    }
    echo $count, " updates maked";
    
?>