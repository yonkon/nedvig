<?php
// created: 2011-07-23 21:56:31
$dictionary["sphr_Office_meeting"]["fields"]["sphr_deal_soffice_meeting"] = array (
  'name' => 'sphr_deal_soffice_meeting',
  'type' => 'link',
  'relationship' => 'sphr_deal_sphr_office_meeting',
  'source' => 'non-db',
  'vname' => 'LBL_SPHR_DEAL_SPHR_OFFICE_MEETING_FROM_SPHR_DEAL_TITLE',
);
$dictionary["sphr_Office_meeting"]["fields"]["sphr_deal_se_meeting_name"] = array (
  'name' => 'sphr_deal_se_meeting_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_SPHR_DEAL_SPHR_OFFICE_MEETING_FROM_SPHR_DEAL_TITLE',
  'save' => true,
  'id_name' => 'sphr_deal_3e0ahr_deal_ida',
  'link' => 'sphr_deal_soffice_meeting',
  'table' => 'sphr_deal',
  'module' => 'sphr_Deal',
  'rname' => 'name',
);
$dictionary["sphr_Office_meeting"]["fields"]["sphr_deal_3e0ahr_deal_ida"] = array (
  'name' => 'sphr_deal_3e0ahr_deal_ida',
  'type' => 'link',
  'relationship' => 'sphr_deal_sphr_office_meeting',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_SPHR_DEAL_SPHR_OFFICE_MEETING_FROM_SPHR_OFFICE_MEETING_TITLE',
);
