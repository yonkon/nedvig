<?php
// created: 2013-02-06 18:01:42
$dictionary["Prospect"]["fields"]["sphr_client_prospects"] = array (
  'name' => 'sphr_client_prospects',
  'type' => 'link',
  'relationship' => 'sphr_client_prospects',
  'source' => 'non-db',
  'vname' => 'LBL_SPHR_CLIENT_PROSPECTS_FROM_SPHR_CLIENT_TITLE',
);
$dictionary["Prospect"]["fields"]["sphr_clientprospects_name"] = array (
  'name' => 'sphr_clientprospects_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_SPHR_CLIENT_PROSPECTS_FROM_SPHR_CLIENT_TITLE',
  'save' => true,
  'id_name' => 'sphr_clien0411_client_ida',
  'link' => 'sphr_client_prospects',
  'table' => 'sphr_client',
  'module' => 'sphr_Client',
  'rname' => 'name',
);
$dictionary["Prospect"]["fields"]["sphr_clien0411_client_ida"] = array (
  'name' => 'sphr_clien0411_client_ida',
  'type' => 'link',
  'relationship' => 'sphr_client_prospects',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_SPHR_CLIENT_PROSPECTS_FROM_PROSPECTS_TITLE',
);
