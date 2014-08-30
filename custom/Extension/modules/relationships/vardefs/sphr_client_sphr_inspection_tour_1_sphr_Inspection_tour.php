<?php
// created: 2011-07-20 00:02:59
$dictionary["sphr_Inspection_tour"]["fields"]["sphr_clientpection_tour_1"] = array (
  'name' => 'sphr_clientpection_tour_1',
  'type' => 'link',
  'relationship' => 'sphr_client_sphr_inspection_tour_1',
  'source' => 'non-db',
  'vname' => 'LBL_SPHR_CLIENT_SPHR_INSPECTION_TOUR_1_FROM_SPHR_CLIENT_TITLE',
);
$dictionary["sphr_Inspection_tour"]["fields"]["sphr_clienton_tour_1_name"] = array (
  'name' => 'sphr_clienton_tour_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_SPHR_CLIENT_SPHR_INSPECTION_TOUR_1_FROM_SPHR_CLIENT_TITLE',
  'save' => true,
  'id_name' => 'sphr_clien0141_client_ida',
  'link' => 'sphr_clientpection_tour_1',
  'table' => 'sphr_client',
  'module' => 'sphr_Client',
  'rname' => 'name',
);
$dictionary["sphr_Inspection_tour"]["fields"]["sphr_clien0141_client_ida"] = array (
  'name' => 'sphr_clien0141_client_ida',
  'type' => 'link',
  'relationship' => 'sphr_client_sphr_inspection_tour_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_SPHR_CLIENT_SPHR_INSPECTION_TOUR_1_FROM_SPHR_INSPECTION_TOUR_TITLE',
);
