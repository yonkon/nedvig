<?php
// created: 2011-11-30 15:03:54
$layout_defs["sphr_market_company"]["subpanel_setup"]["sphr_marketmarket_channel"] = array (
  'order' => 100,
  'module' => 'sphr_market_channel',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_SPHR_MARKET_COMPANY_SPHR_MARKET_CHANNEL_FROM_SPHR_MARKET_CHANNEL_TITLE',
  'get_subpanel_data' => 'sphr_marketmarket_channel',
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
