<?
/*
 Конфигурационные данные для экспорта Объектов на сайт
*/
$export_config = array (
    "soap" => array( 
      // 'wsdl_url' => 'http://work.costaiberia.ru/soap.wsdl'
      'wsdl_url' => 'http://costaiberia.ru/soap.wsdl'
    ),
    "db_limit" => 100,
    "default_language" =>"ru_ru",
    
    "fields" => array(
       "id" => "id_object_c",
       "name" => array("language"=>array(
                    "ru_ru" =>"name_rus_c",
                    "en_us"=>"name_eng_c",
                    "es_es"=>"name_sp_c",
       )),
       "coast"=>"coast_select_c",
       "town"=>"community_select_c",
       "townarea"=>"province_select_c",
       "active"=>array("value"=>"Y"),
       "detail_picture"=>"",
       "preview_text"  =>"",
       "detail_text" =>  array("language"=>array(
                    "ru_ru" =>"additional_description_c",
                    "en_us"=>"additional_description_eng_c",
                    "es_es"=>"additional_description_sp_c",)),
       "type" => "object_status_c",
       "lot" => "id_object_c",
       "rooms"=>"number_bedroom_c",
       "baths"=>"number_bathroom_c",
       "price"=>array(
                "deptndence_field"=>"object_status_c",
                "dependence"=>array(
                   "sale"=>"price_sale_int_c",
                   "arenda"=>"price_rent_int_c"
                    )),
       "status" =>"special_status_c",//продано
       "type_prop"=>"type",
       "living_area"=>"apartment_area_c",
       "area"=>"total_area_c",
       
       "garden_area"=>"area_area_c",
       "sea_distance"=>"sea_distance_c",
       "commerce_distance"=>"comm_center_distance_c",
       "options"=>array(
           "complex_c", 
           "garage_c",
           "parking_area_c",
           "private_swimpool_c",
           "general_swimpool_c",
           "children_area_c",
           "sport_area_c",
           "area_c",
           
           "terrace_c",
           "balcony_c",
           "solarium_c",
           "basement_c",
           "storeroom_c",
           
           "mebel_c",
           "kitchen_mebel_c",
           "life_equipment_c",
           "safe_c",
           "jacuzzi_c",
           "conditioner_c",
           "install_conditioner_c",
           "intelligent_house_c",
           "alarm_c",
           "heating_c",
           "heating_floor_c",
           
           "city_area_c",
           "green_area_c",
           "view_sea_c",
           "view_mount_c",
           "view_forest_c",
           "view_park_c",
           "view_salt_lake_c",
           "view_golf_pole_c",
           
           
        ),
       "pictures"=>"", 
       "links"=>"",
       "map"=>"address",       
        
        
    )
);
?>