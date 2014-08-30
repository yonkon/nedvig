<?php
// created: 2011-08-02 21:20:35
$dictionary["sphr_Object"]["fields"]["sphr_owner_sphr_object"] = array (
  'name' => 'sphr_owner_sphr_object',
  'type' => 'link',
  'relationship' => 'sphr_owner_sphr_object',
  'source' => 'non-db',
  'vname' => 'LBL_SPHR_OWNER_SPHR_OBJECT_FROM_SPHR_OWNER_TITLE',
);
$dictionary["sphr_Object"]["fields"]["sphr_owner_hr_object_name"] = array (
  'name' => 'sphr_owner_hr_object_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_SPHR_OWNER_SPHR_OBJECT_FROM_SPHR_OWNER_TITLE',
  'save' => true,
  'id_name' => 'sphr_owner9f16r_owner_ida',
  'link' => 'sphr_owner_sphr_object',
  'table' => 'sphr_owner',
  'module' => 'sphr_Owner',
  'rname' => 'name',
);
$dictionary["sphr_Object"]["fields"]["sphr_owner9f16r_owner_ida"] = array (
  'name' => 'sphr_owner9f16r_owner_ida',
  'type' => 'link',
  'relationship' => 'sphr_owner_sphr_object',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_SPHR_OWNER_SPHR_OBJECT_FROM_SPHR_OBJECT_TITLE',
);
