<?php
// created: 2011-07-15 11:43:49
$layout_defs["sphr_Client"]["subpanel_setup"]["sphr_client_sphr_interest"] = array (
  'order' => 100,
  'module' => 'sphr_Interest',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_SPHR_CLIENT_SPHR_INTEREST_FROM_SPHR_INTEREST_TITLE',
  'get_subpanel_data' => 'sphr_client_sphr_interest',
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
