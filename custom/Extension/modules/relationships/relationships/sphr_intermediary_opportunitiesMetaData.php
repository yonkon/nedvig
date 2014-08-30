<?php
// created: 2011-08-14 20:16:47
$dictionary["sphr_intermediary_opportunities"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'sphr_intermediary_opportunities' => 
    array (
      'lhs_module' => 'sphr_Intermediary',
      'lhs_table' => 'sphr_intermediary',
      'lhs_key' => 'id',
      'rhs_module' => 'Opportunities',
      'rhs_table' => 'opportunities',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'sphr_intermpportunities_c',
      'join_key_lhs' => 'sphr_interf513mediary_ida',
      'join_key_rhs' => 'sphr_inter5307unities_idb',
    ),
  ),
  'table' => 'sphr_intermpportunities_c',
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
      'name' => 'sphr_interf513mediary_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'sphr_inter5307unities_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'sphr_interm_opportunitiesspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'sphr_interm_opportunities_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'sphr_interf513mediary_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'sphr_interm_opportunities_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'sphr_inter5307unities_idb',
      ),
    ),
  ),
);
?>
