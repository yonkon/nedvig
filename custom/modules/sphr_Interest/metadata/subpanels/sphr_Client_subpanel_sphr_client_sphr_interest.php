<?php
// created: 2012-03-08 23:51:16
$subpanel_layout['list_fields'] = array (
  'type_c' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_TYPE',
    'sortable' => false,
    'width' => '10%',
	//'link' => true,
	'widget_class' => 'SubPanelDetailViewLink',
  ),
  'country' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_COUNTRY',
    'sortable' => false,
    'width' => '10%',
  ),
  'room_count' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_ROOM_COUNT',
    'sortable' => false,
    'width' => '10%',
  ),
  'sphr_object_interest_name' => 
  array (
    'type' => 'relate',
    'link' => 'sphr_object_sphr_interest',
    'vname' => 'LBL_SPHR_OBJECT_SPHR_INTEREST_FROM_SPHR_OBJECT_TITLE',
    'width' => '10%',
    'default' => true,
  ),
  'date_entered' => 
  array (
    'type' => 'datetime',
    'vname' => 'LBL_DATE_ENTERED',
    'width' => '10%',
    'default' => true,
  ),
  'assigned_user_name' => 
  array (
    'link' => 'assigned_user_link',
    'type' => 'relate',
    'vname' => 'LBL_ASSIGNED_TO_NAME',
    'width' => '10%',
    'default' => true,
  ),
  'edit_button' => 
  array (
    'widget_class' => 'SubPanelEditButton',
    'module' => 'sphr_Interest',
    'width' => '4%',
    'default' => true,
  ),
  'remove_button' => 
  array (
    'widget_class' => 'SubPanelRemoveButton',
    'module' => 'sphr_Interest',
    'width' => '5%',
    'default' => true,
  ),
);
?>
