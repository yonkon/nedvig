<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2013-03-03 21:04:26
$layout_defs["ProspectLists"]["subpanel_setup"]["sphr_client_prospect_lists"] = array (
  'order' => 100,
  'module' => 'sphr_Client',
  'subpanel_name' => 'ForProspectLists',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_SPHR_CLIENT_PROSPECT_LISTS_FROM_SPHR_CLIENT_TITLE',
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



$layout_defs['ProspectLists']['subpanel_setup']['securitygroups'] = array(
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





?>