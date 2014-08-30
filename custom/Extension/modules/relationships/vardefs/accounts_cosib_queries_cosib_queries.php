<?php
// created: 2012-05-31 11:13:42
$dictionary["cosib_queries"]["fields"]["accounts_cosib_queries"] = array (
  'name' => 'accounts_cosib_queries',
  'type' => 'link',
  'relationship' => 'accounts_cosib_queries',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_COSIB_QUERIES_FROM_ACCOUNTS_TITLE',
);
$dictionary["cosib_queries"]["fields"]["accounts_cob_queries_name"] = array (
  'name' => 'accounts_cob_queries_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_COSIB_QUERIES_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'accounts_c3c3bccounts_ida',
  'link' => 'accounts_cosib_queries',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["cosib_queries"]["fields"]["accounts_c3c3bccounts_ida"] = array (
  'name' => 'accounts_c3c3bccounts_ida',
  'type' => 'link',
  'relationship' => 'accounts_cosib_queries',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ACCOUNTS_COSIB_QUERIES_FROM_COSIB_QUERIES_TITLE',
);
