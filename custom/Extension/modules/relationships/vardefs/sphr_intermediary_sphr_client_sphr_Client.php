<?php
// created: 2011-07-15 17:02:16
$dictionary["sphr_Client"]["fields"]["sphr_intermry_sphr_client"] = array (
  'name' => 'sphr_intermry_sphr_client',
  'type' => 'link',
  'relationship' => 'sphr_intermediary_sphr_client',
  'source' => 'non-db',
  'vname' => 'LBL_SPHR_INTERMEDIARY_SPHR_CLIENT_FROM_SPHR_INTERMEDIARY_TITLE',
);
$dictionary["sphr_Client"]["fields"]["sphr_intermhr_client_name"] = array (
  'name' => 'sphr_intermhr_client_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_SPHR_INTERMEDIARY_SPHR_CLIENT_FROM_SPHR_INTERMEDIARY_TITLE',
  'save' => true,
  'id_name' => 'sphr_intera5e4mediary_ida',
  'link' => 'sphr_intermry_sphr_client',
  'table' => 'sphr_intermediary',
  'module' => 'sphr_Intermediary',
  'rname' => 'name',
);
$dictionary["sphr_Client"]["fields"]["sphr_intera5e4mediary_ida"] = array (
  'name' => 'sphr_intera5e4mediary_ida',
  'type' => 'link',
  'relationship' => 'sphr_intermediary_sphr_client',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_SPHR_INTERMEDIARY_SPHR_CLIENT_FROM_SPHR_CLIENT_TITLE',
);
