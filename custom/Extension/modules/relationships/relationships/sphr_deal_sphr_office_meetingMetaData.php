<?php
// created: 2011-07-23 21:56:31
$dictionary["sphr_deal_sphr_office_meeting"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'sphr_deal_sphr_office_meeting' => 
    array (
      'lhs_module' => 'sphr_Deal',
      'lhs_table' => 'sphr_deal',
      'lhs_key' => 'id',
      'rhs_module' => 'sphr_Office_meeting',
      'rhs_table' => 'sphr_office_meeting',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'sphr_deal_sfice_meeting_c',
      'join_key_lhs' => 'sphr_deal_3e0ahr_deal_ida',
      'join_key_rhs' => 'sphr_deal_41d9meeting_idb',
    ),
  ),
  'table' => 'sphr_deal_sfice_meeting_c',
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
      'name' => 'sphr_deal_3e0ahr_deal_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'sphr_deal_41d9meeting_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'sphr_deal_soffice_meetingspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'sphr_deal_soffice_meeting_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'sphr_deal_3e0ahr_deal_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'sphr_deal_soffice_meeting_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'sphr_deal_41d9meeting_idb',
      ),
    ),
  ),
);
?>
