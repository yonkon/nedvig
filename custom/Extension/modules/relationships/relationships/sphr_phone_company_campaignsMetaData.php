<?php
// created: 2011-11-27 14:05:26
$dictionary["sphr_phone_company_campaigns"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'sphr_phone_company_campaigns' => 
    array (
      'lhs_module' => 'sphr_phone_company',
      'lhs_table' => 'sphr_phone_company',
      'lhs_key' => 'id',
      'rhs_module' => 'Campaigns',
      'rhs_table' => 'campaigns',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'sphr_phone_ny_campaigns_c',
      'join_key_lhs' => 'sphr_phone0cd8company_ida',
      'join_key_rhs' => 'sphr_phoneaa3ampaigns_idb',
    ),
  ),
  'table' => 'sphr_phone_ny_campaigns_c',
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
      'name' => 'sphr_phone0cd8company_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'sphr_phoneaa3ampaigns_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'sphr_phone_pany_campaignsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'sphr_phone_pany_campaigns_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'sphr_phone0cd8company_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'sphr_phone_pany_campaigns_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'sphr_phoneaa3ampaigns_idb',
      ),
    ),
  ),
);
?>
