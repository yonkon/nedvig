<?php
// created: 2012-05-31 11:08:10
$dictionary["cosib_queries_documents"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'cosib_queries_documents' => 
    array (
      'lhs_module' => 'cosib_queries',
      'lhs_table' => 'cosib_queries',
      'lhs_key' => 'id',
      'rhs_module' => 'Documents',
      'rhs_table' => 'documents',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'cosib_queries_documents_c',
      'join_key_lhs' => 'cosib_quer891cqueries_ida',
      'join_key_rhs' => 'cosib_quer51ebcuments_idb',
    ),
  ),
  'table' => 'cosib_queries_documents_c',
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
      'name' => 'cosib_quer891cqueries_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'cosib_quer51ebcuments_idb',
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
      'name' => 'cosib_queries_documentsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'cosib_queries_documents_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'cosib_quer891cqueries_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'cosib_queries_documents_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'cosib_quer51ebcuments_idb',
      ),
    ),
  ),
);
?>
