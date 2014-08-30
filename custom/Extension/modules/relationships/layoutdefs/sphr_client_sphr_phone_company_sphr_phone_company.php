<?php
// created: 2011-10-31 16:53:17
$layout_defs["sphr_phone_company"]["subpanel_setup"]["sphr_client_phone_company"] = array (
  'order' => 100,
  'module' => 'sphr_Client',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_SPHR_CLIENT_SPHR_PHONE_COMPANY_FROM_SPHR_CLIENT_TITLE',
  'get_subpanel_data' => 'sphr_client_phone_company',
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
