<?php
// created: 2013-01-31 16:05:25
$subpanel_layout['list_fields'] = array (
  'name' => 
  array (
    'vname' => 'LBL_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'width' => '10%',
    'default' => true,
  ),
  'type' => 
  array (
    'vname' => 'LBL_TYPE',
    'width' => '10%',
    'default' => true,
  ),
  'object_status_c' => 
  array (
    'vname' => 'LBL_OBJECT_STATUS',
    'width' => '10%',
    'default' => true,
  ),
  'category_c' => 
  array (
    'vname' => 'LBL_CATEGORY',
    'width' => '10%',
    'default' => true,
  ),
  'budjet_c' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_BUDJET',
    'sortable' => false,
    'width' => '10%',
  ),
  'description' => 
  array (
    'type' => 'text',
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
    'module' => 'sphr_Object',
    'width' => '10%',
    'default' => true,
  ),
  'remove_button' => 
  array (
    'widget_class' => 'SubPanelRemoveButton',
    'module' => 'sphr_Object',
    'width' => '10%',
    'default' => true,
  ),
);
?>
