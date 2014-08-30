<?php
// created: 2011-11-27 14:05:26
$dictionary["Campaign"]["fields"]["sphr_phone_pany_campaigns"] = array (
  'name' => 'sphr_phone_pany_campaigns',
  'type' => 'link',
  'relationship' => 'sphr_phone_company_campaigns',
  'source' => 'non-db',
  'vname' => 'LBL_SPHR_PHONE_COMPANY_CAMPAIGNS_FROM_SPHR_PHONE_COMPANY_TITLE',
);
$dictionary["Campaign"]["fields"]["sphr_phone_campaigns_name"] = array (
  'name' => 'sphr_phone_campaigns_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_SPHR_PHONE_COMPANY_CAMPAIGNS_FROM_SPHR_PHONE_COMPANY_TITLE',
  'save' => true,
  'id_name' => 'sphr_phone0cd8company_ida',
  'link' => 'sphr_phone_pany_campaigns',
  'table' => 'sphr_phone_company',
  'module' => 'sphr_phone_company',
  'rname' => 'name',
);
$dictionary["Campaign"]["fields"]["sphr_phone0cd8company_ida"] = array (
  'name' => 'sphr_phone0cd8company_ida',
  'type' => 'link',
  'relationship' => 'sphr_phone_company_campaigns',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_SPHR_PHONE_COMPANY_CAMPAIGNS_FROM_CAMPAIGNS_TITLE',
);
