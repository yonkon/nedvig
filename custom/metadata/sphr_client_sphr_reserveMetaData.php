<?php
// created: 2011-07-15 16:54:53
$dictionary["sphr_client_sphr_reserve"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'sphr_client_sphr_reserve' => 
    array (
      'lhs_module' => 'sphr_Client',
      'lhs_table' => 'sphr_client',
      'lhs_key' => 'id',
      'rhs_module' => 'sphr_Reserve',
      'rhs_table' => 'sphr_reserve',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'sphr_clientsphr_reserve_c',
      'join_key_lhs' => 'sphr_clienc0d2_client_ida',
      'join_key_rhs' => 'sphr_clien03b8reserve_idb',
    ),
  ),
  'table' => 'sphr_clientsphr_reserve_c',
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
      'name' => 'sphr_clienc0d2_client_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'sphr_clien03b8reserve_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'sphr_client_sphr_reservespk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'sphr_client_sphr_reserve_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'sphr_clienc0d2_client_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'sphr_client_sphr_reserve_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'sphr_clien03b8reserve_idb',
      ),
    ),
  ),
);
?>
