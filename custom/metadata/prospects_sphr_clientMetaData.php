<?php
// created: 2013-02-06 17:02:23
$dictionary["prospects_sphr_client"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'prospects_sphr_client' => 
    array (
      'lhs_module' => 'Prospects',
      'lhs_table' => 'prospects',
      'lhs_key' => 'id',
      'rhs_module' => 'sphr_Client',
      'rhs_table' => 'sphr_client',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'prospects_sphr_client_c',
      'join_key_lhs' => 'prospects_485fospects_ida',
      'join_key_rhs' => 'prospects_cd3c_client_idb',
    ),
  ),
  'table' => 'prospects_sphr_client_c',
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
      'name' => 'prospects_485fospects_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'prospects_cd3c_client_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'prospects_sphr_clientspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'prospects_sphr_client_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'prospects_485fospects_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'prospects_sphr_client_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'prospects_cd3c_client_idb',
      ),
    ),
  ),
);
?>
