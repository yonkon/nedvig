var onlineInterfaceAsterisk = ( function () 
{
	var d = document;
	var getInfoDelay;
	var getInfoIntervalId;
	
	var windowsCount = 0; // количество окон, открытых для звонков в настоящий момент, параметр используется для определения необходимости закрытия блокировщика
	
	function get_http_request (){var http_request = false;if (window.XMLHttpRequest){ http_request = new XMLHttpRequest (); if (http_request.overrideMimeType) {http_request.overrideMimeType('text/xml');}}else if (window.ActiveXObject){ try {http_request = new ActiveXObject("Msxml2.XMLHttp");} catch (e) {try {http_request = new ActiveXObject ('Microsoft.XMLHttp');} catch (e) {} } }if (!http_request) {alert ('Error while creating XMLHttp'); return false;}else return http_request;}function check_http_response (http_request){if (http_request.readyState != 4) {return "waitingReadyState";}if (http_request.status == 200) return "ok";else return "statusError";}function get_http_content (http_request){if (check_http_response(http_request) == false) return false;else {this.content = http_request.responseText;}}
	
	function onlineStart (startInfoArray)
	{
		if (startInfoArray == -1) {onlineStartSendData ();}
		else 
		{
			getInfoDelay = startInfoArray["delay"];
					
			getInfoIntervalId = window.setInterval(function() {onlineGetInfo(-1);}, getInfoDelay*1000);
		}
	}
	
	
	function onlineStartSendData ()
	{
		http_request_start = get_http_request ();
		http_request_start.onreadystatechange = function() {onlineStartGetData (http_request_start);};
		var postStringParams = '';
		
		http_request_start.open('POST', 'index.php?module=interface_Asterisk&action=interfaceasteriskstart', true);
		
		http_request_start.setRequestHeader ('Content-Type', 'application/x-www-form-urlencoded');
		http_request_start.setRequestHeader ('Content-length', postStringParams.length);
				
		http_request_start.send(postStringParams);
	}
	
	
	function onlineStartGetData ()
	{
		if (check_http_response(http_request_start) == "ok")
		{
			var response = new String(http_request_start.responseText);
				
			var startInfoArray = eval("(" + response + ")");
				
			onlineStart(startInfoArray);
		}
	}
	
	
	
	function onlineGetInfo (infoArray)
	{
		if (infoArray == -1) {onlineGetInfoSendData ();}
		else 
		{
			if (infoArray["is_call"] == 1)
			{
				// создаем фон-блокировщик перед отображением всплывающего окна
				if (d.getElementById("blockUploadWindowId")) {d.body.removeChild(d.getElementById("blockUploadWindowId"));}
				
				var blockUploadWindow = d.createElement("div");
					blockUploadWindow.setAttribute("id", "blockUploadWindowId");
					blockUploadWindow.style.position = "fixed"; blockUploadWindow.style.top = "0px"; blockUploadWindow.style.left = "0px"; blockUploadWindow.style.zIndex = "1"; blockUploadWindow.style.width = "100%"; blockUploadWindow.style.height = "100%"; blockUploadWindow.style.backgroundColor = "#5a5a5a"; blockUploadWindow.style.filter = "progid:DXImageTransform.Microsoft.Alpha(opacity=80)"; blockUploadWindow.style.opacity = "0.8";
				d.body.appendChild(blockUploadWindow);
				
				
				// прорисовываем само окно с информацией о звонке
				var i = 0;
				while (d.getElementById("onlAstUploadWindow_"+i)) {i++} // определяем id добавляемого окна в зависимости от того, сколько окон уже созданно
				var currentId = "onlAstUploadWindow_"+i;
				var zIndex = i+2;
				
				var onlAstUploadWindow = d.createElement("div");
					onlAstUploadWindow.setAttribute("id", currentId);
					
					onlAstUploadWindow.style.position = "fixed"; onlAstUploadWindow.style.top = "10%"; onlAstUploadWindow.style.left = "20%"; onlAstUploadWindow.style.width = "60%"; onlAstUploadWindow.style.height = "400px"; onlAstUploadWindow.style.zIndex = zIndex;
					
					if (infoArray["is_client_new"] == 1) var client_new_text = '<p style="color:#FF6600; font-size:12pt;">Звонок от нового клиента!</p><br>';
					else var client_new_text = '<p style="color:#FF6600; font-size:12pt;">Звонок от клиента в CRM:</p><br>';
					
					if (infoArray["client_market_company"] != "") var client_market_company_text = '<p style="font-size:12pt;">Рекламная кампания: '+infoArray["client_market_company"]+'</p><br>';
					else var client_market_company_text = '';
					
					onlAstUploadWindow.innerHTML = '<table cellpadding="0" cellspacing="0" border="0" width="100%" height="100%"><tr><td width="12" height="12"><img src="themes/Sugar5/images/corner_left_top.png"></td><td width="100%" style="background-color:#ffffff; border-top: 3px solid #2baed9; font-size:0%;">&nbsp;</td><td width="12" height="12"><img src="themes/Sugar5/images/corner_right_top.png"></td></tr><tr><td colspan="3" align="left" valign="top" height="100%" style="padding:10px; background-color:#ffffff; border-left:3px solid #2baed9; border-right:3px solid #2baed9;"><div style="float:right; width:80px; text-align:right; margin-bottom:10px;"><a href="javascript: onlineInterfaceAsterisk.closeWindow(\''+currentId+'\');"><img src="themes/Sugar5/images/window-close.png" width="20" height="20" border="0" align="absmiddle" /></a></div><h3><span style="font-size:12pt;">Уведомление о новом входящем звонке</span></h3><div style="float:left; width:600px; overflow:auto;"><p style="font-size:12pt;">Внимание! Новый входящий звонок от абонента <span style="font-weight:bold; font-size:14pt;">'+infoArray["phone"]+'</span> <a href="'+infoArray["url_href_view"]+'" style="margin-left:30px; margin-right:10px;" target="_blank"><img src="themes/Sugar5/images/view_button.png" border="0" alt="'+infoArray["url_text_view"]+'" align="absmiddle"></a> <a href="'+infoArray["url_href_edit"]+'" target="_blank"><img src="themes/Sugar5/images/edit_button.png" border="0" alt="'+infoArray["url_text_edit"]+'" align="absmiddle"></a></p><br><br><p style="font-size:12pt;"><b>Дополнительная информация:</b></p>'+client_new_text+client_market_company_text+'<p style="font-size:12pt;">Название: '+infoArray["name"]+'</p><p style="font-size:12pt;">ФИО: '+infoArray["initials"]+'</p><p style="font-size:12pt;">Ответственный: '+infoArray["assigned_user_name"]+'</p></div></td></tr><tr><td width="12" height="12"><img src="themes/Sugar5/images/corner_left_bottom.png"></td><td width="100%" style="background-color:#ffffff; border-bottom:3px solid #2baed9; font-size:0%;">&nbsp;</td><td width="12" height="12"><img src="themes/Sugar5/images/corner_right_bottom.png"></td></tr></table>';
					
				d.body.appendChild(onlAstUploadWindow);
				
				windowsCount++;
				
				alert('Уведомление о новом входящем звонке \n\n Внимание! Новый входящий звонок от абонента '+infoArray["phone"]);
				self.focus();
			}
		}
	}
	
	
	function onlineGetInfoSendData ()
	{
		http_request_getinfo = get_http_request ();
		http_request_getinfo.onreadystatechange = function() {onlineGetInfoGetData (http_request_getinfo);};
		var postStringParams = '';
		
		http_request_getinfo.open('POST', 'index.php?module=interface_Asterisk&action=interfaceasteriskgetinfo', true);
		
		http_request_getinfo.setRequestHeader ('Content-Type', 'application/x-www-form-urlencoded');
		http_request_getinfo.setRequestHeader ('Content-length', postStringParams.length);
				
		http_request_getinfo.send(postStringParams);
	}
	
	
	function onlineGetInfoGetData ()
	{
		if (check_http_response(http_request_getinfo) == "ok")
		{
			var response = new String(http_request_getinfo.responseText);
			var infoArray = eval("(" + response + ")");
			
			onlineGetInfo(infoArray);
		}
	}
	
	
	
	function closeWindow (id)
	{
		if (d.getElementById(id)) {d.body.removeChild(d.getElementById(id)); windowsCount--;}
		
		if (windowsCount == 0) {d.body.removeChild(d.getElementById("blockUploadWindowId"));}
	}

	
	
	return {

		createInterfaceAsterisk: function() {
			onlineStart(-1);
		},
		
		closeWindow: function(id) {
			closeWindow(id);
		}
	}

}

())