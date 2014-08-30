<?php
// created: 2011-08-02 21:19:01
$dictionary["sphr_Object"]["fields"]["sphr_develoer_sphr_object"] = array (
  'name' => 'sphr_develoer_sphr_object',
  'type' => 'link',
  'relationship' => 'sphr_developer_sphr_object',
  'source' => 'non-db',
  'vname' => 'LBL_SPHR_DEVELOPER_SPHR_OBJECT_FROM_SPHR_DEVELOPER_TITLE',
);
$dictionary["sphr_Object"]["fields"]["sphr_develohr_object_name"] = array (
  'name' => 'sphr_develohr_object_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_SPHR_DEVELOPER_SPHR_OBJECT_FROM_SPHR_DEVELOPER_TITLE',
  'save' => true,
  'id_name' => 'sphr_devel6664veloper_ida',
  'link' => 'sphr_develoer_sphr_object',
  'table' => 'sphr_developer',
  'module' => 'sphr_Developer',
  'rname' => 'name',
);
$dictionary["sphr_Object"]["fields"]["sphr_devel6664veloper_ida"] = array (
  'name' => 'sphr_devel6664veloper_ida',
  'type' => 'link',
  'relationship' => 'sphr_developer_sphr_object',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_SPHR_DEVELOPER_SPHR_OBJECT_FROM_SPHR_OBJECT_TITLE',
);
