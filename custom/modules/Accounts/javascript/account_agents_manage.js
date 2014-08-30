var numClick = 1;

		$('#add_agents_button').click(function(){
			$('#numBlocks').val(numClick);
			$('<div id="agents_'+numClick+'" style="width: 55%; margin-top: 25px; padding: 5px 0 0 5px; border-top: solid 1px #94C1E8; border-left: solid 1px #94C1E8;"></div>').appendTo('#additionalBlock_agents');		
			$('<div><img src="themes/Sugar5/images/close.gif" style="float: right; cursor: pointer;" id="close_button_'+numClick+'">Представитель контрагента '+numClick+':</div>').appendTo('#agents_'+numClick);
			$('<div style="margin-top: 10px;">Имя: <input class="agents_name_st" type="text" maxlength="20" size="30" id="agents_first_name_'+numClick+'" name="agents_first_name_'+numClick+'" style="float: right;"></div>').appendTo('#agents_'+numClick);
			$('<div style="margin-top: 10px;">Фамилия: <input type="text" maxlength="20" size="30" name="agents_last_name_'+numClick+'" style="float: right;"></div>').appendTo('#agents_'+numClick);
			$('<div style="margin-top: 10px;">Отчество: <input type="text" maxlength="20" size="30" name="agents_patronymic_'+numClick+'" style="float: right;"></div>').appendTo('#agents_'+numClick);
			$('<div style="margin-top: 10px;">Дата рождения: <input type="text" maxlength="20" size="11" id="agents_birthday_'+numClick+'" name="agents_birthday_'+numClick+'" style="float: right;"><img border="0" align="absmiddle" id="agents_birthday_'+numClick+'_trigger" alt="Ввод даты" src="themes/Sugar5/images/jscalendar.gif" style="float: right; margin-right: 3px;"></div>').appendTo('#agents_'+numClick);
			$('<div style="margin-top: 10px;">Должность: <input type="text" maxlength="20" size="30" name="agents_title_'+numClick+'" style="float: right;"></div>').appendTo('#agents_'+numClick);
			$('<div style="margin-top: 10px;">Телефон: <input type="text" maxlength="20" size="30" name="agents_phone_'+numClick+'" style="float: right;"></div>').appendTo('#agents_'+numClick);
			$('<div style="margin-top: 10px;">Телефон моб.: <input type="text" maxlength="20" size="30" name="agents_phone_mobile_'+numClick+'" style="float: right;"></div>').appendTo('#agents_'+numClick);
			$('<div style="margin-top: 10px;">E-mail: <input type="text" maxlength="20" size="30" id="agents_email_'+numClick+'" name="agents_email_'+numClick+'" style="float: right;"></div>').appendTo('#agents_'+numClick);
			$('<div style="margin-top: 10px;">Skype: <input type="text" maxlength="20" size="30" name="agents_skype_'+numClick+'" style="float: right;"></div>').appendTo('#agents_'+numClick);
			$('<div style="margin-top: 10px;">Aдрес офиса: <textarea tabindex="121" title="" cols="50" rows="4" name="agents_office_address_'+numClick+'" id="agents_office_address_'+numClick+'"></textarea></div>').appendTo('#agents_'+numClick);	
			
			$('<input class="agents_status" type="hidden" name="agents_is_'+numClick+'" value="1">').appendTo('#agents_'+numClick);

			Calendar.setup ({
				inputField : "agents_birthday_"+numClick,
				daFormat : "%d.%m.%Y %H:%M",
				button : "agents_birthday_"+numClick+"_trigger",
				singleClick : true,
				dateStr : "",
				step : 1,
				weekNumbers:false
			});
			addToValidate('EditView','agents_email_'+numClick,'email',false,SUGAR.language.get('app_strings','LBL_EMAIL_ADDRESS_BOOK_EMAIL_ADDR'));
			
			$('#close_button_'+numClick).click(function(){
				removeFromValidate('EditView',this.id.replace('close_button_','agents_email_'));
				$(this).parent('div').parent('div').children('.agents_status').val('0');				
				$(this).parent('div').parent('div').children('div:has(.agents_name_st)').children('.agents_name_st').val('---');
				$(this).parent('div').parent('div').animate({opacity: 'hide'}, 500);
			});

			numClick++;
		});

		//вывод членов семьи если они уже есть
		if(agents_list['numagents'] > 0) {
			
			

			var count2 = (agents_list['numagents'] + 1);			
			for(var i2 = 1; i2 < count2; i2++) {
				$('<div id="agents_'+i2+'" style="width: 55%; margin-top: 25px; padding: 5px 0 0 5px; border-top: solid 1px #94C1E8; border-left: solid 1px #94C1E8;"></div>').appendTo('#additionalBlock_agents');
				$('<div><img src="themes/Sugar5/images/close.gif" style="float: right; cursor: pointer;" id="close_button_'+i2+'">Представитель контрагента '+i2+':</div>').appendTo('#agents_'+i2);
				$('<div style="margin-top: 10px;">Имя: <input class="agents_name_st" type="text" value="'+((!agents_list['first_name'][(i2 - 1)])?'':agents_list['first_name'][(i2 - 1)])+'" maxlength="20" size="30" id="agents_first_name_'+i2+'" name="agents_first_name_'+i2+'" style="float: right;"></div>').appendTo('#agents_'+i2);
				$('<div style="margin-top: 10px;">Фамилия: <input type="text" value="'+((!agents_list['last_name'][(i2 - 1)])?'':agents_list['last_name'][(i2 - 1)])+'" maxlength="20" size="30" name="agents_last_name_'+i2+'" style="float: right;"></div>').appendTo('#agents_'+i2);
				$('<div style="margin-top: 10px;">Отчество: <input type="text" value="'+((!agents_list['patronymic'][(i2 - 1)])?'':agents_list['patronymic'][(i2 - 1)])+'" maxlength="20" size="30" name="agents_patronymic_'+i2+'" style="float: right;"></div>').appendTo('#agents_'+i2);
				$('<div style="margin-top: 10px;">Дата рождения: <input type="text" value="'+((!agents_list['birthday'][(i2 - 1)])?'':agents_list['birthday'][(i2 - 1)])+'" maxlength="20" size="11" id="agents_birthday_'+i2+'" name="agents_birthday_'+i2+'" style="float: right;"><img border="0" align="absmiddle" id="agents_birthday_'+i2+'_trigger" alt="Ввод даты" src="themes/Sugar5/images/jscalendar.gif" style="float: right; margin-right: 3px;"></div>').appendTo('#agents_'+i2);
				$('<div style="margin-top: 10px;">Должность: <input type="text" value="'+((!agents_list['title'][(i2 - 1)])?'':agents_list['title'][(i2 - 1)])+'" maxlength="20" size="30" name="agents_title_'+i2+'" style="float: right;"></div>').appendTo('#agents_'+i2);
				$('<div style="margin-top: 10px;">Телефон: <input type="text" value="'+((!agents_list['phone'][(i2 - 1)])?'':agents_list['phone'][(i2 - 1)])+'" maxlength="20" size="30" name="agents_phone_'+i2+'" style="float: right;"></div>').appendTo('#agents_'+i2);
				$('<div style="margin-top: 10px;">Телефон моб.: <input type="text" value="'+((!agents_list['phone_mobile'][(i2 - 1)])?'':agents_list['phone_mobile'][(i2 - 1)])+'" maxlength="20" size="30" name="agents_phone_mobile_'+i2+'" style="float: right;"></div>').appendTo('#agents_'+i2);
				$('<div style="margin-top: 10px;">E-mail: <input type="text" value="'+((!agents_list['email'][(i2 - 1)])?'':agents_list['email'][(i2 - 1)])+'" maxlength="20" size="30" id="agents_email_'+i2+'" name="agents_email_'+i2+'" style="float: right;"></div>').appendTo('#agents_'+i2);
				$('<div style="margin-top: 10px;">Skype: <input type="text" value="'+((!agents_list['skype'][(i2 - 1)])?'':agents_list['skype'][(i2 - 1)])+'" maxlength="20" size="30" name="agents_skype_'+i2+'" style="float: right;"></div>').appendTo('#agents_'+i2);
				$('<div style="margin-top: 10px;">Aдрес офиса: <textarea tabindex="121" title="" cols="50" rows="4" name="agents_office_address_'+i2+'" id="agents_office_address_'+i2+'">'+((!agents_list['office_address'][(i2 - 1)])?'':agents_list['office_address'][(i2 - 1)])+'</textarea></div>').appendTo('#agents_'+i2);
				$('<input class="agents_status" type="hidden" name="agents_is_'+i2+'" value="2">').appendTo('#agents_'+i2);
				$('<input class="agents_k_id" type="hidden" name="agents_k_id_'+i2+'" value="'+agents_list['id'][(i2 - 1)]+'">').appendTo('#agents_'+i2);
				$('#close_button_'+i2).click(function(){
					removeFromValidate('EditView',this.id.replace('close_button_','agents_email_'));					
					$(this).parent('div').parent('div').children('.agents_status').val('3');
					$(this).parent('div').parent('div').children('div:has(.agents_name_st)').children('.agents_name_st').val('---');
					$(this).parent('div').parent('div').animate({opacity: 'hide'}, 500);
				});
				Calendar.setup ({
				inputField : "agents_birthday_"+i2,
				daFormat : "%d.%m.%Y %H:%M",
				button : "agents_birthday_"+i2+"_trigger",
				singleClick : true,
				dateStr : "",
				step : 1,
				weekNumbers:false
			});
				addToValidate('EditView','agents_email_'+i2,'email',false,SUGAR.language.get('app_strings','LBL_EMAIL_ADDRESS_BOOK_EMAIL_ADDR'));
			}
			numClick = count2;
			$('#numBlocks').val(numClick);
		}

