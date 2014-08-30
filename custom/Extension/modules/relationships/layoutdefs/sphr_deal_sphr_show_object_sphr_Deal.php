<?php
// created: 2011-07-23 21:57:17
$layout_defs["sphr_Deal"]["subpanel_setup"]["sphr_deal_shr_show_object"] = array (
  'order' => 100,
  'module' => 'sphr_Show_object',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_SPHR_DEAL_SPHR_SHOW_OBJECT_FROM_SPHR_SHOW_OBJECT_TITLE',
  'get_subpanel_data' => 'sphr_deal_shr_show_object',
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
