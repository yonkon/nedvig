<?php
// created: 2011-08-02 21:20:35
$layout_defs["sphr_Owner"]["subpanel_setup"]["sphr_owner_sphr_object"] = array (
  'order' => 100,
  'module' => 'sphr_Object',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_SPHR_OWNER_SPHR_OBJECT_FROM_SPHR_OBJECT_TITLE',
  'get_subpanel_data' => 'sphr_owner_sphr_object',
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
