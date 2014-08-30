<?php
// created: 2013-02-06 17:02:24
$dictionary["sphr_Client"]["fields"]["prospects_sphr_client"] = array (
  'name' => 'prospects_sphr_client',
  'type' => 'link',
  'relationship' => 'prospects_sphr_client',
  'source' => 'non-db',
  'vname' => 'LBL_PROSPECTS_SPHR_CLIENT_FROM_PROSPECTS_TITLE',
);
$dictionary["sphr_Client"]["fields"]["prospects_shr_client_name"] = array (
  'name' => 'prospects_shr_client_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_PROSPECTS_SPHR_CLIENT_FROM_PROSPECTS_TITLE',
  'save' => true,
  'id_name' => 'prospects_485fospects_ida',
  'link' => 'prospects_sphr_client',
  'table' => 'prospects',
  'module' => 'Prospects',
  'rname' => 'account_name',
);
$dictionary["sphr_Client"]["fields"]["prospects_485fospects_ida"] = array (
  'name' => 'prospects_485fospects_ida',
  'type' => 'link',
  'relationship' => 'prospects_sphr_client',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_PROSPECTS_SPHR_CLIENT_FROM_SPHR_CLIENT_TITLE',
);
