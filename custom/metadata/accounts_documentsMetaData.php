<?php
// created: 2012-06-14 17:07:29
$dictionary["accounts_documents"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'accounts_documents' => 
    array (
      'lhs_module' => 'Accounts',
      'lhs_table' => 'accounts',
      'lhs_key' => 'id',
      'rhs_module' => 'Documents',
      'rhs_table' => 'documents',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'accounts_documents_c',
      'join_key_lhs' => 'accounts_d13e2ccounts_ida',
      'join_key_rhs' => 'accounts_d009acuments_idb',
    ),
  ),
  'table' => 'accounts_documents_c',
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
      'name' => 'accounts_d13e2ccounts_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'accounts_d009acuments_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
    5 => 
    array (
      'name' => 'document_revision_id',
      'type' => 'varchar',
      'len' => '36',
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'accounts_documentsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'accounts_documents_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'accounts_d13e2ccounts_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'accounts_documents_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'accounts_d009acuments_idb',
      ),
    ),
  ),
);
?>
