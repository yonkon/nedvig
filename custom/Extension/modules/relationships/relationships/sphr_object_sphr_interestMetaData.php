<?php
// created: 2011-08-15 17:33:05
$dictionary["sphr_object_sphr_interest"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'sphr_object_sphr_interest' => 
    array (
      'lhs_module' => 'sphr_Object',
      'lhs_table' => 'sphr_object',
      'lhs_key' => 'id',
      'rhs_module' => 'sphr_Interest',
      'rhs_table' => 'sphr_interest',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'sphr_objectphr_interest_c',
      'join_key_lhs' => 'sphr_objec2883_object_ida',
      'join_key_rhs' => 'sphr_objec057enterest_idb',
    ),
  ),
  'table' => 'sphr_objectphr_interest_c',
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
      'name' => 'sphr_objec2883_object_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'sphr_objec057enterest_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'sphr_object_sphr_interestspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'sphr_object_sphr_interest_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'sphr_objec2883_object_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'sphr_object_sphr_interest_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'sphr_objec057enterest_idb',
      ),
    ),
  ),
);
?>
