<?php
// created: 2012-05-31 11:13:42
$dictionary["accounts_cosib_queries"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'accounts_cosib_queries' => 
    array (
      'lhs_module' => 'Accounts',
      'lhs_table' => 'accounts',
      'lhs_key' => 'id',
      'rhs_module' => 'cosib_queries',
      'rhs_table' => 'cosib_queries',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'accounts_cosib_queries_c',
      'join_key_lhs' => 'accounts_c3c3bccounts_ida',
      'join_key_rhs' => 'accounts_c5a9fqueries_idb',
    ),
  ),
  'table' => 'accounts_cosib_queries_c',
  'fields' => 
  array (
    0 => 
    array (
      'name' => 'id',
      'type' => 'varchar',
      'len' => 36,
    ),
    1 => 
    array (
      'name' => 'date_modified',
      'type' => 'datetime',
    ),
    2 => 
    array (
      'name' => 'deleted',
      'type' => 'bool',
      'len' => '1',
      'default' => '0',
      'required' => true,
    ),
    3 => 
    array (
      'name' => 'accounts_c3c3bccounts_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'accounts_c5a9fqueries_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'accounts_cosib_queriesspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'accounts_cosib_queries_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'accounts_c3c3bccounts_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'accounts_cosib_queries_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'accounts_c5a9fqueries_idb',
      ),
    ),
  ),
);
?>
