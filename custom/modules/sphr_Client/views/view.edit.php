<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once('include/MVC/View/views/view.edit.php');

class sphr_ClientViewEdit extends ViewEdit {
    private $manager;
 	function sphr_ClientViewEdit(){
 		parent::ViewEdit();
 	}

 	function init($bean = null, $view_object_map = array()) {
		parent::init($bean, $view_object_map);

		$this->init_manager();
    }

 	function display() {
		global $app_list_strings;
 		global $mod_strings;

        $this->manager->display();
 	    $this->ev->process();
        $admin = new Administration();
        $admin->retrieveSettings();

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
			$kindred_id = '';
			while($fromDB_getKindred = $this->bean->db->fetchByAssoc($resource_getKindred)) {
				if($kindred_id == '') {$kindred_id = $fromDB_getKindred['id'];} else {$kindred_id .= '///'.$fromDB_getKindred['id'];}
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

		//готовим список стран и городов
		$counties_list = '<option value=""></option>';
		$cities_list = '';
		$query_countries = "SELECT `id`,`name` FROM `sphr_client_countries`";
		$resource_countries = $this->bean->db->query($query_countries);
		while($fromDB_countries = $this->bean->db->fetchByAssoc($resource_countries)) {
			$counties_list .= '<option value="'.$fromDB_countries['id'].'">'.$fromDB_countries['name'].'</option>';
			$num_cities_list = 0;
			$cities_list .= '///<option value=""></option>';
			$query_cities = "SELECT `id`,`name` FROM `sphr_client_cities` WHERE `country_id`='".$fromDB_countries['id']."'";
			$resource_cities = $this->bean->db->query($query_cities);
			while($fromDB_cities = $this->bean->db->fetchByAssoc($resource_cities)) {
				$cities_list .= '<option value="'.$fromDB_cities['id'].'">'.$fromDB_cities['name'].'</option>';
				$num_cities_list++;
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
		if($current_country != "") {
			$getCountryID = "SELECT `id` FROM `sphr_client_countries` WHERE `name`='".$current_country."'";
			$resource_getCountryId = $this->bean->db->query($getCountryID);
			$fromDB_getCountryId = $this->bean->db->fetchByAssoc($resource_getCountryId);
			$current_country_id = $fromDB_getCountryId['id'];

			$getCityID = "SELECT `id` FROM `sphr_client_cities` WHERE `name`='".$current_city."'";
			$resource_getCityId = $this->bean->db->query($getCityID);
			$fromDB_getCityId = $this->bean->db->fetchByAssoc($resource_getCityId);
			$current_city_id = $fromDB_getCityId['id'];
		}
		else {
			$current_country_id = "";
			$current_city_id = "";
		}

        // готовим список кампаний
        $ar_campaigns = array();
        if(isset($this->bean->source))
        {
			$query_campaigns ="SELECT id,name,deleted FROM campaigns";
        	$result_campaigns = $this->bean->db->query($query_campaigns);

            while(($row = $this->bean->db->fetchByAssoc($result_campaigns)) != null )
			{
				if ($row['deleted'] == 1)
				{
					if ((strcmp($row['id'],$this->bean->source))==0) $ar_campaigns [$row['id']] = $row['name'] . $mod_strings['ERR_DELETED'];
				} else {
					$ar_campaigns [$row['id']] = $row['name'];
				}
			}

            $this->ss->assign("ar_campaigns", $ar_campaigns);
			$this->ss->assign("ar_campaign_id", $this->bean->source);
        }

        //====================================================================================================
		//получаем id и name связанной с клиентам маркетинговой кампании
		$query_company = "SELECT mco.id AS mco_id, mco.name AS mco_name FROM sphr_market_company AS mco
		INNER JOIN sphr_market_sphr_client_c AS mco_cli ON mco.id = mco_cli.sphr_marke85efcompany_ida
		WHERE mco_cli.sphr_marke6013_client_idb = '".$this->bean->id."' AND mco.deleted = 0 AND mco_cli.deleted = 0";
        $result_company = $this->bean->db->query($query_company);
		$company_filter = '';
        if(($row_company = $this->bean->db->fetchByAssoc($result_company)) != null)
		{
			//$company_filter .= '&sphr_markef954company_ida_advanced='.$row_company['mco_id']; //если указать id, то во всплывающем окне не отображаются кампании
			$company_filter .= '&sphr_markett_channel_name_advanced='.$row_company['mco_name'];
		}
		$this->ss->assign("company_filter", $company_filter);

		$myJavaScript =
<<<MJS
	<script type="text/javascript">

		//добавление в список стран
		var countries_list = '$counties_list';
		$('#current_country').html(countries_list);

		//добавление городов при изменении страны
		var cities_list = '$cities_list';
		var cities_list_array = cities_list.split('///');
		$('#current_country').change(function(){
			var countryNum = $(this).val();
			if(countryNum == "") {
				$('#current_city').html('');
			}
			else {
				$('#current_city').html(cities_list_array[countryNum]);
			}
		});

		//валидация данных перед сохранением
		function pressSave() {
			var status = 1;
			var mobile = document.getElementById('phone_mobile').value;
			var mobile_2 = document.getElementById('phone_mobile_2_c').value;
			var home = document.getElementById('phone_home').value;
			var work = document.getElementById('phone_work').value;
			//var email = document.getElementById('email').value;
			//var email_2 = document.getElementById('email_2_c').value;
			if((mobile == '') && (mobile_2 == '') && (home == '') && (work == '') && (email == '') && (email_2 == '')) {
				$('.error_window1').remove();
				$('<div class="error_window1" style="width: 400px; margin-top: 5px; text-align: center; color: #f30; border: solid 1px #f30;">Должно быть заполнено хотя бы одно поле контактной информации</div>').appendTo('td .buttons');
				$('#phone_mobile').css('border-color', '#f30');
				$('#phone_mobile_2_c').css('border-color', '#f30');
				$('#phone_home').css('border-color', '#f30');
				$('#phone_work').css('border-color', '#f30');
				//$('#email').css('border-color', '#f30');
				//$('#email_2_c').css('border-color', '#f30');
				status = 0;
			}
			else {
				$('.error_window1').remove();
				$('#phone_mobile').css('border-color', '#94C1E8');
				$('#phone_mobile_2_c').css('border-color', '#94C1E8');
				$('#phone_home').css('border-color', '#94C1E8');
				$('#phone_work').css('border-color', '#94C1E8');
				//$('#email').css('border-color', '#94C1E8');
				//$('#email_2_c').css('border-color', '#94C1E8');
			}
			var count = $('#numBlocks').val();
			count++;
			for(var i = 1; i < count; i++) {
				if($('#kindred_first_name_'+i).val() == '') {
					$('.error_window2_'+i).remove();
					$('<div class="error_window2_'+i+'" style="width: 400px; margin-top: 5px; text-align: center; color: #f30; border: solid 1px #f30;">Имя родственника '+i+' должно быть заполнено</div>').appendTo('td .buttons');
					$('#kindred_first_name_'+i).css('border-color', '#f30');
					status = 0;
				}
				else {
					$('.error_window2_'+i).remove();
					$('#kindred_first_name_'+i).css('border-color', '#94C1E8');
				}
			}
			if(($('#set_current_city').val() != "") && ($('#current_country').val() == "")) {
				$('#error_window3').remove();
				$('<div id="error_window3" style="width: 400px; margin-top: 5px; text-align: center; color: #f30; border: solid 1px #f30;">Новый город не может быть указан без указания страны</div>').appendTo('td .buttons');
				$('#current_country').css('border-color', '#f30');
				$('#set_current_city').css('border-color', '#f30');
				status = 0;
			}
			else {
				$('#error_window3').remove();
				$('#current_country').css('border-color', '#94C1E8');
				$('#set_current_city').css('border-color', '#94C1E8');
			}
			return status;
		}

		//вывод города и страны
		var current_country_id = '$current_country_id';
		var current_city_id = '$current_city_id';
		if(current_country_id != ""){
			$('#current_country').children('option[value="'+current_country_id+'"]').attr('selected', 'selected');
			$('#current_city').html(cities_list_array[current_country_id]);
			$('#current_city').children('option[value="'+current_city_id+'"]').attr('selected', 'selected');
		}

		//добавление члена семьи
		var numClick = 1;
		$('#add_kindred_button').click(function(){
			$('#numBlocks').val(numClick);
			$('<div id="kindred_'+numClick+'" style="width: 55%; margin-top: 25px; padding: 5px 0 0 5px; border-top: solid 1px #94C1E8; border-left: solid 1px #94C1E8;"></div>').appendTo('#additionalBlock_kindred');
			$('<div><img src="themes/Sugar5/images/close.gif" style="float: right; cursor: pointer;" id="close_button_'+numClick+'">Родственник '+numClick+':</div>').appendTo('#kindred_'+numClick);
			$('<div style="margin-top: 10px;">Степень родства: <select name="kindred_degree_'+numClick+'" style="float: right;"><option value="0"></option><option value="wife">Жена</option><option value="husband">Муж</option><option value="son">Сын</option><option value="daughter">Дочь</option><option value="mom">Мать</option><option value="dad">Отец</option><option value="sister">Сестра</option><option value="brother">Брат</option><option value="grandf">Дедушка</option><option value="grandm">Бабушка</option><option value="grandd">Внучка</option><option value="grands">Внук</option></select></div>').appendTo('#kindred_'+numClick);
			$('<div style="margin-top: 10px;">Фамилия: <input type="text" maxlength="20" size="30" name="kindred_last_name_'+numClick+'" style="float: right;"></div>').appendTo('#kindred_'+numClick);
			$('<div style="margin-top: 10px;">Имя:* <input class="kindred_name_st" type="text" maxlength="20" size="30" id="kindred_first_name_'+numClick+'" name="kindred_first_name_'+numClick+'" style="float: right;"></div>').appendTo('#kindred_'+numClick);
			$('<div style="margin-top: 10px;">Отчество: <input type="text" maxlength="20" size="30" name="kindred_middle_name_'+numClick+'" style="float: right;"></div>').appendTo('#kindred_'+numClick);
			$('<div style="margin-top: 10px;">Дата рождения: <input type="text" maxlength="20" size="11" id="kindred_birthday_'+numClick+'" name="kindred_birthday_'+numClick+'" style="float: right;"><img border="0" align="absmiddle" id="kindred_birthday_'+numClick+'_trigger" alt="Ввод даты" src="themes/Sugar5/images/jscalendar.gif" style="float: right; margin-right: 3px;"></div>').appendTo('#kindred_'+numClick);
			$('<div style="margin-top: 10px;">Мобильный телефон: <input type="text" maxlength="20" size="30" name="kindred_mobile_'+numClick+'" style="float: right;"></div>').appendTo('#kindred_'+numClick);
			$('<div style="margin-top: 10px;">Мобильный телефон 2: <input type="text" maxlength="20" size="30" name="kindred_mobile_2_'+numClick+'" style="float: right;"></div>').appendTo('#kindred_'+numClick);
			$('<div style="margin-top: 10px;">E-mail: <input type="text" maxlength="50" size="30" name="kindred_email_'+numClick+'" style="float: right;"></div>').appendTo('#kindred_'+numClick);
			$('<div style="margin-top: 10px;">E-mail 2: <input type="text" maxlength="50" size="30" name="kindred_email_2_'+numClick+'" style="float: right;"></div>').appendTo('#kindred_'+numClick);
			$('<input class="kindred_status" type="hidden" name="kindred_is_'+numClick+'" value="1">').appendTo('#kindred_'+numClick);

			Calendar.setup ({
				inputField : "kindred_birthday_"+numClick,
				daFormat : "%d.%m.%Y %H:%M",
				button : "kindred_birthday_"+numClick+"_trigger",
				singleClick : true,
				dateStr : "",
				step : 1,
				weekNumbers:false
			});

			$('#close_button_'+numClick).click(function(){
				$(this).parent('div').parent('div').children('.kindred_status').val('0');
				$(this).parent('div').parent('div').children('div:has(.kindred_name_st)').children('.kindred_name_st').val('---');
				$(this).parent('div').parent('div').animate({opacity: 'hide'}, 500);
			});

			numClick++;
		});

		//вывод членов семьи если они уже есть
		if(parseInt('$numKindred') > 0) {
			function getArray_kindred(str) {
				return str.split('///');
			}

			var k_id = getArray_kindred('$kindred_id');
			var first_name = getArray_kindred('$kindred_first_name');
			var last_name = getArray_kindred('$kindred_last_name');
			var middle_name = getArray_kindred('$kindred_middle_name');
			var birthday = getArray_kindred('$kindred_birthday');
			var mobile = getArray_kindred('$kindred_mobile');
			var mobile_2 = getArray_kindred('$kindred_mobile_2');
			var email = getArray_kindred('$kindred_email');
			var email_2 = getArray_kindred('$kindred_email_2');
			var degree = getArray_kindred('$kindred_degree');

			var count2 = (parseInt('$numKindred') + 1);
			for(var i2 = 1; i2 < count2; i2++) {
				$('<div id="kindred_'+i2+'" style="width: 55%; margin-top: 25px; padding: 5px 0 0 5px; border-top: solid 1px #94C1E8; border-left: solid 1px #94C1E8;"></div>').appendTo('#additionalBlock_kindred');
				$('<div><img src="themes/Sugar5/images/close.gif" style="float: right; cursor: pointer;" id="close_button_'+i2+'">Родственник '+i2+':</div>').appendTo('#kindred_'+i2);
				$('<div style="margin-top: 10px;">Степень родства: <select id="kindred_degree_'+i2+'" name="kindred_degree_'+i2+'" style="float: right;"><option value="0"></option><option value="wife">Жена</option><option value="husband">Муж</option><option value="son">Сын</option><option value="daughter">Дочь</option><option value="mom">Мать</option><option value="dad">Отец</option><option value="sister">Сестра</option><option value="brother">Брат</option><option value="grandf">Дедушка</option><option value="grandm">Бабушка</option><option value="grandd">Внучка</option><option value="grands">Внук</option></select></div>').appendTo('#kindred_'+i2);
				$('#kindred_degree_'+i2).children('option[value="'+degree[(i2 - 1)]+'"]').attr('selected', 'selected');
				$('<div style="margin-top: 10px;">Фамилия: <input type="text" value="'+last_name[(i2 - 1)]+'" maxlength="20" size="30" name="kindred_last_name_'+i2+'" style="float: right;"></div>').appendTo('#kindred_'+i2);
				$('<div style="margin-top: 10px;">Имя:* <input class="kindred_name_st" type="text" value="'+first_name[(i2 - 1)]+'" maxlength="20" size="30" id="kindred_first_name_'+i2+'" name="kindred_first_name_'+i2+'" style="float: right;"></div>').appendTo('#kindred_'+i2);
				$('<div style="margin-top: 10px;">Отчество: <input type="text" value="'+middle_name[(i2 - 1)]+'" maxlength="20" size="30" name="kindred_middle_name_'+i2+'" style="float: right;"></div>').appendTo('#kindred_'+i2);
				$('<div style="margin-top: 10px;">Дата рождения: <input type="text" value="'+birthday[(i2 - 1)]+'" maxlength="20" size="11" id="kindred_birthday_'+i2+'" name="kindred_birthday_'+i2+'" style="float: right;"><img border="0" align="absmiddle" id="kindred_birthday_'+i2+'_trigger" alt="Ввод даты" src="themes/Sugar5/images/jscalendar.gif" style="float: right; margin-right: 3px;"></div>').appendTo('#kindred_'+i2);
				$('<div style="margin-top: 10px;">Мобильный телефон: <input type="text" value="'+mobile[(i2 - 1)]+'" maxlength="20" size="30" name="kindred_mobile_'+i2+'" style="float: right;"></div>').appendTo('#kindred_'+i2);
				$('<div style="margin-top: 10px;">Мобильный телефон 2: <input type="text" value="'+mobile_2[(i2 - 1)]+'" maxlength="20" size="30" name="kindred_mobile_2_'+i2+'" style="float: right;"></div>').appendTo('#kindred_'+i2);
				$('<div style="margin-top: 10px;">E-mail: <input type="text" value="'+email[(i2 - 1)]+'" maxlength="50" size="30" name="kindred_email_'+i2+'" style="float: right;"></div>').appendTo('#kindred_'+i2);
				$('<div style="margin-top: 10px;">E-mail 2: <input type="text" value="'+email_2[(i2 - 1)]+'" maxlength="50" size="30" name="kindred_email_2_'+i2+'" style="float: right;"></div>').appendTo('#kindred_'+i2);
				$('<input class="kindred_status" type="hidden" name="kindred_is_'+i2+'" value="2">').appendTo('#kindred_'+i2);
				$('<input class="kindred_k_id" type="hidden" name="kindred_k_id_'+i2+'" value="'+k_id[(i2 - 1)]+'">').appendTo('#kindred_'+i2);
				$('#close_button_'+i2).click(function(){
					$(this).parent('div').parent('div').children('.kindred_status').val('3');
					$(this).parent('div').parent('div').children('div:has(.kindred_name_st)').children('.kindred_name_st').val('---');
					$(this).parent('div').parent('div').animate({opacity: 'hide'}, 500);
				});
			}
			numClick = count2;
			$('#numBlocks').val(numClick);
		}

	</script>
MJS;
		$this->ss->assign("MY_JS", $myJavaScript);

        echo $this->ev->display($this->showTitle);

        echo '<script language="javascript" >',file_get_contents('custom/include/javascript/country_region_city.js'),'</script>';
		echo '<script>RegionCity.init(\'country_c\',\'region_c\',\'city_c\')</script>';
		echo '<script language="javascript" >',file_get_contents('custom/modules/sphr_Client/javascript/showHideInfo.edit.js'),'</script>';
		echo '<script>jQuery(function($){toggleClientPanelInit(5);toggleClientPanelInit(6);});</script>';
 	}
 	function process() {
		parent::process();
		$this->manager->process();
	}
	function init_manager(){
		require_once('custom/include/utils/DevToolKitManager.php');
		$this->manager = new DevToolKitManager($this);

	}
}
?>