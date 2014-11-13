<?php
$module_name = 'sphr_Object';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' =>
    array (
      'name_eng_c' =>
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_NAME_ENG',
        'width' => '10%',
        'name' => 'name_eng_c',
      ),
    ),
    'advanced_search' =>
    array (
      'name_с' =>
        array (
          'type' => 'name',
          'label' => 'LBL_NAME',
          'width' => '10%',
          'default' => true,
          'name' => 'name',
        ),
      'price_sale_int_c' =>
        array (
          'type' => 'minimax',
          'label' => 'PRICE_SALE_INT_C',
          'width' => '10%',
          'default' => true,
          'name' => 'price_sale_int_c',
        ),
      'price_sale_meter_c' =>
        array (
          'type' => 'minimax',
          'label' => 'PRICE_SALE_METER_C',
          'width' => '10%',
          'default' => true,
          'name' => 'price_sale_meter_c',
        ),
      'name_eng_c' =>
        array (
          'type' => 'varchar',
          'default' => true,
          'label' => 'LBL_NAME_ENG',
          'width' => '10%',
          'name' => 'name_eng_c',
        ),
      'total_area_c' =>
        array (
          'type' => 'minimax',
          'label' => 'TOTAL_AREA_C',
          'width' => '10%',
          'default' => true,
          'name' => 'total_area_c',
        ),
      'area_area_c' =>
        array (
          'type' => 'minimax',
          'label' => 'AREA_AREA_C',
          'width' => '10%',
          'default' => true,
          'name' => 'area_area_c',
        ),
      'number_bedroom_c' =>
        array (
          'type' => 'minimax',
          'default' => true,
          'studio' => 'visible',
          'label' => 'LBL_NUMBER_BEDROOM_C',
          'sortable' => false,
          'width' => '10%',
          'name' => 'number_bedroom_c',
        ),
      'sea_distance_c' =>
        array (
          'type' => 'minimax',
          'default' => true,
          'label' => 'LBL_SEA_DISTANCE_C',
          'width' => '10%',
          'name' => 'sea_distance_c',
        ),
      'view_sea_c' =>
        array (
          'type' => 'bool',
          'default' => true,
          'label' => 'LBL_VIEW_SEA',
          'width' => '10%',
          'name' => 'view_sea_c',
        ),
      'mebel_c' =>
        array (
          'type' => 'bool',
          'default' => true,
          'label' => 'LBL_MEBEL',
          'width' => '10%',
          'name' => 'mebel_c',
        ),
      'first_line_c' =>
        array (
          'type' => 'bool',
          'default' => true,
          'label' => 'Первая линия',
          'width' => '10%',
          'name' => 'first_line_c',
        ),
      'exclusive_c' =>
        array (
          'type' => 'bool',
          'default' => true,
          'label' => 'Эксклюзив',
          'width' => '10%',
          'name' => 'exclusive_c',
        ),
  /*      Эконом да нет
  Горячее предложение да нет
  Эксклюзив да нет
  Продано да нет*/
      'economy_c' =>
        array (
          'type' => 'bool',
          'default' => true,
          'label' => 'Эконом',
          'width' => '10%',
          'name' => 'economy_c',
        ),
      'hot_c' =>
        array (
          'type' => 'bool',
          'default' => true,
          'label' => 'Горячее предложение',
          'width' => '10%',
          'name' => 'hot_c',
        ),
      'sold_c' =>
        array (
          'type' => 'bool',
          'default' => true,
          'label' => 'Продано',
          'width' => '10%',
          'name' => 'sold_c',
        ),
      'type' =>
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_TYPE',
        'sortable' => false,
        'width' => '10%',
        'name' => 'type',
      ),
      'category_c' =>
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_CATEGORY',
        'sortable' => false,
        'width' => '10%',
        'name' => 'category_c',
      ),
      'country' =>
      array(
        'type' => 'name',
        'label' => 'LBL_COUNTRY',
        'width' => '10%',
        'options' => 'countries_dom',
        'default' => true,
        'name' => 'country',
      ),
      'region' =>
      array(
        'type' => 'name',
        'label' => 'LBL_REGION',
        'width' => '10%',
        'default' => true,
        'name' => 'region',
      ),
      'address' =>
      array(
        'type' => 'name',
        'label' => 'LBL_ADDRESS',
        'width' => '10%',
        'default' => true,
        'name' => 'address',
      ),
      'assigned_user_name' =>
        array (
          'link' => 'assigned_user_link',
          'type' => 'enum',
          'function' =>
            array (
              'name' => 'get_user_array',
              'params' =>
                array (
                  0 => false,
                ),
            ),
          'label' => 'LBL_ASSIGNED_TO_NAME',
          'width' => '10%',
          'default' => true,
          'name' => 'assigned_user_name',
        ),
      'date_entered_min' =>
        array (
          'type' => 'date',
          'label' => 'LBL_DATE_ENTERED_MIN',
          'width' => '10%',
          'name' => 'date_entered_min',
        ),
      'date_entered_max' =>
        array (
          'type' => 'date',
          'label' => 'LBL_DATE_ENTERED_MAX',
          'width' => '10%',
          'name' => 'date_entered_max',
        ),

      'date_modified_min' =>
        array (
          'type' => 'date',
          'label' => 'LBL_DATE_MODIFIED_MIN',
          'width' => '10%',
          'name' => 'date_modified_min',
        ),
      'date_modified_max' =>
        array (
          'type' => 'date',
          'label' => 'LBL_DATE_MODIFIED_MAX',
          'width' => '10%',
          'name' => 'date_modified_max',
        ),
    ),
  ),
  'templateMeta' => 
  array (
    'maxColumns' => '4',
//    'widths' =>
//    array (
//      'label' => '10',
//      'field' => '23',
//    ),
  ),
);
?>
