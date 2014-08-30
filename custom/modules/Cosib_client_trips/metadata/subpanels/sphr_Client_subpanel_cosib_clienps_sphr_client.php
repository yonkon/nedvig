<?php
// created: 2012-07-09 11:35:58
$subpanel_layout['list_fields'] = array (
  'status' =>
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'vname' => 'LBL_STATUS',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
  ),
  'date_arrive' =>
  array (
    'type' => 'date',
    'vname' => 'LBL_DATE_ARRIVE',
    'width' => '10%',
    'default' => true,
  ),
  'date_departure' =>
  array (
    'type' => 'date',
    'vname' => 'LBL_DATE_DEPARTURE',
    'width' => '10%',
    'default' => true,
  ),
  'trip_place' =>
  array (
    'type' => 'varchar',
    'vname' => 'LBL_TRIP_PLACE',
    'width' => '10%',
    'default' => true,
  ),
  'name' =>
  array (
    'vname' => 'LBL_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'width' => '45%',
    'default' => true,
  ),
  'arrival' =>
  array (
    'type' => 'int',
    'vname' => 'LBL_ARRIVAL',
    'width' => '10%',
    'default' => true,
  ),
  'residence' =>
  array (
    'type' => 'text',
    'studio' => 'visible',
    'vname' => 'LBL_RESIDENCE',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
  ),
  'description' =>
  array (
    'type' => 'text',
    'studio' => 'visible',
    'vname' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
  ),
  'assigned_user_name' =>
  array (
    'link' => 'assigned_user_link',
    'type' => 'relate',
    'studio' => 'visible',
    'vname' => 'LBL_ASSIGNED_TO_NAME',
    'width' => '10%',
    'default' => true,
  ),
  'edit_button' =>
  array (
    'widget_class' => 'SubPanelEditButton',
    'module' => 'Cosib_client_trips',
    'width' => '4%',
    'default' => true,
  ),
  'remove_button' =>
  array (
    'widget_class' => 'SubPanelRemoveButton',
    'module' => 'Cosib_client_trips',
    'width' => '5%',
    'default' => true,
  ),
);
?>
