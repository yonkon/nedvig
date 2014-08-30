<?php
$module_name='sphr_Client';
$subpanel_layout = array (
  'top_buttons' =>
  array (
//    0 =>
//    array (
//      'widget_class' => 'SubPanelTopCreateButton',
//    ),
    0 =>
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'popup_module' => 'People',
    ),
  ),
  'where' => '',
  'list_fields' =>
  array (
    'first_name' =>
    array (
      'name' => 'first_name',
      'usage' => 'query_only',
    ),
    'salutation' =>
    array (
      'name' => 'salutation',
      'usage' => 'query_only',
    ),
    'name' =>
    array (
      'name' => 'name',
      'vname' => 'LBL_LIST_NAME',
      'sort_by' => 'last_name',
      'sort_order' => 'asc',
      'widget_class' => 'SubPanelDetailViewLink',
      'module' => 'Contacts',
      'width' => '40%',
    ),
    'phone_mobile' =>
	  array (
	  	'name' => 'phone_mobile',
	  	'vname' => 'LBL_PHONE_MOBILE',

	  ),
    'email1' =>
     array(
 		 	'vname' => 'LBL_LIST_EMAIL',
            'widget_class' => 'SubPanelEmailLink',
			'width' => '20%',
		),
    'assigned_user_name' =>
    array(
 		 	'vname' => 'LBL_ASSIGNED_TO',
			'width' => '20%',
		),
    'edit_button' =>
    array (
      'widget_class' => 'SubPanelEditButton',
      'module' => 'Contacts',
      'width' => '5%',
    ),
    'remove_button' =>
    array (
      'widget_class' => 'SubPanelRemoveButton',
      'module' => 'Contacts',
      'width' => '5%',
    ),
    'last_name' =>
    array (
      'name' => 'last_name',
      'usage' => 'query_only',
    ),
  ),
);