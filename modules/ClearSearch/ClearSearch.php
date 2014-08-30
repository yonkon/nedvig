<?php
//prevents directly accessing this file from a web browser
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

class ClearSearch 
{
	private $settings = array( //настройки по умолчанию 
		'UpdateDelay' => 1, //интервал посылки уведомлений на сервер об открытой странице (сек.)
		'InactiveDelay' => 5, //если втечение этого интервалане было ни одного уведомления, модуль считается закрытым (сек.)
		'ModuleNames' => array(), //названия модулей, в которых очищается поиск
	);
	private $module_dir = './modules/ClearSearch';
	
	//consructor
	function ClearSearch () {
		//загружаем пользовательские настройки
		//echo"<PRE>".print_r($sugar_config,true);
		if (file_exists($this->module_dir."/config.php"))
		{
			require($this->module_dir."/config.php");
			foreach ($this->settings as $setting_name => &$setting_value)
			{
				if (isset($settings[$setting_name])) $setting_value = $settings[$setting_name];
			}
		}	
	}
	
	function gmtime() { return (int)gmdate('U'); } //gmt timestamp
	
	//обновление время последнего доступа клиента к модулю (вызывается по уведомлению со страницы)
	function update_last_time_access ($module_name = null)
	{
		global $current_user;
		$user_id = $current_user->id;
		$modules = array();
		if ($module_name != null) //если имя модуля не передано, обрабатываем из списка модулей из настроек 
		{
			//используем переданное имя модуля, только если оно есть в списке модулей в настройках
			if (in_array($module_name, $this->settings['ModuleNames'])) $modules[] = $module_name; 
		} else $modules = $this->settings['ModuleNames'];
		if (!empty($modules))
		{
			if(!isset($_SESSION['LAST_TIME_ACCSESS_USER_'.$user_id])) $_SESSION['LAST_TIME_ACCSESS_USER_'.$user_id] = array();
			foreach ($modules as $module)
			{
				$_SESSION['LAST_TIME_ACCSESS_USER_'.$user_id][$module] =  $this->gmtime();
			}
			$UpdateDelay = $this->settings['UpdateDelay'];
		} else $UpdateDelay = -1; //иначе отключим отправку уведомлений - она болше не нужна
		$ret_array = array(
			'UpdateDelay' => $UpdateDelay,
		);
		return json_encode ($ret_array);
	}
	

	private function clear_search($module_name)
	{
		require_once('modules/MySettings/StoreQuery.php');
		$StoreQueryObj = new StoreQuery();
		$StoreQueryObj->clearQuery($module_name);
		unset($StoreQueryObj);
	}
	
	//очищаем поиск в модуле при необходимости - при продолжительном отсутсвии уведомлений с открытой страницы модуля
	//(вызывается при показе listview модуля)
	function clear_search_if_need($module_name = null)
	{
		global $current_user, $db;
		$user_id = $current_user->id;
		//echo"<PRE>".print_r($sugar_config,true);
		$modules = array();
		if ($module_name != null) //если имя модуля не передано, обрабатываем из списка модулей из настроек 
		{
			//используем переданное имя модуля, только если оно есть в списке модулей в настройках
			if (in_array($module_name, $this->settings['ModuleNames'])) $modules[] = $module_name;
		} else $modules = $this->settings['ModuleNames'];
		if (!empty($modules)) 
		{
			foreach ($modules as $module)
			{
				//сравнивем время последнего доступа к модулю (кесли оно вообще есть) с текущим
				if (isset($_SESSION['LAST_TIME_ACCSESS_USER_'.$user_id]))
				{
					$last_access_timestamp = $_SESSION['LAST_TIME_ACCSESS_USER_'.$user_id][$module];
					if (($this->gmtime() - $last_access_timestamp) > $this->settings['InactiveDelay']) $this->clear_search($module);
				} else $this->clear_search($module);
			}
		}
	}
	
}
?>