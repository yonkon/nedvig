<?php
// created: 2012-06-29 10:15:46
$dictionary["Cosib_client_trips"]["fields"]["cosib_clienps_sphr_client"] = array (
  'name' => 'cosib_clienps_sphr_client',
  'type' => 'link',
  'relationship' => 'cosib_client_trips_sphr_client',
  'source' => 'non-db',
  'vname' => 'LBL_COSIB_CLIENT_TRIPS_SPHR_CLIENT_FROM_SPHR_CLIENT_TITLE',
);
$dictionary["Cosib_client_trips"]["fields"]["cosib_clienhr_client_name"] = array (
  'name' => 'cosib_clienhr_client_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_COSIB_CLIENT_TRIPS_SPHR_CLIENT_FROM_SPHR_CLIENT_TITLE',
  'save' => true,
  'id_name' => 'cosib_cliee6e0_client_ida',
  'link' => 'cosib_clienps_sphr_client',
  'table' => 'sphr_client',
  'module' => 'sphr_Client',
  'rname' => 'name',
);
$dictionary["Cosib_client_trips"]["fields"]["cosib_cliee6e0_client_ida"] = array (
  'name' => 'cosib_cliee6e0_client_ida',
  'type' => 'link',
  'relationship' => 'cosib_client_trips_sphr_client',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_COSIB_CLIENT_TRIPS_SPHR_CLIENT_FROM_COSIB_CLIENT_TRIPS_TITLE',
);
