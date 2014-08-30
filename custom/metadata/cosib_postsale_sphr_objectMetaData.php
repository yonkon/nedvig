<?php
// created: 2012-07-05 09:07:38
$dictionary["cosib_postsale_sphr_object"] = array (
  'true_relationship_type' => 'one-to-one',
  'relationships' => 
  array (
    'cosib_postsale_sphr_object' => 
    array (
      'lhs_module' => 'Cosib_postsale',
      'lhs_table' => 'cosib_postsale',
      'lhs_key' => 'id',
      'rhs_module' => 'sphr_Object',
      'rhs_table' => 'sphr_object',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'cosib_posts_sphr_object_c',
      'join_key_lhs' => 'cosib_post535aostsale_ida',
      'join_key_rhs' => 'cosib_postf3af_object_idb',
    ),
  ),
  'table' => 'cosib_posts_sphr_object_c',
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
      'name' => 'cosib_post535aostsale_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'cosib_postf3af_object_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'cosib_postsle_sphr_objectspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'cosib_postsle_sphr_object_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'cosib_post535aostsale_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'cosib_postsle_sphr_object_idb2',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'cosib_postf3af_object_idb',
      ),
    ),
  ),
);
?>
