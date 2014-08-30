<?php
// created: 2011-07-15 16:54:53
$dictionary["sphr_Reserve"]["fields"]["sphr_client_sphr_reserve"] = array (
  'name' => 'sphr_client_sphr_reserve',
  'type' => 'link',
  'relationship' => 'sphr_client_sphr_reserve',
  'source' => 'non-db',
  'vname' => 'LBL_SPHR_CLIENT_SPHR_RESERVE_FROM_SPHR_CLIENT_TITLE',
);
$dictionary["sphr_Reserve"]["fields"]["sphr_clientr_reserve_name"] = array (
  'name' => 'sphr_clientr_reserve_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_SPHR_CLIENT_SPHR_RESERVE_FROM_SPHR_CLIENT_TITLE',
  'save' => true,
  'id_name' => 'sphr_clienc0d2_client_ida',
  'link' => 'sphr_client_sphr_reserve',
  'table' => 'sphr_client',
  'module' => 'sphr_Client',
  'rname' => 'name',
);
$dictionary["sphr_Reserve"]["fields"]["sphr_clienc0d2_client_ida"] = array (
  'name' => 'sphr_clienc0d2_client_ida',
  'type' => 'link',
  'relationship' => 'sphr_client_sphr_reserve',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_SPHR_CLIENT_SPHR_RESERVE_FROM_SPHR_RESERVE_TITLE',
);
