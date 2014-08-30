<?php
// created: 2011-07-15 18:26:17
$dictionary["Note"]["fields"]["sphr_object_notes"] = array (
  'name' => 'sphr_object_notes',
  'type' => 'link',
  'relationship' => 'sphr_object_notes',
  'source' => 'non-db',
  'vname' => 'LBL_SPHR_OBJECT_NOTES_FROM_SPHR_OBJECT_TITLE',
);
$dictionary["Note"]["fields"]["sphr_object_notes_name"] = array (
  'name' => 'sphr_object_notes_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_SPHR_OBJECT_NOTES_FROM_SPHR_OBJECT_TITLE',
  'save' => true,
  'id_name' => 'sphr_objec205c_object_ida',
  'link' => 'sphr_object_notes',
  'table' => 'sphr_object',
  'module' => 'sphr_Object',
  'rname' => 'name',
);
$dictionary["Note"]["fields"]["sphr_objec205c_object_ida"] = array (
  'name' => 'sphr_objec205c_object_ida',
  'type' => 'link',
  'relationship' => 'sphr_object_notes',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_SPHR_OBJECT_NOTES_FROM_NOTES_TITLE',
);
