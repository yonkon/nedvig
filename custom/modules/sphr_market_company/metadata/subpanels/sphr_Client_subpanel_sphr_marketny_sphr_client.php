<?php
// created: 2011-11-27 16:25:17
$subpanel_layout['list_fields'] = array (
  'name' => 
  array (
    'vname' => 'LBL_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'width' => '45%',
    'default' => true,
  ),
  'phone' => 
  array (
    'type' => 'varchar',
    'vname' => 'LBL_PHONE',
    'width' => '10%',
    'default' => true,
  ),
  'mc_start_date' => 
  array (
    'type' => 'date',
    'vname' => 'LBL_MC_START_DATE',
    'width' => '10%',
    'default' => true,
  ),
  'mc_end_date' => 
  array (
    'type' => 'date',
    'vname' => 'LBL_MC_END_DATE',
    'width' => '10%',
    'default' => true,
  ),
  'date_modified' => 
  array (
    'vname' => 'LBL_DATE_MODIFIED',
    'width' => '45%',
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
    'module' => 'sphr_market_company',
    'width' => '4%',
    'default' => true,
  ),
  'remove_button' => 
  array (
    'widget_class' => 'SubPanelRemoveButton',
    'module' => 'sphr_market_company',
    'width' => '5%',
    'default' => true,
  ),
);
?>
