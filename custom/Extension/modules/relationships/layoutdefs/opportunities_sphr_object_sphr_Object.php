<?php
// created: 2012-08-08 20:36:01
$layout_defs["sphr_Object"]["subpanel_setup"]["opportunities_sphr_object"] = array (
  'order' => 100,
  'module' => 'Opportunities',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_OPPORTUNITIES_SPHR_OBJECT_FROM_OPPORTUNITIES_TITLE',
  'get_subpanel_data' => 'opportunities_sphr_object',
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
