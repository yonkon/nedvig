<?php
// created: 2012-05-31 11:13:42
$layout_defs["Accounts"]["subpanel_setup"]["accounts_cosib_queries"] = array (
  'order' => 100,
  'module' => 'cosib_queries',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_ACCOUNTS_COSIB_QUERIES_FROM_COSIB_QUERIES_TITLE',
  'get_subpanel_data' => 'accounts_cosib_queries',
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
