<?php
// created: 2011-11-27 14:30:04
$dictionary["sphr_market_company_sphr_client"] = array (
  'true_relationship_type' => 'many-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'sphr_market_company_sphr_client' => 
    array (
      'lhs_module' => 'sphr_market_company',
      'lhs_table' => 'sphr_market_company',
      'lhs_key' => 'id',
      'rhs_module' => 'sphr_Client',
      'rhs_table' => 'sphr_client',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'sphr_market_sphr_client_c',
      'join_key_lhs' => 'sphr_marke85efcompany_ida',
      'join_key_rhs' => 'sphr_marke6013_client_idb',
    ),
  ),
  'table' => 'sphr_market_sphr_client_c',
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
      'name' => 'sphr_marke85efcompany_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'sphr_marke6013_client_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'sphr_marketny_sphr_clientspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'sphr_marketny_sphr_client_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'sphr_marke85efcompany_ida',
        1 => 'sphr_marke6013_client_idb',
      ),
    ),
  ),
);
?>
