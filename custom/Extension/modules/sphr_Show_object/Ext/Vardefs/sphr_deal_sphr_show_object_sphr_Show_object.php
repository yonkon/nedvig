<?php
// created: 2011-07-23 21:57:17
$dictionary["sphr_Show_object"]["fields"]["sphr_deal_shr_show_object"] = array (
  'name' => 'sphr_deal_shr_show_object',
  'type' => 'link',
  'relationship' => 'sphr_deal_sphr_show_object',
  'source' => 'non-db',
  'vname' => 'LBL_SPHR_DEAL_SPHR_SHOW_OBJECT_FROM_SPHR_DEAL_TITLE',
);
$dictionary["sphr_Show_object"]["fields"]["sphr_deal_sow_object_name"] = array (
  'name' => 'sphr_deal_sow_object_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_SPHR_DEAL_SPHR_SHOW_OBJECT_FROM_SPHR_DEAL_TITLE',
  'save' => true,
  'id_name' => 'sphr_deal_3c7dhr_deal_ida',
  'link' => 'sphr_deal_shr_show_object',
  'table' => 'sphr_deal',
  'module' => 'sphr_Deal',
  'rname' => 'name',
);
$dictionary["sphr_Show_object"]["fields"]["sphr_deal_3c7dhr_deal_ida"] = array (
  'name' => 'sphr_deal_3c7dhr_deal_ida',
  'type' => 'link',
  'relationship' => 'sphr_deal_sphr_show_object',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_SPHR_DEAL_SPHR_SHOW_OBJECT_FROM_SPHR_SHOW_OBJECT_TITLE',
);
