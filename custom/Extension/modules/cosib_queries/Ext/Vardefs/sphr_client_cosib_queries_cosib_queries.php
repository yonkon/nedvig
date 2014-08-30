<?php
// created: 2012-05-31 11:11:41
$dictionary["cosib_queries"]["fields"]["sphr_client_cosib_queries"] = array (
  'name' => 'sphr_client_cosib_queries',
  'type' => 'link',
  'relationship' => 'sphr_client_cosib_queries',
  'source' => 'non-db',
  'vname' => 'LBL_SPHR_CLIENT_COSIB_QUERIES_FROM_SPHR_CLIENT_TITLE',
);
$dictionary["cosib_queries"]["fields"]["sphr_clientb_queries_name"] = array (
  'name' => 'sphr_clientb_queries_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_SPHR_CLIENT_COSIB_QUERIES_FROM_SPHR_CLIENT_TITLE',
  'save' => true,
  'id_name' => 'sphr_clien735b_client_ida',
  'link' => 'sphr_client_cosib_queries',
  'table' => 'sphr_client',
  'module' => 'sphr_Client',
  'rname' => 'name',
);
$dictionary["cosib_queries"]["fields"]["sphr_clien735b_client_ida"] = array (
  'name' => 'sphr_clien735b_client_ida',
  'type' => 'link',
  'relationship' => 'sphr_client_cosib_queries',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_SPHR_CLIENT_COSIB_QUERIES_FROM_COSIB_QUERIES_TITLE',
);
