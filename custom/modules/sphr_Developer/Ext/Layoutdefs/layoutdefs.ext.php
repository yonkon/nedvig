<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2011-08-02 21:19:01
$layout_defs["sphr_Developer"]["subpanel_setup"]["sphr_develoer_sphr_object"] = array (
  'order' => 100,
  'module' => 'sphr_Object',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_SPHR_DEVELOPER_SPHR_OBJECT_FROM_SPHR_OBJECT_TITLE',
  'get_subpanel_data' => 'sphr_develoer_sphr_object',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);


// created: 2011-08-16 17:50:38
$layout_defs["sphr_Developer"]["subpanel_setup"]["sphr_developer_contacts"] = array (
  'order' => 100,
  'module' => 'Contacts',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_SPHR_DEVELOPER_CONTACTS_FROM_CONTACTS_TITLE',
  'get_subpanel_data' => 'sphr_developer_contacts',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);


//auto-generated file DO NOT EDIT
$layout_defs['sphr_Developer']['subpanel_setup']['sphr_develoer_sphr_object']['override_subpanel_name'] = 'sphr_Developer_subpanel_sphr_develoer_sphr_object';

?>