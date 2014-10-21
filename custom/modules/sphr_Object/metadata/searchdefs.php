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
      'name' => 
      array (
        'type' => 'name',
        'label' => 'LBL_NAME',
        'width' => '10%',
        'default' => true,
        'name' => 'name',
      ),
      'price_sale_int_c_min' =>
          array (
              'type' => 'int',
              'label' => 'PRICE_SALE_INT_C_MIN',
              'width' => '10%',
              'default' => true,
              'name' => 'price_sale_int_c_min',
          ),
      'price_sale_int_c_max' =>
          array (
              'type' => 'int',
              'label' => 'PRICE_SALE_INT_C_MAX',
              'width' => '10%',
              'default' => true,
              'name' => 'price_sale_int_c_max',
          ),
      'price_sale_meter_c_min' =>
          array (
              'type' => 'int',
              'label' => 'PRICE_SALE_METER_C_MIN',
              'width' => '10%',
              'default' => true,
              'name' => 'price_sale_meter_c_min',
          ),
      'price_sale_meter_c_max' =>
          array (
              'type' => 'int',
              'label' => 'PRICE_SALE_METER_C_MAX',
              'width' => '10%',
              'default' => true,
              'name' => 'price_sale_meter_c_max',
          ),
      'name_eng_c' =>
        array (
          'type' => 'varchar',
          'default' => true,
          'label' => 'LBL_NAME_ENG',
          'width' => '10%',
          'name' => 'name_eng_c',
        ),
      'total_area_c_min' =>
        array (
          'type' => 'int',
          'label' => 'TOTAL_AREA_C_MIN',
          'width' => '10%',
          'default' => true,
          'name' => 'total_area_c_min',
        ),
      'total_area_c_max' =>
        array (
          'type' => 'int',
          'label' => 'TOTAL_AREA_C_MAX',
          'width' => '10%',
          'default' => true,
          'name' => 'total_area_c_max',
        ),
      'area_area_c_min' =>
        array (
          'type' => 'int',
          'label' => 'AREA_AREA_C_MIN',
          'width' => '10%',
          'default' => true,
          'name' => 'area_area_c_min',
        ),
      'area_area_c_max' =>
        array (
          'type' => 'int',
          'label' => 'AREA_AREA_C_MAX',
          'width' => '10%',
          'default' => true,
          'name' => 'area_area_c_max',
        ),
      'number_bedroom_c_min' =>
        array (
          'type' => 'int',
          'default' => true,
          'studio' => 'visible',
          'label' => 'LBL_NUMBER_BEDROOM_C_MIN',
          'sortable' => false,
          'width' => '10%',
          'name' => 'number_bedroom_c_min',
        ),
      'number_bedroom_c_max' =>
        array (
          'type' => 'int',
          'default' => true,
          'studio' => 'visible',
          'label' => 'LBL_NUMBER_BEDROOM_C_MAX',
          'sortable' => false,
          'width' => '10%',
          'name' => 'number_bedroom_c_max',
        ),
      'sea_distance_c_min' =>
        array (
          'type' => 'int',
          'default' => true,
          'label' => 'LBL_SEA_DISTANCE_C_MIN',
          'width' => '10%',
          'name' => 'sea_distance_c_min',
        ),
      'sea_distance_c_max' =>
        array (
          'type' => 'int',
          'default' => true,
          'label' => 'LBL_SEA_DISTANCE_C_MAX',
          'width' => '10%',
          'name' => 'sea_distance_c_max',
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
      'city_area_c' =>
        array (
          'type' => 'bool',
          'default' => true,
          'label' => 'Первая линия',
          'width' => '10%',
          'name' => 'city_area_c',
        ),
        'green_area_c' =>
        array (
          'type' => 'bool',
          'default' => true,
          'label' => 'Эксклюзив',
          'width' => '10%',
          'name' => 'green_area_c',
        ),
/*      Эконом да нет
Горячее предложение да нет
Эксклюзив да нет
Продано да нет*/
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
//
//      'coast_select_c' =>
//      array (
//        'type' => 'enum',
//        'default' => true,
//        'studio' => 'visible',
//        'label' => 'LBL_COAST_SELECT',
//        'sortable' => false,
//        'width' => '10%',
//        'name' => 'coast_select_c',
//      ),
//      'community_select_c' =>
//      array (
//        'type' => 'enum',
//        'default' => true,
//        'studio' => 'visible',
//        'label' => 'LBL_COMMUNITY_SELECT',
//        'sortable' => false,
//        'width' => '10%',
//        'name' => 'community_select_c',
//      ),
//      'budjet_c' =>
//      array (
//        'type' => 'enum',
//        'default' => true,
//        'studio' => 'visible',
//        'label' => 'LBL_BUDJET',
//        'sortable' => false,
//        'width' => '10%',
//        'name' => 'budjet_c',
//      ),
//      'number_bedroom_c' =>
//      array (
//        'type' => 'enum',
//        'default' => true,
//        'studio' => 'visible',
//        'label' => 'LBL_NUMBER_BEDROOM',
//        'sortable' => false,
//        'width' => '10%',
//        'name' => 'number_bedroom_c',
//      ),
    ),
  ),
  'templateMeta' => 
  array (
    'maxColumns' => '3',
    'widths' => 
    array (
      'label' => '10',
      'field' => '23',
    ),
  ),
);
?>
