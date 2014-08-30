<?php
// created: 2012-04-18 09:36:30
$dictionary["sphr_client_activities_calls"] = array (
  'relationships' => 
  array (
    'sphr_client_activities_calls' => 
    array (
      'lhs_module' => 'sphr_Client',
      'lhs_table' => 'sphr_client',
      'lhs_key' => 'id',
      'rhs_module' => 'Calls',
      'rhs_table' => 'calls',
      'rhs_key' => 'parent_id',
      'relationship_type' => 'one-to-many',
      'relationship_role_column' => 'parent_type',
      'relationship_role_column_value' => 'sphr_Client',
    ),
  ),
  'fields' => '',
  'indices' => '',
  'table' => '',
);
?>
