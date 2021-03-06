<?php
// created: 2011-08-02 21:20:35
$dictionary["sphr_owner_sphr_object"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'sphr_owner_sphr_object' => 
    array (
      'lhs_module' => 'sphr_Owner',
      'lhs_table' => 'sphr_owner',
      'lhs_key' => 'id',
      'rhs_module' => 'sphr_Object',
      'rhs_table' => 'sphr_object',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'sphr_owner_sphr_object_c',
      'join_key_lhs' => 'sphr_owner9f16r_owner_ida',
      'join_key_rhs' => 'sphr_owneredcf_object_idb',
    ),
  ),
  'table' => 'sphr_owner_sphr_object_c',
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
      'name' => 'sphr_owner9f16r_owner_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'sphr_owneredcf_object_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'sphr_owner_sphr_objectspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'sphr_owner_sphr_object_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'sphr_owner9f16r_owner_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'sphr_owner_sphr_object_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'sphr_owneredcf_object_idb',
      ),
    ),
  ),
);
?>
