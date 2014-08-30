<?php
// created: 2012-06-15 11:10:36
$dictionary["sphr_object_cosib_messages"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'sphr_object_cosib_messages' => 
    array (
      'lhs_module' => 'sphr_Object',
      'lhs_table' => 'sphr_object',
      'lhs_key' => 'id',
      'rhs_module' => 'cosib_messages',
      'rhs_table' => 'cosib_messages',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'sphr_objectsib_messages_c',
      'join_key_lhs' => 'sphr_objecb445_object_ida',
      'join_key_rhs' => 'sphr_objecbcd8essages_idb',
    ),
  ),
  'table' => 'sphr_objectsib_messages_c',
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
      'name' => 'sphr_objecb445_object_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'sphr_objecbcd8essages_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'sphr_objectcosib_messagesspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'sphr_objectcosib_messages_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'sphr_objecb445_object_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'sphr_objectcosib_messages_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'sphr_objecbcd8essages_idb',
      ),
    ),
  ),
);
?>
