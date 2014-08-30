<?php
// created: 2012-06-14 17:03:32
$dictionary["sphr_Object"]["fields"]["accounts_sphr_object"] = array (
  'name' => 'accounts_sphr_object',
  'type' => 'link',
  'relationship' => 'accounts_sphr_object',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_SPHR_OBJECT_FROM_ACCOUNTS_TITLE',
);
$dictionary["sphr_Object"]["fields"]["accounts_sphr_object_name"] = array (
  'name' => 'accounts_sphr_object_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_SPHR_OBJECT_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'accounts_sfb36ccounts_ida',
  'link' => 'accounts_sphr_object',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["sphr_Object"]["fields"]["accounts_sfb36ccounts_ida"] = array (
  'name' => 'accounts_sfb36ccounts_ida',
  'type' => 'link',
  'relationship' => 'accounts_sphr_object',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ACCOUNTS_SPHR_OBJECT_FROM_SPHR_OBJECT_TITLE',
);
