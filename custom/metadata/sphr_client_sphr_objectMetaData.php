<?php
// created: 2012-04-18 09:33:57
$dictionary["sphr_client_sphr_object"] = array (
  'true_relationship_type' => 'many-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'sphr_client_sphr_object' => 
    array (
      'lhs_module' => 'sphr_Client',
      'lhs_table' => 'sphr_client',
      'lhs_key' => 'id',
      'rhs_module' => 'sphr_Object',
      'rhs_table' => 'sphr_object',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'sphr_client_sphr_object_c',
      'join_key_lhs' => 'sphr_clien88c3_client_ida',
      'join_key_rhs' => 'sphr_clien826b_object_idb',
    ),
  ),
  'table' => 'sphr_client_sphr_object_c',
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
      'name' => 'sphr_clien88c3_client_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'sphr_clien826b_object_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'sphr_client_sphr_objectspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'sphr_client_sphr_object_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'sphr_clien88c3_client_ida',
        1 => 'sphr_clien826b_object_idb',
      ),
    ),
  ),
);
?>
