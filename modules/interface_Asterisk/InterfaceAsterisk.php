<?php
//prevents directly accessing this file from a web browser
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

class InterfaceAsterisk
{
	private $delay;
	private $lastTimeMinutes;
	private $isSearchBusinessCenter;
	
	private $new_inbound_call_text;
	private $new_outbound_call_text;
	private $bc_inbound_call_text;
	
	private $default_user;
	private $virtual_record;
	private $roles;

	private $modulesSearchArray;
	private $moduleBCArray;
	
	
	function InterfaceAsterisk () {
		require("./modules/interface_Asterisk/config.php");
		
		$this->delay = $delay;
		$this->lastTimeMinutes = $lastTimeMinutes;
		$this->isSearchBusinessCenter = $isSearchBusinessCenter;
		
		$this->new_inbound_call_text = $new_inbound_call_text;
		$this->new_outbound_call_text = $new_outbound_call_text;
		$this->bc_inbound_call_text = $bc_inbound_call_text;
		
		$this->default_user = $default_user;
		$this->virtual_record = $virtual_record;
		$this->roles = $roles;
		
		$this->modulesSearchArray = $modulesSearchArray;
		$this->moduleBCArray = $moduleBCArray;
	}
	
	// запускаем javascript, инициализирующий всю работу всплывающей формы
	function onlineFormStartupJavaScript ()
	{
		if ($_REQUEST['module'] != "ModuleBuilder")
		{	
			/*
			echo '<script type="text/javascript" src="modules/interface_Asterisk/javascript/InterfaceAsterisk.js"></script><script type="text/javascript">onlineInterfaceAsterisk.createInterfaceAsterisk();</script>
				<div id="onlAstUploadWindow" style="display:none; position:fixed; top:10%; left:20%; width:60%; height:400px; padding:10px; border:1px solid #abc3d7; background-color:#ffffff; z-index:3;">
					<div style="float:right; width:80px; text-align:right; margin-bottom:10px; cursor:pointer;" onclick="onlineInterfaceAsterisk.closeWindow();"><img src="themes/default/images/dashlet-header-close.gif" width="13" height="13" border="0" align="absmiddle" /></div>
					<h3><span>Уведомление о новом входящем звонке</span></h3>
					<div style="float:left; width:450px; overflow:auto;">
					<p>Внимание! Новый входящий звонок от абонента <span id="onlAstPhone" style="font-weight:bold;"></span> <a href="" id="onlAstUrlView" style="margin-left:30px; margin-right:10px;"><img src="themes/Sugar5/images/view_inline.gif" border="0" alt="" id="onlAstImgView"></a> <a href="" id="onlAstUrlEdit"><img src="themes/Sugar5/images/edit_inline.gif" border="0" alt="" id="onlAstImgEdit"></a></p>
					<p><b>Дополнительная информация:</b></p>
						<p>Название: <span id="onlAstName"></span></p>
						<p>ФИО: <span id="onlAstInitials"></span></p>
						<p>Ответственный: <span id="onlAstAssignedUser"></span></p>
					</div>
				</div>';
			*/
		}
	}
	
	
	// получаем стартовую информацию для всплывающей формы
	function onlineFormStart ()
	{
		$startInfoArray = array("delay" => $this->delay);
		$startInfoArrayJSON = json_encode ($startInfoArray);
		
		return $startInfoArrayJSON;
	}
	
	
	// штатный запрос на получение сведений о том, есть ли звонок
	function onlineFormGetInfo ()
	{
		global $sugar_config, $current_user;
		
		$db = DBManagerFactory::getInstance();

		// запрос, определяющий, есть ли звонки для текущего пользователя
		
		$timedate = new TimeDate;
		$defaultTZ = date_default_timezone_get();
		date_default_timezone_set('GMT');
		$currentTime = time() + ($timedate->adjustmentForUserTimeZone() * 60);
		date_default_timezone_set($defaultTZ);
		
		// берем от текущего времени на несколько минут назад (точное время учета задается в настройках)
		$currentTime = $currentTime - $this->lastTimeMinutes*60;
				
		$query = "SELECT id, module, phone, record_id FROM interface_asterisk_temp_calls WHERE assigned_user_id = '".$current_user->id."' AND at_work = 0 AND date_entered >= '".date("Y-m-d H:i:s", $currentTime)."'";
 
		$result = $db->query($query, true);
		$rows_found =  $db->getRowCount($result);
		
		
		$arrayResult = array("is_call" => 0, "url_href_view" => "", "url_text_view" => "", "url_href_edit" => "", "url_text_edit" => "", "phone" => "", "name" => "", "initials" => "", "assigned_user_name" => "", "is_client_new" => 0, "client_market_company" => "");
		
		if ($rows_found > 0)
		{
			$row = $db->fetchByAssoc($result);
			
			// для бизнес-центров особый вывод информации в карточку
			if ($row["module"] == "bcm_business_center")
			{
				$query_addition_info = "SELECT assigned_user_id, ".$this->moduleBCArray["bcm_business_center"]["fields_additional_info"]["name"]." FROM ".$this->moduleBCArray[$row["module"]]["table"]." WHERE id = '".$row["record_id"]."'";
				$result_addition_info = $db->query($query_addition_info, true);
				$row_addition_info = $db->fetchByAssoc($result_addition_info);
				
				$query_assigned_user_name = "SELECT CONCAT_WS(' ', last_name, first_name) AS assigned_user_name FROM users WHERE id = '".$row_addition_info["assigned_user_id"]."'";
				$result_assigned_user_name = $db->query($query_assigned_user_name, true);
				$row_assigned_user_name = $db->fetchByAssoc($result_assigned_user_name);
				
				$arrayResult["is_call"] = 1;
				$arrayResult["url_href_view"] = $sugar_config["site_url"]."/index.php?".str_replace(array("{module}", "{record_id}"), array($row["module"], $row["record_id"]), $this->moduleBCArray["bcm_business_center"]["upload_window_url_view"]);
				$arrayResult["url_text_view"] = $this->moduleBCArray[$row["module"]]["upload_window_text_view"];
				$arrayResult["url_href_edit"] = $sugar_config["site_url"]."/index.php?".str_replace(array("{module}", "{record_id}"), array($row["module"], $row["record_id"]), $this->moduleBCArray["bcm_business_center"]["upload_window_url_edit"]);
				$arrayResult["url_text_edit"] = $this->moduleBCArray[$row["module"]]["upload_window_text_edit"];
				$arrayResult["phone"] = $row["phone"];
				$arrayResult["name"] = $row_addition_info[$this->moduleBCArray["bcm_business_center"]["fields_additional_info"]["name"]];
				$arrayResult["assigned_user_name"] = $row_assigned_user_name["assigned_user_name"];
			}
			else 
			{
				$initials_fields_query = "";
				if ($this->modulesSearchArray[$row["module"]]["fields_additional_info"]["initials"] > 0)
				{
					foreach ($this->modulesSearchArray[$row["module"]]["fields_additional_info"]["initials"] as $initial_field) {$initials_fields_query .= ", ".$initial_field;}
				}
				
				
				$query_addition_info = "SELECT assigned_user_id, ".$this->modulesSearchArray[$row["module"]]["fields_additional_info"]["name"]." ".$initials_fields_query." FROM ".$this->modulesSearchArray[$row["module"]]["table"]." WHERE id = '".$row["record_id"]."'";
				$result_addition_info = $db->query($query_addition_info, true);
				$rows_found_addition_info =  $db->getRowCount($result_addition_info);
				
				$arrayResult["is_call"] = 1;
				$arrayResult["url_href_view"] = $sugar_config["site_url"]."/index.php?".str_replace(array("{module}", "{record_id}"), array($row["module"], $row["record_id"]), $this->modulesSearchArray[$row["module"]]["upload_window_url_view"]);
				$arrayResult["url_text_view"] = $this->modulesSearchArray[$row["module"]]["upload_window_text_view"];
				$arrayResult["url_href_edit"] = $sugar_config["site_url"]."/index.php?".str_replace(array("{module}", "{record_id}"), array($row["module"], $row["record_id"]), $this->modulesSearchArray[$row["module"]]["upload_window_url_edit"]);
				$arrayResult["url_text_edit"] = $this->modulesSearchArray[$row["module"]]["upload_window_text_edit"];
				$arrayResult["phone"] = $row["phone"];
				
				if ($rows_found_addition_info > 0)
				{
					$row_addition_info = $db->fetchByAssoc($result_addition_info);
					
					$query_assigned_user_name = "SELECT CONCAT_WS(' ', last_name, first_name) AS assigned_user_name FROM users WHERE id = '".$row_addition_info["assigned_user_id"]."'";
					$result_assigned_user_name = $db->query($query_assigned_user_name, true);
					$row_assigned_user_name = $db->fetchByAssoc($result_assigned_user_name);
					
					$arrayResult["name"] = $row_addition_info[$this->modulesSearchArray[$row["module"]]["fields_additional_info"]["name"]];
					foreach ($this->modulesSearchArray[$row["module"]]["fields_additional_info"]["initials"] as $initial_field) {$arrayResult["initials"] .= $row_addition_info[$initial_field]." ";}
					$arrayResult["assigned_user_name"] = $row_assigned_user_name["assigned_user_name"];
				}
				
				// если этот модуль - Клиенты, то выводим для них дополнительно два параметра: 1. существующий ли это клиент, или новый 2. рекламная кампания, к которой принадлежит клиент
				if ($row["module"] == "sphr_Client")
				{
					$query_is_client = "SELECT is_new_c FROM sphr_client_cstm WHERE id_c = '".$row['record_id']."'"; // информация о том, новый клиент, или нет
					$query_get_market_company = "SELECT M.id, M.name FROM sphr_market_company AS M, sphr_market_sphr_client_c AS MC WHERE MC.sphr_marke6013_client_idb = '".$row['record_id']."' AND MC.sphr_marke85efcompany_ida = M.id ";
					
					$result_is_client = $db->query($query_is_client, true);
					$result_get_market_company = $db->query($query_get_market_company, true);
					
					$rows_found_is_client =  $db->getRowCount($result_is_client);
					$rows_found_get_market_company =  $db->getRowCount($result_get_market_company);
					
					if ($rows_found_is_client > 0)
					{
						$row_is_client = $db->fetchByAssoc($result_is_client);
						if ($row_is_client["is_new_c"] == 1) $arrayResult["is_client_new"] = 1;
						
						// после того, как вывели впервые информацию о новом клиенте, снимаем признак новизны
						$query_drop_client_new = "UPDATE sphr_client_cstm SET is_new_c = 0 WHERE id_c = '".$row['record_id']."'";
						$result_drop_client_new = $db->query($query_drop_client_new, true);
					}
					
					if ($rows_found_get_market_company > 0)
					{
						$row_get_market_company = $db->fetchByAssoc($result_get_market_company);
						$arrayResult["client_market_company"] = '<a href="'.$sugar_config["site_url"].'/index.php?module=sphr_market_company&return_module=sphr_market_company&action=DetailView&record='.$row_get_market_company["id"].'" style="font-size:12pt;">'.$row_get_market_company["name"].'</a>';
					}
				}
			}
			
			
			// блокируем найденный звонок, помечая его флагом "в работе"
			$query_at_work = "UPDATE interface_asterisk_temp_calls SET at_work = 1 WHERE id = '".$row["id"]."'";
			$result_at_work = $db->query($query_at_work, true);
		}
		

		$arrayResultJSON = $this->unicodeToCyrillic(json_encode($arrayResult));
		
		return $arrayResultJSON;
	}
	
	
	// функция поиска пользователя по переданному телефонному номеру
	function searchUserByPhone ()
	{
		require_once('modules/Calls/Call.php');
		require_once('modules/sphr_Client/sphr_Client.php');
		
		$call = new Call();
		$sphr_Client = new sphr_Client();
		
		require_once('include/utils.php'); // используем внутренние утилиты Sugar для генерации id
		$db = DBManagerFactory::getInstance();

		if (!isset($_GET["phone"]) || !isset($_GET["internal_phone"])) return -1;
		
		$phone = urldecode($_GET["phone"]);
		$internal_phone = urldecode($_GET["internal_phone"]); // из внешнего окружения передается внутренний телефонный номер пользователя (секретарь), к которому нужно направить данный звонок
		$campaigns_phone = isset($_GET["campaigns_phone"]) ? urlencode($_GET["campaigns_phone"]) : ""; // телефон кампании, если он необходим
		
		// по переданному внутреннему номеру ищем id пользователя, к которому надо привязать/перевести звонок, если такого пользователя не находим, привязываем звонок к пользователю по умолчанию
		$query_id_user = "SELECT id_c FROM users_cstm WHERE asterisk_ext_c = '".$internal_phone."'";
		$result_id_user = $db->query($query_id_user, true);
		$rows_found_id_user =  $db->getRowCount($result_id_user);
			
		if ($rows_found_id_user > 0)
		{
			$row_id_user = $db->fetchByAssoc($result_id_user);
			$id_user = $row_id_user["id_c"];
		}
		else $id_user = $this->default_user["record_id"];
		
		
		
		
		// конвертируем номер телефона в поисковый формат - это просто набор цифр, без каких-либо иных знаков
		$phone_search = str_replace(array("+", "-", " ", ",", "."), "", $phone);
		$phone_search = substr($phone_search, -7); // берем для поиска последние 7 цифр
		
		// осуществляем собственно сам поиск
		$resultSearchArray = array();
		
		foreach ($this->modulesSearchArray as $key => $value) 
		{
			$currentSearchArray = $this->searchPhone($phone_search, $key, $value["table"], $value["fields"]);
			
			// если были найденны какие-либо записи с соответствующим телефоном, записываем их в итоговый массив
			if (count($currentSearchArray) > 0) $resultSearchArray = array_merge($resultSearchArray, $currentSearchArray);
			
			// если найдено совпадение в модуле клиентов, то осуществляем поиск также в рекламных кампаниях и привязываем в случае успеха найденную кампанию к данному клиенту
			if (count($currentSearchArray) > 0 && $key == "sphr_Client")
			{
				$this->createCampaignsRelateByPhone($campaigns_phone, $currentSearchArray[0]["record_id"]);
			}
		}
		
		
		// если в ходе поисков были получены какие-либо результаты, записываем сведения о новом звонке, если же результата не было - регистрируем звонок в предварительных контактах

		// в обоих случаях привязываем звонок 
		if (count($resultSearchArray) > 0)
		{
			// создаем звонок с нужными данными
			$call_id = $this->createCall($this->new_inbound_call_text["name"], $id_user, $id_user, $this->new_inbound_call_text["description"]." ".$phone, $id_user, $resultSearchArray[0]["module"], "Held", "Inbound", $resultSearchArray[0]["record_id"], date("Y-m-d H:i:s", time()-14400), date("Y-m-d"));

			$query_temp_call = "INSERT INTO interface_asterisk_temp_calls VALUES ('', '".date("Y-m-d H:i:s")."', '".date("Y-m-d H:i:s")."', '".$id_user."', '".$call_id."', '".$phone."', -1, 0, '".$resultSearchArray[0]["module"]."', '".$resultSearchArray[0]["record_id"]."')";
			$result_temp_call = $db->query($query_temp_call, true);
		}
		
		// если не удалось найти упоминаний о поступившем номере телефона среди контакнтых модулей
		else 
		{
			// если не нашли ничего среди стандартных модулей поиска, пробуем поискать звонок по бизнес-центрам
			$registerSphr_Client = true; // определяем, нужно ли создавать для этого номера нового клиента
			$tempCallParentModule = "";
			$tempCallParentId = "";
			
			
			if ($this->isSearchBusinessCenter)
			{
				$query_bc_search = "SELECT BC.id, BC.name, BC.description, BC.address_c FROM bcm_business_center_phone_c AS BCP, bcm_business_center AS BC WHERE BCP.bcm_business_center_id = BC.id AND BC.deleted = 0 AND SUBSTRING(REPLACE(REPLACE(REPLACE(REPLACE(REPLACE(REPLACE(BCP.phone,' ',''),'+',''),')',''),'(',''),'-',''),'.',''), -7) = '$phone_search'";
				$result_bc_search = $db->query($query_bc_search, true);
				
				$rows_bc_search_found = $db->getRowCount($result_bc_search);
				
				if ($rows_bc_search_found > 0)
				{
					$row_bc_search = $db->fetchByAssoc($result_bc_search);
					
					// регистрируем звонок и крепим его к этому БЦ
					$call_id = $this->createCall($this->bc_inbound_call_text["name"], $id_user, $id_user, $this->bc_inbound_call_text["description"]." ".$row_bc_search["name"], $id_user, "bcm_business_center", "Held", "Inbound", $row_bc_search["id"], date("Y-m-d H:i:s", time()-14400), date("Y-m-d"));
					
					$tempCallParentModule = "bcm_business_center";
					$tempCallParentId = $row_bc_search["id"];
					
					$registerSphr_Client = false; // если нашли в БД совпадение с бизнес-цетнром, то создавать для звонка нового клиента не нужно
				}
			}
			
			// если не нашли совпадений по поисковым модулям и не нашли (или не нужно было искать) совпадений в бизнес центрах, то регистрируем для звонка нового киента и привязываем его к нему
			if ($registerSphr_Client)
			{
				$sphr_Client->title = $this->new_inbound_call_text["name"]; // для нового контакта записываем данные не в поле "Фамилия", а в поле "Имя"
				$sphr_Client->first_name = $this->new_inbound_call_text["name"];
				//$sphr_Client->last_name = $this->new_inbound_call_text["name"];
				//$sphr_Client->middle_name_c = $this->new_inbound_call_text["name"];
				
				$sphr_Client->modified_user_id = $id_user;
				$sphr_Client->created_by = $id_user;
				$sphr_Client->description = $this->new_inbound_call_text["description"]." ".$phone;
				$sphr_Client->assigned_user_id = $id_user;
				$sphr_Client->phone_work = $phone;
				$sphr_Client->phone_home = $phone;
				$sphr_Client->phone_mobile = $phone;
				$sphr_Client->phone_aon_c = $phone;				
				$sphr_Client->is_new_c = 1; // отмечаем флагом, что новый клиент, чтобы во всплывающей каточке  уведомить об этом оператора
				
				$sphr_Client->save();
				
				$sphr_Client_id = $sphr_Client->id;
				
				$call_id = $this->createCall($this->new_inbound_call_text["name"], $id_user, $id_user, $this->new_inbound_call_text["description"]." ".$phone, $id_user, "sphr_Client", "Held", "Inbound", $sphr_Client_id, date("Y-m-d H:i:s", time()-14400), date("Y-m-d", time()-14400));
				
				$tempCallParentModule = "sphr_Client";
				$tempCallParentId = $sphr_Client_id;
				
				$this->createCampaignsRelateByPhone($campaigns_phone, $sphr_Client_id);
			}
			
			
			$query_temp_call = "INSERT INTO interface_asterisk_temp_calls VALUES ('', '".date("Y-m-d H:i:s")."', '".date("Y-m-d H:i:s")."', '".$id_user."', '".$call_id."', '".$phone."', -1, 0, '".$tempCallParentModule."', '".$tempCallParentId."')";
			$result_temp_call = $db->query($query_temp_call, true);
		}
		
		
		// возвращаем обратную информацию об этом звонке
		return "internal_number:".$internal_phone.";call_id:".$call_id;
	}
	
	
	// функция поиска пользователя по внутреннему номеру
	function searchUserByInternalPhone ()
	{
		require_once('modules/Calls/Call.php');
		
		$call = new Call();
		
		require_once('include/utils.php'); // используем внутренние утилиты Sugar для генерации id
		$db = DBManagerFactory::getInstance();
		
		
		
		if (!isset($_GET["internal_phone"])) return "";
		$internal_phone = urldecode($_GET["internal_phone"]);

		if (!isset($_GET["phone"])) return "";
		$phone = urldecode($_GET["phone"]);
		
		
		// конвертируем номера телефонов в поисковый формат - это просто набор цифр, без каких-либо иных знаков
		$phone_search = str_replace(array("+", "-", " ", ",", "."), "", $phone);
		$phone_search = substr($phone_search, -7); // берем для поиска последние 7 цифр
		
		$internal_phone_search = str_replace(array("+", "-", " ", ",", "."), "", $internal_phone);
		
		
		// начинаем поиск необходимой информации
		
			// поиск абонента, которому адресован звонок
				$resultSearchArray = array();
			
				foreach ($this->modulesSearchArray as $key => $value) 
				{
					$currentSearchArray = $this->searchPhone($phone_search, $key, $value["table"], $value["fields"]);
					
					// если были найденны какие-либо записи с соответствующим телефоном, записываем их в итоговый массив
					if (count($currentSearchArray) > 0) $resultSearchArray = array_merge($resultSearchArray, $currentSearchArray);
				}
				
				if (count($resultSearchArray) == 0) {$resultSearchArray[] = array("assigned_user_id" => "", "module" => $this->virtual_record["module"], "record_id" => $this->virtual_record["record_id"]);}
			
				
			// поиск абонента, который осуществляет вызов
				$query_user = "SELECT id_c FROM users_cstm WHERE asterisk_ext_c = '".$internal_phone_search."'";
				$result_user = $db->query($query_user, true);
				$row_user = $db->fetchByAssoc($result_user);
				
				$user_id = $row_user["id_c"];
			
			
		// поиск завершен, записываем в БД результат, фиксируя звонок
			$call->name = $this->new_inbound_call_text["name"];
			$call->modified_user_id = $user_id;
			$call->created_by = $user_id;
			$call->description = $this->new_inbound_call_text["description"]." ".$phone;
			$call->assigned_user_id = $user_id;
			$call->parent_type = $resultSearchArray[0]["module"];
			$call->status = "Held";
			$call->direction = "Inbound";
			$call->parent_id = $resultSearchArray[0]["record_id"];
			$call->date_start = date("Y-m-d H:i:s", time()-14400);
			$call->date_end = date("Y-m-d", time()-14400);

			$call->save();
			
			$call_id = $call->id;
			
			
			// $query_call = "INSERT INTO calls VALUES ('".$call_id."', '".$this->new_oubound_call_text["name"]."', '".date("Y-m-d H:i:s", $currentTime)."', '".date("Y-m-d H:i:s", $currentTime)."', '".$user_id."', '".$user_id."', '".$this->new_outbound_call_text["description"]." ".$phone."', 0, '".$user_id."', 0, 0, '".date("Y-m-d H:i:s", $currentTime)."', '".date("Y-m-d")."', '".$resultSearchArray[0]["module"]."', 'Held', 'Outbound', '".$resultSearchArray[0]["record_id"]."', 1800, NULL)";
			// $result_call = $db->query($query_call, true);
			
		// возвращаем обратную информацию об этом звонке
		return "call_id:".$call_id;
	}
	
	
	// функция установки продолжительности звонка
	function setCallDuration ()
	{
		// создаем подключение к БД
		$db = DBManagerFactory::getInstance();
		
		
		if (!isset($_GET["call_time"])) return "";
		$seconds_call_time = urldecode($_GET["call_time"]);

		if (!isset($_GET["call_id"])) return "";
		$call_id = urldecode($_GET["call_id"]);
		
		
		// обновляем в БД информацию о звонке - добавляем к ней продолжительность звонка
			
		// поскольку данные о длительности звонка передаются в милисекундах, конвертируем длительность звонка в значения, понятные Sugar
		$hours_call_time = floor($seconds_call_time/(60*60)); // часть звонка в часах
		$minuts_call_time = floor(($seconds_call_time - $hours_call_time*60*60)/60); // часть звонка в минутах

	
		// обновляем информацию о звонке
		$query_update_call = "UPDATE calls SET duration_hours = ".$hours_call_time.", duration_minutes = ".$minuts_call_time." WHERE id = '".$call_id."'";
		$result_update_call = $db->query($query_update_call, true);
		
		return "true";
	}
	
	// функция редиректа звонка от серкетаря конкретному пользователю
	function redirectUserCall ()
	{
		require_once('include/utils.php'); // используем внутренние утилиты Sugar для генерации id
		$db = DBManagerFactory::getInstance();
		
		
		if (!isset($_GET["call_id"]) || !isset($_GET["internal_phone"])) return -1;
		$call_id = urldecode($_GET["call_id"]);
		$internal_phone = urldecode($_GET["internal_phone"]);
		
		
		// ищем пользователя по мобильному телефону
		if (strlen($internal_phone) > 4)
		{
			$query_user_id = "SELECT id FROM users WHERE phone_mobile = '".$internal_phone."'";
			$result_user_id = $db->query($query_user_id, true);
			$rows_found_user_id =  $db->getRowCount($result_user_id);
			
			if ($rows_found_user_id > 0)
			{
				$row_user_id = $db->fetchByAssoc($result_user_id);
				$user_id = $row_user_id["id"];
				
				// обновляем у найденного звонка информацию об ответственном за него пользователе
					
					// сам звонок
					$query_update_call = "UPDATE calls
											SET
												modified_user_id = '".$user_id."',
												created_by = '".$user_id."',
												assigned_user_id = '".$user_id."'
											WHERE id = '".$call_id."'";
					$result_update_call = $db->query($query_update_call, true);
					
					// информация в таблице оповещения о звонках
					$query_update_temp_call = "UPDATE interface_asterisk_temp_calls
											SET
												assigned_user_id = '".$user_id."',
												at_work = 1
											WHERE call_id = '".$call_id."'";
					$result_update_temp_call = $db->query($query_update_temp_call, true);
					
					
				// проверяем, был ли создан для этого звонка клиент и если был, обновляем создавшего/ответственного пользователя у него
				
					$query_check_is_sphr_Client = "SELECT parent_id FROM calls WHERE id = '".$call_id."' AND parent_type = 'sphr_Client'";
					$result_check_is_sphr_Client = $db->query($query_check_is_sphr_Client, true);
					
					$rows_found_check_is_sphr_Client =  $db->getRowCount($result_check_is_sphr_Client);
					
					if ($rows_found_check_is_sphr_Client > 0)
					{
						$row_check_is_sphr_Client = $db->fetchByAssoc($result_check_is_sphr_Client);
						
						$query_update_sphr_Client = "UPDATE sphr_client
												SET
													modified_user_id = '".$user_id."',
													created_by = '".$user_id."',
													assigned_user_id = '".$user_id."'
												WHERE id = '".$row_check_is_sphr_Client["parent_id"]."'";
						
						$result_update_sphr_Client = $db->query($query_update_sphr_Client, true);
					}
			}
		}
		
		// ищем пользователя по внутреннему номеру
		else
		{
			$query_user_id = "SELECT id_c FROM users_cstm WHERE asterisk_ext_c = '".$internal_phone."'";
			$result_user_id = $db->query($query_user_id, true);
			$rows_found_user_id =  $db->getRowCount($result_user_id);
					
			if ($rows_found_user_id > 0)
			{
				$row_user_id = $db->fetchByAssoc($result_user_id);
				$user_id = $row_user_id["id_c"];
				
				// обновляем у найденного звонка информацию об ответственном за него пользователе
					
					// сам звонок
					$query_update_call = "UPDATE calls
											SET
												modified_user_id = '".$user_id."',
												created_by = '".$user_id."',
												assigned_user_id = '".$user_id."'
											WHERE id = '".$call_id."'";
					$result_update_call = $db->query($query_update_call, true);
					
					// информация в таблице оповещения о звонках
					$query_update_temp_call = "UPDATE interface_asterisk_temp_calls
											SET
												assigned_user_id = '".$user_id."',
												at_work = 0
											WHERE call_id = '".$call_id."'";
					$result_update_temp_call = $db->query($query_update_temp_call, true);
				
				
				
				
				// проверяем, был ли создан для этого звонка клиент и если был, обновляем создавшего/ответственного пользователя у него
				
					$query_check_is_sphr_Client = "SELECT parent_id FROM calls WHERE id = '".$call_id."' AND parent_type = 'sphr_Client'";
					$result_check_is_sphr_Client = $db->query($query_check_is_sphr_Client, true);
					
					$rows_found_check_is_sphr_Client =  $db->getRowCount($result_check_is_sphr_Client);
					
					if ($rows_found_check_is_sphr_Client > 0)
					{
						$row_check_is_sphr_Client = $db->fetchByAssoc($result_check_is_sphr_Client);
						
						$query_update_sphr_Client = "UPDATE sphr_client
												SET
													modified_user_id = '".$user_id."',
													created_by = '".$user_id."',
													assigned_user_id = '".$user_id."'
												WHERE id = '".$row_check_is_sphr_Client["parent_id"]."'";
						
						$result_update_sphr_Client = $db->query($query_update_sphr_Client, true);
					}
			}
		}
	}
	
	// функция получения всех пользователей по заданным группам менеджеров
	function getAllManagersWithInternalPhones ()
	{
		global $sugar_config, $app_list_strings;
		
		$db = DBManagerFactory::getInstance();
		
		
		$resultUsersArray = array();
		

		$query_roles_list = "";
		foreach ($this->roles["managers"] AS $role) $query_roles_list .= ", '".$role."'";
		$query_roles_list = substr($query_roles_list, 2);
		
		// извлекаем всех пользователей, относящихся к группам менеджеров
		$query = "SELECT DISTINCT U.id, U.first_name, U.last_name, UC.asterisk_ext_c
						FROM users AS U, users_cstm AS UC, acl_roles_users AS RU, acl_roles AS R
					WHERE R.id IN (".$query_roles_list.")
						AND R.id = RU.role_id
						AND RU.user_id = U.id
						AND U.id = UC.id_c
						AND U.deleted = 0
						AND RU.deleted = 0
						AND R.deleted = 0
					ORDER BY U.last_name, U.first_name ASC";
		
		$result = $db->query($query, true);
		
		$rows_count =  $db->getRowCount($result);
		
		if ($rows_count > 0)
		{
			while ($row = $db->fetchByAssoc($result)) {$resultUsersArray[] = $row;}
		}

		return $resultUsersArray;
	}
	
	// функция сохранения нового внутреннего телефона для пользователя
	function saveUserInternalPhone ($userId, $userInternalPhone)
	{
		$db = DBManagerFactory::getInstance();
		
		// перед тем, как обновить текущий номер телефона, проверяем есть ли у кого-либо из других пользователь этот телефон, если есть - затираем его пустым значением
		$query_check_internal_phone = "SELECT id_c FROM users_cstm WHERE asterisk_ext_c = '".$userInternalPhone."'";
		$result_check_internal_phone = $db->query($query_check_internal_phone);
		
		while ($row_check_internal_phone = $db->fetchByAssoc($result_check_internal_phone)) 
		{
			$query_update_check_internal_phone = "UPDATE users_cstm SET asterisk_ext_c = '' WHERE id_c = '".$row_check_internal_phone["id_c"]."'";
			$result_update_check_internal_phone = $db->query($query_update_check_internal_phone);
		}
		
		// после обновления остальных номеров телефонов редактируем текущий
		$query_update_internal_phone = "UPDATE users_cstm SET asterisk_ext_c = '".$userInternalPhone."' WHERE id_c = '".$userId."'";
		$result_update_internal_phone = $db->query($query_update_internal_phone, true);
	}
	
	function checkIsSecretary ($roles_array_name)
	{
		$roles_array_id = array();
		
		$db = DBManagerFactory::getInstance();
		
		for ($i=0; $i<count($roles_array_name); $i++)
		{
			$query_get_role_id = "SELECT id FROM acl_roles WHERE name ='".$roles_array_name[$i]."'";
			$result_get_role_id = $db->query($query_get_role_id, true);
			
			$rows_get_role_id =  $db->getRowCount($result_get_role_id);
			if ($rows_get_role_id > 0) {$row_get_role_id = $db->fetchByAssoc($result_get_role_id); $roles_array_id[] = $row_get_role_id["id"];}
		}
		
		if (count($roles_array_name) > 0)
		{
			foreach ($roles_array_id as $role_id) {if (in_array($role_id, $this->roles["secretaries"])) return true;}
		}
		
		
		return false;
	}
	
	function accessDenide () {return "Извините, доступ к дашлету разрешен только для пользователей, находящихся в группе Секретарей.";}
	
	
	// функция поиска телефона в определенной таблице
	private function searchPhone ($phone, $module, $table, $fields)
	{
		$resultArray = array();
		
		// проерка заполненности полей
		if (empty($phone) || empty($module) || empty($table) || empty($fields)) return $resultArray;
		
		// создаем подключение к БД
		$db = DBManagerFactory::getInstance();
		
		
		// основной поисковый запрос
		$query = "SELECT id, assigned_user_id FROM ".$table." WHERE deleted = 0 AND (";
		
		// цепляем к запросу поля, по которым ищем
		if (is_array($fields)) 
		{
			foreach ($fields as $field) {$query .= "SUBSTRING(REPLACE(REPLACE(REPLACE(REPLACE(REPLACE(REPLACE(".$field.",' ',''),'+',''),')',''),'(',''),'-',''),'.',''), -7) = '$phone' OR ";}
			$query = substr($query, 0, strlen($query) - 3);
		}
		else {$query .= "SUBSTRING(REPLACE(REPLACE(REPLACE(REPLACE(REPLACE(REPLACE(".$field.",' ',''),'+',''),')',''),'(',''),'-',''),'.',''), -7) = '$phone'";}
		$query .= ")";
		
		$result = $db->query($query, true);
		$rows_found =  $db->getRowCount($result);
		
		if ($rows_found > 0) {while ($row = $db->fetchByAssoc($result)) {$resultArray[] = array("assigned_user_id" => $row["assigned_user_id"], "module" => $module, "record_id" => $row["id"]);}}
		
		
		return $resultArray;
	}
	
	
	// функия регистрации нового звонка по переданным данным
	private function createCall ($name, $modified_user_id, $created_by, $description, $assigned_user_id, $parent_type, $status, $direction, $parent_id, $date_start, $date_end)
	{
		require_once('modules/Calls/Call.php');
		$call = new Call();
		
		$call->name = $name;
		$call->modified_user_id = $modified_user_id;
		$call->created_by = $created_by;
		$call->description = $description;
		$call->assigned_user_id = $assigned_user_id;
		$call->parent_type = $parent_type;
		$call->status = $status;
		$call->direction = $direction;
		$call->parent_id = $parent_id;
		$call->date_start = $date_start;
		$call->date_end = $date_end;
			
		$call->save();
		
		return $call->id;
	}
	
	
	private function createCampaignsRelateByPhone ($campaigns_phone, $sphr_Client_id)
	{
		// создаем подключение к БД
		$db = DBManagerFactory::getInstance();
		
		$query_search_Campaigns = "SELECT id FROM sphr_market_company WHERE phone = '".$campaigns_phone."' AND deleted = 0";
		$result_search_Campaigns = $db->query($query_search_Campaigns, true);
				
		$rows_search_Campaigns_found = $db->getRowCount($result_search_Campaigns);
				
		if ($rows_search_Campaigns_found > 0)
		{
			$row_Campaigns = $db->fetchByAssoc($result_search_Campaigns);
				
			// проверяем, есть ли связь с этой кампанией у пользователя уже
			$query_check_Campaign = "SELECT id FROM sphr_market_sphr_client_c WHERE sphr_marke6013_client_idb = '".$sphr_Client_id."' AND sphr_marke85efcompany_ida = '".$row_Campaigns["id"]."' AND deleted = 0";
			$result_check_Campaign = $db->query($query_check_Campaign, true);
				
			$rows_check_Campaign_found = $db->getRowCount($result_check_Campaign);
				
			if ($rows_check_Campaign_found == 0) // если не нашли еще связей с клиентами, то создаем связь
			{
				$relate_id = create_guid(); 
				$query_add_relation = "INSERT INTO sphr_market_sphr_client_c VALUES ('".$relate_id."', '".date("Y-m-d H:i:s")."', 0, '".$row_Campaigns["id"]."', '".$sphr_Client_id."')";
				$result_add_relation = $db->query($query_add_relation, true);
			}
		}
	}
	
	private function unicodeToCyrillic($string)
	{
		$uniToCyrArray = array (
	         '\u0430' => 'а', '\u0410' => 'А',
	         '\u0431' => 'б', '\u0411' => 'Б',
	         '\u0432' => 'в', '\u0412' => 'В',
	         '\u0433' => 'г', '\u0413' => 'Г',
	         '\u0434' => 'д', '\u0414' => 'Д',
	         '\u0435' => 'е', '\u0415' => 'Е',
	         '\u0451' => 'ё', '\u0401' => 'Ё',
	         '\u0436' => 'ж', '\u0416' => 'Ж',
	         '\u0437' => 'з', '\u0417' => 'З',
	         '\u0438' => 'и', '\u0418' => '�?',
	         '\u0439' => 'й', '\u0419' => 'Й',
	         '\u043a' => 'к', '\u041a' => 'К',
	         '\u043b' => 'л', '\u041b' => 'Л',
	         '\u043c' => 'м', '\u041c' => 'М',
	         '\u043d' => 'н', '\u041d' => 'Н',
	         '\u043e' => 'о', '\u041e' => 'О',
	         '\u043f' => 'п', '\u041f' => 'П',
	         '\u0440' => 'р', '\u0420' => 'Р',
	         '\u0441' => 'с', '\u0421' => 'С',
	         '\u0442' => 'т', '\u0422' => 'Т',
	         '\u0443' => 'у', '\u0423' => 'У',
	         '\u0444' => 'ф', '\u0424' => 'Ф',
	         '\u0445' => 'х', '\u0425' => 'Х',
	         '\u0446' => 'ц', '\u0426' => 'Ц',
	         '\u0447' => 'ч', '\u0427' => 'Ч',
	         '\u0448' => 'ш', '\u0428' => 'Ш',
	         '\u0449' => 'щ', '\u0429' => 'Щ',
	         '\u044a' => 'ъ', '\u042a' => 'Ъ',
	         '\u044b' => 'ы', '\u042b' => 'Ы',
	         '\u044c' => 'ь', '\u042c' => 'Ь',
	         '\u044d' => 'э', '\u042d' => 'Э',
	         '\u044e' => 'ю', '\u042e' => 'Ю',
	         '\u044f' => 'я', '\u042f' => 'Я',
	  
	         '\r' => '',
	         '\n' => '<br />',
	         '\t' => '');
  
	         
		foreach ($uniToCyrArray as $key => $value) {$string = str_replace($key, $value, $string);}
     
		return $string;
 	}
}
?>