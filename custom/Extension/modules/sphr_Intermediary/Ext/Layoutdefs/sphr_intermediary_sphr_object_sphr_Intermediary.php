<?php
// created: 2011-08-02 21:19:55
$layout_defs["sphr_Intermediary"]["subpanel_setup"]["sphr_intermry_sphr_object"] = array (
  'order' => 100,
  'module' => 'sphr_Object',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_SPHR_INTERMEDIARY_SPHR_OBJECT_FROM_SPHR_OBJECT_TITLE',
  'get_subpanel_data' => 'sphr_intermry_sphr_object',
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
