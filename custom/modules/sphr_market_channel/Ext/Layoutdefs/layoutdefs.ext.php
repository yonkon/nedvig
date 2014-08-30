<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2011-12-18 00:22:36
$layout_defs["sphr_market_channel"]["subpanel_setup"]["sphr_market_sphr_client_1"] = array (
  'order' => 100,
  'module' => 'sphr_Client',
  'subpanel_name' => 'sphr_market_channel_subpanel_sphr_marketel_sphr_client',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_SPHR_MARKET_CHANNEL_SPHR_CLIENT_1_FROM_SPHR_CLIENT_TITLE',
  'get_subpanel_data' => 'sphr_market_sphr_client_1',
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


// created: 2011-11-27 14:29:49
$layout_defs["sphr_market_channel"]["subpanel_setup"]["sphr_marketmarket_channel"] = array (
  'order' => 100,
  'module' => 'sphr_market_company',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_SPHR_MARKET_COMPANY_SPHR_MARKET_CHANNEL_FROM_SPHR_MARKET_COMPANY_TITLE',
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


// created: 2011-11-27 15:19:25
$layout_defs["sphr_market_channel"]["subpanel_setup"]["sphr_marketel_sphr_client"] = array (
  'order' => 100,
  'module' => 'sphr_Client',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_SPHR_MARKET_CHANNEL_SPHR_CLIENT_FROM_SPHR_CLIENT_TITLE',
  'get_subpanel_data' => 'sphr_marketel_sphr_client',
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

?>