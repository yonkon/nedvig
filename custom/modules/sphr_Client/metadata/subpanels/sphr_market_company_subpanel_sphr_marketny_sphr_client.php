<?php
// created: 2011-11-30 16:08:07
$subpanel_layout['list_fields'] = array (
  'name' => 
  array (
    'name' => 'name',
    'vname' => 'LBL_LIST_NAME',
    'sort_by' => 'last_name',
    'sort_order' => 'asc',
    'widget_class' => 'SubPanelDetailViewLink',
    'module' => 'sphr_Client',
    'width' => '40%',
    'default' => true,
  ),
  'last_name' => 
  array (
    'type' => 'varchar',
    'vname' => 'LBL_LAST_NAME',
    'width' => '10%',
    'default' => true,
  ),
  'first_name' => 
  array (
    'type' => 'varchar',
    'vname' => 'LBL_FIRST_NAME',
    'width' => '10%',
    'default' => true,
  ),
  'middle_name_c' => 
  array (
    'type' => 'varchar',
    'vname' => 'LBL_MIDDLE_NAME',
    'width' => '10%',
    'default' => true,
  ),
  'phone_mobile' => 
  array (
    'type' => 'int',
    'vname' => 'LBL_PHONE_MOBILE',
    'width' => '10%',
    'default' => true,
  ),
  'status' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_STATUS',
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
    'module' => 'Contacts',
    'width' => '5%',
    'default' => true,
  ),
  'remove_button' => 
  array (
    'widget_class' => 'SubPanelRemoveButton',
    'module' => 'Contacts',
    'width' => '5%',
    'default' => true,
  ),
  /*
 'first_name' => 
  array (
    'name' => 'first_name',
    'usage' => 'query_only',
  ),
  */
  'salutation' => 
  array (
    'name' => 'salutation',
    'usage' => 'query_only',
  ),
  /*
  'last_name' => 
  array (
    'name' => 'last_name',
    'usage' => 'query_only',
  ),
  */
);
?>
