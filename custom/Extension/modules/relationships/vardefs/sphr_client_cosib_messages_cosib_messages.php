<?php
// created: 2012-06-15 11:09:09
$dictionary["cosib_messages"]["fields"]["sphr_clientcosib_messages"] = array (
  'name' => 'sphr_clientcosib_messages',
  'type' => 'link',
  'relationship' => 'sphr_client_cosib_messages',
  'source' => 'non-db',
  'vname' => 'LBL_SPHR_CLIENT_COSIB_MESSAGES_FROM_SPHR_CLIENT_TITLE',
);
$dictionary["cosib_messages"]["fields"]["sphr_client_messages_name"] = array (
  'name' => 'sphr_client_messages_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_SPHR_CLIENT_COSIB_MESSAGES_FROM_SPHR_CLIENT_TITLE',
  'save' => true,
  'id_name' => 'sphr_clien2679_client_ida',
  'link' => 'sphr_clientcosib_messages',
  'table' => 'sphr_client',
  'module' => 'sphr_Client',
  'rname' => 'name',
);
$dictionary["cosib_messages"]["fields"]["sphr_clien2679_client_ida"] = array (
  'name' => 'sphr_clien2679_client_ida',
  'type' => 'link',
  'relationship' => 'sphr_client_cosib_messages',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_SPHR_CLIENT_COSIB_MESSAGES_FROM_COSIB_MESSAGES_TITLE',
);
