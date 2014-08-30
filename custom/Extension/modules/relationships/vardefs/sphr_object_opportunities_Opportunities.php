<?php
// created: 2011-08-14 20:21:50
$dictionary["Opportunity"]["fields"]["sphr_object_opportunities"] = array (
  'name' => 'sphr_object_opportunities',
  'type' => 'link',
  'relationship' => 'sphr_object_opportunities',
  'source' => 'non-db',
  'vname' => 'LBL_SPHR_OBJECT_OPPORTUNITIES_FROM_SPHR_OBJECT_TITLE',
);
$dictionary["Opportunity"]["fields"]["sphr_objectrtunities_name"] = array (
  'name' => 'sphr_objectrtunities_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_SPHR_OBJECT_OPPORTUNITIES_FROM_SPHR_OBJECT_TITLE',
  'save' => true,
  'id_name' => 'sphr_objec388d_object_ida',
  'link' => 'sphr_object_opportunities',
  'table' => 'sphr_object',
  'module' => 'sphr_Object',
  'rname' => 'name',
);
$dictionary["Opportunity"]["fields"]["sphr_objec388d_object_ida"] = array (
  'name' => 'sphr_objec388d_object_ida',
  'type' => 'link',
  'relationship' => 'sphr_object_opportunities',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_SPHR_OBJECT_OPPORTUNITIES_FROM_OPPORTUNITIES_TITLE',
);
