<?php
// created: 2012-06-14 17:11:23
$dictionary["accounts_activities_meetings"] = array (
  'relationships' => 
  array (
    'accounts_activities_meetings' => 
    array (
      'lhs_module' => 'Accounts',
      'lhs_table' => 'accounts',
      'lhs_key' => 'id',
      'rhs_module' => 'Meetings',
      'rhs_table' => 'meetings',
      'rhs_key' => 'parent_id',
      'relationship_type' => 'one-to-many',
      'relationship_role_column' => 'parent_type',
      'relationship_role_column_value' => 'Accounts',
    ),
  ),
  'fields' => '',
  'indices' => '',
  'table' => '',
);
?>
