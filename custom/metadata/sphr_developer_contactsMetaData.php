<?php
// created: 2011-08-16 17:50:38
$dictionary["sphr_developer_contacts"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'sphr_developer_contacts' => 
    array (
      'lhs_module' => 'sphr_Developer',
      'lhs_table' => 'sphr_developer',
      'lhs_key' => 'id',
      'rhs_module' => 'Contacts',
      'rhs_table' => 'contacts',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'sphr_developer_contacts_c',
      'join_key_lhs' => 'sphr_devel5fa8veloper_ida',
      'join_key_rhs' => 'sphr_devel832fontacts_idb',
    ),
  ),
  'table' => 'sphr_developer_contacts_c',
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
      'name' => 'sphr_devel5fa8veloper_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'sphr_devel832fontacts_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'sphr_developer_contactsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'sphr_developer_contacts_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'sphr_devel5fa8veloper_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'sphr_developer_contacts_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'sphr_devel832fontacts_idb',
      ),
    ),
  ),
);
?>
