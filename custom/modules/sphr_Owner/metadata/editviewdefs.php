<?php
$module_name = 'sphr_Owner';
$viewdefs [$module_name] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'javascript' => '
	  {literal}
	  <script type="text/javascript" src="custom/include/javascript/sphere_modules_editviews.js"></script>
	  <script type="text/javascript">
	  var MsgStr= new Object();
	  {/literal}
	  //Массив констант для вывода сообщений
	   MsgStr["ERR_PHONE_NEED"]="{$MOD.ERR_PHONE_NEED}";
	   MsgStr["ERR_PHONE_LENGTH"]="{$MOD.ERR_PHONE_LENGTH}";
	   MsgStr["ERR_EMAIL"]="{$MOD.ERR_EMAIL}";
	   MsgStr["ERR_DESCRIPTION_STATUS_NEED"]="{$MOD.ERR_DESCRIPTION_STATUS_NEED}";
	   MsgStr["ERR_PASSPORT_SERIES_LENGTH"]="{$MOD.ERR_PASSPORT_SERIES_LENGTH}";
	   MsgStr["ERR_PASSPORT_NUMBER_LENGTH"]="{$MOD.ERR_PASSPORT_NUMBER_LENGTH}";
	   MsgStr["ERR_PASSPORT_ISSUE_DATE"]="{$MOD.ERR_PASSPORT_ISSUE_DATE}";
	   MsgStr["ERR_SLASH_NEED"]="{$MOD.ERR_SLASH_NEED}";
	   
	   MsgStr["LBL_PHONE_MOBILE_C"]="{$MOD.LBL_PHONE_MOBILE}";
	   MsgStr["LBL_PHONE_HOME"]="{$MOD.LBL_PHONE_HOME}";
	   MsgStr["LBL_PHONE_WORK"]="{$MOD.LBL_PHONE_WORK}";
	   MsgStr["LBL_EMAIL_ADDRESS"]="{$MOD.LBL_EMAIL_ADDRESS}";
	   MsgStr["LBL_STATUS_DESCRIPTION"]="{$MOD.LBL_STATUS_DESCRIPTION}";
	   MsgStr["LBL_PASSPORT_SERIES"]="{$MOD.LBL_PASSPORT_SERIES}";
	   MsgStr["LBL_PASSPORT_NUMBER"]="{$MOD.LBL_PASSPORT_NUMBER}";
	   MsgStr["LBL_PASSPORT_ISSUE_DATE"]="{$MOD.LBL_PASSPORT_ISSUE_DATE}";
	   MsgStr["LBL_PHONE"]="{$MOD.LBL_PHONE}";
	   MsgStr["LBL_INN_AND_KPP"]="{$MOD.LBL_INN_AND_KPP}";
	   
      {literal}
	
		function checkPhones() //функция установки обязательности и проверки телефонных номеров
		{	
			for (var i = 0; i < validate["EditView"].length; i++)
			{
				if (validate["EditView"][i][nameIndex] == "phone_home_c" || validate["EditView"][i][nameIndex] == "phone_mobile_c" || validate["EditView"][i][nameIndex] == "phone_work_c")
				{
					//alert((validate["EditView"][i][nameIndex])+"!"+document.getElementById(validate["EditView"][i][nameIndex]).value+"!"+ElementValueLength(validate["EditView"][i][nameIndex]));
					if ((ElementValueLength(validate["EditView"][i][nameIndex])!=0) && (ElementValueLength(validate["EditView"][i][nameIndex])!=11))
					{
						Err=true; 
						validate["EditView"][i][typeIndex] = "error";
						validate["EditView"][i][msgIndex]=MsgStr["ERR_PHONE_LENGTH"];
					} else {
						Err=false; 
						validate["EditView"][i][typeIndex] = "int";
						switch(validate["EditView"][i][nameIndex])
						{
							case "phone_home_c": validate["EditView"][i][msgIndex] =  MsgStr["LBL_PHONE_HOME"]; break;
							case "phone_mobile_c": validate["EditView"][i][msgIndex] =  MsgStr["LBL_PHONE_MOBILE"]; break;
							case "phone_work_c": validate["EditView"][i][msgIndex] =  MsgStr["LBL_PHONE_WORK"]; break;
						}
					}
				}
			}
		}
		
		function checkPassport() //функция проверки паспортных данных
		{
			var i=GetValidateIndex("passport_series_c"); 
			if (i!=-1) 
			{
				if ((ElementValueLength(validate["EditView"][i][nameIndex])!=0) && (ElementValueLength(validate["EditView"][i][nameIndex])!=4))
				{
					validate["EditView"][i][typeIndex] = "error";
					validate["EditView"][i][msgIndex]=MsgStr["ERR_PASSPORT_SERIES_LENGTH"];
				} else {
					validate["EditView"][i][typeIndex] = "int";
					validate["EditView"][i][msgIndex]=MsgStr["LBL_PASSPORT_SERIES"];
				}
			}
			var i=GetValidateIndex("passport_number_c");
			if (i!=-1) 
			{
				if ((ElementValueLength(validate["EditView"][i][nameIndex])!=0) && (ElementValueLength(validate["EditView"][i][nameIndex])!=6))
				{					
					validate["EditView"][i][typeIndex] = "error";
					validate["EditView"][i][msgIndex]=MsgStr["ERR_PASSPORT_NUMBER_LENGTH"];
				} else {
					validate["EditView"][i][typeIndex] = "int";
					validate["EditView"][i][msgIndex]=MsgStr["LBL_PASSPORT_NUMBER"];
				}			
			}
			var i=GetValidateIndex("passport_issue_date");
			if (i!=-1)
			{
				date1=document.getElementById("passport_issue_date").value;
				if (trim(date1).length!=0)
				{
					var date2=new Date(); //получаем текущую дату
					if (getDateObject(date1)>=date2)  //сравниваем ее с датой в поле "дата выдачи"
					{
						validate["EditView"][i][typeIndex] = "error";
						validate["EditView"][i][msgIndex]=MsgStr["ERR_PASSPORT_ISSUE_DATE"];
					} else {
						validate["EditView"][i][typeIndex] = "date";
						validate["EditView"][i][msgIndex]=MsgStr["LBL_PASSPORT_ISSUE_DATE"];
					}			
				}
			}
		}
		
		function checkRegistrationType() //функция установки обязательности адресов постоянной и временной регистрации
		{
			for (var i = 0; i < validate["EditView"].length; i++)
			{
				switch (validate["EditView"][i][nameIndex]) //в зависимости от выбранного типа регистрации - устанавливается обязательность нужного адреса
				{
					case "address_temporary":
						validate["EditView"][i][requiredIndex] = (document.getElementById("address_registration_type_c").value == "temporary");
						break;
					case "address_permanent":
						validate["EditView"][i][requiredIndex] = (document.getElementById("address_registration_type_c").value == "permanent");
						break;	
				}
			}
		}
		
		function copyNames() //функця копирования ФИО в блок паспортных данных
		{
			document.getElementById("passport_first_name").value=document.getElementById("first_name").value;
			var wrds=document.getElementById("first_and_middle_name").value.split(" ");
			document.getElementById("passport_first_name").value=wrds[0];
			if (typeof(wrds[1])!="undefined") document.getElementById("passport_middle_name").value=wrds[1];
		}
		
		//Добавление полей на проверку и вызов функция проверки (для проверки обязательности и корректности введенных значений
		addToValidate(\'EditView\', \'phone_mobile_c\', \'int\', false,  MsgStr["LBL_PHONE_MOBILE"] );
		addToValidate(\'EditView\', \'phone_work_c\', \'int\', false,  MsgStr["LBL_PHONE_WORK"] );
		addToValidate(\'EditView\', \'phone_home_c\', \'int\', false,  MsgStr["LBL_PHONE_HOME"] );
		checkPhones();
		
		addToValidate(\'EditView\', \'email\', \'varchar\', false,  MsgStr["LBL_EMAIL_ADDRESS"] );
		checkEmail();
				
		addToValidate(\'EditView\', \'passport_series_s\', \'int\', false,MsgStr["LBL_PASSPORT_SERIES"] );
		addToValidate(\'EditView\', \'passport_number_s\', \'int\', false,MsgStr["LBL_PASSPORT_NUMBER"] );
		addToValidate(\'EditView\', \'passport_issue_date\', \'date\', false,MsgStr["LBL_PASSPORT_ISSUE_DATE"] );
		checkPassport(); 
		
		addToValidate(\'EditView\', \'address_temporary\', \'varchar\', false,\'Адрес временной регистрации\' );
		addToValidate(\'EditView\', \'address_permanent\', \'varchar\', false,\'Адрес постоянной регистрации\' );
		checkRegistrationType();
							
		</script>
	  {/literal}
	',
      'useTabs' => false,
    ),
    'panels' => 
    array (
      'lbl_editview_panel5' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'name',
            'label' => 'LBL_NAME',
          ),
          1 => 
          array (
            'name' => 'last_name',
            'label' => 'LBL_LAST_NAME',
            'displayParams' => 
            array (
              'field' => 
              array (
                'onChange' => 'copyNames();',
              ),
            ),
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'first_and_middle_name',
            'label' => 'LBL_FIRST_AND_MIDDLE_NAME',
            'displayParams' => 
            array (
              'field' => 
              array (
                'onChange' => 'copyNames();',
              ),
            ),
          ),
          1 => 
          array (
            'name' => 'assigned_user_name',
            'label' => 'LBL_ASSIGNED_TO_NAME',
            'displayParams' => 
            array (
              'required' => true,
            ),
          ),
        ),
      ),
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'phone_mobile_c',
            'label' => 'LBL_PHONE_MOBILE_C',
            'displayParams' => 
            array (
              'field' => 
              array (
                'onChange' => 'checkPhones();',
              ),
            ),
          ),
          1 => 
          array (
            'name' => 'phone_home_c',
            'label' => 'LBL_PHONE_HOME',
            'displayParams' => 
            array (
              'field' => 
              array (
                'onChange' => 'checkPhones();',
              ),
            ),
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'phone_work_c',
            'label' => 'LBL_PHONE_WORK',
            'displayParams' => 
            array (
              'field' => 
              array (
                'onChange' => 'checkPhones();',
              ),
            ),
          ),
          1 => 
          array (
            'name' => 'email',
            'label' => 'LBL_EMAIL',
            'displayParams' => 
            array (
              'field' => 
              array (
                'onChange' => 'checkEmail();',
              ),
            ),
          ),
        ),
        2 => 
        array (
          0 => '',
          1 => '',
        ),
      ),
      'lbl_editview_panel3' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'contract_number',
            'label' => 'LBL_CONTRACT_NUMBER',
          ),
          1 => 
          array (
            'name' => 'contract_date_singing',
            'label' => 'LBL_CONTRACT_DATE_SINGING',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'contract_date_expiration',
            'label' => 'LBL_CONTRACT_DATE_EXPIRATION',
          ),
          1 => 
          array (
            'name' => 'contract_duration',
            'label' => 'LBL_CONTRACT_DURATION',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'contract_comission',
            'label' => 'LBL_CONTRACT_COMISSION',
          ),
          1 => '',
        ),
      ),
      'lbl_editview_panel4' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'passport_type',
            'studio' => 'visible',
            'label' => 'LBL_PASSPORT_TYPE',
          ),
          1 => 
          array (
            'name' => 'passport_last_name',
            'label' => 'LBL_PASSPORT_LAST_NAME',
            'displayParams' => 
            array (
              'field' => 
              array (
                'disabled' => 'disabled',
              ),
            ),
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'passport_first_name',
            'label' => 'LBL_PASSPORT_FIRST_NAME',
            'displayParams' => 
            array (
              'field' => 
              array (
                'disabled' => 'disabled',
              ),
            ),
          ),
          1 => 
          array (
            'name' => 'passport_middle_name',
            'label' => 'LBL_PASSPORT_MIDDLE_NAME',
            'displayParams' => 
            array (
              'field' => 
              array (
                'disabled' => 'disabled',
              ),
            ),
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'passport_series_c',
            'label' => 'LBL_PASSPORT_SERIES',
            'displayParams' => 
            array (
              'field' => 
              array (
                'onChange' => 'checkPassport();',
              ),
            ),
          ),
          1 => 
          array (
            'name' => 'passport_number_c',
            'label' => 'LBL_PASSPORT_NUMBER',
            'displayParams' => 
            array (
              'field' => 
              array (
                'onChange' => 'checkPassport();',
              ),
            ),
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'passport_foreigner_ser_and_num',
            'label' => 'LBL_PASSPORT_FOREIGNER_SER_AND_NUM',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'passport_issue_date',
            'label' => 'LBL_PASSPORT_ISSUE_DATE',
            'displayParams' => 
            array (
              'field' => 
              array (
                'onChange' => 'checkPassport();',
              ),
            ),
          ),
          1 => 
          array (
            'name' => 'passport_issued',
            'label' => 'LBL_PASSPORT_ISSUED',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'address_registration_type_c',
            'studio' => 'visible',
            'label' => 'LBL_ADDRESS_REGISTRATION_TYPE',
            'displayParams' => 
            array (
              'field' => 
              array (
                'onChange' => 'checkRegistrationType();',
              ),
            ),
          ),
          1 => '',
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'address_permanent',
            'label' => 'LBL_ADDRESS_PERMANENT',
          ),
          1 => 
          array (
            'name' => 'address_temporary',
            'label' => 'LBL_ADDRESS_TEMPORARY',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'address_actual',
            'label' => 'LBL_ADDRESS_ACTUAL',
          ),
        ),
      ),
    ),
  ),
);
?>
