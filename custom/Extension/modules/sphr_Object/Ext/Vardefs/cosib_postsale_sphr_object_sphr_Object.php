<?php
// created: 2012-07-05 09:07:38
$dictionary["sphr_Object"]["fields"]["cosib_postsle_sphr_object"] = array (
  'name' => 'cosib_postsle_sphr_object',
  'type' => 'link',
  'relationship' => 'cosib_postsale_sphr_object',
  'source' => 'non-db',
  'vname' => 'LBL_COSIB_POSTSALE_SPHR_OBJECT_FROM_COSIB_POSTSALE_TITLE',
);
$dictionary["sphr_Object"]["fields"]["cosib_postshr_object_name"] = array (
  'name' => 'cosib_postshr_object_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_COSIB_POSTSALE_SPHR_OBJECT_FROM_COSIB_POSTSALE_TITLE',
  'save' => true,
  'id_name' => 'cosib_post535aostsale_ida',
  'link' => 'cosib_postsle_sphr_object',
  'table' => 'cosib_postsale',
  'module' => 'Cosib_postsale',
  'rname' => 'name',
);
$dictionary["sphr_Object"]["fields"]["cosib_post535aostsale_ida"] = array (
  'name' => 'cosib_post535aostsale_ida',
  'type' => 'link',
  'relationship' => 'cosib_postsale_sphr_object',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_COSIB_POSTSALE_SPHR_OBJECT_FROM_COSIB_POSTSALE_TITLE',
);
