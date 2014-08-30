<?php
// created: 2011-07-15 12:27:48
$layout_defs["sphr_Client"]["subpanel_setup"]["sphr_client_sphr_deal"] = array (
  'order' => 100,
  'module' => 'sphr_Deal',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_SPHR_CLIENT_SPHR_DEAL_FROM_SPHR_DEAL_TITLE',
  'get_subpanel_data' => 'sphr_client_sphr_deal',
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
