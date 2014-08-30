<?php

$hook_version = 1;
$hook_array = Array();
$hook_array['after_delete'] = Array();
$hook_array['after_delete'][] = Array(101, 'Delete agents', 'custom/modules/Accounts/Hooks/AccountsAgentsLogicHooks.php','AccountsAgentsLogicHook', 'relate_accounts_agents_delete');
$hook_array['after_save'] = Array();
$hook_array['after_save'][] = Array(101, 'Save agents', 'custom/modules/Accounts/Hooks/AccountsAgentsLogicHooks.php','AccountsAgentsLogicHook', 'relate_accounts_agents_save');
$hook_array['after_relationship_add'] = Array();
$hook_array['after_relationship_add'][] = Array(1, 'Update interests of client', 'custom/modules/cosib_queries/Hooks/cosib_queriesHook.php','cosib_queriesHook', 'add_interest');
$hook_array['after_relationship_delete'] = Array();
$hook_array['after_relationship_delete'][] = Array(1, 'Update interests of client', 'custom/modules/cosib_queries/Hooks/cosib_queriesHook.php','cosib_queriesHook', 'remove_interest');

?>