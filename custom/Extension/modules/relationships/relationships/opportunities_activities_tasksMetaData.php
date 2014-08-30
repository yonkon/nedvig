<?php
// created: 2011-08-14 19:49:27
$dictionary["opportunities_activities_tasks"] = array (
  'relationships' => 
  array (
    'opportunities_activities_tasks' => 
    array (
      'lhs_module' => 'Opportunities',
      'lhs_table' => 'opportunities',
      'lhs_key' => 'id',
      'rhs_module' => 'Tasks',
      'rhs_table' => 'tasks',
      'rhs_key' => 'parent_id',
      'relationship_type' => 'one-to-many',
      'relationship_role_column' => 'parent_type',
      'relationship_role_column_value' => 'Opportunities',
    ),
  ),
  'fields' => '',
  'indices' => '',
  'table' => '',
);
?>
