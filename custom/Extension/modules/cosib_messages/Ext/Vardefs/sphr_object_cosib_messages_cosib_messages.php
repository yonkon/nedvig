<?php
// created: 2012-06-15 11:10:36
$dictionary["cosib_messages"]["fields"]["sphr_objectcosib_messages"] = array (
  'name' => 'sphr_objectcosib_messages',
  'type' => 'link',
  'relationship' => 'sphr_object_cosib_messages',
  'source' => 'non-db',
  'vname' => 'LBL_SPHR_OBJECT_COSIB_MESSAGES_FROM_SPHR_OBJECT_TITLE',
);
$dictionary["cosib_messages"]["fields"]["sphr_object_messages_name"] = array (
  'name' => 'sphr_object_messages_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_SPHR_OBJECT_COSIB_MESSAGES_FROM_SPHR_OBJECT_TITLE',
  'save' => true,
  'id_name' => 'sphr_objecb445_object_ida',
  'link' => 'sphr_objectcosib_messages',
  'table' => 'sphr_object',
  'module' => 'sphr_Object',
  'rname' => 'name',
);
$dictionary["cosib_messages"]["fields"]["sphr_objecb445_object_ida"] = array (
  'name' => 'sphr_objecb445_object_ida',
  'type' => 'link',
  'relationship' => 'sphr_object_cosib_messages',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_SPHR_OBJECT_COSIB_MESSAGES_FROM_COSIB_MESSAGES_TITLE',
);
