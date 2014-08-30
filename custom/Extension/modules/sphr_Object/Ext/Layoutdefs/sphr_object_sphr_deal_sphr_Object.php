<?php
// created: 2011-07-15 18:23:53
$layout_defs["sphr_Object"]["subpanel_setup"]["sphr_object_sphr_deal"] = array (
  'order' => 100,
  'module' => 'sphr_Deal',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_SPHR_OBJECT_SPHR_DEAL_FROM_SPHR_DEAL_TITLE',
  'get_subpanel_data' => 'sphr_object_sphr_deal',
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
