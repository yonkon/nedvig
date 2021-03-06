<?php
// created: 2012-06-15 11:41:16
$subpanel_layout['list_fields'] = array (
  'name' => 
  array (
    'vname' => 'LBL_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'width' => '45%',
    'default' => true,
  ),
  'description' => 
  array (
    'type' => 'text',
    'vname' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
  ),
  'sphr_client_messages_name' => 
  array (
    'type' => 'relate',
    'link' => 'sphr_clientcosib_messages',
    'vname' => 'LBL_SPHR_CLIENT_COSIB_MESSAGES_FROM_SPHR_CLIENT_TITLE',
    'width' => '10%',
    'default' => true,
  ),
  'sphr_object_messages_name' => 
  array (
    'type' => 'relate',
    'link' => 'sphr_objectcosib_messages',
    'vname' => 'LBL_SPHR_OBJECT_COSIB_MESSAGES_FROM_SPHR_OBJECT_TITLE',
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
  'date_entered' => 
  array (
    'type' => 'datetime',
    'vname' => 'LBL_DATE_ENTERED',
    'width' => '10%',
    'default' => true,
  ),
  'remove_button' => 
  array (
    'widget_class' => 'SubPanelRemoveButton',
    'module' => 'cosib_messages',
    'width' => '5%',
    'default' => true,
  ),
);
?>
