<?php
// created: 2011-07-20 00:03:23
$dictionary["sphr_client_sphr_inspection_tour_2"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'sphr_client_sphr_inspection_tour_2' => 
    array (
      'lhs_module' => 'sphr_Client',
      'lhs_table' => 'sphr_client',
      'lhs_key' => 'id',
      'rhs_module' => 'sphr_Inspection_tour',
      'rhs_table' => 'sphr_inspection_tour',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'sphr_clientction_tour_2_c',
      'join_key_lhs' => 'sphr_clien7521_client_ida',
      'join_key_rhs' => 'sphr_clien8e16on_tour_idb',
    ),
  ),
  'table' => 'sphr_clientction_tour_2_c',
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
      'name' => 'sphr_clien7521_client_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'sphr_clien8e16on_tour_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'sphr_clientpection_tour_2spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'sphr_clientpection_tour_2_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'sphr_clien7521_client_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'sphr_clientpection_tour_2_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'sphr_clien8e16on_tour_idb',
      ),
    ),
  ),
);
?>
