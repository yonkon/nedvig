<?php
// created: 2012-06-08 12:32:07
$subpanel_layout['list_fields'] = array (
  'type_of_query_c' =>
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_TYPE_OF_QUERY',
    'sortable' => false,
    'width' => '10%',
    'widget_class' => 'SubPanelDetailViewLink',
  ),
  'status_c' =>
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_STATUS',
    'sortable' => false,
    'width' => '10%',
  ),
  'category_of_object_c' =>
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_CATEGORY_OF_OBJECT',
    'sortable' => false,
    'width' => '10%',
  ),
  'budget_c' =>
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_BUDGET',
    'sortable' => false,
    'width' => '10%',
  ),
  'settlement_c' =>
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_SETTLEMENT',
    'sortable' => false,
    'width' => '10%',
  ),
  'quantity_of_bedroom_c' =>
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_QUANTITY_OF_BEDROOM',
    'sortable' => false,
    'width' => '10%',
  ),
  'remoteness_from_sea_c' =>
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_REMOTENESS_FROM_SEA',
    'sortable' => false,
    'width' => '10%',
  ),
  'remoteness_from_commercial_c' =>
  array (
    'type' => 'bool',
    'default' => true,
    'vname' => 'LBL_REMOTENESS_FROM_COMMERCIAL',
    'width' => '10%',
  ),
  'airport_road_c' =>
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_AIRPORT_ROAD',
    'sortable' => false,
    'width' => '10%',
  ),
  'view_of_sea_c' =>
  array (
    'type' => 'bool',
    'default' => true,
    'vname' => 'LBL_VIEW_OF_SEA',
    'width' => '10%',
  ),
  'area_c' =>
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_AREA',
    'sortable' => false,
    'width' => '10%',
  ),
  'additional_desc_c' =>
  array (
    'type' => 'text',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_ADDITIONAL_DESC',
    'sortable' => false,
    'width' => '10%',
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
    'module' => 'cosib_queries',
    'width' => '4%',
    'default' => true,
  ),
  'remove_button' =>
  array (
    'widget_class' => 'SubPanelRemoveButton',
    'module' => 'cosib_queries',
    'width' => '5%',
    'default' => true,
  ),
);
?>