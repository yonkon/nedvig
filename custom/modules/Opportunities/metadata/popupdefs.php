<?php
$popupMeta = array (
    'moduleMain' => 'Opportunity',
    'varName' => 'OPPORTUNITY',
    'orderBy' => 'name',
    'whereClauses' => array (
  'name' => 'opportunities.name',
  'discount_apply_c' => 'opportunities_cstm.discount_apply_c',
  'status_c' => 'opportunities_cstm.status_c',
  'assigned_user_id' => 'opportunities.assigned_user_id',
),
    'searchInputs' => array (
  0 => 'name',
  2 => 'discount_apply_c',
  3 => 'status_c',
  4 => 'assigned_user_id',
),
    'searchdefs' => array (
  'name' => 
  array (
    'name' => 'name',
    'width' => '10%',
  ),
  'discount_apply_c' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_DISCOUNT_APPLY ',
    'width' => '10%',
    'name' => 'discount_apply_c',
  ),
  'status_c' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_STATUS',
    'sortable' => false,
    'width' => '10%',
    'name' => 'status_c',
  ),
  'assigned_user_id' => 
  array (
    'name' => 'assigned_user_id',
    'type' => 'enum',
    'label' => 'LBL_ASSIGNED_TO',
    'function' => 
    array (
      'name' => 'get_user_array',
      'params' => 
      array (
        0 => false,
      ),
    ),
    'width' => '10%',
  ),
),
    'listviewdefs' => array (
  'NAME' => 
  array (
    'width' => '30%',
    'label' => 'LBL_LIST_OPPORTUNITY_NAME',
    'link' => true,
    'default' => true,
    'name' => 'name',
  ),
  'SPHR_CLIENTRTUNITIES_NAME' => 
  array (
    'type' => 'relate',
    'link' => 'sphr_client_opportunities',
    'label' => 'LBL_SPHR_CLIENT_OPPORTUNITIES_FROM_SPHR_CLIENT_TITLE',
    'width' => '10%',
    'default' => true,
  ),
  'DISCOUNT_APPLY_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_DISCOUNT_APPLY ',
    'width' => '10%',
    'name' => 'discount_apply_c',
  ),
  'STATUS_C' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_STATUS',
    'sortable' => false,
    'width' => '10%',
    'name' => 'status_c',
  ),
  'SPHR_OBJECTRTUNITIES_NAME' => 
  array (
    'type' => 'relate',
    'link' => 'sphr_object_opportunities',
    'label' => 'LBL_SPHR_OBJECT_OPPORTUNITIES_FROM_SPHR_OBJECT_TITLE',
    'width' => '10%',
    'default' => true,
  ),
  'PAYMENT_OBJECT' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_PAYMENT_OBJECT',
    'width' => '10%',
    'default' => true,
  ),
  'SPHR_INTERMRTUNITIES_NAME' => 
  array (
    'type' => 'relate',
    'link' => 'sphr_interm_opportunities',
    'label' => 'LBL_SPHR_INTERMEDIARY_OPPORTUNITIES_FROM_SPHR_INTERMEDIARY_TITLE',
    'width' => '10%',
    'default' => true,
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '5%',
    'label' => 'LBL_LIST_ASSIGNED_USER',
    'default' => true,
    'name' => 'assigned_user_name',
  ),
),
);
