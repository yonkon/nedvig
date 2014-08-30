<?php
// created: 2013-02-06 17:05:54
$dictionary["sphr_Client"]["fields"]["prospects_sphr_client_3"] = array (
  'name' => 'prospects_sphr_client_3',
  'type' => 'link',
  'relationship' => 'prospects_sphr_client_3',
  'source' => 'non-db',
  'vname' => 'LBL_PROSPECTS_SPHR_CLIENT_3_FROM_PROSPECTS_TITLE',
);
$dictionary["sphr_Client"]["fields"]["prospects_s_client_3_name"] = array (
  'name' => 'prospects_s_client_3_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_PROSPECTS_SPHR_CLIENT_3_FROM_PROSPECTS_TITLE',
  'save' => true,
  'id_name' => 'prospects_3000ospects_ida',
  'link' => 'prospects_sphr_client_3',
  'table' => 'prospects',
  'module' => 'Prospects',
  'rname' => 'account_name',
);
$dictionary["sphr_Client"]["fields"]["prospects_3000ospects_ida"] = array (
  'name' => 'prospects_3000ospects_ida',
  'type' => 'link',
  'relationship' => 'prospects_sphr_client_3',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_PROSPECTS_SPHR_CLIENT_3_FROM_SPHR_CLIENT_TITLE',
);
