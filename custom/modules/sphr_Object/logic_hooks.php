<?php

$hook_version = 1;
$hook_array = Array();
$hook_array['after_delete'] = Array();
$hook_array['after_delete'][] = Array(101, 'Delete agents', 'custom/modules/Accounts/Hooks/AccountsAgentsLogicHooks.php','AccountsAgentsLogicHook', 'relate_accounts_agents_delete');
$hook_array['after_delete'][] = Array(102, 'Delete from site', 'custom/modules/sphr_Object/Hooks/sphr_ObjectLogicHooks.php','sphr_ObjectLogicHook', 'handle_delete_export_parametrs');
$hook_array['after_save'] = Array();
$hook_array['after_save'][] = Array(101, 'Save agents', 'custom/modules/Accounts/Hooks/AccountsAgentsLogicHooks.php','AccountsAgentsLogicHook', 'relate_accounts_agents_save');
?>