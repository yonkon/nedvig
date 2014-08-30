<?php
// created: 2013-03-03 21:04:26
$layout_defs["sphr_Client"]["subpanel_setup"]["sphr_client_prospect_lists"] = array (
  'order' => 100,
  'module' => 'ProspectList',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_SPHR_CLIENT_PROSPECT_LISTS_FROM_PROSPECT_LISTS_TITLE',
  'get_subpanel_data' => 'sphr_client_prospect_lists',
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