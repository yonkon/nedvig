<?php
// created: 2011-07-23 21:56:46
$dictionary["sphr_Office_meeting"]["fields"]["sphr_deal_sfice_meeting_1"] = array (
  'name' => 'sphr_deal_sfice_meeting_1',
  'type' => 'link',
  'relationship' => 'sphr_deal_sphr_office_meeting_1',
  'source' => 'non-db',
  'vname' => 'LBL_SPHR_DEAL_SPHR_OFFICE_MEETING_1_FROM_SPHR_DEAL_TITLE',
);
$dictionary["sphr_Office_meeting"]["fields"]["sphr_deal_smeeting_1_name"] = array (
  'name' => 'sphr_deal_smeeting_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_SPHR_DEAL_SPHR_OFFICE_MEETING_1_FROM_SPHR_DEAL_TITLE',
  'save' => true,
  'id_name' => 'sphr_deal_92c8hr_deal_ida',
  'link' => 'sphr_deal_sfice_meeting_1',
  'table' => 'sphr_deal',
  'module' => 'sphr_Deal',
  'rname' => 'name',
);
$dictionary["sphr_Office_meeting"]["fields"]["sphr_deal_92c8hr_deal_ida"] = array (
  'name' => 'sphr_deal_92c8hr_deal_ida',
  'type' => 'link',
  'relationship' => 'sphr_deal_sphr_office_meeting_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_SPHR_DEAL_SPHR_OFFICE_MEETING_1_FROM_SPHR_OFFICE_MEETING_TITLE',
);
