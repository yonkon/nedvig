<?php
// created: 2012-06-14 17:02:44
$dictionary["accounts_sphr_client"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'accounts_sphr_client' => 
    array (
      'lhs_module' => 'Accounts',
      'lhs_table' => 'accounts',
      'lhs_key' => 'id',
      'rhs_module' => 'sphr_Client',
      'rhs_table' => 'sphr_client',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'accounts_sphr_client_c',
      'join_key_lhs' => 'accounts_s160fccounts_ida',
      'join_key_rhs' => 'accounts_sde91_client_idb',
    ),
  ),
  'table' => 'accounts_sphr_client_c',
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
      'name' => 'accounts_s160fccounts_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'accounts_sde91_client_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'accounts_sphr_clientspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'accounts_sphr_client_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'accounts_s160fccounts_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'accounts_sphr_client_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'accounts_sde91_client_idb',
      ),
    ),
  ),
);
?>
