<?php
// created: 2011-07-15 16:55:53
$layout_defs["sphr_Object"]["subpanel_setup"]["sphr_object_sphr_reserve"] = array (
  'order' => 100,
  'module' => 'sphr_Reserve',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_SPHR_OBJECT_SPHR_RESERVE_FROM_SPHR_RESERVE_TITLE',
  'get_subpanel_data' => 'sphr_object_sphr_reserve',
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
