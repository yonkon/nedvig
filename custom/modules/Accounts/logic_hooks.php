<?php

$hook_version = 1;
$hook_array = Array();
$hook_array['after_delete'] = Array();
$hook_array['after_delete'][] = Array(101, 'Delete agents', 'custom/modules/Accounts/Hooks/AccountsLogicHook.php','AccountsLogicHook', 'accounts_agents_Delete');
$hook_array['after_save'] = Array();
$hook_array['after_save'][] = Array(101, 'Save agents', 'custom/modules/Accounts/Hooks/AccountsLogicHook.php','AccountsLogicHook', 'accounts_agents_Restore');

?>