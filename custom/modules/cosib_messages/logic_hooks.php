<?php

$hook_version = 1;
$hook_array = Array();
$hook_array['after_delete'] = Array();
$hook_array['after_delete'][] = Array(101, 'Control number of record', 'custom/modules/cosib_messages/cosib_messagesLogicHook.php','cosib_messagesLogicHook', 'answers_delete');
$hook_array['after_restore'] = Array();
$hook_array['after_restore'][] = Array(101, 'Control number of record', 'custom/modules/cosib_messages/cosib_messagesLogicHook.php','cosib_messagesLogicHook', 'answers_restore');

?>