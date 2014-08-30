<?php
// created: 2011-07-15 16:55:53
$dictionary["sphr_Reserve"]["fields"]["sphr_object_sphr_reserve"] = array (
  'name' => 'sphr_object_sphr_reserve',
  'type' => 'link',
  'relationship' => 'sphr_object_sphr_reserve',
  'source' => 'non-db',
  'vname' => 'LBL_SPHR_OBJECT_SPHR_RESERVE_FROM_SPHR_OBJECT_TITLE',
);
$dictionary["sphr_Reserve"]["fields"]["sphr_objectr_reserve_name"] = array (
  'name' => 'sphr_objectr_reserve_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_SPHR_OBJECT_SPHR_RESERVE_FROM_SPHR_OBJECT_TITLE',
  'save' => true,
  'id_name' => 'sphr_objec6f3b_object_ida',
  'link' => 'sphr_object_sphr_reserve',
  'table' => 'sphr_object',
  'module' => 'sphr_Object',
  'rname' => 'name',
);
$dictionary["sphr_Reserve"]["fields"]["sphr_objec6f3b_object_ida"] = array (
  'name' => 'sphr_objec6f3b_object_ida',
  'type' => 'link',
  'relationship' => 'sphr_object_sphr_reserve',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_SPHR_OBJECT_SPHR_RESERVE_FROM_SPHR_RESERVE_TITLE',
);
