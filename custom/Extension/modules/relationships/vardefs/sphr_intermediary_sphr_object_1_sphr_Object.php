<?php
// created: 2011-07-15 16:57:49
$dictionary["sphr_Object"]["fields"]["sphr_interm_sphr_object_1"] = array (
  'name' => 'sphr_interm_sphr_object_1',
  'type' => 'link',
  'relationship' => 'sphr_intermediary_sphr_object_1',
  'source' => 'non-db',
  'vname' => 'LBL_SPHR_INTERMEDIARY_SPHR_OBJECT_1_FROM_SPHR_INTERMEDIARY_TITLE',
);
$dictionary["sphr_Object"]["fields"]["sphr_interm_object_1_name"] = array (
  'name' => 'sphr_interm_object_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_SPHR_INTERMEDIARY_SPHR_OBJECT_1_FROM_SPHR_INTERMEDIARY_TITLE',
  'save' => true,
  'id_name' => 'sphr_inter1ee0mediary_ida',
  'link' => 'sphr_interm_sphr_object_1',
  'table' => 'sphr_intermediary',
  'module' => 'sphr_Intermediary',
  'rname' => 'name',
);
$dictionary["sphr_Object"]["fields"]["sphr_inter1ee0mediary_ida"] = array (
  'name' => 'sphr_inter1ee0mediary_ida',
  'type' => 'link',
  'relationship' => 'sphr_intermediary_sphr_object_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_SPHR_INTERMEDIARY_SPHR_OBJECT_1_FROM_SPHR_OBJECT_TITLE',
);
