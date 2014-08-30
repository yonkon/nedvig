<?php
// created: 2011-07-15 17:02:16
$dictionary["sphr_intermediary_sphr_client"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'sphr_intermediary_sphr_client' => 
    array (
      'lhs_module' => 'sphr_Intermediary',
      'lhs_table' => 'sphr_intermediary',
      'lhs_key' => 'id',
      'rhs_module' => 'sphr_Client',
      'rhs_table' => 'sphr_client',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'sphr_interm_sphr_client_c',
      'join_key_lhs' => 'sphr_intera5e4mediary_ida',
      'join_key_rhs' => 'sphr_inter8ec2_client_idb',
    ),
  ),
  'table' => 'sphr_interm_sphr_client_c',
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
      'name' => 'sphr_intera5e4mediary_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'sphr_inter8ec2_client_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'sphr_intermry_sphr_clientspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'sphr_intermry_sphr_client_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'sphr_intera5e4mediary_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'sphr_intermry_sphr_client_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'sphr_inter8ec2_client_idb',
      ),
    ),
  ),
);
?>
