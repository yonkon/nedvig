<?php
// created: 2011-07-20 00:02:51
$dictionary["sphr_Inspection_tour"]["fields"]["sphr_clientnspection_tour"] = array (
  'name' => 'sphr_clientnspection_tour',
  'type' => 'link',
  'relationship' => 'sphr_client_sphr_inspection_tour',
  'source' => 'non-db',
  'vname' => 'LBL_SPHR_CLIENT_SPHR_INSPECTION_TOUR_FROM_SPHR_CLIENT_TITLE',
);
$dictionary["sphr_Inspection_tour"]["fields"]["sphr_clienttion_tour_name"] = array (
  'name' => 'sphr_clienttion_tour_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_SPHR_CLIENT_SPHR_INSPECTION_TOUR_FROM_SPHR_CLIENT_TITLE',
  'save' => true,
  'id_name' => 'sphr_clien6152_client_ida',
  'link' => 'sphr_clientnspection_tour',
  'table' => 'sphr_client',
  'module' => 'sphr_Client',
  'rname' => 'name',
);
$dictionary["sphr_Inspection_tour"]["fields"]["sphr_clien6152_client_ida"] = array (
  'name' => 'sphr_clien6152_client_ida',
  'type' => 'link',
  'relationship' => 'sphr_client_sphr_inspection_tour',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_SPHR_CLIENT_SPHR_INSPECTION_TOUR_FROM_SPHR_INSPECTION_TOUR_TITLE',
);
