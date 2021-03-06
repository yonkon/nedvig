<?php
$popupMeta = array (
    'moduleMain' => 'sphr_Object',
    'varName' => 'sphr_Object',
    'orderBy' => 'sphr_object.name',
    'whereClauses' => array (
  'name' => 'sphr_object.name',
  'type' => 'sphr_object.type',
  'category_c' => 'sphr_object_cstm.category_c',
  'object_status_c' => 'sphr_object_cstm.object_status_c',
  'assigned_user_name' => 'sphr_object.assigned_user_name',
  'price_sale_int_c' => 'sphr_object_cstm.price_sale_int_c',
  'seller_price_sale_int_c' => 'sphr_object_cstm.seller_price_sale_int_c',
  'price_rent_int_c' => 'sphr_object_cstm.price_rent_int_c',
  'seller_price_rent_int_c' => 'sphr_object_cstm.seller_price_rent_int_c',
  'id_object_c' => 'sphr_object_cstm.id_object_c',
  'country' => 'sphr_object.country',
),
    'searchInputs' => array (
  7 => 'name',
  8 => 'type',
  12 => 'category_c',
  13 => 'object_status_c',
  14 => 'assigned_user_name',
  15 => 'price_sale_int_c',
  16 => 'seller_price_sale_int_c',
  17 => 'price_rent_int_c',
  18 => 'seller_price_rent_int_c',
  20 => 'id_object_c',
),
    'searchdefs' => array (
  'id_object_c' =>
  array (
    'type' => 'int',
    'label' => 'LBL_ID_OBJECT',
    'width' => '10%',
    'name' => 'id_object_c',
  ),
  'name' =>
  array (
    'type' => 'varchar',
    'label' => 'LBL_NAME',
    'width' => '10%',
    'name' => 'name',
  ),
  'type' =>
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_TYPE',
    'sortable' => false,
    'width' => '10%',
    'name' => 'type',
  ),
  'category_c' =>
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_CATEGORY',
    'sortable' => false,
    'width' => '10%',
    'name' => 'category_c',
  ),
  'object_status_c' =>
  array (
    'type' => 'multienum',
    'studio' => 'visible',
    'label' => 'LBL_OBJECT_STATUS',
    'width' => '10%',
    'name' => 'object_status_c',
  ),
  'price_sale_int_c' =>
  array (
    'type' => 'int',
    'label' => 'LBL_PRICE_SALE_INT',
    'width' => '10%',
    'name' => 'price_sale_int_c',
  ),
  'seller_price_sale_int_c' =>
  array (
    'type' => 'int',
    'label' => 'LBL_SELLER_PRICE_SALE_INT',
    'width' => '10%',
    'name' => 'seller_price_sale_int_c',
  ),
  'price_rent_int_c' =>
  array (
    'type' => 'int',
    'label' => 'LBL_PRICE_RENT_INT',
    'width' => '10%',
    'name' => 'price_rent_int_c',
  ),
  'seller_price_rent_int_c' =>
  array (
    'type' => 'int',
    'label' => 'LBL_SELLER_PRICE_RENT_INT',
    'width' => '10%',
    'name' => 'seller_price_rent_int_c',
  ),
  'assigned_user_name' =>
  array (
    'link' => 'assigned_user_link',
    'type' => 'relate',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'width' => '10%',
    'name' => 'assigned_user_name',
  ),
),
    'listviewdefs' => array (
  'NAME' =>
  array (
    'type' => 'varchar',
    'label' => 'LBL_NAME',
    'width' => '10%',
    'default' => true,
    'name' => 'name',
    'link' => true,
  ),
  'TYPE' =>
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_TYPE',
    'sortable' => false,
    'width' => '10%',
    'name' => 'type',
  ),
  'CATEGORY_C' =>
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_CATEGORY',
    'sortable' => false,
    'width' => '10%',
    'name' => 'category_c',
  ),
  'OBJECT_STATUS_C' =>
  array (
    'type' => 'multienum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_OBJECT_STATUS',
    'width' => '10%',
    'name' => 'object_status_c',
  ),
  'PRICE_SALE_INT_C' =>
  array (
    'type' => 'int',
    'default' => true,
    'label' => 'LBL_PRICE_SALE_INT',
    'width' => '10%',
    'name' => 'price_sale_int_c',
  ),
  'SELLER_PRICE_SALE_INT_C' =>
  array (
    'type' => 'int',
    'default' => true,
    'label' => 'LBL_SELLER_PRICE_SALE_INT',
    'width' => '10%',
    'name' => 'seller_price_sale_int_c',
  ),
  'PRICE_RENT_INT_C' =>
  array (
    'type' => 'int',
    'default' => true,
    'label' => 'LBL_PRICE_RENT_INT',
    'width' => '10%',
    'name' => 'price_rent_int_c',
  ),
  'SELLER_PRICE_RENT_INT_C' =>
  array (
    'type' => 'int',
    'default' => true,
    'label' => 'LBL_SELLER_PRICE_RENT_INT',
    'width' => '10%',
    'name' => 'seller_price_rent_int_c',
  ),
  'ASSIGNED_USER_NAME' =>
  array (
    'link' => 'assigned_user_link',
    'type' => 'relate',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'width' => '10%',
    'default' => true,
    'name' => 'assigned_user_name',
  ),
),
);
