<?php
// created: 2011-10-31 16:53:17
$dictionary["sphr_client_sphr_phone_company"] = array (
  'true_relationship_type' => 'many-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'sphr_client_sphr_phone_company' => 
    array (
      'lhs_module' => 'sphr_Client',
      'lhs_table' => 'sphr_client',
      'lhs_key' => 'id',
      'rhs_module' => 'sphr_phone_company',
      'rhs_table' => 'sphr_phone_company',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'sphr_clienthone_company_c',
      'join_key_lhs' => 'sphr_cliena936_client_ida',
      'join_key_rhs' => 'sphr_clienf8d2company_idb',
    ),
  ),
  'table' => 'sphr_clienthone_company_c',
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
      'name' => 'sphr_cliena936_client_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'sphr_clienf8d2company_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'sphr_client_phone_companyspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'sphr_client_phone_company_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'sphr_cliena936_client_ida',
        1 => 'sphr_clienf8d2company_idb',
      ),
    ),
  ),
);
?>
