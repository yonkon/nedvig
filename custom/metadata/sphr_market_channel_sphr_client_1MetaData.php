<?php
// created: 2011-12-18 00:22:36
$dictionary["sphr_market_channel_sphr_client_1"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'sphr_market_channel_sphr_client_1' => 
    array (
      'lhs_module' => 'sphr_market_channel',
      'lhs_table' => 'sphr_market_channel',
      'lhs_key' => 'id',
      'rhs_module' => 'sphr_Client',
      'rhs_table' => 'sphr_client',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'sphr_marketphr_client_1_c',
      'join_key_lhs' => 'sphr_marke5c2achannel_ida',
      'join_key_rhs' => 'sphr_marke29a6_client_idb',
    ),
  ),
  'table' => 'sphr_marketphr_client_1_c',
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
      'name' => 'sphr_marke5c2achannel_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'sphr_marke29a6_client_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'sphr_market_sphr_client_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'sphr_market_sphr_client_1_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'sphr_marke5c2achannel_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'sphr_market_sphr_client_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'sphr_marke29a6_client_idb',
      ),
    ),
  ),
);
?>
