<?php
// created: 2011-08-14 19:49:26
$dictionary["opportunities_activities_calls"] = array (
  'relationships' => 
  array (
    'opportunities_activities_calls' => 
    array (
      'lhs_module' => 'Opportunities',
      'lhs_table' => 'opportunities',
      'lhs_key' => 'id',
      'rhs_module' => 'Calls',
      'rhs_table' => 'calls',
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
