<?php
// created: 2011-07-20 00:16:08
$dictionary["sphr_object_documents"] = array (
  'true_relationship_type' => 'many-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'sphr_object_documents' => 
    array (
      'lhs_module' => 'sphr_Object',
      'lhs_table' => 'sphr_object',
      'lhs_key' => 'id',
      'rhs_module' => 'Documents',
      'rhs_table' => 'documents',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'sphr_object_documents_c',
      'join_key_lhs' => 'sphr_objec1b6c_object_ida',
      'join_key_rhs' => 'sphr_objec92efcuments_idb',
    ),
  ),
  'table' => 'sphr_object_documents_c',
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
      'name' => 'sphr_objec1b6c_object_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'sphr_objec92efcuments_idb',
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
      'name' => 'sphr_object_documentsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'sphr_object_documents_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'sphr_objec1b6c_object_ida',
        1 => 'sphr_objec92efcuments_idb',
      ),
    ),
  ),
);
?>
