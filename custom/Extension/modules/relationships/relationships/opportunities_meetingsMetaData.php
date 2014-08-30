<?php
// created: 2011-08-14 19:49:56
$dictionary["opportunities_meetings"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'opportunities_meetings' => 
    array (
      'lhs_module' => 'Opportunities',
      'lhs_table' => 'opportunities',
      'lhs_key' => 'id',
      'rhs_module' => 'Meetings',
      'rhs_table' => 'meetings',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'opportunities_meetings_c',
      'join_key_lhs' => 'opportunit0579unities_ida',
      'join_key_rhs' => 'opportunit0fbdeetings_idb',
    ),
  ),
  'table' => 'opportunities_meetings_c',
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
      'name' => 'opportunit0579unities_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'opportunit0fbdeetings_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'opportunities_meetingsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'opportunities_meetings_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'opportunit0579unities_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'opportunities_meetings_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'opportunit0fbdeetings_idb',
      ),
    ),
  ),
);
?>
