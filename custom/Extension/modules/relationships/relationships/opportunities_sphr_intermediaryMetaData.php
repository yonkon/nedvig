<?php
// created: 2011-08-14 19:41:36
$dictionary["opportunities_sphr_intermediary"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'opportunities_sphr_intermediary' => 
    array (
      'lhs_module' => 'Opportunities',
      'lhs_table' => 'opportunities',
      'lhs_key' => 'id',
      'rhs_module' => 'sphr_Intermediary',
      'rhs_table' => 'sphr_intermediary',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'opportunitiintermediary_c',
      'join_key_lhs' => 'opportunitd088unities_ida',
      'join_key_rhs' => 'opportunitdd27mediary_idb',
    ),
  ),
  'table' => 'opportunitiintermediary_c',
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
      'name' => 'opportunitd088unities_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'opportunitdd27mediary_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'opportunitir_intermediaryspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'opportunitir_intermediary_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'opportunitd088unities_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'opportunitir_intermediary_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'opportunitdd27mediary_idb',
      ),
    ),
  ),
);
?>
