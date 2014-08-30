		for(var i = 0; i < agents_list['numagents']; i++) {
			$('<div id="agents_'+(i + 1)+'" style="width: 55%; margin-top: 25px; padding: 5px 0 0 5px; border-top: solid 1px #94C1E8; border-left: solid 1px #94C1E8;"></div>').appendTo('#additionalBlock_agents');
			$('<div>Представитель '+(i + 1)+':</div>').appendTo('#agents_'+(i + 1));			
			$('<div style="margin-top: 10px;">Имя: <span id="agents_first_name_'+(i + 1)+'" style="float: right;">'+validField(agents_list['first_name'][i])+'</span></div>').appendTo('#agents_'+(i + 1));
			$('<div style="margin-top: 10px;">Фамилия: <span id="agents_last_name_'+(i + 1)+'" style="float: right;">'+validField(agents_list['last_name'][i])+'</span></div>').appendTo('#agents_'+(i + 1));
			$('<div style="margin-top: 10px;">Отчество: <span id="agents_patronymic_'+(i + 1)+'" style="float: right;">'+validField(agents_list['patronymic'][i])+'</span></div>').appendTo('#agents_'+(i + 1));
			$('<div style="margin-top: 10px;">Дата рождения: <span id="agents_birthday_'+(i + 1)+'" style="float: right;">'+validField(agents_list['birthday'][i])+'</span></div>').appendTo('#agents_'+(i + 1));
			$('<div style="margin-top: 10px;">Должность: <span id="agents_title_'+(i + 1)+'" style="float: right;">'+validField(agents_list['title'][i])+'</span></div>').appendTo('#agents_'+(i + 1));
			$('<div style="margin-top: 10px;">Телефон: <span id="agents_title_'+(i + 1)+'" style="float: right;">'+validField(agents_list['phone'][i])+'</span></div>').appendTo('#agents_'+(i + 1));
			$('<div style="margin-top: 10px;">Телефон моб.: <span id="agents_title_'+(i + 1)+'" style="float: right;">'+validField(agents_list['phone_mobile'][i])+'</span></div>').appendTo('#agents_'+(i + 1));
			$('<div style="margin-top: 10px;">Email: <span id="agents_title_'+(i + 1)+'" style="float: right;">'+validField(agents_list['email'][i])+'</span></div>').appendTo('#agents_'+(i + 1));
			$('<div style="margin-top: 10px;">Skype: <span id="agents_title_'+(i + 1)+'" style="float: right;">'+validField(agents_list['skype'][i])+'</span></div>').appendTo('#agents_'+(i + 1));
			$('<div style="margin-top: 10px;">Адрес офиса: <span id="agents_office_address_'+(i + 1)+'" style="float: right;">'+validField(agents_list['office_address'][i])+'</span></div>').appendTo('#agents_'+(i + 1));			
		}		

		function validField(str) {
			if(str == undefined) {str = "";}
			if(str == null) {str = "";}
			return str;
		}