<?php
// created: 2011-08-14 19:49:56
$dictionary["Meeting"]["fields"]["opportunities_meetings"] = array (
  'name' => 'opportunities_meetings',
  'type' => 'link',
  'relationship' => 'opportunities_meetings',
  'source' => 'non-db',
  'vname' => 'LBL_OPPORTUNITIES_MEETINGS_FROM_OPPORTUNITIES_TITLE',
);
$dictionary["Meeting"]["fields"]["opportuniti_meetings_name"] = array (
  'name' => 'opportuniti_meetings_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_OPPORTUNITIES_MEETINGS_FROM_OPPORTUNITIES_TITLE',
  'save' => true,
  'id_name' => 'opportunit0579unities_ida',
  'link' => 'opportunities_meetings',
  'table' => 'opportunities',
  'module' => 'Opportunities',
  'rname' => 'name',
);
$dictionary["Meeting"]["fields"]["opportunit0579unities_ida"] = array (
  'name' => 'opportunit0579unities_ida',
  'type' => 'link',
  'relationship' => 'opportunities_meetings',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_OPPORTUNITIES_MEETINGS_FROM_MEETINGS_TITLE',
);
