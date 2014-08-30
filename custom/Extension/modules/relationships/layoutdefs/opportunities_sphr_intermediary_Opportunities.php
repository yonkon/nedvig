<?php
// created: 2011-08-14 19:41:36
$layout_defs["Opportunities"]["subpanel_setup"]["opportunitir_intermediary"] = array (
  'order' => 100,
  'module' => 'sphr_Intermediary',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_OPPORTUNITIES_SPHR_INTERMEDIARY_FROM_SPHR_INTERMEDIARY_TITLE',
  'get_subpanel_data' => 'opportunitir_intermediary',
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
