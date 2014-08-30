<?php
// created: 2012-07-05 09:07:38
$dictionary["sphr_Client"]["fields"]["cosib_postsle_sphr_client"] = array (
  'name' => 'cosib_postsle_sphr_client',
  'type' => 'link',
  'relationship' => 'cosib_postsale_sphr_client',
  'source' => 'non-db',
  'vname' => 'LBL_COSIB_POSTSALE_SPHR_CLIENT_FROM_COSIB_POSTSALE_TITLE',
);
$dictionary["sphr_Client"]["fields"]["cosib_postshr_client_name"] = array (
  'name' => 'cosib_postshr_client_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_COSIB_POSTSALE_SPHR_CLIENT_FROM_COSIB_POSTSALE_TITLE',
  'save' => true,
  'id_name' => 'cosib_post666dostsale_ida',
  'link' => 'cosib_postsle_sphr_client',
  'table' => 'cosib_postsale',
  'module' => 'Cosib_postsale',
  'rname' => 'name',
);
$dictionary["sphr_Client"]["fields"]["cosib_post666dostsale_ida"] = array (
  'name' => 'cosib_post666dostsale_ida',
  'type' => 'link',
  'relationship' => 'cosib_postsale_sphr_client',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_COSIB_POSTSALE_SPHR_CLIENT_FROM_COSIB_POSTSALE_TITLE',
);
