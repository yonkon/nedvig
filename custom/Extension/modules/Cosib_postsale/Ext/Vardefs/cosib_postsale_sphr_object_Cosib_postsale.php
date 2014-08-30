<?php
// created: 2012-07-05 09:07:38
$dictionary["Cosib_postsale"]["fields"]["cosib_postsle_sphr_object"] = array (
  'name' => 'cosib_postsle_sphr_object',
  'type' => 'link',
  'relationship' => 'cosib_postsale_sphr_object',
  'source' => 'non-db',
  'vname' => 'LBL_COSIB_POSTSALE_SPHR_OBJECT_FROM_SPHR_OBJECT_TITLE',
);
$dictionary["Cosib_postsale"]["fields"]["cosib_postshr_object_name"] = array (
  'name' => 'cosib_postshr_object_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_COSIB_POSTSALE_SPHR_OBJECT_FROM_SPHR_OBJECT_TITLE',
  'save' => true,
  'id_name' => 'cosib_postf3af_object_idb',
  'link' => 'cosib_postsle_sphr_object',
  'table' => 'sphr_object',
  'module' => 'sphr_Object',
  'rname' => 'name',
);
$dictionary["Cosib_postsale"]["fields"]["cosib_postf3af_object_idb"] = array (
  'name' => 'cosib_postf3af_object_idb',
  'type' => 'link',
  'relationship' => 'cosib_postsale_sphr_object',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_COSIB_POSTSALE_SPHR_OBJECT_FROM_SPHR_OBJECT_TITLE',
);
