<?php
// created: 2013-02-06 17:05:25
$dictionary["sphr_Client"]["fields"]["prospects_sphr_client_2"] = array (
  'name' => 'prospects_sphr_client_2',
  'type' => 'link',
  'relationship' => 'prospects_sphr_client_2',
  'source' => 'non-db',
  'vname' => 'LBL_PROSPECTS_SPHR_CLIENT_2_FROM_PROSPECTS_TITLE',
);
$dictionary["sphr_Client"]["fields"]["prospects_s_client_2_name"] = array (
  'name' => 'prospects_s_client_2_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_PROSPECTS_SPHR_CLIENT_2_FROM_PROSPECTS_TITLE',
  'save' => true,
  'id_name' => 'prospects_d78dospects_ida',
  'link' => 'prospects_sphr_client_2',
  'table' => 'prospects',
  'module' => 'Prospects',
  'rname' => 'account_name',
);
$dictionary["sphr_Client"]["fields"]["prospects_d78dospects_ida"] = array (
  'name' => 'prospects_d78dospects_ida',
  'type' => 'link',
  'relationship' => 'prospects_sphr_client_2',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_PROSPECTS_SPHR_CLIENT_2_FROM_SPHR_CLIENT_TITLE',
);
