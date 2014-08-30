<?php
// created: 2011-07-15 17:02:55
$dictionary["sphr_Deal"]["fields"]["sphr_intermiary_sphr_deal"] = array (
  'name' => 'sphr_intermiary_sphr_deal',
  'type' => 'link',
  'relationship' => 'sphr_intermediary_sphr_deal',
  'source' => 'non-db',
  'vname' => 'LBL_SPHR_INTERMEDIARY_SPHR_DEAL_FROM_SPHR_INTERMEDIARY_TITLE',
);
$dictionary["sphr_Deal"]["fields"]["sphr_intermsphr_deal_name"] = array (
  'name' => 'sphr_intermsphr_deal_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_SPHR_INTERMEDIARY_SPHR_DEAL_FROM_SPHR_INTERMEDIARY_TITLE',
  'save' => true,
  'id_name' => 'sphr_inter168dmediary_ida',
  'link' => 'sphr_intermiary_sphr_deal',
  'table' => 'sphr_intermediary',
  'module' => 'sphr_Intermediary',
  'rname' => 'name',
);
$dictionary["sphr_Deal"]["fields"]["sphr_inter168dmediary_ida"] = array (
  'name' => 'sphr_inter168dmediary_ida',
  'type' => 'link',
  'relationship' => 'sphr_intermediary_sphr_deal',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_SPHR_INTERMEDIARY_SPHR_DEAL_FROM_SPHR_DEAL_TITLE',
);
