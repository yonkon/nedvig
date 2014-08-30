<?php
// created: 2013-02-06 17:04:10
$dictionary["sphr_Client"]["fields"]["prospects_sphr_client_1"] = array (
  'name' => 'prospects_sphr_client_1',
  'type' => 'link',
  'relationship' => 'prospects_sphr_client_1',
  'source' => 'non-db',
  'vname' => 'LBL_PROSPECTS_SPHR_CLIENT_1_FROM_PROSPECTS_TITLE',
);
$dictionary["sphr_Client"]["fields"]["prospects_s_client_1_name"] = array (
  'name' => 'prospects_s_client_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_PROSPECTS_SPHR_CLIENT_1_FROM_PROSPECTS_TITLE',
  'save' => true,
  'id_name' => 'prospects_5bbdospects_ida',
  'link' => 'prospects_sphr_client_1',
  'table' => 'prospects',
  'module' => 'Prospects',
  'rname' => 'account_name',
);
$dictionary["sphr_Client"]["fields"]["prospects_5bbdospects_ida"] = array (
  'name' => 'prospects_5bbdospects_ida',
  'type' => 'link',
  'relationship' => 'prospects_sphr_client_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_PROSPECTS_SPHR_CLIENT_1_FROM_SPHR_CLIENT_TITLE',
);
