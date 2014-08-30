<?php
// created: 2012-06-15 11:10:36
$layout_defs["sphr_Object"]["subpanel_setup"]["sphr_objectcosib_messages"] = array (
  'order' => 100,
  'module' => 'cosib_messages',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_SPHR_OBJECT_COSIB_MESSAGES_FROM_COSIB_MESSAGES_TITLE',
  'get_subpanel_data' => 'sphr_objectcosib_messages',
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
