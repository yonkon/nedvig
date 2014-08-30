<?php
// created: 2011-12-18 00:22:36
$dictionary["sphr_Client"]["fields"]["sphr_market_sphr_client_1"] = array (
  'name' => 'sphr_market_sphr_client_1',
  'type' => 'link',
  'relationship' => 'sphr_market_channel_sphr_client_1',
  'source' => 'non-db',
  'vname' => 'LBL_SPHR_MARKET_CHANNEL_SPHR_CLIENT_1_FROM_SPHR_MARKET_CHANNEL_TITLE',
);
$dictionary["sphr_Client"]["fields"]["sphr_market_client_1_name"] = array (
  'name' => 'sphr_market_client_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_SPHR_MARKET_CHANNEL_SPHR_CLIENT_1_FROM_SPHR_MARKET_CHANNEL_TITLE',
  'save' => true,
  'id_name' => 'sphr_marke5c2achannel_ida',
  'link' => 'sphr_market_sphr_client_1',
  'table' => 'sphr_market_channel',
  'module' => 'sphr_market_channel',
  'rname' => 'name',
);
$dictionary["sphr_Client"]["fields"]["sphr_marke5c2achannel_ida"] = array (
  'name' => 'sphr_marke5c2achannel_ida',
  'type' => 'link',
  'relationship' => 'sphr_market_channel_sphr_client_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_SPHR_MARKET_CHANNEL_SPHR_CLIENT_1_FROM_SPHR_CLIENT_TITLE',
);
