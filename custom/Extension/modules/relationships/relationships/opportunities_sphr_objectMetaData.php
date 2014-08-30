<?php
// created: 2012-08-08 20:36:01
$dictionary["opportunities_sphr_object"] = array (
  'true_relationship_type' => 'many-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'opportunities_sphr_object' => 
    array (
      'lhs_module' => 'Opportunities',
      'lhs_table' => 'opportunities',
      'lhs_key' => 'id',
      'rhs_module' => 'sphr_Object',
      'rhs_table' => 'sphr_object',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'opportuniti_sphr_object_c',
      'join_key_lhs' => 'opportunite21funities_ida',
      'join_key_rhs' => 'opportunit4c2a_object_idb',
    ),
  ),
  'table' => 'opportuniti_sphr_object_c',
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
      'name' => 'opportunite21funities_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'opportunit4c2a_object_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'opportunities_sphr_objectspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'opportunities_sphr_object_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'opportunite21funities_ida',
        1 => 'opportunit4c2a_object_idb',
      ),
    ),
  ),
);
?>
