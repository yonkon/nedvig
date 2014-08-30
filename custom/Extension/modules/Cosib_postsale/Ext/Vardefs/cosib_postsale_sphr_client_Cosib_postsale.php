<?php
// created: 2012-07-05 09:07:38
$dictionary["Cosib_postsale"]["fields"]["cosib_postsle_sphr_client"] = array (
  'name' => 'cosib_postsle_sphr_client',
  'type' => 'link',
  'relationship' => 'cosib_postsale_sphr_client',
  'source' => 'non-db',
  'vname' => 'LBL_COSIB_POSTSALE_SPHR_CLIENT_FROM_SPHR_CLIENT_TITLE',
);
$dictionary["Cosib_postsale"]["fields"]["cosib_postshr_client_name"] = array (
  'name' => 'cosib_postshr_client_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_COSIB_POSTSALE_SPHR_CLIENT_FROM_SPHR_CLIENT_TITLE',
  'save' => true,
  'id_name' => 'cosib_post53f6_client_idb',
  'link' => 'cosib_postsle_sphr_client',
  'table' => 'sphr_client',
  'module' => 'sphr_Client',
  'rname' => 'name',
);
$dictionary["Cosib_postsale"]["fields"]["cosib_post53f6_client_idb"] = array (
  'name' => 'cosib_post53f6_client_idb',
  'type' => 'link',
  'relationship' => 'cosib_postsale_sphr_client',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_COSIB_POSTSALE_SPHR_CLIENT_FROM_SPHR_CLIENT_TITLE',
);
