<?php
$module_name = 'sphr_Object';
$viewdefs [$module_name] =
array (
  'EditView' =>
  array (
    'templateMeta' =>
    array (
      'form' =>
      array (
        'enctype' => 'multipart/form-data',
		'buttons' =>
        array (
          0 =>
          array (
			'customCode' => '<input type="submit" value="Сохранить" name="button" onclick="{literal}if(pressSave() == 0) {return false;} else {this.form.action.value=\'Save\'; return check_form(\'EditView\');}{/literal}" class="button primary" accesskey="S" title="Сохранить [Alt+S]">',
		  ),
          1 => 'CANCEL',
        ),
      ),
      'maxColumns' => '3',
      'widths' =>
      array (
        0 =>
        array (
          'label' => '10',
          'field' => '23',
        ),
        1 =>
        array (
          'label' => '10',
          'field' => '23',
        ),
        2 =>
        array (
          'label' => '10',
          'field' => '23',
        ),
      ),
      'javascript' => '{$EDIT_JAVASCRIPT}',
      'includes' =>
      array (
        0 =>
        array (
          'file' => 'custom/include/javascript/jquery/jquery.pack.js',
        ),
      ),
      'useTabs' => false,
    ),
    'panels' =>
    array (
      'lbl_editview_panel2' =>
      array (
      	 0 =>
        array (
          0 =>
          array (
            'name' => 'id_object_c',
            'studio' => 'visible',
            'label' => 'LBL_ID_OBJECT',
            'customCode' => '<span id="id_object_c_value">{$fields.id_object_c.value}</span>',
          ),
          1=>
          array (
            'name' => 'published_site_c',
            'studio' => 'visible',
            'label' => 'LBL_PUBLISHED_SITE',
          ),
          2 =>
           array (
            'name' => 'assigned_user_name',
            'label' => 'LBL_ASSIGNED_TO_NAME',
          ),
        ),
        1 =>
        array (
          0 =>
          array (
            'name' => 'name_rus_c',
            'studio' => 'visible',
            'label' => 'LBL_NAME_RUS',
          ),
          1 =>
          array (
            'name' => 'type',
            'studio' => 'visible',
            'label' => 'LBL_TYPE',
          ),
          2 =>
          array (
            'name' => 'accounts_sphr_object_name',
            'label' => 'LBL_ACCOUNTS_SPHR_OBJECT_FROM_ACCOUNTS_TITLE',
          ),
        ),
        2 =>
        array (
          0 =>
          array (
            'name' => 'name_eng_c',
            'studio' => 'visible',
            'label' => 'LBL_NAME_ENG',
          ),
          1 =>
          array (
            'name' => 'object_status_c',
            'studio' => 'visible',
            'label' => 'LBL_OBJECT_STATUS',
          ),
          2=>
          array (
            'name' => 'price_sale_int_c',
            'label' => '<span id= "sp_lbl_price_sale_int_c">
            			</span>
            			<span id= "sp_lbl_price_rent_int_c">
            			</span>',
            'customCode' => '<span id= "sp_price_sale_int_c">
            					<input id="price_sale_int_c" type="text" tabindex="108" title="" value="{$fields.price_sale_int_c.value}" maxlength="" size="30" name="price_sale_int_c">
            					<br/></span>
           					<span id= \'sp_price_rent_int_c\'>
            					<input id="price_rent_int_c" type="text" tabindex="108" title="" value="{$fields.price_rent_int_c.value}" maxlength="" size="30" name="price_rent_int_c">
            					<br/></span>
            					',
          ),
        ),
        3 =>
        array (
          0 =>
          array (
            'name' => 'name_sp_c',
            'studio' => 'visible',
            'label' => 'LBL_NAME_SP',
          ),
          1 =>
          array (
            'name' => 'category_c',
            'studio' => 'visible',
            'label' => 'LBL_CATEGORY',
          ),
          2 =>
          array (
            'name' => 'seller_price_sale_int_c',
            'label' => '<span id= "sp_lbl_seller_price_sale_int_c">
            			</span>
            			<span id= "sp_lbl_seller_price_rent_int_c">
            			</span>
            			',
			'customCode' => '
							<span id= "sp_seller_price_sale_int_c">
            					<input id="seller_price_sale_int_c" type="text" tabindex="108" title="" value="{$fields.seller_price_sale_int_c.value}" maxlength="" size="30" name="seller_price_sale_int_c">
            					<br/></span>
           					<span id= "sp_seller_price_rent_int_c">
            					<input id="seller_price_rent_int_c" type="text" tabindex="108" title="" value="{$fields.seller_price_rent_int_c.value}" maxlength="" size="30" name="seller_price_rent_int_c">
            					<br/></span>
			',

          ),
        ),
        4 =>
        array (
          0 => '',
          1 => array(
              'name' => 'special_status_c',
          ) ,
          2 =>  array (
            'name' => 'seller_price_sale_int_c',
            'customLabel' => '<span id= "sp_lbl_old_price_sale_int_c">
                {$MOD.LBL_OLD_PRICE_SALE_INT_C}:
            			<br/></span>
            			<span id= "sp_lbl_old_price_rent_int_c">
                                {$MOD.LBL_OLD_PRICE_RENT_INT_C}:
            			</span>
            			',
			'customCode' => '
							<span id= "sp_old_price_sale_int_c">
            					<input id="old_price_sale_int_c" type="text" tabindex="108" title="" value="{$fields.old_price_sale_int_c.value}" maxlength="" size="30" name="old_price_sale_int_c">
            					<br/></span>
           					<span id= "sp_old_price_rent_int_c">
            					<input id="old_price_rent_int_c" type="text" tabindex="108" title="" value="{$fields.old_price_rent_int_c.value}" maxlength="" size="30" name="old_price_rent_int_c">
            					<br/></span>
			',

          ),
        ),
        5 =>
        array (
          0 => '',
          1 => '' ,
          2 =>  array (
            'name' => 'amount_commission_c',
            'label' => '<span id= "sp_lbl_amount_commission_c">
            			</span>
            			<span id= "sp_lbl_rent_amount_commission_c">
            			</span>
            			',
            'customCode' => '
							<span id= "sp_amount_commission_c">
            					<input id="amount_commission_c" type="text" tabindex="108" title="" value="{$fields.amount_commission_c.value}" maxlength="" size="30" name="amount_commission_c">
            					<br/></span>
           					<span id= "sp_rent_amount_commission_c">
            					<input id="rent_amount_commission_c" type="text" tabindex="108" title="" value="{$fields.rent_amount_commission_c.value}" maxlength="" size="30" name="rent_amount_commission_c">
            					<br/></span>
			',
          ),
        ),
        6 =>
        array (
          0 => '',
          1 =>  '',
          2 =>  array (
            'name' => 'price_sale_meter_c',
            'label' => 'LBL_PRICE_SALE_METER',
          ),
        ),
        7 =>
        array (
          0 => array (
            'name' => 'country',
            'label' => 'LBL_COUNTRY',
          ),
          1 => '',
          2 =>  array (
            'name' => 'total_area_c',
            'label' => 'LBL_TOTAL_AREA',
          ),
        ),
        8 =>
        array (
          0 =>
           array (
            'name' => 'province_select_c',
            'label' => 'LBL_PROVINCE',
          ),
          1 =>
          array (
            'name' => 'nearest_airport_c',
            'studio' => 'visible',
            'label' => 'LBL_NEAREST_AIRPORT',
          ),

         /* array (
            'name' => 'price_rent_int_c',
            'label' => 'LBL_PRICE_RENT_INT',
          ),*/
          2 => array (
            'name' => 'apartment_area_c',
            'label' => 'LBL_APARTMENT_AREA',
          ),
         /* array (
            'name' => 'seller_price_rent_int_c',
            'label' => 'LBL_SELLER_PRICE_RENT_INT',
          ),*/
        ),
       9 =>
        array (
          0 =>
          array (
           'name' => 'coast_select_c',
            'label' => 'LBL_COAST',
          ),
          1 =>
           array (
            'name' => 'sea_distance_c',
            'label' => 'LBL_SEA_DISTANCE',
          ),
          2 =>
          array (
            'name' => 'area_area_c',
            'label' => 'LBL_AREA_AREA_C',
          ),
        ),
        10 =>
        array (
          0 =>
          array (
            'name' => 'community_select_c',
            'studio' => 'visible',
            'label' => 'LBL_COMMUNITY',
          ),
          1 =>
          array (
            'name' => 'comm_center_distance_c',
            'label' => 'LBL_COMM_CENTER_DISTANCE',
          ),
          2 =>
          array (
            'name' => 'number_bedroom_c',
            'studio' => 'visible',
            'label' => 'LBL_NUMBER_BEDROOM',
          )
        ),
        11 =>
        array (
          0 =>
           array (
            'name' => 'address',
            'label' => 'LBL_ADDRESS',
          ),
          1 => '',
          2 =>
           array (
            'name' => 'number_bathroom_c',
            'studio' => 'visible',
            'label' => 'LBL_NUMBER_BATHROOM',
          ),
        ),
        12 =>
        array (
          0 =>'' ,
          1 => '',
          2 => '',
        ),
        13 =>
        array (
          0 =>
          array (
            'name' => 'complex_c',
            'label' => 'LBL_COMPLEX',
          ),
          1 => array (
            'name' => 'mebel_c',
            'label' => 'LBL_MEBEL',
          ),
          2 => array (
            'name' => 'city_area_c',
            'label' => 'LBL_CITY_AREA',
          )
        ),
        14 =>
        array (
          0 => array (
            'name' => 'garage_c',
            'label' => 'LBL_GARAGE',
          ),
          1 =>array (
            'name' => 'kitchen_mebel_c',
            'label' => 'LBL_KITCHEN_MEBEL',
          ),
          2 =>  array (
            'name' => 'green_area_c',
            'label' => 'LBL_GREEN_AREA',
          ),
        ),
        15 =>
        array (
          0 => array (
            'name' => 'parking_area_c',
            'label' => 'LBL_PARKING_AREA',
          ),
          1 => array (
            'name' => 'life_equipment_c',
            'label' => 'LBL_LIFE_EQUIPMENT',
          ),
          2 => array (
            'name' => 'view_sea_c',
            'label' => 'LBL_VIEW_SEA',
          ),


        ),
        16 =>
        array (
          0 =>
          array (
            'name' => 'private_swimpool_c',
            'label' => 'LBL_PRIVATE_SWIMPOOL',
          ),

          1 => array (
            'name' => 'safe_c',
            'label' => 'LBL_SAFE',
          ),
          2 =>  array (
            'name' => 'view_mount_c',
            'label' => 'LBL_VIEW_MOUNT',
          ),
        ),
        17 =>
        array (
          0 =>
           array (
            'name' => 'general_swimpool_c',
            'label' => 'LBL_GENERAL_SWIMPOOL',
          ),
          1 =>
          array (
            'name' => 'jacuzzi_c',
            'label' => 'LBL_JACUZZI',
          ) ,
          2 => array (
            'name' => 'view_forest_c',
            'label' => 'LBL_VIEW_FOREST_C',
          ),
        ),
        18 =>
        array (
          0 => array (
            'name' => 'children_area_c',
            'label' => 'LBL_CHILDREN_AREA',
          ),
          1 => array (
            'name' => 'conditioner_c',
            'label' => 'LBL_CONDITIONER',
          ),
          2 =>
          array (
            'name' => 'view_park_c',
            'label' => 'LBL_VIEW_PARK',
          ),
        ),
        19 =>
        array (
          0 =>
          array (
            'name' => 'sport_area_c',
            'label' => 'LBL_SPORT_AREA',
          ),
          1 =>
           array (
            'name' => 'install_conditioner_c',
            'label' => 'LBL_INSTALL_CONDITIONER_C',
          ),          
          2 =>
          array (
            'name' => 'view_salt_lake_c',
            'label' => 'LBL_VIEW_SALT_LAKE',
          ),

        ),
        20 =>
        array (
          0 =>
           array (
            'name' => 'area_c',
            'label' => 'LBL_AREA',
          ),
          1 =>
            array (
            'name' => 'view_golf_pole_c',
            'label' => 'LBL_VIEW_GOLF_POLE',
          ),
          2 => '',
        ),
        21 =>
        array (
          0 => '',
          1 =>
            array (
            'name' => 'alarm_c',
            'label' => 'LBL_ALARM',
          ),
          
          2 => '',
        ),
        22 =>
        array (
          0 => '',
          1 =>
            array (
            'name' => 'heating_c',
            'label' => 'LBL_HEATING',
          ),
          
         2 => '',
        ),
        23 =>
        array (
          0 =>'',
          1 =>
            array (
            'name' => 'heating_floor_c',
            'label' => 'LBL_HEATING_FLOOR',
          ),
          2 => '',
         ),
        24 =>
        array (
          0 =>'',
          1 =>'',
          2 => '',
        ),    
        25 =>
        array (
          0 =>
          array (
            'name' => 'terrace_c',
            'label' => 'LBL_TERRACE',
          ),
          1 => '',
          2 => '',
        ),
        26 =>
        array (
          0 =>
          array (
            'name' => 'balcony_c',
            'label' => 'LBL_BALCONY',
          ),
          1 => '',
          2 => '',
        ),
        27 =>
        array (
          0 =>
          array (
            'name' => 'solarium_c',
            'label' => 'LBL_SOLARIUM',
          ),
          1 => '',
          2 => '',


        ),
        28 =>
        array (
          0 =>
          array (
            'name' => 'basement_c',
            'label' => 'LBL_BASEMENT',
          ),
          1 => '',
          2 => '',
        ),
        29 =>
        array (
          0 =>
          array (
            'name' => 'storeroom_c',
            'label' => 'LBL_STOREROOM',
          ),
		  1 => '',
          2 => '',
        ),
        23 =>
        array (
          0 =>  '',
          1 => '',
          2 => '',

        ),
        31 =>
        array (
           0 =>
          array (
            'name' => 'additional_description_c',
            'studio' => 'visible',
            'label' => 'LBL_ADDITIONAL_DESCRIPTION',
          ),
          1 => '',
          2 => '',
        ),
        32 =>
        array (
          0 =>
          array (
            'name' => 'additional_description_eng_c',
            'studio' => 'visible',
            'label' => 'LBL_ADDITIONAL_DESCRIPTION_ENG',
          ),
          1 => '',
          2 => '',

        ),
        33 =>
        array (
          0 =>
          array (
            'name' => 'additional_description_sp_c',
            'studio' => 'visible',
            'label' => 'LBL_ADDITIONAL_DESCRIPTION_SP',
          ),
		  1 => '',
          2 => '',
        ),
        34 =>
        array (
          0 =>
		  array(
			  'customCode' => '<div>Разрешены фотографии только формата: JPEG(JPG), PNG.</div><div id="oldPhotosBlock" style="width: 210px;"></div><div id="photosBlock"></div><img src="themes/Sugar5/images/plus.gif" id="addPhotoFieldButton" style="cursor: pointer;">',
			  'label' => 'Фотографии',
		  ),
          1 => '',
          2 => '',
        ),
      ),
    ),    
  ),
);
?>
