<?php
$module_name = 'cosib_queries';
$listViewDefs [$module_name] = 
array (
  'TYPE_OF_QUERY_C' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_TYPE_OF_QUERY',
    'sortable' => true,
    'width' => '10%',
    'link' => true,
  ),
  'STATUS_C' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_STATUS',
    'sortable' => true,
    'width' => '10%',
  ),
  'SPHR_CLIENTB_QUERIES_NAME' => 
  array (
    'type' => 'relate',
    'link' => 'sphr_client_cosib_queries',
    'label' => 'LBL_SPHR_CLIENT_COSIB_QUERIES_FROM_SPHR_CLIENT_TITLE',
    'width' => '10%',
    'default' => true,
  ),
  'CATEGORY_OF_OBJECT_C' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_CATEGORY_OF_OBJECT',
    'sortable' => true,
    'width' => '10%',
  ),
  'BUDGET_C' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_BUDGET',
    'sortable' => true,
    'width' => '10%',
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => true,
  ),
);
?>
