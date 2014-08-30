<?php
// created: 2011-07-15 17:02:55
$layout_defs["sphr_Intermediary"]["subpanel_setup"]["sphr_intermiary_sphr_deal"] = array (
  'order' => 100,
  'module' => 'sphr_Deal',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_SPHR_INTERMEDIARY_SPHR_DEAL_FROM_SPHR_DEAL_TITLE',
  'get_subpanel_data' => 'sphr_intermiary_sphr_deal',
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
