<?php
// created: 2011-07-28 21:27:38
$dictionary["sphr_object_sphr_show_object"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'sphr_object_sphr_show_object' => 
    array (
      'lhs_module' => 'sphr_Object',
      'lhs_table' => 'sphr_object',
      'lhs_key' => 'id',
      'rhs_module' => 'sphr_Show_object',
      'rhs_table' => 'sphr_show_object',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'sphr_object_show_object_c',
      'join_key_lhs' => 'sphr_objecdf1f_object_ida',
      'join_key_rhs' => 'sphr_objec4a69_object_idb',
    ),
  ),
  'table' => 'sphr_object_show_object_c',
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
      'name' => 'sphr_objecdf1f_object_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'sphr_objec4a69_object_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'sphr_objecthr_show_objectspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'sphr_objecthr_show_object_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'sphr_objecdf1f_object_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'sphr_objecthr_show_object_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'sphr_objec4a69_object_idb',
      ),
    ),
  ),
);
?>
