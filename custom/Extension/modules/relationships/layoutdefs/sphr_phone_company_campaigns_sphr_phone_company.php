<?php
// created: 2011-11-27 14:05:26
$layout_defs["sphr_phone_company"]["subpanel_setup"]["sphr_phone_pany_campaigns"] = array (
  'order' => 100,
  'module' => 'Campaigns',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_SPHR_PHONE_COMPANY_CAMPAIGNS_FROM_CAMPAIGNS_TITLE',
  'get_subpanel_data' => 'sphr_phone_pany_campaigns',
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
