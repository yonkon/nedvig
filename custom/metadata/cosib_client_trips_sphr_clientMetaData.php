<?php
// created: 2012-06-29 10:15:46
$dictionary["cosib_client_trips_sphr_client"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'cosib_client_trips_sphr_client' => 
    array (
      'lhs_module' => 'sphr_Client',
      'lhs_table' => 'sphr_client',
      'lhs_key' => 'id',
      'rhs_module' => 'Cosib_client_trips',
      'rhs_table' => 'cosib_client_trips',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'cosib_clien_sphr_client_c',
      'join_key_lhs' => 'cosib_cliee6e0_client_ida',
      'join_key_rhs' => 'cosib_cliea115t_trips_idb',
    ),
  ),
  'table' => 'cosib_clien_sphr_client_c',
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
      'name' => 'cosib_cliee6e0_client_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'cosib_cliea115t_trips_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'cosib_clienps_sphr_clientspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'cosib_clienps_sphr_client_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'cosib_cliee6e0_client_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'cosib_clienps_sphr_client_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'cosib_cliea115t_trips_idb',
      ),
    ),
  ),
);
?>
