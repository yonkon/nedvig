<?php
// created: 2011-07-15 15:47:43
$layout_defs["sphr_Object"]["subpanel_setup"]["sphr_interest_sphr_object"] = array (
  'order' => 100,
  'module' => 'sphr_Interest',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_SPHR_INTEREST_SPHR_OBJECT_FROM_SPHR_INTEREST_TITLE',
  'get_subpanel_data' => 'sphr_interest_sphr_object',
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
