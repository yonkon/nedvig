<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2011-07-23 21:56:31
$dictionary["sphr_Deal"]["fields"]["sphr_deal_soffice_meeting"] = array (
  'name' => 'sphr_deal_soffice_meeting',
  'type' => 'link',
  'relationship' => 'sphr_deal_sphr_office_meeting',
  'source' => 'non-db',
  'side' => 'right',
  'vname' => 'LBL_SPHR_DEAL_SPHR_OFFICE_MEETING_FROM_SPHR_OFFICE_MEETING_TITLE',
);


 // created: 2011-07-24 16:32:05
$dictionary['sphr_Deal']['fields']['discount_apply']['required']=true;

 

// created: 2011-07-15 18:27:42
$dictionary["sphr_Deal"]["fields"]["sphr_deal_activities_tasks"] = array (
  'name' => 'sphr_deal_activities_tasks',
  'type' => 'link',
  'relationship' => 'sphr_deal_activities_tasks',
  'source' => 'non-db',
);


// created: 2011-07-15 12:27:48
$dictionary["sphr_Deal"]["fields"]["sphr_client_sphr_deal"] = array (
  'name' => 'sphr_client_sphr_deal',
  'type' => 'link',
  'relationship' => 'sphr_client_sphr_deal',
  'source' => 'non-db',
  'vname' => 'LBL_SPHR_CLIENT_SPHR_DEAL_FROM_SPHR_CLIENT_TITLE',
);
$dictionary["sphr_Deal"]["fields"]["sphr_clientsphr_deal_name"] = array (
  'name' => 'sphr_clientsphr_deal_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_SPHR_CLIENT_SPHR_DEAL_FROM_SPHR_CLIENT_TITLE',
  'save' => true,
  'id_name' => 'sphr_clien0f3e_client_ida',
  'link' => 'sphr_client_sphr_deal',
  'table' => 'sphr_client',
  'module' => 'sphr_Client',
  'rname' => 'name',
);
$dictionary["sphr_Deal"]["fields"]["sphr_clien0f3e_client_ida"] = array (
  'name' => 'sphr_clien0f3e_client_ida',
  'type' => 'link',
  'relationship' => 'sphr_client_sphr_deal',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_SPHR_CLIENT_SPHR_DEAL_FROM_SPHR_DEAL_TITLE',
);


// created: 2011-07-23 21:56:46
$dictionary["sphr_Deal"]["fields"]["sphr_deal_sfice_meeting_1"] = array (
  'name' => 'sphr_deal_sfice_meeting_1',
  'type' => 'link',
  'relationship' => 'sphr_deal_sphr_office_meeting_1',
  'source' => 'non-db',
  'side' => 'right',
  'vname' => 'LBL_SPHR_DEAL_SPHR_OFFICE_MEETING_1_FROM_SPHR_OFFICE_MEETING_TITLE',
);


// created: 2011-07-15 18:23:53
$dictionary["sphr_Deal"]["fields"]["sphr_object_sphr_deal"] = array (
  'name' => 'sphr_object_sphr_deal',
  'type' => 'link',
  'relationship' => 'sphr_object_sphr_deal',
  'source' => 'non-db',
  'vname' => 'LBL_SPHR_OBJECT_SPHR_DEAL_FROM_SPHR_OBJECT_TITLE',
);


// created: 2011-07-15 18:26:51
$dictionary["sphr_Deal"]["fields"]["sphr_deal_project"] = array (
  'name' => 'sphr_deal_project',
  'type' => 'link',
  'relationship' => 'sphr_deal_project',
  'source' => 'non-db',
  'side' => 'right',
  'vname' => 'LBL_SPHR_DEAL_PROJECT_FROM_PROJECT_TITLE',
);


// created: 2011-07-23 21:57:17
$dictionary["sphr_Deal"]["fields"]["sphr_deal_shr_show_object"] = array (
  'name' => 'sphr_deal_shr_show_object',
  'type' => 'link',
  'relationship' => 'sphr_deal_sphr_show_object',
  'source' => 'non-db',
  'side' => 'right',
  'vname' => 'LBL_SPHR_DEAL_SPHR_SHOW_OBJECT_FROM_SPHR_SHOW_OBJECT_TITLE',
);


// created: 2011-07-15 18:27:42
$dictionary["sphr_Deal"]["fields"]["sphr_deal_activities_emails"] = array (
  'name' => 'sphr_deal_activities_emails',
  'type' => 'link',
  'relationship' => 'sphr_deal_activities_emails',
  'source' => 'non-db',
);


// created: 2011-07-15 17:02:55
$dictionary["sphr_Deal"]["fields"]["sphr_intermiary_sphr_deal"] = array (
  'name' => 'sphr_intermiary_sphr_deal',
  'type' => 'link',
  'relationship' => 'sphr_intermediary_sphr_deal',
  'source' => 'non-db',
  'vname' => 'LBL_SPHR_INTERMEDIARY_SPHR_DEAL_FROM_SPHR_INTERMEDIARY_TITLE',
);
$dictionary["sphr_Deal"]["fields"]["sphr_intermsphr_deal_name"] = array (
  'name' => 'sphr_intermsphr_deal_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_SPHR_INTERMEDIARY_SPHR_DEAL_FROM_SPHR_INTERMEDIARY_TITLE',
  'save' => true,
  'id_name' => 'sphr_inter168dmediary_ida',
  'link' => 'sphr_intermiary_sphr_deal',
  'table' => 'sphr_intermediary',
  'module' => 'sphr_Intermediary',
  'rname' => 'name',
);
$dictionary["sphr_Deal"]["fields"]["sphr_inter168dmediary_ida"] = array (
  'name' => 'sphr_inter168dmediary_ida',
  'type' => 'link',
  'relationship' => 'sphr_intermediary_sphr_deal',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_SPHR_INTERMEDIARY_SPHR_DEAL_FROM_SPHR_DEAL_TITLE',
);


// created: 2011-07-15 18:27:42
$dictionary["sphr_Deal"]["fields"]["sphr_deal_activities_notes"] = array (
  'name' => 'sphr_deal_activities_notes',
  'type' => 'link',
  'relationship' => 'sphr_deal_activities_notes',
  'source' => 'non-db',
);


// created: 2011-07-15 18:27:42
$dictionary["sphr_Deal"]["fields"]["sphr_deal_activities_meetings"] = array (
  'name' => 'sphr_deal_activities_meetings',
  'type' => 'link',
  'relationship' => 'sphr_deal_activities_meetings',
  'source' => 'non-db',
);


// created: 2011-07-15 18:27:42
$dictionary["sphr_Deal"]["fields"]["sphr_deal_activities_calls"] = array (
  'name' => 'sphr_deal_activities_calls',
  'type' => 'link',
  'relationship' => 'sphr_deal_activities_calls',
  'source' => 'non-db',
);

?>