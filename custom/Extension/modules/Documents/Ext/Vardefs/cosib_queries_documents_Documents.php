<?php
// created: 2012-05-31 11:08:10
$dictionary["Document"]["fields"]["cosib_queries_documents"] = array (
  'name' => 'cosib_queries_documents',
  'type' => 'link',
  'relationship' => 'cosib_queries_documents',
  'source' => 'non-db',
  'vname' => 'LBL_COSIB_QUERIES_DOCUMENTS_FROM_COSIB_QUERIES_TITLE',
);
$dictionary["Document"]["fields"]["cosib_queridocuments_name"] = array (
  'name' => 'cosib_queridocuments_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_COSIB_QUERIES_DOCUMENTS_FROM_COSIB_QUERIES_TITLE',
  'save' => true,
  'id_name' => 'cosib_quer891cqueries_ida',
  'link' => 'cosib_queries_documents',
  'table' => 'cosib_queries',
  'module' => 'cosib_queries',
  'rname' => 'name',
);
$dictionary["Document"]["fields"]["cosib_quer891cqueries_ida"] = array (
  'name' => 'cosib_quer891cqueries_ida',
  'type' => 'link',
  'relationship' => 'cosib_queries_documents',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_COSIB_QUERIES_DOCUMENTS_FROM_DOCUMENTS_TITLE',
);
