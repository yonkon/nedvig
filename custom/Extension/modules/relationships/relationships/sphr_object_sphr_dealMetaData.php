<?php
// created: 2011-07-15 18:23:53
$dictionary["sphr_object_sphr_deal"] = array (
  'true_relationship_type' => 'many-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'sphr_object_sphr_deal' => 
    array (
      'lhs_module' => 'sphr_Object',
      'lhs_table' => 'sphr_object',
      'lhs_key' => 'id',
      'rhs_module' => 'sphr_Deal',
      'rhs_table' => 'sphr_deal',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'sphr_object_sphr_deal_c',
      'join_key_lhs' => 'sphr_objecd346_object_ida',
      'join_key_rhs' => 'sphr_objeceff4hr_deal_idb',
    ),
  ),
  'table' => 'sphr_object_sphr_deal_c',
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
      'name' => 'sphr_objecd346_object_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'sphr_objeceff4hr_deal_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'sphr_object_sphr_dealspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'sphr_object_sphr_deal_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'sphr_objecd346_object_ida',
        1 => 'sphr_objeceff4hr_deal_idb',
      ),
    ),
  ),
);
?>
