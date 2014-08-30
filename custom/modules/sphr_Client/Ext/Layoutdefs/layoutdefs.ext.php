<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2011-07-20 00:02:51
$layout_defs["sphr_Client"]["subpanel_setup"]["sphr_clientnspection_tour"] = array (
  'order' => 100,
  'module' => 'sphr_Inspection_tour',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_SPHR_CLIENT_SPHR_INSPECTION_TOUR_FROM_SPHR_INSPECTION_TOUR_TITLE',
  'get_subpanel_data' => 'sphr_clientnspection_tour',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);


// created: 2011-07-20 00:03:38
$layout_defs["sphr_Client"]["subpanel_setup"]["sphr_clientpection_tour_3"] = array (
  'order' => 100,
  'module' => 'sphr_Inspection_tour',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_SPHR_CLIENT_SPHR_INSPECTION_TOUR_3_FROM_SPHR_INSPECTION_TOUR_TITLE',
  'get_subpanel_data' => 'sphr_clientpection_tour_3',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);


// created: 2012-08-07 16:31:13
$layout_defs["sphr_Client"]["subpanel_setup"]["opportunities_sphr_client"] = array (
  'order' => 100,
  'module' => 'Opportunities',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_OPPORTUNITIES_SPHR_CLIENT_FROM_OPPORTUNITIES_TITLE',
  'get_subpanel_data' => 'opportunities_sphr_client',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);


// created: 2011-07-20 00:03:23
$layout_defs["sphr_Client"]["subpanel_setup"]["sphr_clientpection_tour_2"] = array (
  'order' => 100,
  'module' => 'sphr_Inspection_tour',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_SPHR_CLIENT_SPHR_INSPECTION_TOUR_2_FROM_SPHR_INSPECTION_TOUR_TITLE',
  'get_subpanel_data' => 'sphr_clientpection_tour_2',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);


// created: 2012-08-07 16:26:44
$layout_defs["sphr_Client"]["subpanel_setup"]["sphr_inspecur_sphr_client"] = array (
  'order' => 100,
  'module' => 'sphr_Inspection_tour',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_SPHR_INSPECTION_TOUR_SPHR_CLIENT_FROM_SPHR_INSPECTION_TOUR_TITLE',
  'get_subpanel_data' => 'sphr_inspecur_sphr_client',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);


// created: 2012-04-18 09:36:30
$layout_defs["sphr_Client"]["subpanel_setup"]["activities"] = array (
  'order' => 10,
  'sort_order' => 'desc',
  'sort_by' => 'date_start',
  'title_key' => 'LBL_ACTIVITIES_SUBPANEL_TITLE',
  'type' => 'collection',
  'subpanel_name' => 'activities',
  'module' => 'Activities',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopCreateTaskButton',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopScheduleMeetingButton',
    ),
    2 => 
    array (
      'widget_class' => 'SubPanelTopScheduleCallButton',
    ),
    3 => 
    array (
      'widget_class' => 'SubPanelTopComposeEmailButton',
    ),
  ),
  'collection_list' => 
  array (
    'meetings' => 
    array (
      'module' => 'Meetings',
      'subpanel_name' => 'ForActivities',
      'get_subpanel_data' => 'sphr_client_activities_meetings',
    ),
    'tasks' => 
    array (
      'module' => 'Tasks',
      'subpanel_name' => 'ForActivities',
      'get_subpanel_data' => 'sphr_client_activities_tasks',
    ),
    'calls' => 
    array (
      'module' => 'Calls',
      'subpanel_name' => 'ForActivities',
      'get_subpanel_data' => 'sphr_client_activities_calls',
    ),
  ),
  'get_subpanel_data' => 'activities',
);
$layout_defs["sphr_Client"]["subpanel_setup"]["history"] = array (
  'order' => 20,
  'sort_order' => 'desc',
  'sort_by' => 'date_modified',
  'title_key' => 'LBL_HISTORY',
  'type' => 'collection',
  'subpanel_name' => 'history',
  'module' => 'History',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopCreateNoteButton',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopArchiveEmailButton',
    ),
    2 => 
    array (
      'widget_class' => 'SubPanelTopSummaryButton',
    ),
  ),
  'collection_list' => 
  array (
    'meetings' => 
    array (
      'module' => 'Meetings',
      'subpanel_name' => 'ForHistory',
      'get_subpanel_data' => 'sphr_client_activities_meetings',
    ),
    'tasks' => 
    array (
      'module' => 'Tasks',
      'subpanel_name' => 'ForHistory',
      'get_subpanel_data' => 'sphr_client_activities_tasks',
    ),
    'calls' => 
    array (
      'module' => 'Calls',
      'subpanel_name' => 'ForHistory',
      'get_subpanel_data' => 'sphr_client_activities_calls',
    ),
    'notes' => 
    array (
      'module' => 'Notes',
      'subpanel_name' => 'ForHistory',
      'get_subpanel_data' => 'sphr_client_activities_notes',
    ),
    'emails' => 
    array (
      'module' => 'Emails',
      'subpanel_name' => 'ForHistory',
      'get_subpanel_data' => 'sphr_client_activities_emails',
    ),
  ),
  'get_subpanel_data' => 'history',
);


// created: 2012-04-18 09:33:57
$layout_defs["sphr_Client"]["subpanel_setup"]["sphr_client_sphr_object"] = array (
  'order' => 100,
  'module' => 'sphr_Object',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_SPHR_CLIENT_SPHR_OBJECT_FROM_SPHR_OBJECT_TITLE',
  'get_subpanel_data' => 'sphr_client_sphr_object',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);


// created: 2011-07-15 12:27:48
$layout_defs["sphr_Client"]["subpanel_setup"]["sphr_client_sphr_deal"] = array (
  'order' => 100,
  'module' => 'sphr_Deal',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_SPHR_CLIENT_SPHR_DEAL_FROM_SPHR_DEAL_TITLE',
  'get_subpanel_data' => 'sphr_client_sphr_deal',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);


// created: 2011-11-27 15:19:25
$layout_defs["sphr_Client"]["subpanel_setup"]["sphr_marketel_sphr_client"] = array (
  'order' => 100,
  'module' => 'sphr_market_channel',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_SPHR_MARKET_CHANNEL_SPHR_CLIENT_FROM_SPHR_MARKET_CHANNEL_TITLE',
  'get_subpanel_data' => 'sphr_marketel_sphr_client',
  'top_buttons' => 
  array (

    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),

    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);


// created: 2011-08-14 19:52:53
$layout_defs["sphr_Client"]["subpanel_setup"]["sphr_client_opportunities"] = array (
  'order' => 100,
  'module' => 'Opportunities',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_SPHR_CLIENT_OPPORTUNITIES_FROM_OPPORTUNITIES_TITLE',
  'get_subpanel_data' => 'sphr_client_opportunities',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);


// created: 2012-05-31 11:11:41
$layout_defs["sphr_Client"]["subpanel_setup"]["sphr_client_cosib_queries"] = array (
  'order' => 100,
  'module' => 'cosib_queries',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_SPHR_CLIENT_COSIB_QUERIES_FROM_COSIB_QUERIES_TITLE',
  'get_subpanel_data' => 'sphr_client_cosib_queries',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);


// created: 2011-10-31 16:53:17
$layout_defs["sphr_Client"]["subpanel_setup"]["sphr_client_phone_company"] = array (
  'order' => 100,
  'module' => 'sphr_phone_company',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_SPHR_CLIENT_SPHR_PHONE_COMPANY_FROM_SPHR_PHONE_COMPANY_TITLE',
  'get_subpanel_data' => 'sphr_client_phone_company',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);


// created: 2012-06-22 13:11:06
$layout_defs["sphr_Client"]["subpanel_setup"]["sphr_client_sphr_object_1"] = array (
  'order' => 100,
  'module' => 'sphr_Object',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_SPHR_CLIENT_SPHR_OBJECT_1_FROM_SPHR_OBJECT_TITLE',
  'get_subpanel_data' => 'sphr_client_sphr_object_1',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);


// created: 2012-06-29 09:51:54
$layout_defs["sphr_Client"]["subpanel_setup"]["cosib_clienps_sphr_client"] = array (
  'order' => 100,
  'module' => 'Cosib_client_trips',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_COSIB_CLIENT_TRIPS_SPHR_CLIENT_FROM_COSIB_CLIENT_TRIPS_TITLE',
  'get_subpanel_data' => 'cosib_clienps_sphr_client',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);


// created: 2012-06-29 10:00:16
$layout_defs["sphr_Client"]["subpanel_setup"]["cosib_clienps_sphr_client"] = array (
  'order' => 100,
  'module' => 'Cosib_client_trips',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_COSIB_CLIENT_TRIPS_SPHR_CLIENT_FROM_COSIB_CLIENT_TRIPS_TITLE',
  'get_subpanel_data' => 'cosib_clienps_sphr_client',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);


// created: 2012-06-29 10:01:52
$layout_defs["sphr_Client"]["subpanel_setup"]["cosib_clienps_sphr_client"] = array (
  'order' => 100,
  'module' => 'Cosib_client_trips',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_COSIB_CLIENT_TRIPS_SPHR_CLIENT_FROM_COSIB_CLIENT_TRIPS_TITLE',
  'get_subpanel_data' => 'cosib_clienps_sphr_client',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);


// created: 2012-06-29 10:08:46
$layout_defs["sphr_Client"]["subpanel_setup"]["cosib_clienps_sphr_client"] = array (
  'order' => 100,
  'module' => 'Cosib_client_trips',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_COSIB_CLIENT_TRIPS_SPHR_CLIENT_FROM_COSIB_CLIENT_TRIPS_TITLE',
  'get_subpanel_data' => 'cosib_clienps_sphr_client',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);


// created: 2012-06-29 10:15:46
$layout_defs["sphr_Client"]["subpanel_setup"]["cosib_clienps_sphr_client"] = array (
  'order' => 100,
  'module' => 'Cosib_client_trips',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_COSIB_CLIENT_TRIPS_SPHR_CLIENT_FROM_COSIB_CLIENT_TRIPS_TITLE',
  'get_subpanel_data' => 'cosib_clienps_sphr_client',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);



// created: 2012-06-15 11:09:09
$layout_defs["sphr_Client"]["subpanel_setup"]["sphr_clientcosib_messages"] = array (
  'order' => 100,
  'module' => 'cosib_messages',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_SPHR_CLIENT_COSIB_MESSAGES_FROM_COSIB_MESSAGES_TITLE',
  'get_subpanel_data' => 'sphr_clientcosib_messages',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);


// created: 2011-07-20 00:02:59
$layout_defs["sphr_Client"]["subpanel_setup"]["sphr_clientpection_tour_1"] = array (
  'order' => 100,
  'module' => 'sphr_Inspection_tour',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_SPHR_CLIENT_SPHR_INSPECTION_TOUR_1_FROM_SPHR_INSPECTION_TOUR_TITLE',
  'get_subpanel_data' => 'sphr_clientpection_tour_1',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);


// created: 2013-03-03 21:04:26
$layout_defs["sphr_Client"]["subpanel_setup"]["sphr_client_prospect_lists"] = array (
  'order' => 100,
  'module' => 'ProspectList',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_SPHR_CLIENT_PROSPECT_LISTS_FROM_PROSPECT_LISTS_TITLE',
  'get_subpanel_data' => 'sphr_client_prospect_lists',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);




$layout_defs['sphr_Client']['subpanel_setup']['securitygroups'] = array(
	'top_buttons' => array(array('widget_class' => 'SubPanelTopSelectButton', 'popup_module' => 'SecurityGroups', 'mode' => 'MultiSelect'),),
	'order' => 900,
	'sort_by' => 'name',
	'sort_order' => 'asc',
	'module' => 'SecurityGroups',
	'refresh_page'=>1,
	'subpanel_name' => 'default',
	'get_subpanel_data' => 'SecurityGroups',
	'add_subpanel_data' => 'securitygroup_id',
	'title_key' => 'LBL_SECURITYGROUPS_SUBPANEL_TITLE',
);






// created: 2012-04-18 09:35:47
$layout_defs["sphr_Client"]["subpanel_setup"]["sphr_client_documents"] = array (
  'order' => 100,
  'module' => 'Documents',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_SPHR_CLIENT_DOCUMENTS_FROM_DOCUMENTS_TITLE',
  'get_subpanel_data' => 'sphr_client_documents',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);


// created: 2011-11-27 14:30:04
$layout_defs["sphr_Client"]["subpanel_setup"]["sphr_marketny_sphr_client"] = array (
  'order' => 100,
  'module' => 'sphr_market_company',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_SPHR_MARKET_COMPANY_SPHR_CLIENT_FROM_SPHR_MARKET_COMPANY_TITLE',
  'get_subpanel_data' => 'sphr_marketny_sphr_client',
  'top_buttons' => 
  array (
  /*
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
   */
    0 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);


// created: 2011-07-15 16:54:53
$layout_defs["sphr_Client"]["subpanel_setup"]["sphr_client_sphr_reserve"] = array (
  'order' => 100,
  'module' => 'sphr_Reserve',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_SPHR_CLIENT_SPHR_RESERVE_FROM_SPHR_RESERVE_TITLE',
  'get_subpanel_data' => 'sphr_client_sphr_reserve',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);


// created: 2011-07-15 11:43:49
$layout_defs["sphr_Client"]["subpanel_setup"]["sphr_client_sphr_interest"] = array (
  'order' => 100,
  'module' => 'sphr_Interest',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_SPHR_CLIENT_SPHR_INTEREST_FROM_SPHR_INTEREST_TITLE',
  'get_subpanel_data' => 'sphr_client_sphr_interest',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);


// created: 2011-07-15 20:41:16
$layout_defs["sphr_Client"]["subpanel_setup"]["activities"] = array (
  'order' => 10,
  'sort_order' => 'desc',
  'sort_by' => 'date_start',
  'title_key' => 'LBL_ACTIVITIES_SUBPANEL_TITLE',
  'type' => 'collection',
  'subpanel_name' => 'activities',
  'module' => 'Activities',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopCreateTaskButton',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopScheduleMeetingButton',
    ),
    2 => 
    array (
      'widget_class' => 'SubPanelTopScheduleCallButton',
    ),
    3 => 
    array (
      'widget_class' => 'SubPanelTopComposeEmailButton',
    ),
  ),
  'collection_list' => 
  array (
    'meetings' => 
    array (
      'module' => 'Meetings',
      'subpanel_name' => 'ForActivities',
      'get_subpanel_data' => 'sphr_client_activities_meetings',
    ),
    'tasks' => 
    array (
      'module' => 'Tasks',
      'subpanel_name' => 'ForActivities',
      'get_subpanel_data' => 'sphr_client_activities_tasks',
    ),
    'calls' => 
    array (
      'module' => 'Calls',
      'subpanel_name' => 'ForActivities',
      'get_subpanel_data' => 'sphr_client_activities_calls',
    ),
  ),
  'get_subpanel_data' => 'activities',
);
$layout_defs["sphr_Client"]["subpanel_setup"]["history"] = array (
  'order' => 20,
  'sort_order' => 'desc',
  'sort_by' => 'date_modified',
  'title_key' => 'LBL_HISTORY',
  'type' => 'collection',
  'subpanel_name' => 'history',
  'module' => 'History',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopCreateNoteButton',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopArchiveEmailButton',
    ),
    2 => 
    array (
      'widget_class' => 'SubPanelTopSummaryButton',
    ),
  ),
  'collection_list' => 
  array (
    'meetings' => 
    array (
      'module' => 'Meetings',
      'subpanel_name' => 'ForHistory',
      'get_subpanel_data' => 'sphr_client_activities_meetings',
    ),
    'tasks' => 
    array (
      'module' => 'Tasks',
      'subpanel_name' => 'ForHistory',
      'get_subpanel_data' => 'sphr_client_activities_tasks',
    ),
    'calls' => 
    array (
      'module' => 'Calls',
      'subpanel_name' => 'ForHistory',
      'get_subpanel_data' => 'sphr_client_activities_calls',
    ),
    'notes' => 
    array (
      'module' => 'Notes',
      'subpanel_name' => 'ForHistory',
      'get_subpanel_data' => 'sphr_client_activities_notes',
    ),
    'emails' => 
    array (
      'module' => 'Emails',
      'subpanel_name' => 'ForHistory',
      'get_subpanel_data' => 'sphr_client_activities_emails',
    ),
  ),
  'get_subpanel_data' => 'history',
);


//auto-generated file DO NOT EDIT
$layout_defs['sphr_Client']['subpanel_setup']['sphr_marketel_sphr_client']['override_subpanel_name'] = 'sphr_Client_subpanel_sphr_marketel_sphr_client';


//auto-generated file DO NOT EDIT
$layout_defs['sphr_Client']['subpanel_setup']['sphr_client_sphr_interest']['override_subpanel_name'] = 'sphr_Client_subpanel_sphr_client_sphr_interest';


//auto-generated file DO NOT EDIT
$layout_defs['sphr_Client']['subpanel_setup']['sphr_clientcosib_messages']['override_subpanel_name'] = 'sphr_Client_subpanel_sphr_clientcosib_messages';


//auto-generated file DO NOT EDIT
$layout_defs['sphr_Client']['subpanel_setup']['cosib_clienps_sphr_client']['override_subpanel_name'] = 'sphr_Client_subpanel_cosib_clienps_sphr_client';


//auto-generated file DO NOT EDIT
$layout_defs['sphr_Client']['subpanel_setup']['sphr_client_cosib_queries']['override_subpanel_name'] = 'sphr_Client_subpanel_sphr_client_cosib_queries';


//auto-generated file DO NOT EDIT
$layout_defs['sphr_Client']['subpanel_setup']['sphr_client_opportunities']['override_subpanel_name'] = 'sphr_Client_subpanel_sphr_client_opportunities';


//auto-generated file DO NOT EDIT
$layout_defs['sphr_Client']['subpanel_setup']['opportunities_sphr_client']['override_subpanel_name'] = 'sphr_Client_subpanel_opportunities_sphr_client';


//auto-generated file DO NOT EDIT
$layout_defs['sphr_Client']['subpanel_setup']['sphr_marketny_sphr_client']['override_subpanel_name'] = 'sphr_Client_subpanel_sphr_marketny_sphr_client';


//auto-generated file DO NOT EDIT
$layout_defs['sphr_Client']['subpanel_setup']['sphr_clientnspection_tour']['override_subpanel_name'] = 'sphr_Client_subpanel_sphr_clientnspection_tour';


//auto-generated file DO NOT EDIT
$layout_defs['sphr_Client']['subpanel_setup']['sphr_client_sphr_object']['override_subpanel_name'] = 'sphr_Client_subpanel_sphr_client_sphr_object';

?>