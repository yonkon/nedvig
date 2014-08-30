<?php
// created: 2011-11-30 15:03:54
$dictionary["sphr_market_company_sphr_market_channel"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'sphr_market_company_sphr_market_channel' => 
    array (
      'lhs_module' => 'sphr_market_company',
      'lhs_table' => 'sphr_market_company',
      'lhs_key' => 'id',
      'rhs_module' => 'sphr_market_channel',
      'rhs_table' => 'sphr_market_channel',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'sphr_marketrket_channel_c',
      'join_key_lhs' => 'sphr_markef954company_ida',
      'join_key_rhs' => 'sphr_marke4757channel_idb',
    ),
  ),
  'table' => 'sphr_marketrket_channel_c',
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
      'name' => 'sphr_markef954company_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'sphr_marke4757channel_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'sphr_marketmarket_channelspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'sphr_marketmarket_channel_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'sphr_markef954company_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'sphr_marketmarket_channel_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'sphr_marke4757channel_idb',
      ),
    ),
  ),
);
?>
