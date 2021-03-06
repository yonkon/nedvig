<?php
// created: 2012-07-09 11:55:30
$subpanel_layout['list_fields'] = array (
  'cosib_clienhr_client_name' =>
  array (
    'type' => 'relate',
    'link' => 'cosib_clienps_sphr_client',
    'vname' => 'LBL_COSIB_CLIENT_TRIPS_SPHR_CLIENT_FROM_SPHR_CLIENT_TITLE',
    'width' => '10%',
    'widget_class' => 'SubPanelDetailViewLink',
    'default' => true,
  ),
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
    'type' => 'datetimecombo',
    'vname' => 'LBL_DATE_ARRIVE',
    'width' => '10%',
    'default' => true,
  ),
  'date_departure' =>
  array (
    'type' => 'datetimecombo',
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
