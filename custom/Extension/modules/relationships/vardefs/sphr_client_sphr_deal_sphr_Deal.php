<?php
// created: 2011-07-15 12:27:48
$dictionary["sphr_Deal"]["fields"]["sphr_client_sphr_deal"] = array (
  'name' => 'sphr_client_sphr_deal',
  'type' => 'link',
  'relationship' => 'sphr_client_sphr_deal',
  'source' => 'non-db',
  'vname' => 'LBL_SPHR_CLIENT_SPHR_DEAL_FROM_SPHR_CLIENT_TITLE',
);
$dictionary["sphr_Deal"]["fields"]["sphr_clientsphr_deal_name"] = array (
  'name' => 'sphr_clientsphr_deal_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_SPHR_CLIENT_SPHR_DEAL_FROM_SPHR_CLIENT_TITLE',
  'save' => true,
  'id_name' => 'sphr_clien0f3e_client_ida',
  'link' => 'sphr_client_sphr_deal',
  'table' => 'sphr_client',
  'module' => 'sphr_Client',
  'rname' => 'name',
);
$dictionary["sphr_Deal"]["fields"]["sphr_clien0f3e_client_ida"] = array (
  'name' => 'sphr_clien0f3e_client_ida',
  'type' => 'link',
  'relationship' => 'sphr_client_sphr_deal',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_SPHR_CLIENT_SPHR_DEAL_FROM_SPHR_DEAL_TITLE',
);
