<?php
// created: 2012-06-29 10:15:46
$dictionary["cosib_client_trips_sphr_object"] = array (
  'true_relationship_type' => 'many-to-many',
  'relationships' => 
  array (
    'cosib_client_trips_sphr_object' => 
    array (
      'lhs_module' => 'Cosib_client_trips',
      'lhs_table' => 'cosib_client_trips',
      'lhs_key' => 'id',
      'rhs_module' => 'sphr_Object',
      'rhs_table' => 'sphr_object',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'cosib_clien_sphr_object_c',
      'join_key_lhs' => 'cosib_clie09c9t_trips_ida',
      'join_key_rhs' => 'cosib_clief5bd_object_idb',
    ),
  ),
  'table' => 'cosib_clien_sphr_object_c',
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
      'name' => 'cosib_clie09c9t_trips_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'cosib_clief5bd_object_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'cosib_clienps_sphr_objectspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'cosib_clienps_sphr_object_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'cosib_clie09c9t_trips_ida',
        1 => 'cosib_clief5bd_object_idb',
      ),
    ),
  ),
);
?>
