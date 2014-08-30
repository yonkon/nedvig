<?php
// created: 2011-11-30 15:03:54
$dictionary["sphr_market_channel"]["fields"]["sphr_marketmarket_channel"] = array (
  'name' => 'sphr_marketmarket_channel',
  'type' => 'link',
  'relationship' => 'sphr_market_company_sphr_market_channel',
  'source' => 'non-db',
  'vname' => 'LBL_SPHR_MARKET_COMPANY_SPHR_MARKET_CHANNEL_FROM_SPHR_MARKET_COMPANY_TITLE',
);
$dictionary["sphr_market_channel"]["fields"]["sphr_markett_channel_name"] = array (
  'name' => 'sphr_markett_channel_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_SPHR_MARKET_COMPANY_SPHR_MARKET_CHANNEL_FROM_SPHR_MARKET_COMPANY_TITLE',
  'save' => true,
  'id_name' => 'sphr_markef954company_ida',
  'link' => 'sphr_marketmarket_channel',
  'table' => 'sphr_market_company',
  'module' => 'sphr_market_company',
  'rname' => 'name',
);
$dictionary["sphr_market_channel"]["fields"]["sphr_markef954company_ida"] = array (
  'name' => 'sphr_markef954company_ida',
  'type' => 'link',
  'relationship' => 'sphr_market_company_sphr_market_channel',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_SPHR_MARKET_COMPANY_SPHR_MARKET_CHANNEL_FROM_SPHR_MARKET_CHANNEL_TITLE',
);
