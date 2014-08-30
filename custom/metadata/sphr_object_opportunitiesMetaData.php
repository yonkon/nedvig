<?php
// created: 2011-08-14 20:21:50
$dictionary["sphr_object_opportunities"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'sphr_object_opportunities' => 
    array (
      'lhs_module' => 'sphr_Object',
      'lhs_table' => 'sphr_object',
      'lhs_key' => 'id',
      'rhs_module' => 'Opportunities',
      'rhs_table' => 'opportunities',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'sphr_objectpportunities_c',
      'join_key_lhs' => 'sphr_objec388d_object_ida',
      'join_key_rhs' => 'sphr_objecbc4aunities_idb',
    ),
  ),
  'table' => 'sphr_objectpportunities_c',
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
      'name' => 'sphr_objec388d_object_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'sphr_objecbc4aunities_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'sphr_object_opportunitiesspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'sphr_object_opportunities_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'sphr_objec388d_object_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'sphr_object_opportunities_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'sphr_objecbc4aunities_idb',
      ),
    ),
  ),
);
?>
