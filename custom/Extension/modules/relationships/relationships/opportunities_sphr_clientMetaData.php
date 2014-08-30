<?php
// created: 2012-08-07 16:31:13
$dictionary["opportunities_sphr_client"] = array (
  'true_relationship_type' => 'many-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'opportunities_sphr_client' => 
    array (
      'lhs_module' => 'Opportunities',
      'lhs_table' => 'opportunities',
      'lhs_key' => 'id',
      'rhs_module' => 'sphr_Client',
      'rhs_table' => 'sphr_client',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'opportuniti_sphr_client_c',
      'join_key_lhs' => 'opportunitf5c8unities_ida',
      'join_key_rhs' => 'opportunitf4a8_client_idb',
    ),
  ),
  'table' => 'opportuniti_sphr_client_c',
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
      'name' => 'opportunitf5c8unities_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'opportunitf4a8_client_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'opportunities_sphr_clientspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'opportunities_sphr_client_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'opportunitf5c8unities_ida',
        1 => 'opportunitf4a8_client_idb',
      ),
    ),
  ),
);
?>
