<?php
// created: 2012-04-18 09:35:47
$dictionary["Document"]["fields"]["sphr_client_documents"] = array (
  'name' => 'sphr_client_documents',
  'type' => 'link',
  'relationship' => 'sphr_client_documents',
  'source' => 'non-db',
  'vname' => 'LBL_SPHR_CLIENT_DOCUMENTS_FROM_SPHR_CLIENT_TITLE',
);
$dictionary["Document"]["fields"]["sphr_clientdocuments_name"] = array (
  'name' => 'sphr_clientdocuments_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_SPHR_CLIENT_DOCUMENTS_FROM_SPHR_CLIENT_TITLE',
  'save' => true,
  'id_name' => 'sphr_clien29a0_client_ida',
  'link' => 'sphr_client_documents',
  'table' => 'sphr_client',
  'module' => 'sphr_Client',
  'rname' => 'name',
);
$dictionary["Document"]["fields"]["sphr_clien29a0_client_ida"] = array (
  'name' => 'sphr_clien29a0_client_ida',
  'type' => 'link',
  'relationship' => 'sphr_client_documents',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_SPHR_CLIENT_DOCUMENTS_FROM_DOCUMENTS_TITLE',
);
