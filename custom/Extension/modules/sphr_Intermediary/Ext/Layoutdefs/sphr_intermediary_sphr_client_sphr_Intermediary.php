<?php
// created: 2011-07-15 17:02:16
$layout_defs["sphr_Intermediary"]["subpanel_setup"]["sphr_intermry_sphr_client"] = array (
  'order' => 100,
  'module' => 'sphr_Client',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_SPHR_INTERMEDIARY_SPHR_CLIENT_FROM_SPHR_CLIENT_TITLE',
  'get_subpanel_data' => 'sphr_intermry_sphr_client',
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
