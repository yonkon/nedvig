<?php
// created: 2011-11-27 14:30:04
$layout_defs["sphr_market_company"]["subpanel_setup"]["sphr_marketny_sphr_client"] = array (
  'order' => 100,
  'module' => 'sphr_Client',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_SPHR_MARKET_COMPANY_SPHR_CLIENT_FROM_SPHR_CLIENT_TITLE',
  'get_subpanel_data' => 'sphr_marketny_sphr_client',
  'top_buttons' => 
  array (
    /*
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    */
    0 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);
