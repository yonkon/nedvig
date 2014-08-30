<?
//Экспорт объектов на сайт .  по протоколу SOAP

 error_reporting(0);

//include class for log
if (file_exists('custom/include/exportObject/LogClass.php'))
   require_once('custom/include/exportObject/LogClass.php');
$logger= new LogClass("custom/include/exportObject/log_soap.txt");

//include config file
if (file_exists('custom/include/exportObject/export_config.php'))
    require_once('custom/include/exportObject/export_config.php');
else {
    $logger->stop('Cann\'t load config file');    
};

//export



//for depended dropdowns
if (file_exists("custom/modules/sphr_Object/metadata/update_dropdown_field_defs.php"))
    require_once("custom/modules/sphr_Object/metadata/update_dropdown_field_defs.php");
elseif(file_exists("modules/sphr_Object/metadata/update_dropdown_field_defs.php"))
    require_once("modules/sphr_Object/metadata/update_dropdown_field_defs.php");
else $update_dropdown_field_defs = array();

if(!empty($update_dropdown_field_defs))
    $assoc_update_dropdown_field_defs = array();
//end for depended dropdowns
$ids_deleted = array();
$ids_added_changed = array();

try { 
    global $db,$sugar_config,$current_language;
    
    //language set;
    $current_language = $export_config["default_language"];
    set_superglobals('login_language', $current_language);
    
    
    
    $sql = "SELECT COUNT(id) AS count_ids FROM sphr_object_publications as sop  WHERE sop.status<>0 ";  
    $result = $db->query($sql);
    $row = $db->fetchByAssoc($result);
    
    //если записи есть то создаем клиент и обновляем данные на сайте
    if($row["count_ids"]>0){
        
        $sql = "SELECT sop.*,soc.id_object_c FROM sphr_object_publications as sop JOIN sphr_object_cstm AS soc ON soc.id_c=sop.id WHERE sop.status<>0 "; 
        
        $focus  = new sphr_Object();
        
        //загружаем mod_strings
        $mod_strings = return_module_language($current_language, 'sphr_Object');
        $app_list_strings =return_app_list_strings_language($current_language);
        
        $client = new SoapClient($export_config["soap"]["wsdl_url"]);       
        
        $limit = " LIMIT ";	
        $start = 0;$i=1;$total_records=0;
        
        // выбираем записи из базы частями
        while($i>0){
            $i=0;
            $result = $db->query($sql.$limit.$start.','.$export_config["db_limit"]);
            
            while($r = $db->fetchByAssoc($result)){
                   $i++;
                   $log_id_string=$r["id_object_c"]." : ".$r["id"];
                    //если статус не Удалить, то подготавливаем данные к отправке на сайт
                   if( $r["status"]!=3 ){
                        $focus->retrieve($r["id"]);
                        
                        //информация о рисунках
                        $photos = array();
                        $query_getPhotos = "SELECT * FROM `sphr_object_photo_c` WHERE `sphr_object_id`='".$focus->id."' ORDER BY main ASC";
                        $resource_getPhotos = $db->query($query_getPhotos);
                        
                        while($fromDB_getPhotos = $db->fetchByAssoc($resource_getPhotos)) {
                                $photos[] =$sugar_config['site_url'].'/cache/upload/object/'. $fromDB_getPhotos['id'];
                                
                        }
                        
                        $send_values_array = array();
                        
                        foreach ($export_config["fields"] as $soap_field => $crm_field){
                            $tmp_value="";
                            switch ($soap_field ) {
                                case "name":
                                case "detail_text":
                                    $tmp_value = $focus->$crm_field["language"][$current_language];
                                    break;
                                case "options":
                                    foreach($crm_field as $field){
                                        if($focus->$field==1){
                                            $tmp_value.= '"'.addslashes(translate($focus->field_defs[$field]['vname'], $focus->module_dir)).'"'.",";
                                            
                                        }
                                    }
                                    if(strlen($tmp_value)>0) $tmp_value = substr($tmp_value,0,strlen($tmp_value)-1);
                                    break;
                                    
                                case "pictures":
                                    if(count($photos)>0)
                                        $tmp_value = implode(",",$photos);
                                    break;
                                    
                                case "detail_picture":
                                    if(count($photos)>0)
                                        $tmp_value = $photos[0];
                                    break;
                                    
                                case "active":                                    
                                        $tmp_value = $crm_field["value"];
                                    break;
                                
                                case "price": 
                                        foreach($crm_field["dependence"] as $key=>$value){
                                          if(strpos($focus->$crm_field["deptndence_field"],'^'.$key.'^')!==false){
                                              $tmp_value.= ((int)$focus->$value).",";                                              
                                          }
                                        }
                                        if(strlen($tmp_value)>0) $tmp_value = substr($tmp_value,0,strlen($tmp_value)-1);
                                        else $tmp_value = "0";
                                        
                                    break;
                                    
                                case "lot":
                                    $tmp_value = str_pad($focus->$crm_field, 6, "0", STR_PAD_LEFT);
                                    break;
                                
                                default:
                                    if($crm_field!==""){
                                        
                                          //for depended dropdowns  
                                            if(isset($focus->field_name_map[$crm_field]['type']) && ($focus->field_name_map[$crm_field]['type'] == 'enum')){ 
                                               if(!empty($update_dropdown_field_defs)){
                                                      $found_current_options = false;
                                                      //find options array
                                                      foreach($update_dropdown_field_defs as $mainfieds=>$dependeds){
                                                          if($found_current_options) break; else
                                                               foreach($dependeds as $mainvalue => $depended){
                                                                  if($found_current_options) break; else
                                                                       foreach($depended as $depfield=>$depended_options){
                                                                           if($crm_field==$depfield && $mainvalue==$focus->$mainfieds){
                                                                              $focus->field_name_map[$crm_field]['options']=$depended_options;
                                                                              $found_current_options = true;
                                                                              break;
                                                                           }                                           
                                                                       }
                                                              }
                                                      }
                                                  }
                                            } 
                                            //end for depended dropdowns
                                            
                                            if(isset($focus->field_name_map[$crm_field]['type']) && $focus->field_name_map[$crm_field]['type'] == 'multienum'){
                                                
                                                $focus_crm_field = str_replace("^","",$focus->$crm_field);
                                                
                                                if ( isset($focus->field_name_map[$crm_field]['options'])
                                                        && isset($app_list_strings[$focus->field_name_map[$crm_field]['options']]) ) {
                                                    
                                                    $valueArray = explode(",",$focus_crm_field);
                                                    
                                                    foreach ( $valueArray as $multikey => $multivalue ) {
                                                        if ( isset($app_list_strings[$focus->field_name_map[$crm_field]['options']][$multivalue]) ) {
                                                            $valueArray[$multikey] = '"'.addslashes($app_list_strings[$focus->field_name_map[$crm_field]['options']][$multivalue]).'"';
                                                        }
                                                    }
                                                    $tmp_value = implode(",",$valueArray);
                                                }
                                            }			                                        
                                            elseif(isset($focus->field_name_map[$crm_field]['type']) && $focus->field_name_map[$crm_field]['type'] == 'enum'){                        

                                                if ( isset($focus->field_name_map[$crm_field]['options'])
                                                        && isset($app_list_strings[$focus->field_name_map[$crm_field]['options']]) ) {            

                                                    if ( isset($app_list_strings[$focus->field_name_map[$crm_field]['options']][$focus->$crm_field]) ) {
                                                        $tmp_value = $app_list_strings[$focus->field_name_map[$crm_field]['options']][$focus->$crm_field];
                                                    }           

                                                }
                                             }else{
                                                 $tmp_value = $focus->$crm_field;
                                             }
                                       }
                                       break;
                                                }
                                              $send_values_array[$soap_field]  =$tmp_value;

                                            }
                        
         
                       
                   }
                 //echo "update-";  print_r( $send_values_array);echo "<br>";
                   
                  // вызываем soap метод
                  switch ($r["status"]) {
                       case 3://удаляем
                           //echo 'deleted-',$r["id_object_c"],'<br>';
                           $response = $client->removePropertyObject($r["id_object_c"]);                          
                           if($response!==false){
                               array_push($ids_deleted,$r["id"]);   
                               $logger->log("Object $log_id_string was deleted.");
                               
                           }else $logger->error("Object $log_id_string was not deleted.");
                           
                           break;

                       case 1://добавляем на сайт
                           
                           $response = $client->addPropertyObject(
                                    (int)$send_values_array["id"],                                   
                                    $send_values_array["name"],
                                    $send_values_array["coast"],
                                    $send_values_array["town"],
                                    $send_values_array["townarea"],
                                    $send_values_array["active"],
                                    $send_values_array["detail_picture"],
                                    $send_values_array["preview_text" ],
                                    $send_values_array["detail_text"],
                                    $send_values_array["type"],
                                    $send_values_array["lot"],
                                    (int)$send_values_array["rooms"],
                                    (int)$send_values_array["baths"],
       /*тип string пока передадим*/$send_values_array["price"],
                                    $send_values_array["status"],//продано
                                    $send_values_array["type_prop"],
                                    (int)$send_values_array["living_area"],
                                    (int)$send_values_array["area"],
                                    (int)$send_values_array["garden_area"],
                  /*только string*/ $send_values_array["sea_distance"],
                  /*только string*/ $send_values_array["commerce_distance"],
                                    $send_values_array["options"],
                                    $send_values_array["pictures"], 
                                    $send_values_array["links"],
                                    $send_values_array["map"] 
                            );
                           
                           if($response!==false){
                               array_push($ids_added_changed,$r["id"]);  
                               $logger->log("Object $log_id_string was published.");
                                                     
                           }else $logger->error("Object $log_id_string wasn't published.");
                           
                           break;
                       case 2: //обновляем информацию
                           
                           $response = $client->updatePropertyObject(
                                    (int)$send_values_array["id"],                                   
                                    $send_values_array["name"],
                                    $send_values_array["coast"],
                                    $send_values_array["town"],
                                    $send_values_array["townarea"],
                                    $send_values_array["active"],
                                    $send_values_array["detail_picture"],
                                    $send_values_array["preview_text" ],
                                    $send_values_array["detail_text"],
                                    $send_values_array["type"],
                                    $send_values_array["lot"],
                                    (int)$send_values_array["rooms"],
                                    (int)$send_values_array["baths"],
       /*тип string пока передадим*/$send_values_array["price"],
                                    $send_values_array["status"],//продано
                                    $send_values_array["type_prop"],
                                    (int)$send_values_array["living_area"],
                                    (int)$send_values_array["area"],
                                    (int)$send_values_array["garden_area"],
                  /*только string*/ $send_values_array["sea_distance"],
                  /*только string*/ $send_values_array["commerce_distance"],
                                    $send_values_array["options"],
                                    $send_values_array["pictures"], 
                                    $send_values_array["links"],
                                    $send_values_array["map"] 
                                   );
                           
                           if($response!==false){
                                array_push($ids_added_changed,$r["id"]); 
                               $logger->log("Object $log_id_string was updated.");                             
                                                         
                           }else $logger->error("Object $log_id_string wasn't updated.");
                           
                           break;
                   }
                   $total_records++;

           }
           $start +=$export_config["db_limit"];

        }


        /*
        
        /**/

    
    } else $logger->log("Don't found id for export.End work.");
    
} catch (SoapFault $fault) {
    $logger->error("Ошибка SOAP: (faultcode: {$fault->faultcode}, faultstring: {$fault->faultstring})", E_USER_ERROR);
    
}catch (Exception $exc) {
    echo $logger->error($exc->getMessage());
    
}

// если были успешные изменения или удаления на сайте, то обнуляем статусы в нашей базе или удаляем из базы
if(!empty($ids_deleted)){
    
    $sql = "DELETE FROM sphr_object_publications  WHERE id IN('".implode("', '",$ids_deleted)."'); ";
    $db->query($sql);
}

if(!empty($ids_added_changed)){
    
    $sql = "UPDATE  sphr_object_publications SET date_modified=now(), status=0   WHERE id IN('".implode("', '",$ids_added_changed)."'); ";   
    $db->query($sql);
}




 
?>