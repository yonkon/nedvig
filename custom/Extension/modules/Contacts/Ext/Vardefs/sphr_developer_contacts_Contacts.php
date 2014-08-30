<?php
// created: 2011-08-16 17:50:38
$dictionary["Contact"]["fields"]["sphr_developer_contacts"] = array (
  'name' => 'sphr_developer_contacts',
  'type' => 'link',
  'relationship' => 'sphr_developer_contacts',
  'source' => 'non-db',
  'vname' => 'LBL_SPHR_DEVELOPER_CONTACTS_FROM_SPHR_DEVELOPER_TITLE',
);
$dictionary["Contact"]["fields"]["sphr_develo_contacts_name"] = array (
  'name' => 'sphr_develo_contacts_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_SPHR_DEVELOPER_CONTACTS_FROM_SPHR_DEVELOPER_TITLE',
  'save' => true,
  'id_name' => 'sphr_devel5fa8veloper_ida',
  'link' => 'sphr_developer_contacts',
  'table' => 'sphr_developer',
  'module' => 'sphr_Developer',
  'rname' => 'name',
);
$dictionary["Contact"]["fields"]["sphr_devel5fa8veloper_ida"] = array (
  'name' => 'sphr_devel5fa8veloper_ida',
  'type' => 'link',
  'relationship' => 'sphr_developer_contacts',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_SPHR_DEVELOPER_CONTACTS_FROM_CONTACTS_TITLE',
);
