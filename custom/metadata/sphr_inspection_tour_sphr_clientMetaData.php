<?php
// created: 2012-08-07 16:26:44
$dictionary["sphr_inspection_tour_sphr_client"] = array (
  'true_relationship_type' => 'many-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'sphr_inspection_tour_sphr_client' => 
    array (
      'lhs_module' => 'sphr_Inspection_tour',
      'lhs_table' => 'sphr_inspection_tour',
      'lhs_key' => 'id',
      'rhs_module' => 'sphr_Client',
      'rhs_table' => 'sphr_client',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'sphr_inspec_sphr_client_c',
      'join_key_lhs' => 'sphr_inspe351fon_tour_ida',
      'join_key_rhs' => 'sphr_inspe7f78_client_idb',
    ),
  ),
  'table' => 'sphr_inspec_sphr_client_c',
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
      'name' => 'sphr_inspe351fon_tour_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'sphr_inspe7f78_client_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'sphr_inspecur_sphr_clientspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'sphr_inspecur_sphr_client_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'sphr_inspe351fon_tour_ida',
        1 => 'sphr_inspe7f78_client_idb',
      ),
    ),
  ),
);
?>
