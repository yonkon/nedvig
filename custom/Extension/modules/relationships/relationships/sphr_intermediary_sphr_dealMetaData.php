<?php
// created: 2011-07-15 17:02:55
$dictionary["sphr_intermediary_sphr_deal"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'sphr_intermediary_sphr_deal' => 
    array (
      'lhs_module' => 'sphr_Intermediary',
      'lhs_table' => 'sphr_intermediary',
      'lhs_key' => 'id',
      'rhs_module' => 'sphr_Deal',
      'rhs_table' => 'sphr_deal',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'sphr_intermry_sphr_deal_c',
      'join_key_lhs' => 'sphr_inter168dmediary_ida',
      'join_key_rhs' => 'sphr_interb79bhr_deal_idb',
    ),
  ),
  'table' => 'sphr_intermry_sphr_deal_c',
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
      'name' => 'sphr_inter168dmediary_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'sphr_interb79bhr_deal_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'sphr_intermiary_sphr_dealspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'sphr_intermiary_sphr_deal_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'sphr_inter168dmediary_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'sphr_intermiary_sphr_deal_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'sphr_interb79bhr_deal_idb',
      ),
    ),
  ),
);
?>
