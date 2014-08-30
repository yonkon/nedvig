<?php
// created: 2012-05-31 11:11:41
$dictionary["sphr_client_cosib_queries"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'sphr_client_cosib_queries' => 
    array (
      'lhs_module' => 'sphr_Client',
      'lhs_table' => 'sphr_client',
      'lhs_key' => 'id',
      'rhs_module' => 'cosib_queries',
      'rhs_table' => 'cosib_queries',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'sphr_clientosib_queries_c',
      'join_key_lhs' => 'sphr_clien735b_client_ida',
      'join_key_rhs' => 'sphr_clien6a3fqueries_idb',
    ),
  ),
  'table' => 'sphr_clientosib_queries_c',
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
      'name' => 'sphr_clien735b_client_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'sphr_clien6a3fqueries_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'sphr_client_cosib_queriesspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'sphr_client_cosib_queries_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'sphr_clien735b_client_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'sphr_client_cosib_queries_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'sphr_clien6a3fqueries_idb',
      ),
    ),
  ),
);
?>
