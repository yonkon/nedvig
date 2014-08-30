<?php
// created: 2012-05-31 11:07:23
$layout_defs["sphr_Object"]["subpanel_setup"]["cosib_queries_sphr_object"] = array (
  'order' => 100,
  'module' => 'cosib_queries',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_COSIB_QUERIES_SPHR_OBJECT_FROM_COSIB_QUERIES_TITLE',
  'get_subpanel_data' => 'cosib_queries_sphr_object',
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
