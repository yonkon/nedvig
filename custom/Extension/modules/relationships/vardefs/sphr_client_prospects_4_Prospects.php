<?php
// created: 2013-02-06 18:30:59
$dictionary["Prospect"]["fields"]["sphr_client_prospects_4"] = array (
  'name' => 'sphr_client_prospects_4',
  'type' => 'link',
  'relationship' => 'sphr_client_prospects_4',
  'source' => 'non-db',
  'vname' => 'LBL_SPHR_CLIENT_PROSPECTS_4_FROM_SPHR_CLIENT_TITLE',
);
$dictionary["Prospect"]["fields"]["sphr_clientospects_4_name"] = array (
  'name' => 'sphr_clientospects_4_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_SPHR_CLIENT_PROSPECTS_4_FROM_SPHR_CLIENT_TITLE',
  'save' => true,
  'id_name' => 'sphr_clien8a2c_client_ida',
  'link' => 'sphr_client_prospects_4',
  'table' => 'sphr_client',
  'module' => 'sphr_Client',
  'rname' => 'name',
);
$dictionary["Prospect"]["fields"]["sphr_clien8a2c_client_ida"] = array (
  'name' => 'sphr_clien8a2c_client_ida',
  'type' => 'link',
  'relationship' => 'sphr_client_prospects_4',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_SPHR_CLIENT_PROSPECTS_4_FROM_PROSPECTS_TITLE',
);
