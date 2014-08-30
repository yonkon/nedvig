<?php
// created: 2012-07-05 09:07:38
$dictionary["cosib_postsale_sphr_client"] = array (
  'true_relationship_type' => 'one-to-one',
  'relationships' => 
  array (
    'cosib_postsale_sphr_client' => 
    array (
      'lhs_module' => 'Cosib_postsale',
      'lhs_table' => 'cosib_postsale',
      'lhs_key' => 'id',
      'rhs_module' => 'sphr_Client',
      'rhs_table' => 'sphr_client',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'cosib_posts_sphr_client_c',
      'join_key_lhs' => 'cosib_post666dostsale_ida',
      'join_key_rhs' => 'cosib_post53f6_client_idb',
    ),
  ),
  'table' => 'cosib_posts_sphr_client_c',
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
      'name' => 'cosib_post666dostsale_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'cosib_post53f6_client_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'cosib_postsle_sphr_clientspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'cosib_postsle_sphr_client_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'cosib_post666dostsale_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'cosib_postsle_sphr_client_idb2',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'cosib_post53f6_client_idb',
      ),
    ),
  ),
);
?>
