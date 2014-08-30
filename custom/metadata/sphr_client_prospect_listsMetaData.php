<?php
// created: 2013-03-03 21:04:26
$dictionary["sphr_client_prospect_lists"] = array (
  'true_relationship_type' => 'many-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'sphr_client_prospect_lists' => 
    array (
      'lhs_module' => 'sphr_Client',
      'lhs_table' => 'sphr_client',
      'lhs_key' => 'id',
      'rhs_module' => 'ProspectLists',
      'rhs_table' => 'prospect_lists',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'prospect_lists_prospects',
      'join_key_lhs' => 'related_id',
      'join_key_rhs' => 'prospect_list_id',
      'relationship_role_column' => 'related_type',
      'relationship_role_column_value' => 'sphr_Client',
    ),
  ),
  'table' => 'prospect_lists_prospects',
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
      'name' => 'prospect_list_id',
      'type' => 'varchar',
      'len' => 36,
    ),
    2 => 
    array (
      'name' => 'related_id',
      'type' => 'varchar',
      'len' => 36,
    ),
    3 => 
    array(
        'name' => 'related_type',
        'type' => 'varchar',
        'len' => 25,
    ),
    4 => 
    array (
      'name' => 'date_modified',
      'type' => 'datetime',
    ),
    5 =>
     array (
      'name' => 'deleted',
      'type' => 'bool',
      'len' => '1',
      'default' => '0',
      'required' => true,
    ), 
  ),
//  'indices' => 
//  array (
//    0 => 
//    array (
//      'name' => 'sphr_client_prospectsspk',
//      'type' => 'primary',
//      'fields' => 
//      array (
//        0 => 'id',
//      ),
//    ),
//    1 => 
//    array (
//      'name' => 'sphr_client_prospects_alt',
//      'type' => 'alternate_key',
//      'fields' => 
//      array (
//        0 => 'sphr_clien0411_client_ida',
//        1 => 'sphr_clien0a5eospects_idb',
//      ),
//    ),
//  ),
);
?>


    
    
    