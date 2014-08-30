<?php
// created: 2012-06-22 13:11:07
$dictionary["sphr_Object"]["fields"]["sphr_client_sphr_object_1"] = array (
  'name' => 'sphr_client_sphr_object_1',
  'type' => 'link',
  'relationship' => 'sphr_client_sphr_object_1',
  'source' => 'non-db',
  'vname' => 'LBL_SPHR_CLIENT_SPHR_OBJECT_1_FROM_SPHR_CLIENT_TITLE',
);
$dictionary["sphr_Object"]["fields"]["sphr_client_object_1_name"] = array (
  'name' => 'sphr_client_object_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_SPHR_CLIENT_SPHR_OBJECT_1_FROM_SPHR_CLIENT_TITLE',
  'save' => true,
  'id_name' => 'sphr_clienc1ac_client_ida',
  'link' => 'sphr_client_sphr_object_1',
  'table' => 'sphr_client',
  'module' => 'sphr_Client',
  'rname' => 'name',
);
$dictionary["sphr_Object"]["fields"]["sphr_clienc1ac_client_ida"] = array (
  'name' => 'sphr_clienc1ac_client_ida',
  'type' => 'link',
  'relationship' => 'sphr_client_sphr_object_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_SPHR_CLIENT_SPHR_OBJECT_1_FROM_SPHR_OBJECT_TITLE',
);
