<?php
// created: 2011-08-14 20:16:47
$dictionary["Opportunity"]["fields"]["sphr_interm_opportunities"] = array (
  'name' => 'sphr_interm_opportunities',
  'type' => 'link',
  'relationship' => 'sphr_intermediary_opportunities',
  'source' => 'non-db',
  'vname' => 'LBL_SPHR_INTERMEDIARY_OPPORTUNITIES_FROM_SPHR_INTERMEDIARY_TITLE',
);
$dictionary["Opportunity"]["fields"]["sphr_intermrtunities_name"] = array (
  'name' => 'sphr_intermrtunities_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_SPHR_INTERMEDIARY_OPPORTUNITIES_FROM_SPHR_INTERMEDIARY_TITLE',
  'save' => true,
  'id_name' => 'sphr_interf513mediary_ida',
  'link' => 'sphr_interm_opportunities',
  'table' => 'sphr_intermediary',
  'module' => 'sphr_Intermediary',
  'rname' => 'name',
);
$dictionary["Opportunity"]["fields"]["sphr_interf513mediary_ida"] = array (
  'name' => 'sphr_interf513mediary_ida',
  'type' => 'link',
  'relationship' => 'sphr_intermediary_opportunities',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_SPHR_INTERMEDIARY_OPPORTUNITIES_FROM_OPPORTUNITIES_TITLE',
);
