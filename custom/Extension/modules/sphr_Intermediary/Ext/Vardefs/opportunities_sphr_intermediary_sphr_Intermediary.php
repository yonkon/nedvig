<?php
// created: 2011-08-14 19:41:36
$dictionary["sphr_Intermediary"]["fields"]["opportunitir_intermediary"] = array (
  'name' => 'opportunitir_intermediary',
  'type' => 'link',
  'relationship' => 'opportunities_sphr_intermediary',
  'source' => 'non-db',
  'vname' => 'LBL_OPPORTUNITIES_SPHR_INTERMEDIARY_FROM_OPPORTUNITIES_TITLE',
);
$dictionary["sphr_Intermediary"]["fields"]["opportunitiermediary_name"] = array (
  'name' => 'opportunitiermediary_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_OPPORTUNITIES_SPHR_INTERMEDIARY_FROM_OPPORTUNITIES_TITLE',
  'save' => true,
  'id_name' => 'opportunitd088unities_ida',
  'link' => 'opportunitir_intermediary',
  'table' => 'opportunities',
  'module' => 'Opportunities',
  'rname' => 'name',
);
$dictionary["sphr_Intermediary"]["fields"]["opportunitd088unities_ida"] = array (
  'name' => 'opportunitd088unities_ida',
  'type' => 'link',
  'relationship' => 'opportunities_sphr_intermediary',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_OPPORTUNITIES_SPHR_INTERMEDIARY_FROM_SPHR_INTERMEDIARY_TITLE',
);
