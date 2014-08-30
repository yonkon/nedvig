<?php 
 //WARNING: The contents of this file are auto-generated


 // created: 2011-11-30 16:28:27
$dictionary['sphr_market_company']['fields']['budget_plan']['required']=false;

 

// created: 2011-11-27 14:30:04
$dictionary["sphr_market_company"]["fields"]["sphr_marketny_sphr_client"] = array (
  'name' => 'sphr_marketny_sphr_client',
  'type' => 'link',
  'relationship' => 'sphr_market_company_sphr_client',
  'source' => 'non-db',
  'vname' => 'LBL_SPHR_MARKET_COMPANY_SPHR_CLIENT_FROM_SPHR_CLIENT_TITLE',
);


 // created: 2011-11-27 14:34:28
$dictionary['sphr_market_company']['fields']['phone']['required']=true;
$dictionary['sphr_market_company']['fields']['phone']['audited']=true;

 

// created: 2011-11-30 15:03:54
$dictionary["sphr_market_company"]["fields"]["sphr_marketmarket_channel"] = array (
  'name' => 'sphr_marketmarket_channel',
  'type' => 'link',
  'relationship' => 'sphr_market_company_sphr_market_channel',
  'source' => 'non-db',
  'side' => 'right',
  'vname' => 'LBL_SPHR_MARKET_COMPANY_SPHR_MARKET_CHANNEL_FROM_SPHR_MARKET_CHANNEL_TITLE',
);

?>