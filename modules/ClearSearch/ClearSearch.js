var ClearSearch = ( function () 
{
	var http_request;	
	function get_http_request (){var http_request = false;if (window.XMLHttpRequest){ http_request = new XMLHttpRequest (); if (http_request.overrideMimeType) {http_request.overrideMimeType('text/xml');}}else if (window.ActiveXObject){ try {http_request = new ActiveXObject("Msxml2.XMLHttp");} catch (e) {try {http_request = new ActiveXObject ('Microsoft.XMLHttp');} catch (e) {} } }if (!http_request) {alert ('Error while creating XMLHttp'); return false;}else return http_request;}function check_http_response (http_request){if (http_request.readyState != 4) {return "waitingReadyState";}if (http_request.status == 200) return "ok";else return "statusError";}function get_http_content (http_request){if (check_http_response(http_request) == false) return false;else {this.content = http_request.responseText;}}
		
	function SendNotify_ModuleIsOpen(module_name)
	{
		http_request = get_http_request ();
		http_request.onreadystatechange = function() 
		{
			if (check_http_response(http_request) == "ok")
			{
				var response = new String(http_request.responseText);
				var UpdateDelay = 1; //по умолчанию
				//try {
				var ret_data = eval("(" + response + ")");
				if ((ret_data.UpdateDelay != undefined) && (ret_data.UpdateDelay != null)) 
					UpdateDelay = ret_data.UpdateDelay;
				//} catch(e) {}
				if (UpdateDelay >= 0) //если корректный UpdateDelay - будем отправлять уведомления по-прежнему
				{
					window.setTimeout( function() { SendNotify_ModuleIsOpen(module_name); }, UpdateDelay*1000);
				}
			}
		};
		var postStringParams = 'module_name='+module_name;
		http_request.open('POST', 'index.php?module=ClearSearch&action=update_last_time_access', true);
		http_request.setRequestHeader ('Content-Type', 'application/x-www-form-urlencoded');
		http_request.setRequestHeader ('Content-length', postStringParams.length);
		http_request.send(postStringParams);
	}
	
	
	
	return {

		SendNotify_ModuleIsOpen: function(module_name) {
			SendNotify_ModuleIsOpen(module_name);
		},

	}

}

())