<?php
// created: 2013-02-06 18:42:04
$dictionary["Prospect"]["fields"]["sphr_client_prospects_5"] = array (
  'name' => 'sphr_client_prospects_5',
  'type' => 'link',
  'relationship' => 'sphr_client_prospects_5',
  'source' => 'non-db',
  'vname' => 'LBL_SPHR_CLIENT_PROSPECTS_5_FROM_SPHR_CLIENT_TITLE',
);
$dictionary["Prospect"]["fields"]["sphr_clientospects_5_name"] = array (
  'name' => 'sphr_clientospects_5_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_SPHR_CLIENT_PROSPECTS_5_FROM_SPHR_CLIENT_TITLE',
  'save' => true,
  'id_name' => 'sphr_clien0c2b_client_ida',
  'link' => 'sphr_client_prospects_5',
  'table' => 'sphr_client',
  'module' => 'sphr_Client',
  'rname' => 'name',
);
$dictionary["Prospect"]["fields"]["sphr_clien0c2b_client_ida"] = array (
  'name' => 'sphr_clien0c2b_client_ida',
  'type' => 'link',
  'relationship' => 'sphr_client_prospects_5',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_SPHR_CLIENT_PROSPECTS_5_FROM_PROSPECTS_TITLE',
);
