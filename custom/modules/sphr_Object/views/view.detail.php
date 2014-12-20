<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

/*********************************************************************************
 * SugarCRM is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2010 SugarCRM Inc.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.  See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo. If the display of the logo is not reasonably feasible for
 * technical reasons, the Appropriate Legal Notices must display the words
 * "Powered by SugarCRM".
 ********************************************************************************/
/*********************************************************************************

 * Description: This file is used to override the default Meta-data EditView behavior
 * to provide customization specific to the Bugs module.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/

require_once('include/MVC/View/views/view.detail.php');

class sphr_ObjectViewDetail extends ViewDetail {
    private $manager;
 	function sphr_ObjectsViewDetail(){
 		parent::ViewDetail();
 	}
 	function init($bean = null, $view_object_map = array()) {
		parent::init($bean, $view_object_map);

		require_once('custom/include/utils/DevToolKitManager.php');

		$this->manager = new DevToolKitManager($this);
    }

 	function display() {
		require_once('custom/modules/sphr_Object/views/unicodeToCyrillic.function.php');

		global $db,$mod_strings,$sugar_config;

		$db->query("SET NAMES utf8");

		//==================================================================
		$PDF_name_prefix = "offer_";
		$query_pdf ="SELECT pdf_id FROM sphr_object_pdf_c WHERE sphr_object_id = '".$this->bean->id."'";
		$result_pdf = $this->bean->db->query($query_pdf);
		if (($row = $this->bean->db->fetchByAssoc($result_pdf)) != null ) //если pdf_id для текущего объекта есть
		{
			$PDF_name = $PDF_name_prefix . $row['pdf_id'] . ".pdf";
			$PDF_HTML = "<a href='".$sugar_config['upload_dir']."pdf/".$PDF_name."' target='_blank'>".$PDF_name."</a>";
		} else { //инначе добавим  pdf_id для текущего объекта
         	$PDF_HTML = $mod_strings["LBL_PDF_NO"];
		}

		//==================================================================
		//==================================================================
		//получаем список фотографий объекта
		$i = 0;
		$photos = array();
		$query_getPhotos = "SELECT * FROM `sphr_object_photo_c` WHERE `sphr_object_id`='".$this->bean->id."' ORDER BY main ASC ";
		$resource_getPhotos = $db->query($query_getPhotos);
		while($fromDB_getPhotos = $db->fetchByAssoc($resource_getPhotos)) {
			$photos[$i] = $fromDB_getPhotos['id'];
			$i++;
		}
		$numberPhotos = count($photos);
		$photosJson = json_encode($photos);
		//==================================================================
    //TODO убрить сокрытие цены, показывать всегда
                $object_status_c_cl = str_replace('^','',$this->bean->object_status_c);
        echo
<<<DJS
        <script type="text/javascript">
        jQuery(function($){
        		$('span#sp_lbl_price_sale_int_c').parent().html("<span id= 'sp_lbl_price_sale_int_c'> {$mod_strings["LBL_PRICE_SALE_INT"]}<br/></span><span id= 'sp_lbl_price_rent_int_c'>{$mod_strings["LBL_PRICE_RENT_INT"]}</span>");
            	$('span#sp_lbl_seller_price_sale_int_c').parent().html("<span id= 'sp_lbl_seller_price_sale_int_c'> {$mod_strings["LBL_SELLER_PRICE_SALE_INT"]}<br/></span><span id= 'sp_lbl_seller_price_rent_int_c'>{$mod_strings["LBL_SELLER_PRICE_RENT_INT"]}</span>");
            	$('span#sp_lbl_amount_commission_c').parent().html("<span id= 'sp_lbl_amount_commission_c'> {$mod_strings["LBL_AMOUNT_COMMISSION"]}<br/></span><span id= 'sp_lbl_rent_amount_commission_c'>{$mod_strings["LBL_RENT_AMOUNT_COMMISSION_C"]}</span>");

                var statusValue = "{$object_status_c_cl}";
				if(statusValue == null ||statusValue == "") {
					$("#sp_price_sale_int_c").hide();
//					$("#sp_price_rent_int_c").hide();
//					$("#sp_seller_price_sale_int_c").hide();
//					$("#sp_seller_price_rent_int_c").hide();
//          $("#sp_old_price_sale_int_c").hide();
//					$("#sp_old_price_rent_int_c").hide();
//					$("#sp_amount_commission_c").hide();
//					$("#sp_rent_amount_commission_c").hide();

					$("#sp_lbl_price_sale_int_c").hide();
//					$("#sp_lbl_price_rent_int_c").hide();
//					$("#sp_lbl_seller_price_sale_int_c").hide();
//					$("#sp_lbl_seller_price_rent_int_c").hide();
//          $("#sp_lbl_old_price_sale_int_c").hide();
//					$("#sp_lbl_old_price_rent_int_c").hide();
//					$("#sp_lbl_amount_commission_c").hide();
//					$("#sp_lbl_rent_amount_commission_c").hide();

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

        	});
        </script>
DJS;
		echo
<<<DJS
	<script type="text/javascript">


		$('<link rel="stylesheet" href="custom/include/prettyGallery/styleGallery.css" type="text/css" media="screen" title="prettyDropdown main stylesheet" charset="UTF-8" />').appendTo('head');
		$('<link rel="stylesheet" href="custom/include/prettyGallery/prettyGallery.css" type="text/css" media="screen" title="prettyDropdown main stylesheet" charset="UTF-8" />').appendTo('head');
		$('<link rel="stylesheet" href="custom/include/prettyGallery/prettyPhoto.css" type="text/css" media="screen" title="prettyDropdown main stylesheet" charset="UTF-8" />').appendTo('head');

		$(document).ready(function() {
            //получаем массив имён фото и их число
			var photos = jQuery.parseJSON('$photosJson');
			var numberPhotos = parseInt('$numberPhotos');
			$('#photo_count_c').text(numberPhotos);
			//выводим фото
			$('<ul class="gallery">').appendTo('#photosBlock');
			for(var i = 0; i < numberPhotos; i++) {
				$('<li style="list-style: none; display: block; width: 100px; height: 100px; overflow: hidden; float: left; margin-top: -8px; margin-right: 5px; margin-bottom: 13px;"><a href="cache/upload/object/'+photos[i]+'" rel="prettyPhoto[gallery]"><img src="cache/upload/object/cut_'+photos[i]+'" /></a></li>').appendTo('#photosBlock');
			}
			$('</ul>').appendTo('#photosBlock');

			$("a[rel^='prettyPhoto']").prettyPhoto({showTitle:false});
			$('ul.gallery:first').prettyGallery({itemsPerPage:3, navigation:'bottom', animationSpeed:'slow'});
			//выводим ссылку на pdf
			$("span#pdf_link").html("$PDF_HTML");
		});

	</script>
DJS;
		echo '<script>',file_get_contents('custom/modules/sphr_Object/javascript/create_PDF.js'),'</script>';
		global $current_user;
		global $app_list_strings;
		$type_c_advanced = '<select id="type_c_advanced"  name="type_c_advanced" style="width: 150px" multiple="true" size="4">';
		foreach ($app_list_strings['client_type_list'] as $client_type_value =>  $client_type_label)
			$type_c_advanced .= '<option label="'.$client_type_label.'" value="'.$client_type_value.'">'.$client_type_label.'</option>';
		$type_c_advanced .= '</select>';

		$status_advanced = '<select id="status_advanced" name="status_advanced" style="width: 150px" multiple="true" size="4">';
		foreach ($app_list_strings['client_status_list'] as $client_status_value =>  $client_status_label)
			$status_advanced .= '<option label="'.$client_status_label.'" value="'.$client_status_value.'">'.$client_status_label.'</option>';
		$status_advanced .= '</select>';


		$assigned_user_id_advanced = '<select id="assigned_user_id_advanced" name="assigned_user_id_advanced" style="width: 150px" multiple="true" size="4">';
		global $db;
		$query = "SELECT id, CONCAT_WS(' ',first_name,last_name) as full_name
		FROM users
		WHERE (deleted = 0)";
		$result=$db->query($query, true);
		while(($row = $db->fetchByAssoc($result)) != null )
			$assigned_user_id_advanced .= '<option label="'.$row['full_name'].'" value="'.$row['id'].'">'.$row['full_name'].'</option>';
		$assigned_user_id_advanced .= '</select>';
				echo '
		<script type="text/javascript" src="jscalendar/lang/calendar-ru.js"></script>
		<script type="text/javascript" src="custom/include/email_sender/email_sender_func.js"></script>
		<script type="text/javascript">
			var CurrentPage;

			function ApplyFilter()
			{
				mygrid.forEachRow(function(id){
					if (document.getElementById("title_advanced") && (mygrid.cellById(id, 2).getValue()).toUpperCase().indexOf(document.getElementById("title_advanced").value.toUpperCase())!=0)
					{
						mygrid.setRowAttribute(id,"filter_match",0);
					}
					else
					if (document.getElementById("first_name_advanced") && (mygrid.cellById(id, 3).getValue().toUpperCase()).indexOf(document.getElementById("first_name_advanced").value.toUpperCase())!=0)
					{
						mygrid.setRowAttribute(id,"filter_match",0);
					}
					else if (document.getElementById("date_entered_advanced") && (mygrid.cellById(id, 9).getValue().toUpperCase()).indexOf(document.getElementById("date_entered_advanced").value.toUpperCase())!=0)
					{
						mygrid.setRowAttribute(id,"filter_match",0);
					}
					else if (CheckInSelect(mygrid.cellById(id, 1).getValue(),"type_c_advanced")==false)
					{
						mygrid.setRowAttribute(id,"filter_match",0);
					}
					else if (CheckInSelect(mygrid.cellById(id, 6).getValue(),"status_advanced")==false)
					{
						mygrid.setRowAttribute(id,"filter_match",0);
					}
					else if (CheckInSelect(mygrid.cellById(id, 8).getValue(),"assigned_user_id_advanced")==false)
					{
						mygrid.setRowAttribute(id,"filter_match",0);
					}
					else mygrid.setRowAttribute(id,"filter_match",1);
				});
				GotoPage(1);
			}
			function SendFromModule()
			{
				SelectedClients = new Array();
				for (var i=0; i<mygrid.getRowsNum(); i++)
				{
					id=mygrid.getRowId(i);
					if (mygrid.cellById(id, 0).getValue()==1)
					{
						SelectedClients.push(mygrid.getRowAttribute(id,"id"));
					}
				}
				if (SelectedClients.length == 0)
				{
					alert("Пожалуйста, выберите хотя бы одну запись");
					return;
				}
				StartSend("'.$current_user->id.'");
			}
		</script>';
		$hint_html = 'Клиенты, выделенные красным, не имеют email и для выбора не доступны';
		$caption_html = 'Выберите клиента';
    //Имя, телефон, почта, бюджет, тип, статус.
    $pre_search_form_html = '
          <form name="pre_search_form" id="pre_search_form" action="index.php?entryPoint=ClientToXML">
          <table width="100%" cellspacing="5" cellpadding="0" border="0">
              <tr>
            <td scope="row" nowrap="nowrap" width=10% >
              Имя
            </td>
            <td  nowrap="nowrap" width=30%>
              <input type="text" name="first_name_advanced" id="first_name_advanced">
            </td>
            <td scope="row" nowrap="nowrap" width=10% >
              Телефон
            </td>
            <td  nowrap="nowrap" width=30%>
              <input type="text" name="phone_advanced" id="phone_advanced">
            </td>
            <td scope="row" nowrap="nowrap" width=10% >
              Почта
            </td>
            <td  nowrap="nowrap" width=30%>
              <input type="text" name="email_advanced" id="email_advanced">
            </tr>
            <tr>
            <td scope="row" nowrap="nowrap" width=10% >
              Бюджет
            </td>
            <td  nowrap="nowrap" width=30%>
              <input type="text" name="budget_advanced" id="budget_advanced">
            </td>
            <td scope="row" nowrap="nowrap" width=10% >
              Тип
            </td>
            <td  nowrap="nowrap" width=30%>
              '.$type_c_advanced.'
            </td>
            <td scope="row" nowrap="nowrap" width=10% >
              Статус
            </td>
            <td  nowrap="nowrap" width=30%>
              '.$status_advanced.'
            </td>
            </tr>
            <tr>
            <td colspan="3">
              <button type="button" onclick=\'openClientListPopup(document.DetailView.record.value, "sphr_Object" ,"", true);\'>Найти</button>
              <input type="reset" id="reset_btn" value="Очистить"/>
            </td>
            </tr>
          </table>
          </form>';
//    return openClientListPopup(document.DetailView.record.value,"sphr_Object","", true);
		$search_form_html = '
					<form name="search_form" id="search_form">
					<table width="100%" cellspacing="5" cellpadding="0" border="0">
					    <tr>
						<td scope="row" nowrap="nowrap" width=10% >
							Название
						</td>
						<td  nowrap="nowrap" width=30%>
							<input type="text" name="title_advanced" id="title_advanced" size=30 maxlength=100>
						</td>
						<td scope="row" nowrap="nowrap" width=10% >
							Имя
						</td>
						<td  nowrap="nowrap" width=30%>
							<input type="text" name="first_name_advanced" id="first_name_advanced" size=30 maxlength=255>
						</td>
						<td scope="row" nowrap="nowrap" width=10% >
							Дата создания
						</td>
						<td  nowrap="nowrap" width=30%>
							<input autocomplete="off" type="text" name="date_entered_advanced" id="date_entered_advanced" size=11 maxlength="10">
							<img border="0" src="themes/Sugar5/images/jscalendar.gif" alt="Ввод даты" id="date_entered_advanced_trigger" align="absmiddle" />
							<script type="text/javascript">
								Calendar.setup ({
								inputField : "date_entered_advanced",
								daFormat : "%d.%m.%Y",
								button : "date_entered_advanced_trigger",
								singleClick : true,
								dateStr : "",
								step : 1,
								weekNumbers:false
								}
								);
							</script>
						</tr>
						<tr>
						<td scope="row" nowrap="nowrap" width=10% >
							Тип клиента
						</td>
						<td  nowrap="nowrap" width=30%>
							'.$type_c_advanced.'
						</td>
						<td scope="row" nowrap="nowrap" width=10% >
							Статус
						</td>
						<td  nowrap="nowrap" width=30%>
							'.$status_advanced.'
						</td>
						<td scope="row" nowrap="nowrap" width=10% >
							Ответственный(ая)
						</td>
						<td  nowrap="nowrap" width=30%>
							'.$assigned_user_id_advanced.'
						</td>
						</tr>
						<tr>
						<td colspan="5">
							<input type="button" id="filter_btn" value="Найти" onclick="ApplyFilter();"/>
							<input type="reset" id="reset_btn" value="Очистить"/>
						</td>
						</tr>
					</table>
					</form>';
    $search_form_html = '';
		include('custom/include/email_sender/email_sender_form.php');
		echo'
		<link rel="STYLESHEET" type="text/css" href="custom/include/email_sender/dhtmlxGrid/codebase/dhtmlxgrid.css">
		<script type="text/javascript" src="custom/include/email_sender/dhtmlxGrid/codebase/dhtmlxcommon.js"></script>
		<script type="text/javascript" src="custom/include/email_sender/dhtmlxGrid/codebase/dhtmlxgrid.js"></script>
		<script type="text/javascript" src="custom/include/email_sender/dhtmlxGrid/codebase/dhtmlxgridcell.js"></script>
		<script type="text/javascript" src="custom/include/email_sender/dhtmlxGrid/codebase/ext/dhtmlxgrid_filter.js"></script> <!--для сортировки тоже нужен-->
		<script>
			var mygrid;
			mygrid = new dhtmlXGridObject("mygrid_container");
			mygrid.setImagePath("custom/include/email_sender/dhtmlxGrid/codebase/imgs/");
			//mygrid.setColumnIds("ch,type,title,first_name,last_name,middle_name,status,status_description,assigned_user,date_entered,date_modified");
			mygrid.setHeader("#,Тип клиента, Название, Имя, Фамилия, Отчество, Статус, Описание статуса, Ответственный, Дата создания, Дата изменения");
			mygrid.setColTypes  ("ch,ro,ro,ro,ro,ro,ro,ro,ro,ro,ro");
			mygrid.setInitWidths("15,75,75,75,75,75,75,75,75,75,75");
			mygrid.setColSorting("na,str,str,str,str,str,str,str,str,DateSort,DateSort");
			//grid.setCustomSorting(DateSort, 9);
			function DateSort(a,b,order)
			{
			    a=a.split(".")
				b=b.split(".")
				if (a[2]==b[2]){
					if (a[1]==b[1])
						return (a[0]>b[0]?1:-1)*(order=="asc"?1:-1);
					else
						return (a[1]>b[1]?1:-1)*(order=="asc"?1:-1);
				} else
					 return (a[2]>b[2]?1:-1)*(order=="asc"?1:-1);
			}
			//mygrid.setColWidth(1,15);
			//mygrid.setColumnHidden(1,true);

			//mygrid.setColAlign("left,right,right");
			mygrid.init();
			function ClickGridHeaderHandler(e) //чтобы обновить страницу после сортировки
			{
				GotoPage(GetCurrentPage());
			}
			addHandler(document.getElementById("mygrid_container"), "click", ClickGridHeaderHandler);

		</script>
		<script>
			var SelectedObjects;
			var SelectedClients;
			function openClientListPopup(val,ptype,pid, pre_search)
			{
				SelectedObjects = new Array();
				SelectedObjects.push(val);

				var url = "index.php?entryPoint=ClientToXML";
				if(typeof pre_search  != "undefined" && pre_search) {
				  $("input, select", $("#pre_search_form") ).each(function(i, el) {
				  var $el = $(el);
				  if($el.attr("name") && $el.val()) {
				    url += "&search["+$el.attr("name") + "]="+$el.val();
				  }
				  });
//          document.getElementById("search_form").style.display="block";
//          document.getElementById("pre_search_form").style.display="none";
          document.getElementById("PopupScreenLocker").style.display="block";
				document.getElementById("PopupWindowBody").style.display="none";
				document.getElementById("PopupWindowLog").style.display="block";
				document.getElementById("PopupWindow").style.display="block";
				document.getElementById("Log").value = "Идет загрузка...";
				mygrid.updateFromXML(url,true,true,LoadSuccess); //insert_new & del_missed

				} else {
				document.getElementById("PopupScreenLocker").style.display="block";
				document.getElementById("PopupWindowBody").style.display="block";
				document.getElementById("PopupWindowLog").style.display="none";
				document.getElementById("PopupWindow").style.display="block";
//				document.getElementById("Log").value = "Идет загрузка...";
//				mygrid.updateFromXML(url,true,true,LoadSuccess); //insert_new & del_missed
          document.getElementById("search_form").style.display="none";
          document.getElementById("pre_search_form").style.display="block";
				}
				//mygrid.clearAll();
				//mygrid.load(url);

				function LoadSuccess()
				{
					ApplyFilter();
					for (var i=0; i<mygrid.getRowsNum(); i++)
					{
						id=mygrid.getRowId(i);
						if (mygrid.getRowAttribute(id,"has_email") == 0)
						{
							mygrid.lockRow(id,true);
							mygrid.setRowColor(id,"#FFDDDD"); //IE не принимает трехсимвольный цвет
						}
					}
					document.getElementById("Log").value = "";
					document.getElementById("PopupWindowLog").style.display="none";
					document.getElementById("PopupWindowBody").style.display="block";
//          document.getElementById("search_form").style.display="block";
				}
			};
		</script>
';
    $this->manager->display();
 		parent::display();
 	}

 	function process() {
		$this->manager->process();
		parent::process();
  }
}
?>
