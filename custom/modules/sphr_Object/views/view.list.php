<?php

require_once('include/MVC/View/views/view.list.php');

class sphr_ObjectViewList extends ViewList
{
	private $manager;
	function init($bean = null, $view_object_map = array()) {
		parent::init($bean, $view_object_map);

		require_once('custom/include/utils/DevToolKitManager.php');

		$this->manager = new DevToolKitManager($this);
    }

	function listViewProcess()
	{
		parent::listViewProcess();
		global $current_user;
		global $app_list_strings;
		$type_c_advanced = '<select id="type_c_advanced"  style="width: 150px" multiple="true" size="4">';
		foreach ($app_list_strings['client_type_list'] as $client_type_value =>  $client_type_label)
			$type_c_advanced .= '<option label="'.$client_type_label.'" value="'.$client_type_value.'">'.$client_type_label.'</option>';
		$type_c_advanced .= '</select>';

		$status_advanced = '<select id="status_advanced" style="width: 150px" multiple="true" size="4">';
		foreach ($app_list_strings['client_status_list'] as $client_status_value =>  $client_status_label)
			$status_advanced .= '<option label="'.$client_status_label.'" value="'.$client_status_value.'">'.$client_status_label.'</option>';
		$status_advanced .= '</select>';


		$assigned_user_id_advanced = '<select id="assigned_user_id_advanced" style="width: 150px" multiple="true" size="4">';
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
					if ((mygrid.cellById(id, 2).getValue()).toUpperCase().indexOf(document.getElementById("title_advanced").value.toUpperCase())!=0)
					{
						mygrid.setRowAttribute(id,"filter_match",0);
					}
					else if ((mygrid.cellById(id, 3).getValue().toUpperCase()).indexOf(document.getElementById("first_name_advanced").value.toUpperCase())!=0)
					{
						mygrid.setRowAttribute(id,"filter_match",0);
					}
					else if ((mygrid.cellById(id, 9).getValue().toUpperCase()).indexOf(document.getElementById("date_entered_advanced").value.toUpperCase())!=0)
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
		$search_form_html = '
					<form name="search_form_client" id="search_form_client">
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
			function openClientListPopup(arr,ptype,pid)
			{
				SelectedObjects = new Array();
				var obj = document.getElementsByName(arr);
				for (var i=0;i<obj.length;i++)
					if (obj.item(i).checked) SelectedObjects.push(obj.item(i).value);

				var url = "index.php?entryPoint=ClientToXML";
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
				}
			};
		</script>
';
}

 public function action_sendSelectedObjects()
    {
		echo "Sent";
        sugar_die('');
	}
	public function preDisplay()
    {
		//echo '<script type="text/javascript" src="custom/include/email_sender/email_sender.js"></script>';
		parent::preDisplay();
        $this->lv->actionsMenuExtraItems[] = $this->buildMyMenuItem();
    }


	protected function buildMyMenuItem()
	{
		global $app_strings;
		return str_replace(array("\n","\r","\t"),"",
"<a href='#' style='width: 150px' class='menuItem'
	onmouseover='hiliteItem(this,\"yes\");' onmouseout='unhiliteItem(this);'
	onclick='sugarListView.get_checks();
	if(sugarListView.get_checks_count() < 1) {
		alert(\"{$app_strings["LBL_LISTVIEW_NO_SELECTED"]}\");
			return false;
		}
		openClientListPopup(\"mass[]\",\"sphr_Object\",\"\");
		//document.MassUpdate.action.value=\"sendSelectedObjects\";
		//document.MassUpdate.submit();'>
	Отправить выделенные объекты
</a>");
	}
	function processSearchForm() {
	   	parent::processSearchForm();
	   	$this->manager->process();

	   	//при выборе населеного пункта фильтруется список провинций и побережий
	   
		echo '
	   	<script>
		$(document).ready(function(){
		
			$("body").find("select").change(function(){
			    name=$(this).attr("name");
				
			    if(name == "country_basic[]" || name == "country_advanced[]"){
				    country = $(this).val();
				    
					var url = "index.php?module=sphr_Object&key=f0010b711457fa4bfa543bc3af31d40a&search=1&country="+country;
					$.get(url,{},function(res){
					   
						if(res != ""){
						    res = res.split("|||");
							province = res[0];
				            coast = res[1];
							province=province.split(",");
				            var opt="";
							$.each(province, function(key, val) {
				                val = val.split(":");
				                opt += "<option label="+val[1]+" value="+val[0]+">"+val[1]+"</option>";
				            });
							$("#province_select_c_basic").empty();
				            $("#province_select_c_basic").append(opt);
				            $("#province_select_c_advanced").empty();
				            $("#province_select_c_advanced").append(opt);
							
							coast=coast.split(",");
							
				            var opt="";
				            $.each(coast, function(key, val) {
				                val = val.split(":");
				                opt += "<option label="+val[1]+" value="+val[0]+">"+val[1]+"</option>";
				            });
				            $("#coast_select_c_basic").empty();
				            $("#coast_select_c_basic").append(opt);
				            $("#coast_select_c_advanced").empty();
				            $("#coast_select_c_advanced").append(opt);
						}
					});
					
				}
				if(name == "province_select_c_basic[]" || name == "province_select_c_advanced[]"){
					country=$("select[name=\'country_basic[]\']").val() || $("select[name=\'country_advanced[]\']").val();
					province = $(this).val();
				   
					var url = "index.php?module=sphr_Object&key=f0010b711457fa4bfa543bc3af31d40a&search=1&country="+country+"&province="+province;
					$.get(url,{},function(res){
					  
						if(res != ""){
						    res = res.split("|||");
				            coast = res[1];
							
							coast=coast.split(",");
				            var opt="";
				            $.each(coast, function(key, val) {
				                val = val.split(":");
				                opt += "<option label="+val[1]+" value="+val[0]+">"+val[1]+"</option>";
				            });
				            $("#coast_select_c_basic").empty();
				            $("#coast_select_c_basic").append(opt);
				            $("#coast_select_c_advanced").empty();
				            $("#coast_select_c_advanced").append(opt);
						}
					});
					
				}
			});
		
		});
		</script>
		';
		//-------------------------------------------------------------'


    }
}
?>