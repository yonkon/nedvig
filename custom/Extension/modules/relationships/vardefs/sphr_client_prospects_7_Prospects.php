<?php
// created: 2013-02-06 18:46:16
$dictionary["Prospect"]["fields"]["sphr_client_prospects_7"] = array (
  'name' => 'sphr_client_prospects_7',
  'type' => 'link',
  'relationship' => 'sphr_client_prospects_7',
  'source' => 'non-db',
  'vname' => 'LBL_SPHR_CLIENT_PROSPECTS_7_FROM_SPHR_CLIENT_TITLE',
);
$dictionary["Prospect"]["fields"]["sphr_clientospects_7_name"] = array (
  'name' => 'sphr_clientospects_7_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_SPHR_CLIENT_PROSPECTS_7_FROM_SPHR_CLIENT_TITLE',
  'save' => true,
  'id_name' => 'sphr_cliend0a9_client_ida',
  'link' => 'sphr_client_prospects_7',
  'table' => 'sphr_client',
  'module' => 'sphr_Client',
  'rname' => 'name',
);
$dictionary["Prospect"]["fields"]["sphr_cliend0a9_client_ida"] = array (
  'name' => 'sphr_cliend0a9_client_ida',
  'type' => 'link',
  'relationship' => 'sphr_client_prospects_7',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_SPHR_CLIENT_PROSPECTS_7_FROM_PROSPECTS_TITLE',
);
