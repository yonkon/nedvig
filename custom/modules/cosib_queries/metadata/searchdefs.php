<?php
$module_name = 'cosib_queries';
$searchdefs [$module_name] =
array (
  'layout' =>
  array (
    'basic_search' =>
    array (
      'sphr_clientb_queries_name' =>
      array (
        'type' => 'relate',
        'link' => 'sphr_client_cosib_queries',
        'label' => 'LBL_SPHR_CLIENT_COSIB_QUERIES_FROM_SPHR_CLIENT_TITLE',
        'width' => '10%',
        'default' => true,
        'name' => 'sphr_clientb_queries_name',
      ),
      'type_of_query_c' =>
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_TYPE_OF_QUERY',
        'sortable' => false,
        'width' => '10%',
        'name' => 'type_of_query_c',
      ),
      'category_of_object_c' =>
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_CATEGORY_OF_OBJECT',
        'sortable' => false,
        'width' => '10%',
        'name' => 'category_of_object_c',
      ),
      'assigned_user_name' =>
      array (
        'link' => 'assigned_user_link',
        'type' => 'relate',
        'label' => 'LBL_ASSIGNED_TO_NAME',
        'width' => '10%',
        'default' => true,
        'name' => 'assigned_user_name',
      ),
      'status_c' =>
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_STATUS',
        'sortable' => false,
        'width' => '10%',
        'name' => 'status_c',
      ),
      'budget_c' =>
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_BUDGET',
        'sortable' => false,
        'width' => '10%',
        'name' => 'budget_c',
      ),
      'accounts_cob_queries_name' =>
      array (
        'type' => 'relate',
        'link' => 'accounts_cosib_queries',
        'label' => 'LBL_ACCOUNTS_COSIB_QUERIES_FROM_ACCOUNTS_TITLE',
        'width' => '10%',
        'default' => true,
        'name' => 'accounts_cob_queries_name',
      ),
    ),
    'advanced_search' =>
    array (
      'sphr_clientb_queries_name' =>
      array (
        'type' => 'relate',
        'link' => 'sphr_client_cosib_queries',
        'label' => 'LBL_SPHR_CLIENT_COSIB_QUERIES_FROM_SPHR_CLIENT_TITLE',
        'width' => '10%',
        'default' => true,
        'name' => 'sphr_clientb_queries_name',
      ),
      'type_of_query_c' =>
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_TYPE_OF_QUERY',
        'sortable' => false,
        'width' => '10%',
        'name' => 'type_of_query_c',
      ),
      'province_c' =>
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_PROVINCE',
        'sortable' => false,
        'width' => '10%',
        'name' => 'province_c',
      ),
      'assigned_user_id' =>
      array (
        'name' => 'assigned_user_id',
        'label' => 'LBL_ASSIGNED_TO',
        'type' => 'enum',
        'function' =>
        array (
          'name' => 'get_user_array',
          'params' =>
          array (
            0 => false,
          ),
        ),
        'width' => '10%',
        'default' => true,
      ),
      'status_c' =>
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_STATUS',
        'sortable' => false,
        'width' => '10%',
        'name' => 'status_c',
      ),
      'coast_c' =>
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_COAST',
        'sortable' => false,
        'width' => '10%',
        'name' => 'coast_c',
      ),
      'accounts_cob_queries_name' =>
      array (
        'type' => 'relate',
        'link' => 'accounts_cosib_queries',
        'label' => 'LBL_ACCOUNTS_COSIB_QUERIES_FROM_ACCOUNTS_TITLE',
        'width' => '10%',
        'default' => true,
        'name' => 'accounts_cob_queries_name',
      ),
      'category_of_object_c' =>
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_CATEGORY_OF_OBJECT',
        'sortable' => false,
        'width' => '10%',
        'name' => 'category_of_object_c',
      ),
      'settlement_c' =>
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_SETTLEMENT',
        'sortable' => false,
        'width' => '10%',
        'name' => 'settlement_c',
      ),
      '0' => '',
      'budget_c' =>
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_BUDGET',
        'sortable' => false,
        'width' => '10%',
        'name' => 'budget_c',
      ),
    ),
  ),
  'templateMeta' =>
  array (
    'maxColumns' => '3',
    'widths' =>
    array (
      'label' => '10',
      'field' => '30',
    ),

  ),
);
?>
