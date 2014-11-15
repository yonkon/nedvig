<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once('include/MVC/View/views/view.edit.php');

class sphr_ObjectViewEdit extends ViewEdit {
    private $manager;
 	function sphr_ObjectViewEdit(){
 		parent::ViewEdit();
 	}
     function init($bean = null, $view_object_map = array()) {
		parent::init($bean, $view_object_map);

		$this->init_menager();
    }
 	function display() {
		global $db;
        global $mod_strings;
		$db->query("SET NAMES utf8");
        if($_REQUEST['to_pdf']==true) //for subpanel without process()
	    	$this->init_menager();

		$this->manager->display();
		//================================================================
		//==================================================================
		//==================================================================
		//получаем список фотографий объекта
		$i = 0;
		$photos = array();
		$query_getPhotos = "SELECT * FROM `sphr_object_photo_c` WHERE `sphr_object_id`='".$this->bean->id."' ORDER BY main ASC";
		$resource_getPhotos = $db->query($query_getPhotos);
		while($fromDB_getPhotos = $db->fetchByAssoc($resource_getPhotos)) {
			$photos[$i] = $fromDB_getPhotos;
			$i++;
		}
		$numberPhotos = count($photos);
		if($numberPhotos != 0) {
			$photosJson = json_encode($photos);
		}
		//==================================================================

		//==================================================================
		//получаем спивок выбранных провинцию, поебережье, населенный пункт
		$query_getIds = "SELECT `province_c`, `coast_c`, `community_c` FROM `sphr_object_cstm` WHERE `id_c`='".$this->bean->id."' LIMIT 0,1";
		$resource_getIds = $db->query($query_getIds);
		$fromDB_getIds = $db->fetchByAssoc($resource_getIds);
		$idsJson = json_encode($fromDB_getIds);
		//==================================================================
        //==================================================================
        //управление арендой и продажей

        //добавление названий
        echo "
        <script>
        	jQuery(function($){
        		$('#price_sale_int_c_label').html(\"<span id= 'sp_lbl_price_sale_int_c'> ".$mod_strings["LBL_PRICE_SALE_INT"]."<br/></span><span id= 'sp_lbl_price_rent_int_c'>".$mod_strings["LBL_PRICE_RENT_INT"]."</span>\");
            	$('#seller_price_sale_int_c_label').html(\"<span id= 'sp_lbl_seller_price_sale_int_c'> ".$mod_strings["LBL_SELLER_PRICE_SALE_INT"]."<br/></span><span id= 'sp_lbl_seller_price_rent_int_c'>".$mod_strings["LBL_SELLER_PRICE_RENT_INT"]."</span>\");
            	$('#amount_commission_c_label').html(\"<span id= 'sp_lbl_amount_commission_c'> ".$mod_strings["LBL_AMOUNT_COMMISSION"]."<br/></span><span id= 'sp_lbl_rent_amount_commission_c'>".$mod_strings["LBL_RENT_AMOUNT_COMMISSION_C"]."</span>\");
                objectStatusChange();
                $('#price_sale_int_c').change(function(){  update_amount('price','sale')});
                $('#seller_price_sale_int_c').change(function(){  update_amount('seller','sale')});
                $('#amount_commission_c').change(function(){  update_amount('amount','sale')});
                $('#price_rent_int_c').change(function(){  update_amount('price','rent')});
                $('#seller_price_rent_int_c').change(function(){  update_amount('seller','rent')});
                $('#rent_amount_commission_c').change(function(){  update_amount('amount','rent')});

                //позволяем воодить только цифры в поле
                $('input[id$=\"price_rent_int_c\"],input[id$=\"price_sale_int_c\"],input[id$=\"amount_commission_c\"],input[id$=\"area_c\"]:[type!=\"checkbox\"],').keypress(function (e)
                    {
                      //Если символ - не цифра, ввыодится сообщение об ошибке, другие символы не пишутся
                      if( e.which!=8 && e.which!=0 && (e.which<48 || e.which>57))
                      {
                        return false;
                      }
                     // if(e.which==48&&this.value.length===0)    return false;
                    });

        	});
        </script>
        ";
		echo "<script type=\"text/javascript\" src=\"custom/modules/sphr_Object/js/edit.js\"></script>";
        //==================================================================
		$edit_javascript =
<<<EJS
	<script type="text/javascript">

        //функция расчета размера комиссии
        var last_change_price='';
        function  update_amount(source,type){

         if (type=='rent') add = 'rent_'; else add='';
         price =parseInt( document.getElementById('price_'+type+'_int_c').value,10);
         seller_price =	parseInt(document.getElementById('seller_price_'+type+'_int_c').value,10);
         amount = parseInt(document.getElementById(add+'amount_commission_c').value,10);

         switch(source){
         	case('price'):{
         			if(price>0&&seller_price>0){
		         	amount = Math.round((price-seller_price)/seller_price*100);
			        if(amount<=0) amount =0;
			        	document.getElementById(add+'amount_commission_c').value=amount;
			        }  else document.getElementById(add+'amount_commission_c').value="";


         	}
         	break;
         	case('seller'):{
         	    if (last_change_price=='amount'){
         	        if (amount>0&&seller_price>0){
	         	    	price = Math.round(seller_price+(seller_price*amount/100));
	                    if(price<0) price =0;
				        document.getElementById('price_'+type+'_int_c').value=price;
			        } else {
			        	 document.getElementById('price_'+type+'_int_c').value='';
			        }

         	    }else{
                     if (seller_price>0){
	                    amount = Math.round((price-seller_price)/seller_price*100);
				        if(amount<=0) amount =0;
				        document.getElementById(add+'amount_commission_c').value=amount;
                     }else    document.getElementById(add+'amount_commission_c').value='';

         	    }


         	}
         	break;
         	case('amount'):{
                  if(amount>0&&seller_price>0){
                   	price = Math.round(seller_price+(seller_price*amount/100));
                    if(price<0) price =0;

                  }else  document.getElementById('price_'+type+'_int_c').value='';
                  document.getElementById('price_'+type+'_int_c').value=price;
         	}
         	break;


         }
         last_change_price=source;
        }

		//функция проверяет статус и прячит или показывает поля цена
		function objectStatusChange() {
			var statusValue = $("#object_status_c").val();
			if(statusValue == null) {
				$("#sp_price_sale_int_c").hide();
				$("#sp_price_rent_int_c").hide();
				$("#sp_seller_price_sale_int_c").hide();
				$("#sp_seller_price_rent_int_c").hide();
                                $("#sp_old_price_sale_int_c").hide();
				$("#sp_old_price_rent_int_c").hide();
				$("#sp_amount_commission_c").hide();
				$("#sp_rent_amount_commission_c").hide();

				$("#sp_lbl_price_sale_int_c").hide();
				$("#sp_lbl_price_rent_int_c").hide();
				$("#sp_lbl_seller_price_sale_int_c").hide();
				$("#sp_lbl_seller_price_rent_int_c").hide();
                                $("#sp_lbl_old_price_sale_int_c").hide();
				$("#sp_lbl_old_price_rent_int_c").hide();
				$("#sp_lbl_amount_commission_c").hide();
				$("#sp_lbl_rent_amount_commission_c").hide();

				$("#price_sale_int_c").val("");
				$("#price_rent_int_c").val("");

				$("#seller_price_sale_int_c").val("");
				$("#seller_price_rent_int_c").val("");

                                $("#old_price_sale_int_c").val("");
				$("#old_price_rent_int_c").val("");

				$("#amount_commission_c").val("");
				$("#rent_amount_commission_c").val("");

			}
			else {
				if((statusValue == "sale") && (statusValue != "sale,arenda")) {

					$("#sp_price_sale_int_c").show();
					$("#sp_price_rent_int_c").hide();
					$("#sp_seller_price_sale_int_c").show();
					$("#sp_seller_price_rent_int_c").hide();
                                        $("#sp_old_price_sale_int_c").show();
					$("#sp_old_price_rent_int_c").hide();
					$("#sp_amount_commission_c").show();
					$("#sp_rent_amount_commission_c").hide();

					$("#sp_lbl_price_sale_int_c").show();
					$("#sp_lbl_price_rent_int_c").hide();
					$("#sp_lbl_seller_price_sale_int_c").show();
					$("#sp_lbl_seller_price_rent_int_c").hide();
                                        $("#sp_lbl_old_price_sale_int_c").show();
					$("#sp_lbl_old_price_rent_int_c").hide();
					$("#sp_lbl_amount_commission_c").show();
					$("#sp_lbl_rent_amount_commission_c").hide();


					$("#price_rent_int_c").val("");
					$("#seller_price_rent_int_c").val("");
                                        $("#old_price_rent_int_c").val("");
					$("#rent_amount_commission_c").val("");

				}
				if((statusValue == "arenda") && (statusValue != "sale,arenda")) {

                    $("#sp_price_sale_int_c").hide();
					$("#sp_price_rent_int_c").show();
					$("#sp_seller_price_sale_int_c").hide();
					$("#sp_seller_price_rent_int_c").show();
                                        $("#sp_old_price_sale_int_c").hide();
					$("#sp_old_price_rent_int_c").show();
					$("#sp_amount_commission_c").hide();
					$("#sp_rent_amount_commission_c").show();

					$("#sp_lbl_price_sale_int_c").hide();
					$("#sp_lbl_price_rent_int_c").show();
					$("#sp_lbl_seller_price_sale_int_c").hide();
					$("#sp_lbl_seller_price_rent_int_c").show();
                                        $("#sp_lbl_old_price_sale_int_c").hide();
					$("#sp_lbl_old_price_rent_int_c").show();
					$("#sp_lbl_amount_commission_c").hide();
					$("#sp_lbl_rent_amount_commission_c").show();

                    $("#price_sale_int_c").val("");
					$("#seller_price_sale_int_c").val("");
                                        $("#old_price_sale_int_c").val("");
					$("#amount_commission_c").val("");


				}
				if(statusValue == "sale,arenda") {
					$("#sp_price_sale_int_c").show();
					$("#sp_price_rent_int_c").show();
					$("#sp_seller_price_sale_int_c").show();
					$("#sp_seller_price_rent_int_c").show();
                                        $("#sp_old_price_sale_int_c").show();
					$("#sp_old_price_rent_int_c").show();
					$("#sp_amount_commission_c").show();
					$("#sp_rent_amount_commission_c").show();

					$("#sp_lbl_price_sale_int_c").show();
					$("#sp_lbl_price_rent_int_c").show();
					$("#sp_lbl_seller_price_sale_int_c").show();
					$("#sp_lbl_seller_price_rent_int_c").show();
                                        $("#sp_lbl_old_price_sale_int_c").show();
					$("#sp_lbl_old_price_rent_int_c").show();
					$("#sp_lbl_amount_commission_c").show();
					$("#sp_lbl_rent_amount_commission_c").show();
				}

			}
		}

		//получаем массив имён фото и их число и выводим их
                function removePhoto(id_li,id){
                    $('input[name="oldPhotos['+id+']"]').val(0);
                    $('input[name="photo_order['+id+']"]').remove();
                    $('#'+id_li).hide();
                    update_orders();


                    //проверяем, если основное, то делаем основным первое в списке
                    if ($('#'+id_li+' input[name="photo_main"]').attr('checked')=='checked'){
                        $('#PhotosBlock_photos_list>li:visible:first').find('input[name="photo_main"]').attr('checked','checked');
                    }

                    //обновляем отображение кнопок первых  последних элементов в списке
                    updateVisibityAll();
                }
                //прячет,показывает кнопки;
                function updateVisibity(flag,visibility,file){
                    $('#PhotosBlock_photos_list>li:visible'+flag).find('img[src="custom/themes/default/images/'+file+'.png"]').css('visibility',visibility);
                }

                function click_photo_main(id_li,id){
                    $('#PhotosBlock_photos_list>li:visible:first').find('input[name^="photo_order["]').removeAttr('readonly');

                    $('#'+id_li).prependTo('#PhotosBlock_photos_list');
                    updateVisibityAll();
                    set_readonly(id);
                    update_orders();


                }
                function onlyDigitEnter(e)
                {
                  //Если символ - не цифра, ввыодится сообщение об ошибке, другие символы не пишутся
                  if( e.which!=8 && e.which!=0 && (e.which<48 || e.which>57))
                  {
                    return false;
                  }
                 // if(e.which==48&&this.value.length===0)    return false;
                };

                function change_photo_order(id_li,id,flag){
                    var photo_list = $('#PhotosBlock_photos_list>li:visible:not(:first)');
                    var order_value = parseInt($('input[name^="photo_order['+id+']"]').val(),10);

                    if(!isNaN(order_value)){
                        var find = false;
                        var find_i = -1
                        var i = 0;
                        var i_value = 0;
                        while(!find&&i<photo_list.length){

                             if (flag == ''){
                                if (photo_list[i].id == id_li) find_i=i;

                                i_value = parseInt($('#'+photo_list[i].id+' input[name^="photo_order["]').val(),10);

                                if(photo_list[i].id!=id_li && i_value>=order_value){
                                    if(find_i == -1)
                                        $('#'+id_li).insertBefore('#'+photo_list[i].id);
                                    else $('#'+id_li).insertAfter('#'+photo_list[i].id);
                                    find = true;
                                }

                             }else{

                                if(photo_list[i].id == id_li){
                                    if(flag == 'up'){
                                        if (i>0){
                                            $('#'+photo_list[i-1].id).insertAfter('#'+id_li);
                                            find = true;
                                        }
                                    }
                                    if(flag == 'down'){
                                        if (i+1 < photo_list.length){
                                            $('#'+photo_list[i+1].id).insertBefore('#'+id_li);
                                            find = true;
                                        }
                                    }
                                }
                            }
                            i++;
                        }
                        i--;
                        if(!find && flag == '' ){
                            i_value = parseInt($('#'+photo_list[i].id+' input[name^="photo_order["]').val(),10);
                            if( photo_list[i].id!=id_li && i_value<=order_value)  $('#'+id_li).insertAfter('#'+photo_list[i].id);
                        }

                   }
                    updateVisibityAll();
                    update_orders();
                }

                function updateVisibityAll(){
                    var photo_list = $('#PhotosBlock_photos_list>li:visible');
                    if (photo_list.length>0){
                        updateVisibity(':first','hidden','down');
                        updateVisibity(':first','hidden','up');
                        if(photo_list.length>2){
                            updateVisibity(':eq(1)','hidden','up');
                            updateVisibity(':eq(1)','visible','down');
                            updateVisibity(':not(:first,:eq(1),:last)','visible','up');
                            updateVisibity(':not(:first,eq(1),:last)','visible','down');
                            updateVisibity(':last','hidden','down');
                            updateVisibity(':last','visible','up');
                        }else{
                            updateVisibity(':last','hidden','down');
                            updateVisibity(':last','hidden','up');
                        }
                    }


                }

                function set_readonly(id){
                    $('input[name="photo_order['+id+']"]').attr('readonly','readonly');
                }

                function update_orders(){
                    var photo_list = $('#PhotosBlock_photos_list>li:visible');
                    photo_list.find('input[name^="photo_order["]').each(function(i){this.value=i;});
                   // numberPhotos_i =  photo_list.length;
                }

		var numberPhotos = parseInt('$numberPhotos');
                $('<ul id="PhotosBlock_photos_list" style = " padding-left:0px"></ul>').appendTo('#oldPhotosBlock');
		if(numberPhotos != 0) {
			var photos = jQuery.parseJSON('$photosJson');
                        var photo_li = '';
			for(var i = 0; i < numberPhotos; i++) {

                                photo_li = '<li id="li_file_'+i+'" style="list-style: none; ">';

                                photo_li += '<div style="margin-bottom:3px;">';
                                photo_li += '<ul style="display:inline;padding:0px;margin:0px;text-align:top;" >';
                                //'<ul style="float:left; border:1px solid #ABC3D7;height:100px;width:60px;margin:2px;padding:2px;" >';


                                photo_li += '<li style="display:inline;vertical-align:bottom;"><img style="cursor:pointer;'+((i==0||i==1)?'visibility:hidden;':'')+'" onclick="change_photo_order(\'li_file_'+i+'\',\''+photos[i]['id']+'\',\'up\');" src="custom/themes/default/images/up.png"><img style="cursor:pointer;'+((i+1>=numberPhotos||i==0)?'visibility:hidden;':'')+'" onclick="change_photo_order(\'li_file_'+i+'\',\''+photos[i]['id']+'\',\'down\');" src="custom/themes/default/images/down.png"></li>';
                                photo_li += '<li style="display:inline;"><input style="margin-bottom: 2px;" type="text" size="2" maxlength="2"  onchange="change_photo_order(\'li_file_'+i+'\',\''+photos[i]['id']+'\',\'\');" name="photo_order['+photos[i]['id']+']"  value="'+i+'"></li>';
                                photo_li += '<li style="display:inline;"><input style="margin-bottom: 3px;" type="radio" name="photo_main" '+((i==0)?' checked="checked" ':'')+' value="'+photos[i]['id']+'" onclick="click_photo_main(\'li_file_'+i+'\',\''+photos[i]['id']+'\')"></li>';

                                photo_li += '</ul>';
                                photo_li += '</div>';
                                photo_li += '<div style="width: 100px; height: 100px;margin-bottom:13px; overflow: hidden;">';
                                photo_li += '<input type="hidden" name="oldPhotos['+photos[i]['id']+']" value="1">';
                                photo_li += '<img src="themes/Sugar5/images/delete.gif" onclick="removePhoto(\'li_file_'+i+'\',\''+photos[i]['id']+'\');" style="display: block; width: 12px; heigth: 12px; position: absolute; background-color: #fff; border: solid 1px #f30; cursor: pointer;">';
                                photo_li +='<img src="cache/upload/object/cut_'+photos[i]['id']+'" />';
                                photo_li += '</div>';
                                photo_li += '</li>';

                                ///-------------------------------------
				$(photo_li).appendTo('#PhotosBlock_photos_list');
                                $('input[name="photo_order['+photos[i]['id']+']"]').keypress(function (e)
                                {
                                  //Если символ - не цифра, ввыодится сообщение об ошибке, другие символы не пишутся
                                  if( e.which!=8 && e.which!=0 && (e.which<48 || e.which>57))
                                  {
                                    return false;
                                  }
                                 // if(e.which==48&&this.value.length===0)    return false;
                                });
			}

		}else{

                }

                //действия при нажатие кнопки добаления поля фотографии
		var numberPhotos_i = numberPhotos;
		$('#addPhotoFieldButton').click(function() {

                        var checked_flag =  ($('#PhotosBlock_photos_list>li:visible').length==0)?' checked="checked" ': '';

			photo_li = '<li id="li_file_'+numberPhotos_i+'">';

                        photo_li += '<div style="margin-bottom:3px;">';
                        photo_li += '<ul style="display:inline;padding:0px;margin:0px;text-align:top;" >';
                        //'<ul style="float:left; border:1px solid #ABC3D7;height:100px;width:60px;margin:2px;padding:2px;" >';
                        photo_li += '<li style="display:inline;vertical-align:bottom;"><img style="cursor:pointer; '+((checked_flag=='checked')?'':'')+' " onclick="change_photo_order(\'li_file_'+numberPhotos_i+'\',\'new_'+numberPhotos_i+'\',\'up\');" src="custom/themes/default/images/up.png"><img style="cursor:pointer;" onclick="change_photo_order(\'li_file_'+numberPhotos_i+'\',\'new_'+numberPhotos_i+'\',\'down\');"  src="custom/themes/default/images/down.png"></li>';
                        photo_li += '<li style="display:inline;  padding-bottom: 9px;"><input style="margin-bottom: 2px;" type="text" size="2" maxlength="2" name="photo_order[new_'+numberPhotos_i+']" onchange="change_photo_order(\'li_file_'+numberPhotos_i+'\',\'new_'+numberPhotos_i+'\',\'\');" value="'+$('#PhotosBlock_photos_list>li:visible').length+'"></li>';
                        photo_li += '<li style="display:inline;  padding-bottom: 9px;"><input style="margin-bottom: 3px;" type="radio" name="photo_main" '+checked_flag+' value="new_'+numberPhotos_i+'" onclick="click_photo_main(\'li_file_'+numberPhotos_i+'\',\'new_'+numberPhotos_i+'\')"></li>';

                        photo_li += '</ul>';
                        photo_li += '</div>';

                        photo_li += '<div style="margin-bottom:13px;">';
                        photo_li +='<input type="file" name="objectPhoto[new_'+numberPhotos_i+']" id="file_'+numberPhotos_i+'"><img src="themes/Sugar5/images/minus.gif" onclick="removePhoto(\'li_file_'+numberPhotos_i+'\',\'new_'+numberPhotos_i+'\');" style="cursor: pointer;"><br>';
                        photo_li += '</div>';

                        photo_li += '</li>';

                        $(photo_li).appendTo('#PhotosBlock_photos_list');
                        $('input[name="photo_order[new_'+numberPhotos_i+']"]').keypress(function (e)
                            {
                              //Если символ - не цифра, ввыодится сообщение об ошибке, другие символы не пишутся
                              if( e.which!=8 && e.which!=0 && (e.which<48 || e.which>57))
                              {
                                return false;
                              }
                             // if(e.which==48&&this.value.length===0)    return false;
                            });
                        updateVisibityAll();
			numberPhotos_i++;
		});



		//заполняем списки

		//уменьшаем размер поля статус и запускаем функцию проверки её значения
		$("#object_status_c").attr("size", "2");


		//вставляем кнопку очистки поля статус
		$('<br><img src="themes/Sugar5/images/close.gif" id="clearStatusButton" onclick="$(\'#object_status_c\').val(\'\');objectStatusChange();">').insertAfter('#object_status_c');

		//при выборе статуса появляются или исчезают поля цена
		$("#object_status_c").change(function() {
				objectStatusChange();

		});
		 //при выборе провинции фильтруется список побережей и населенных пунктов

		//при выборе побережья фильтруется список провинций и населенных пунктов

		//при выборе населеного пункта фильтруется список провинций и побережий
	/*	$('select#community_select_c').change(function() {
			if ( $(this).val()!=''){
                $('select#province_select_coption:selected').attr('selected',false);
             	$('select#coast_select_c option:selected').attr('selected',false);
                $('select#community_select_c option:selected').each(function(jj){
                	val= this.value.substr(0,this.value.lastIndexOf('_'));

                	$('select#province_select_c option[value^=\"'+val+'\"]').attr('selected','selected');
                	$('select#coast_select_c option[value^=\"'+val+'\"]').attr('selected','selected');
                });

			}
		}); */
		//-------------------------------------------------------------





		//получаем провинцию при правке
		var selectedIds = jQuery.parseJSON('$idsJson');
		if(selectedIds != null) {
			$('#province').children('option[value = '+parseInt(selectedIds['province_c'])+']').attr('selected', 'selected');
			$('#province').change();
			$('#coast').children('option[value = '+parseInt(selectedIds['coast_c'])+']').attr('selected', 'selected');
			$('#coast').change();
			$('#community').children('option[value = '+parseInt(selectedIds['community_c'])+']').attr('selected', 'selected');
			$('#community').change();
		}

		//валидация данных перед сохранением
		function pressSave() {
			//добавляем текстовое значение провинций, побережий, населенных пунктов
			var province = $('#province').children('option:selected').text();
			var coast = $('#coast').children('option:selected').text();
			var community = $('#community').children('option:selected').text();
			$('#province_text').val(province);
			$('#coast_text').val(coast);
			$('#community_text').val(community);

			$('.error').remove();
			$('#name_rus_c').css('border-color', '#94C1E8');
			$('#name_eng_c').css('border-color', '#94C1E8');
			$('#name_sp_c').css('border-color', '#94C1E8');
			var status = 1;
			var rusName = $('#name_rus_c').val();
			var engName = $('#name_eng_c').val();
			var spName = $('#name_sp_c').val();
			if((rusName == '') && (engName == '') && (spName == '')) {
				status = 0;
				$('#name_rus_c').css('border-color', '#f30');
				$('#name_eng_c').css('border-color', '#f30');
				$('#name_sp_c').css('border-color', '#f30');
				$('<br class="error"><br class="error"><span class="error" style="padding: 2px; color: #f30; border: solid 1px #f30;">Должно быть заполнено хотя бы одно название</span><br class="error"><br class="error">').insertAfter('#name_sp_c');
			}
			return status;
		}

	</script>
EJS;
		$this->ss->assign('EDIT_JAVASCRIPT', $edit_javascript);
 		parent::display();
 		if($_REQUEST['to_pdf']==true)     //for subpanel without process()
			$this->manager->process();
 	}
 	function process() {
		parent::process();
		$this->manager->process();
	}
	function init_menager(){
		require_once('custom/include/utils/DevToolKitManager.php');
		$this->manager = new DevToolKitManager($this);

	}
}
?>
