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

class sphr_ClientViewDetail extends ViewDetail {
    private $manager;
 	function sphr_ClientViewDetail(){
 		parent::ViewDetail();
 	}

	 function init($bean = null, $view_object_map = array()) {
		parent::init($bean, $view_object_map);

		require_once('custom/include/utils/DevToolKitManager.php');

		$this->manager = new DevToolKitManager($this);
    }

 	function display() {
		require_once('modules/Administration/QuickRepairAndRebuild.php');
		$clear_cache=new RepairAndClear();
		$clear_cache->module_list=array($ModuleName);
		$clear_cache->clearTpls();

		if($this->bean->type_c == 'individual') { //прячем поле "название" для физлица
			unset($this->dv->defs['panels']['lbl_detailview_panel2'][0][1]);  //позиция поля в detailviewdefs
			unset($this->dv->defs['panels']['lbl_detailview_panel4']);
		} else {
			unset($this->dv->defs['panels']['lbl_detailview_panel3']);
		}

 		global $app_list_strings;
 		global $mod_strings;

        $this->manager->display();
 		$this->dv->process();
 		$admin = new Administration();
        $admin->retrieveSettings();

		//ищем фотографию клиента
		$query_getPhoto = "SELECT `photo_c` FROM  `sphr_client_cstm` WHERE `id_c`='".$this->bean->id."'";
		$resource_getPhoto = $this->bean->db->query($query_getPhoto);
		$fromDB_getPhoto = $this->bean->db->fetchByAssoc($resource_getPhoto);
		if($fromDB_getPhoto['photo_c'] == '') {
			$photoName = 'withoutPhoto.jpeg';
		}
		else {
			$photoName = $fromDB_getPhoto['photo_c'];
		}

		//ищем родственников
		$query_getKindred = "SELECT * FROM `sphr_client_kindred` WHERE `id_client`='".$this->bean->id."'";
		$resource_getKindred =$this->bean->db->query($query_getKindred);
		$numKindred = $this->bean->db->getRowCount($resource_getKindred);
		if($numKindred != '0') {
			$kindred_first_name = '';
			$kindred_last_name = '';
			$kindred_middle_name = '';
			$kindred_birthday = '';
			$kindred_mobile = '';
			$kindred_mobile_2 = '';
			$kindred_email = '';
			$kindred_email_2 = '';
			$kindred_degree = '';
			while($fromDB_getKindred = $this->bean->db->fetchByAssoc($resource_getKindred)) {
				if($kindred_first_name == '') {$kindred_first_name = $fromDB_getKindred['first_name'];} else {$kindred_first_name .= '///'.$fromDB_getKindred['first_name'];}
				if($kindred_last_name == '') {$kindred_last_name = $fromDB_getKindred['last_name'];} else {$kindred_last_name .= '///'.$fromDB_getKindred['last_name'];}
				if($kindred_middle_name == '') {$kindred_middle_name = $fromDB_getKindred['middle_name'];} else {$kindred_middle_name .= '///'.$fromDB_getKindred['middle_name'];}
				if($kindred_birthday == '') {$kindred_birthday = $fromDB_getKindred['birthday'];} else {$kindred_birthday .= '///'.$fromDB_getKindred['birthday'];}
				if($kindred_mobile == '') {$kindred_mobile = $fromDB_getKindred['mobile'];} else {$kindred_mobile .= '///'.$fromDB_getKindred['mobile'];}
				if($kindred_mobile_2 == '') {$kindred_mobile_2 = $fromDB_getKindred['mobile_2'];} else {$kindred_mobile_2 .= '///'.$fromDB_getKindred['mobile_2'];}
				if($kindred_email == '') {$kindred_email = $fromDB_getKindred['email'];} else {$kindred_email .= '///'.$fromDB_getKindred['email'];}
				if($kindred_email_2 == '') {$kindred_email_2 = $fromDB_getKindred['email_2'];} else {$kindred_email_2 .= '///'.$fromDB_getKindred['email_2'];}
				if($kindred_degree == '') {$kindred_degree = $fromDB_getKindred['degree'];} else {$kindred_degree .= '///'.$fromDB_getKindred['degree'];}
			}
		}

		//ищем страну и город проживания
		$query_getCountry = "SELECT `current_country_c` FROM `sphr_client_cstm` WHERE `id_c`='".$this->bean->id."'";
		$resource_getCountry = $this->bean->db->query($query_getCountry);
		$fromDB_getCountry = $this->bean->db->fetchByAssoc($resource_getCountry);
		$current_country = $fromDB_getCountry['current_country_c'];
		$query_getCity = "SELECT `current_city_c` FROM `sphr_client_cstm` WHERE `id_c`='".$this->bean->id."'";
		$resource_getCity = $this->bean->db->query($query_getCity);
		$fromDB_getCity = $this->bean->db->fetchByAssoc($resource_getCity);
		$current_city = $fromDB_getCity['current_city_c'];

        // ищем название компании клиента
        $ar_campaign;
        if(isset($this->bean->source))
        {
        	$query_campaign ="SELECT name,deleted FROM campaigns WHERE id = '".$this->bean->source."'";
        	$result_campaign = $this->bean->db->query($query_campaign);

            if (($row = $this->bean->db->fetchByAssoc($result_campaign)) != null )
			{
				$ar_campaign = $row['name'];
				if ($row['deleted'] == 1) $ar_campaign = $ar_campaign . $mod_strings['ERR_DELETED'];
			}
			$this->ss->assign("ar_campaign_name", $ar_campaign);
        }

		echo $this->dv->display();

		//всплывающее окно. нижеследующий текст будет выводиться между карточкой клиента и субпанелями
		global $current_user;
		global $app_list_strings;
		$type_advanced = '<select id="type_advanced"  style="width: 150px" multiple="true" size="4">';
		foreach ($app_list_strings['object_type_list'] as $object_type_value =>  $object_type_label)
			$type_advanced .= '<option label="'.$object_type_label.'" value="'.$object_type_value.'">'.$object_type_label.'</option>';
		$type_advanced .= '</select>';
                
                $budjet_c_advanced = '<select id="budjet_c_advanced" style="width: 150px" multiple="true" size="4">';
                $budjet_c_array_js = 'var budjet_c_array = {';
		foreach ($app_list_strings['ci_budget_list'] as $budjet_c_value => $budjet_c_label) {
                    $budjet_c_advanced .= '<option label="'.$budjet_c_label.'" value="'.$budjet_c_value.'">'.$budjet_c_label.'</option>';
                    
                    if ($budjet_c_value != "") {
                        $budjet_c_value_parts = substr($budjet_c_value, 5);
                        $budjet_c_parts = explode('_', $budjet_c_value_parts);

                        $budjet_c_array_js .= '"'.$budjet_c_value.'" : ['.($budjet_c_parts[0]*1000);

                        if (isset($budjet_c_parts[1])) $budjet_c_array_js .= ', '.($budjet_c_parts[1]*1000).'],';
                        else $budjet_c_array_js .= '],';
                    }
                }
		$budjet_c_advanced .= '</select>';
                
                if ($budjet_c_array_js[strlen($budjet_c_array_js)-1] == ",") {
                    $budjet_c_array_js = substr($budjet_c_array_js, 0, -1);
                }
                $budjet_c_array_js .= '};';
                
		echo '
		<script type="text/javascript" src="jscalendar/lang/calendar-ru.js"></script>
		<script type="text/javascript" src="custom/include/email_sender/email_sender_func.js"></script>
		<script type="text/javascript">
                        '.$budjet_c_array_js.'
                        
			var CurrentPage;

			function ApplyFilter()
			{
			    if(document.getElementById("name_eng_c").value) {
                    openObjectListPopup($("input[name=sphr_client_id").val(), document.getElementById("name_eng_c").value );
                    document.getElementById("name_eng_c").value = "";
                } else {
                   /* mygrid.forEachRow(function(id){
                        if ((mygrid.cellById(id, 1).getValue()).toUpperCase().indexOf(document.getElementById("name_advanced").value.toUpperCase())!=0)
                        {
                            mygrid.setRowAttribute(id,"filter_match",0);
                        }
                        else if ((mygrid.cellById(id, 2).getValue().toUpperCase()).indexOf(document.getElementById("address_advanced").value.toUpperCase())!=0)
                        {
                            mygrid.setRowAttribute(id,"filter_match",0);
                        }
                        else if (CheckInSelect(mygrid.cellById(id, 4).getValue(),"type_advanced")==false)
                        {
                            mygrid.setRowAttribute(id,"filter_match",0);
                        }
                        else if ((mygrid.cellById(id, 5).getValue().toUpperCase()).indexOf(document.getElementById("square_advanced").value.toUpperCase())!=0)
                        {
                            mygrid.setRowAttribute(id,"filter_match",0);
                        }
                        else if (CheckInSelectBudjet(budjet_c_array, mygrid.cellById(id, 6).getValue(), "budjet_c_advanced")==false)
                        {
                                                mygrid.setRowAttribute(id,"filter_match",0);
                        }
                        else mygrid.setRowAttribute(id,"filter_match",1);
				    });*/
				}
				GotoPage(1);
			}
			function SendFromModule()
			{
				SelectedObjects = new Array();
				for (var i=0; i<mygrid.getRowsNum(); i++)
				{
					id=mygrid.getRowId(i);
					if (mygrid.cellById(id, 0).getValue()==1)
					{
						SelectedObjects.push(mygrid.getRowAttribute(id,"id"));
					}
				}
				if (SelectedObjects.length == 0)
				{
					alert("Пожалуйста, выберите хотя бы одну запись");
					return;
				}
				StartSend("'.$current_user->id.'");
			}
		</script>';

echo
<<<MJS
	<script type="text/javascript">

		var photoName = '$photoName';
		$('#photo_client').attr('src', 'cache/upload/client/'+photoName);

		var first_name = getArray_kindred('$kindred_first_name');
		var last_name = getArray_kindred('$kindred_last_name');
		var middle_name = getArray_kindred('$kindred_middle_name');
		var birthday = getArray_kindred('$kindred_birthday');
		var mobile = getArray_kindred('$kindred_mobile');
		var mobile_2 = getArray_kindred('$kindred_mobile_2');
		var email = getArray_kindred('$kindred_email');
		var email_2 = getArray_kindred('$kindred_email_2');
		var degree = getArray_kindred('$kindred_degree');

		var count = parseInt('$numKindred');
		for(var i = 0; i < count; i++) {
			$('<div id="kindred_'+(i + 1)+'" style="width: 55%; margin-top: 25px; padding: 5px 0 0 5px; border-top: solid 1px #94C1E8; border-left: solid 1px #94C1E8;"></div>').appendTo('#additionalBlock_kindred');
			$('<div>Родственник '+(i + 1)+':</div>').appendTo('#kindred_'+(i + 1));
			$('<div style="margin-top: 10px;">Степень родства: <span id="kindred_degree_'+(i + 1)+'" style="float: right;">'+getDegree(degree[i])+'</span></div>').appendTo('#kindred_'+(i + 1));
			$('<div style="margin-top: 10px;">Фамилия: <span id="kindred_last_name_'+(i + 1)+'" style="float: right;">'+validField(last_name[i])+'</span></div>').appendTo('#kindred_'+(i + 1));
			$('<div style="margin-top: 10px;">Имя:* <span id="kindred_first_name_'+(i + 1)+'" style="float: right;">'+validField(first_name[i])+'</span></div>').appendTo('#kindred_'+(i + 1));
			$('<div style="margin-top: 10px;">Отчество: <span id="kindred_middle_name_'+(i + 1)+'" style="float: right;">'+validField(middle_name[i])+'</span></div>').appendTo('#kindred_'+(i + 1));
			$('<div style="margin-top: 10px;">Дата рождения: <span id="kindred_birthday_'+(i + 1)+'" style="float: right;">'+validField(birthday[i])+'</span></div>').appendTo('#kindred_'+(i + 1));
			$('<div style="margin-top: 10px;">Мобильный телефон: <span id="kindred_mobile_'+(i + 1)+'" style="float: right;">'+validField(mobile[i])+'</span></div>').appendTo('#kindred_'+(i + 1));
			$('<div style="margin-top: 10px;">Мобильный телефон 2: <span id="kindred_mobile_2_'+(i + 1)+'" style="float: right;">'+validField(mobile_2[i])+'</span></div>').appendTo('#kindred_'+(i + 1));
			$('<div style="margin-top: 10px;">E-mail: <span id="kindred_email_'+(i + 1)+'" style="float: right;">'+validField(email[i])+'</span></div>').appendTo('#kindred_'+(i + 1));
			$('<div style="margin-top: 10px;">E-mail 2: <span id="kindred_email_2_'+(i + 1)+'" style="float: right;">'+validField(email_2[i])+'</span></div>').appendTo('#kindred_'+(i + 1));
		}

		function getArray_kindred(str) {
			return str.split('///');
		}

		function validField(str) {
			if(str == undefined) {str = "";}
			if(str == null) {str = "";}
			return str;
		}

		function getDegree(inf) {
			switch(inf){
				case 'wife':
					return 'Жена';
					break;
				case 'husband':
					return 'Муж';
					break;
				case 'son':
					return 'Сын';
					break;
				case 'daughter':
					return 'Дочь';
					break;
				case 'mom':
					return 'Мать';
					break;
				case 'dad':
					return 'Отец';
					break;
				case 'sister':
					return 'Сестра';
					break;
				case 'brother':
					return 'Брат';
					break;
				case 'grandm':
					return 'Бабушка';
					break;
				case 'grandf':
					return 'Дедушка';
					break;
				case 'grandd':
					return 'Внучка';
					break;
				case 'grands':
					return 'Внук';
					break;
				default:
					return '';
					break;
			}
		}

		var current_country = '$current_country';
		var current_city = '$current_city';
		$('#current_country').text(current_country);
		$('#current_city').text(current_city);

	</script>
MJS;
        $client_id = $this->bean->id;

		$hint_html = '';
		$caption_html = 'Выберите объекты';
		/*$search_form_html = '
					<form name="search_form" id="search_form">
					<table width="100%" cellspacing="5" cellpadding="0" border="0">
					    <tr>
					    <td scope="row" nowrap="nowrap" width=10% >
							Название объекта
						</td>
						<td  nowrap="nowrap" width=30%>
							<input type="text" name="name_advanced" id="name_advanced" size=30 maxlength=255>
						</td>
						<td scope="row" nowrap="nowrap" width=10% >
							Адрес объекта
						</td>
						<td  nowrap="nowrap" width=30%>
							<input type="text" name="address_advanced" id="address_advanced" size=30 maxlength=255>
						</td>
						<td scope="row" nowrap="nowrap" width=10% >
							Тип
						</td>
						<td rowspan=2 nowrap="nowrap" width=30%>
							'.$type_advanced.'
						</td>
						</tr>
						<tr>
						<td scope="row" nowrap="nowrap" width=10% >
							Площадь
						</td>
						<td  nowrap="nowrap" width=30%>
							<input type="text" name="square_advanced" id="square_advanced" size=30 maxlength=255>
						</td>
						<td scope="row" nowrap="nowrap" width=10% >
							Бюджет
						</td>
						<td  nowrap="nowrap" width=30%>
							'.$budjet_c_advanced.'
						</td>
						<tr>
						<td colspan="5">
							<input type="button" id="filter_btn" value="Найти" onclick="ApplyFilter();"/>
							<input type="reset" id="reset_btn" value="Очистить"/>
						</td>
						</tr>
					</table>
					</form>';*/
        $search_form_html = '
					<form name="search_form" id="search_form">
					<table width="100%" cellspacing="5" cellpadding="0" border="0">
					    <tr>
     			        <td scope="row" nowrap="nowrap" width=10% >
							Артикул
						</td>
						<td  nowrap="nowrap" width=30%>
							<input type="text" name="name_eng_c" id="name_eng_c" size=30 maxlength=255>
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
			mygrid.setHeader("#,Название объекта, Адрес объекта, Регион, Тип, Площадь, Цена продажи, Дата отправки, Ответственный");
			mygrid.setColTypes  ("ch,ro,ro,ro,ro,ro,ro,ro,ro");
			mygrid.setInitWidths("15,94,94,94,94,94,94,94,94,");
			mygrid.setColSorting("na,str,str,str,str,str,str,DateSort,str");
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
			function openObjectListPopup(id, articule)
			{
				SelectedClients = new Array();
				SelectedClients.push(id);

				var url = "index.php?entryPoint=ObjectToXML&client_id="+id;
				if(typeof articule != "undefined" && articule) {
				    url +="&articule="+articule;
				}
				//mygrid.clearAll();
				//mygrid.load(url);
				document.getElementById("PopupScreenLocker").style.display="block";
				document.getElementById("PopupWindowBody").style.display="none";
				document.getElementById("PopupWindowLog").style.display="block";
				document.getElementById("PopupWindow").style.display="block";
				document.getElementById("Log").value = "Идет загрузка...";
				mygrid.updateFromXML(url,true,true,LoadSuccess); //insert_new & del_missed
				function LoadSuccess()
				{
					ApplyFilter();
					document.getElementById("Log").value = "";
					document.getElementById("PopupWindowLog").style.display="none";
					document.getElementById("PopupWindowBody").style.display="block";
				}
			};
		</script>
	';
	echo '<script language="javascript" >',file_get_contents('custom/modules/sphr_Client/javascript/showHideInfo.detail.js'),'</script>';
	echo '<script>jQuery(function($){toggleClientPanelInit(7);toggleClientPanelInit(8);});</script>';
 	}
 	function process() {
		$this->manager->process();
		parent::process();
	}
}
?>
