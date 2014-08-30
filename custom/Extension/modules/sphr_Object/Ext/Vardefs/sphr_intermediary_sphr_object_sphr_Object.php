<?php
// created: 2011-08-02 21:19:55
$dictionary["sphr_Object"]["fields"]["sphr_intermry_sphr_object"] = array (
  'name' => 'sphr_intermry_sphr_object',
  'type' => 'link',
  'relationship' => 'sphr_intermediary_sphr_object',
  'source' => 'non-db',
  'vname' => 'LBL_SPHR_INTERMEDIARY_SPHR_OBJECT_FROM_SPHR_INTERMEDIARY_TITLE',
);
$dictionary["sphr_Object"]["fields"]["sphr_intermhr_object_name"] = array (
  'name' => 'sphr_intermhr_object_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_SPHR_INTERMEDIARY_SPHR_OBJECT_FROM_SPHR_INTERMEDIARY_TITLE',
  'save' => true,
  'id_name' => 'sphr_intera323mediary_ida',
  'link' => 'sphr_intermry_sphr_object',
  'table' => 'sphr_intermediary',
  'module' => 'sphr_Intermediary',
  'rname' => 'name',
);
$dictionary["sphr_Object"]["fields"]["sphr_intera323mediary_ida"] = array (
  'name' => 'sphr_intera323mediary_ida',
  'type' => 'link',
  'relationship' => 'sphr_intermediary_sphr_object',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_SPHR_INTERMEDIARY_SPHR_OBJECT_FROM_SPHR_OBJECT_TITLE',
);
