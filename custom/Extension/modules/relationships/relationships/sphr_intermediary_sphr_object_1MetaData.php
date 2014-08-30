<?php
// created: 2011-07-15 16:57:49
$dictionary["sphr_intermediary_sphr_object_1"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'sphr_intermediary_sphr_object_1' => 
    array (
      'lhs_module' => 'sphr_Intermediary',
      'lhs_table' => 'sphr_intermediary',
      'lhs_key' => 'id',
      'rhs_module' => 'sphr_Object',
      'rhs_table' => 'sphr_object',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'sphr_intermphr_object_1_c',
      'join_key_lhs' => 'sphr_inter1ee0mediary_ida',
      'join_key_rhs' => 'sphr_inter6581_object_idb',
    ),
  ),
  'table' => 'sphr_intermphr_object_1_c',
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
      'name' => 'sphr_inter1ee0mediary_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'sphr_inter6581_object_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'sphr_interm_sphr_object_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'sphr_interm_sphr_object_1_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'sphr_inter1ee0mediary_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'sphr_interm_sphr_object_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'sphr_inter6581_object_idb',
      ),
    ),
  ),
);
?>
