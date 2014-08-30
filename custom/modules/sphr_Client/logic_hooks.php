<?php

$hook_version = 1;
$hook_array = Array();
$hook_array['after_save'] = Array();
$hook_array['after_save'][] = Array(1, 'Update interests of client', 'custom/modules/cosib_queries/Hooks/cosib_queriesHook.php','cosib_queriesHook', 'after_save_sphr_Client');

?>