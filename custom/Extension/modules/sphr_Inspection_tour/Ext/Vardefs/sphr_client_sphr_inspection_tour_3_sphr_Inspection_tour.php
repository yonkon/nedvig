<?php
// created: 2011-07-20 00:03:38
$dictionary["sphr_Inspection_tour"]["fields"]["sphr_clientpection_tour_3"] = array (
  'name' => 'sphr_clientpection_tour_3',
  'type' => 'link',
  'relationship' => 'sphr_client_sphr_inspection_tour_3',
  'source' => 'non-db',
  'vname' => 'LBL_SPHR_CLIENT_SPHR_INSPECTION_TOUR_3_FROM_SPHR_CLIENT_TITLE',
);
$dictionary["sphr_Inspection_tour"]["fields"]["sphr_clienton_tour_3_name"] = array (
  'name' => 'sphr_clienton_tour_3_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_SPHR_CLIENT_SPHR_INSPECTION_TOUR_3_FROM_SPHR_CLIENT_TITLE',
  'save' => true,
  'id_name' => 'sphr_clienff53_client_ida',
  'link' => 'sphr_clientpection_tour_3',
  'table' => 'sphr_client',
  'module' => 'sphr_Client',
  'rname' => 'name',
);
$dictionary["sphr_Inspection_tour"]["fields"]["sphr_clienff53_client_ida"] = array (
  'name' => 'sphr_clienff53_client_ida',
  'type' => 'link',
  'relationship' => 'sphr_client_sphr_inspection_tour_3',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_SPHR_CLIENT_SPHR_INSPECTION_TOUR_3_FROM_SPHR_INSPECTION_TOUR_TITLE',
);
