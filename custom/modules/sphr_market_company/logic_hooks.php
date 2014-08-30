<?php
$hook_version = 1; 
$hook_array = Array(); 

// Other hooks
// array(hook execute order, 'hook name', 'hook code location', 'hook code class name', 'hook code function to execute')
$hook_array['process_record'] = Array(); 
$hook_array['process_record'][] = Array(1, 'calc_fields', 'custom/modules/sphr_market_company/market_company_logic_hook.php', 'market_company_logic_hook', 'calc_fields');
$hook_array['after_retrieve'] = Array();
$hook_array['after_retrieve'][] = Array(1, 'calc_fields', 'custom/modules/sphr_market_company/market_company_logic_hook.php', 'market_company_logic_hook', 'calc_fields');
?>