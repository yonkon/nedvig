<?php
// created: 2011-07-15 18:26:51
$dictionary["sphr_deal_project"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'sphr_deal_project' => 
    array (
      'lhs_module' => 'sphr_Deal',
      'lhs_table' => 'sphr_deal',
      'lhs_key' => 'id',
      'rhs_module' => 'Project',
      'rhs_table' => 'project',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'sphr_deal_project_c',
      'join_key_lhs' => 'sphr_deal_67fehr_deal_ida',
      'join_key_rhs' => 'sphr_deal_2035project_idb',
    ),
  ),
  'table' => 'sphr_deal_project_c',
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
      'name' => 'sphr_deal_67fehr_deal_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'sphr_deal_2035project_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'sphr_deal_projectspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'sphr_deal_project_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'sphr_deal_67fehr_deal_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'sphr_deal_project_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'sphr_deal_2035project_idb',
      ),
    ),
  ),
);
?>
