<?php
// created: 2011-07-23 21:56:31
$layout_defs["sphr_Deal"]["subpanel_setup"]["sphr_deal_soffice_meeting"] = array (
  'order' => 100,
  'module' => 'sphr_Office_meeting',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_SPHR_DEAL_SPHR_OFFICE_MEETING_FROM_SPHR_OFFICE_MEETING_TITLE',
  'get_subpanel_data' => 'sphr_deal_soffice_meeting',
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
