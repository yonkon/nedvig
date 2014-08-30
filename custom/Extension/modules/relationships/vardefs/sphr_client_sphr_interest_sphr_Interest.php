<?php
// created: 2011-07-15 11:43:49
$dictionary["sphr_Interest"]["fields"]["sphr_client_sphr_interest"] = array (
  'name' => 'sphr_client_sphr_interest',
  'type' => 'link',
  'relationship' => 'sphr_client_sphr_interest',
  'source' => 'non-db',
  'vname' => 'LBL_SPHR_CLIENT_SPHR_INTEREST_FROM_SPHR_CLIENT_TITLE',
);
$dictionary["sphr_Interest"]["fields"]["sphr_client_interest_name"] = array (
  'name' => 'sphr_client_interest_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_SPHR_CLIENT_SPHR_INTEREST_FROM_SPHR_CLIENT_TITLE',
  'save' => true,
  'id_name' => 'sphr_clienc30d_client_ida',
  'link' => 'sphr_client_sphr_interest',
  'table' => 'sphr_client',
  'module' => 'sphr_Client',
  'rname' => 'name',
);
$dictionary["sphr_Interest"]["fields"]["sphr_clienc30d_client_ida"] = array (
  'name' => 'sphr_clienc30d_client_ida',
  'type' => 'link',
  'relationship' => 'sphr_client_sphr_interest',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_SPHR_CLIENT_SPHR_INTEREST_FROM_SPHR_INTEREST_TITLE',
);
