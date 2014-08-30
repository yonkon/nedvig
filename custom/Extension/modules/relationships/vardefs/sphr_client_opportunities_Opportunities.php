<?php
// created: 2011-08-14 19:52:53
$dictionary["Opportunity"]["fields"]["sphr_client_opportunities"] = array (
  'name' => 'sphr_client_opportunities',
  'type' => 'link',
  'relationship' => 'sphr_client_opportunities',
  'source' => 'non-db',
  'vname' => 'LBL_SPHR_CLIENT_OPPORTUNITIES_FROM_SPHR_CLIENT_TITLE',
);
$dictionary["Opportunity"]["fields"]["sphr_clientrtunities_name"] = array (
  'name' => 'sphr_clientrtunities_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_SPHR_CLIENT_OPPORTUNITIES_FROM_SPHR_CLIENT_TITLE',
  'save' => true,
  'id_name' => 'sphr_clien0590_client_ida',
  'link' => 'sphr_client_opportunities',
  'table' => 'sphr_client',
  'module' => 'sphr_Client',
  'rname' => 'name',
);
$dictionary["Opportunity"]["fields"]["sphr_clien0590_client_ida"] = array (
  'name' => 'sphr_clien0590_client_ida',
  'type' => 'link',
  'relationship' => 'sphr_client_opportunities',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_SPHR_CLIENT_OPPORTUNITIES_FROM_OPPORTUNITIES_TITLE',
);
