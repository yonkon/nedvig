<?php
// created: 2011-07-15 18:27:42
$dictionary["sphr_deal_activities_tasks"] = array (
  'relationships' => 
  array (
    'sphr_deal_activities_tasks' => 
    array (
      'lhs_module' => 'sphr_Deal',
      'lhs_table' => 'sphr_deal',
      'lhs_key' => 'id',
      'rhs_module' => 'Tasks',
      'rhs_table' => 'tasks',
      'rhs_key' => 'parent_id',
      'relationship_type' => 'one-to-many',
      'relationship_role_column' => 'parent_type',
      'relationship_role_column_value' => 'sphr_Deal',
    ),
  ),
  'fields' => '',
  'indices' => '',
  'table' => '',
);
?>
