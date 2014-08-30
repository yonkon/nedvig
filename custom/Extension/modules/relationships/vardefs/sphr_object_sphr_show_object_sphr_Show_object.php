<?php
// created: 2011-07-28 21:27:38
$dictionary["sphr_Show_object"]["fields"]["sphr_objecthr_show_object"] = array (
  'name' => 'sphr_objecthr_show_object',
  'type' => 'link',
  'relationship' => 'sphr_object_sphr_show_object',
  'source' => 'non-db',
  'vname' => 'LBL_SPHR_OBJECT_SPHR_SHOW_OBJECT_FROM_SPHR_OBJECT_TITLE',
);
$dictionary["sphr_Show_object"]["fields"]["sphr_objectow_object_name"] = array (
  'name' => 'sphr_objectow_object_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_SPHR_OBJECT_SPHR_SHOW_OBJECT_FROM_SPHR_OBJECT_TITLE',
  'save' => true,
  'id_name' => 'sphr_objecdf1f_object_ida',
  'link' => 'sphr_objecthr_show_object',
  'table' => 'sphr_object',
  'module' => 'sphr_Object',
  'rname' => 'name',
);
$dictionary["sphr_Show_object"]["fields"]["sphr_objecdf1f_object_ida"] = array (
  'name' => 'sphr_objecdf1f_object_ida',
  'type' => 'link',
  'relationship' => 'sphr_object_sphr_show_object',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_SPHR_OBJECT_SPHR_SHOW_OBJECT_FROM_SPHR_SHOW_OBJECT_TITLE',
);
