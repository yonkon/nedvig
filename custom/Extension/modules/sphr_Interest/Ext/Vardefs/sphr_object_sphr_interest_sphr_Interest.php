<?php
// created: 2011-08-15 17:33:05
$dictionary["sphr_Interest"]["fields"]["sphr_object_sphr_interest"] = array (
  'name' => 'sphr_object_sphr_interest',
  'type' => 'link',
  'relationship' => 'sphr_object_sphr_interest',
  'source' => 'non-db',
  'vname' => 'LBL_SPHR_OBJECT_SPHR_INTEREST_FROM_SPHR_OBJECT_TITLE',
);
$dictionary["sphr_Interest"]["fields"]["sphr_object_interest_name"] = array (
  'name' => 'sphr_object_interest_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_SPHR_OBJECT_SPHR_INTEREST_FROM_SPHR_OBJECT_TITLE',
  'save' => true,
  'id_name' => 'sphr_objec2883_object_ida',
  'link' => 'sphr_object_sphr_interest',
  'table' => 'sphr_object',
  'module' => 'sphr_Object',
  'rname' => 'name',
);
$dictionary["sphr_Interest"]["fields"]["sphr_objec2883_object_ida"] = array (
  'name' => 'sphr_objec2883_object_ida',
  'type' => 'link',
  'relationship' => 'sphr_object_sphr_interest',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_SPHR_OBJECT_SPHR_INTEREST_FROM_SPHR_INTEREST_TITLE',
);
