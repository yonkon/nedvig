<?php
// created: 2012-06-14 17:11:26
$dictionary["accounts_activities_emails"] = array (
  'relationships' => 
  array (
    'accounts_activities_emails' => 
    array (
      'lhs_module' => 'Accounts',
      'lhs_table' => 'accounts',
      'lhs_key' => 'id',
      'rhs_module' => 'Emails',
      'rhs_table' => 'emails',
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
