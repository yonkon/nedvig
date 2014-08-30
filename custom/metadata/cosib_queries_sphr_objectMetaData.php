<?php
// created: 2012-05-31 11:07:23
$dictionary["cosib_queries_sphr_object"] = array (
  'true_relationship_type' => 'many-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'cosib_queries_sphr_object' => 
    array (
      'lhs_module' => 'cosib_queries',
      'lhs_table' => 'cosib_queries',
      'lhs_key' => 'id',
      'rhs_module' => 'sphr_Object',
      'rhs_table' => 'sphr_object',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'cosib_queri_sphr_object_c',
      'join_key_lhs' => 'cosib_quer91b5queries_ida',
      'join_key_rhs' => 'cosib_quer4238_object_idb',
    ),
  ),
  'table' => 'cosib_queri_sphr_object_c',
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
      'name' => 'cosib_quer91b5queries_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'cosib_quer4238_object_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'cosib_queries_sphr_objectspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'cosib_queries_sphr_object_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'cosib_quer91b5queries_ida',
        1 => 'cosib_quer4238_object_idb',
      ),
    ),
  ),
);
?>
