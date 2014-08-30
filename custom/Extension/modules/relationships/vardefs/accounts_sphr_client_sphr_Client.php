<?php
// created: 2012-06-14 17:02:44
$dictionary["sphr_Client"]["fields"]["accounts_sphr_client"] = array (
  'name' => 'accounts_sphr_client',
  'type' => 'link',
  'relationship' => 'accounts_sphr_client',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_SPHR_CLIENT_FROM_ACCOUNTS_TITLE',
);
$dictionary["sphr_Client"]["fields"]["accounts_sphr_client_name"] = array (
  'name' => 'accounts_sphr_client_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_SPHR_CLIENT_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'accounts_s160fccounts_ida',
  'link' => 'accounts_sphr_client',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["sphr_Client"]["fields"]["accounts_s160fccounts_ida"] = array (
  'name' => 'accounts_s160fccounts_ida',
  'type' => 'link',
  'relationship' => 'accounts_sphr_client',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ACCOUNTS_SPHR_CLIENT_FROM_SPHR_CLIENT_TITLE',
);
