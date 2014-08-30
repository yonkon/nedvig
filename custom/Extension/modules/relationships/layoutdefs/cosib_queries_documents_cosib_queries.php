<?php
// created: 2012-05-31 11:08:10
$layout_defs["cosib_queries"]["subpanel_setup"]["cosib_queries_documents"] = array (
  'order' => 100,
  'module' => 'Documents',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_COSIB_QUERIES_DOCUMENTS_FROM_DOCUMENTS_TITLE',
  'get_subpanel_data' => 'cosib_queries_documents',
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
