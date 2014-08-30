<?php
// created: 2012-04-18 09:35:47
$dictionary["sphr_client_documents"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'sphr_client_documents' => 
    array (
      'lhs_module' => 'sphr_Client',
      'lhs_table' => 'sphr_client',
      'lhs_key' => 'id',
      'rhs_module' => 'Documents',
      'rhs_table' => 'documents',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'sphr_client_documents_c',
      'join_key_lhs' => 'sphr_clien29a0_client_ida',
      'join_key_rhs' => 'sphr_clien34c3cuments_idb',
    ),
  ),
  'table' => 'sphr_client_documents_c',
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
      'name' => 'sphr_clien29a0_client_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'sphr_clien34c3cuments_idb',
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
      'name' => 'sphr_client_documentsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'sphr_client_documents_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'sphr_clien29a0_client_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'sphr_client_documents_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'sphr_clien34c3cuments_idb',
      ),
    ),
  ),
);
?>
