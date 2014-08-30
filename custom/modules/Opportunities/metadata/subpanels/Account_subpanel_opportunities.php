<?php
// created: 2012-03-11 16:58:20
$subpanel_layout['list_fields'] = array (
  'name' => 
  array (
    'name' => 'name',
    'vname' => 'LBL_LIST_OPPORTUNITY_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'width' => '40%',
    'default' => true,
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
  'sphr_objectrtunities_name' => 
  array (
    'type' => 'relate',
    'link' => 'sphr_object_opportunities',
    'vname' => 'LBL_SPHR_OBJECT_OPPORTUNITIES_FROM_SPHR_OBJECT_TITLE',
    'width' => '10%',
    'default' => true,
  ),
  'payment_object' => 
  array (
    'type' => 'varchar',
    'vname' => 'LBL_PAYMENT_OBJECT',
    'width' => '10%',
    'default' => true,
  ),
  'sphr_intermrtunities_name' => 
  array (
    'type' => 'relate',
    'link' => 'sphr_interm_opportunities',
    'vname' => 'LBL_SPHR_INTERMEDIARY_OPPORTUNITIES_FROM_SPHR_INTERMEDIARY_TITLE',
    'width' => '10%',
    'default' => true,
  ),
  'assigned_user_name' => 
  array (
    'name' => 'assigned_user_name',
    'vname' => 'LBL_LIST_ASSIGNED_TO_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'target_record_key' => 'assigned_user_id',
    'target_module' => 'Employees',
    'width' => '10%',
    'default' => true,
  ),
  'edit_button' => 
  array (
    'vname' => 'LBL_EDIT_BUTTON',
    'widget_class' => 'SubPanelEditButton',
    'module' => 'Opportunities',
    'width' => '4%',
    'default' => true,
  ),
  'currency_id' => 
  array (
    'usage' => 'query_only',
  ),
);
?>
