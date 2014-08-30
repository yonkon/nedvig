<?php
// created: 2012-04-18 09:36:32
$dictionary["sphr_client_activities_tasks"] = array (
  'relationships' => 
  array (
    'sphr_client_activities_tasks' => 
    array (
      'lhs_module' => 'sphr_Client',
      'lhs_table' => 'sphr_client',
      'lhs_key' => 'id',
      'rhs_module' => 'Tasks',
      'rhs_table' => 'tasks',
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
