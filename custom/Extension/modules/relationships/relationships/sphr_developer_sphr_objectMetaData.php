<?php
// created: 2011-08-02 21:19:01
$dictionary["sphr_developer_sphr_object"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'sphr_developer_sphr_object' => 
    array (
      'lhs_module' => 'sphr_Developer',
      'lhs_table' => 'sphr_developer',
      'lhs_key' => 'id',
      'rhs_module' => 'sphr_Object',
      'rhs_table' => 'sphr_object',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'sphr_develo_sphr_object_c',
      'join_key_lhs' => 'sphr_devel6664veloper_ida',
      'join_key_rhs' => 'sphr_devel402f_object_idb',
    ),
  ),
  'table' => 'sphr_develo_sphr_object_c',
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
      'name' => 'sphr_devel6664veloper_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'sphr_devel402f_object_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'sphr_develoer_sphr_objectspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'sphr_develoer_sphr_object_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'sphr_devel6664veloper_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'sphr_develoer_sphr_object_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'sphr_devel402f_object_idb',
      ),
    ),
  ),
);
?>
