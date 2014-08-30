<?php
// created: 2011-07-15 15:47:43
$dictionary["sphr_interest_sphr_object"] = array (
  'true_relationship_type' => 'many-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'sphr_interest_sphr_object' => 
    array (
      'lhs_module' => 'sphr_Interest',
      'lhs_table' => 'sphr_interest',
      'lhs_key' => 'id',
      'rhs_module' => 'sphr_Object',
      'rhs_table' => 'sphr_object',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'sphr_intere_sphr_object_c',
      'join_key_lhs' => 'sphr_inter7d45nterest_ida',
      'join_key_rhs' => 'sphr_inter2e1e_object_idb',
    ),
  ),
  'table' => 'sphr_intere_sphr_object_c',
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
      'name' => 'sphr_inter7d45nterest_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'sphr_inter2e1e_object_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'sphr_interest_sphr_objectspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'sphr_interest_sphr_object_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'sphr_inter7d45nterest_ida',
        1 => 'sphr_inter2e1e_object_idb',
      ),
    ),
  ),
);
?>
