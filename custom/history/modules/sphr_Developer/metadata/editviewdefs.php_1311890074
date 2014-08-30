<?php
$module_name = 'sphr_Developer';
$_object_name = 'sphr_developer';
$viewdefs [$module_name] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'buttons' => 
        array (
          0 => 'SAVE',
          1 => 'CANCEL',
        ),
      ),
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
	   MsgStr["ERR_PHONE_LENGTH"]="{$MOD.ERR_PHONE_LENGTH}";
	   MsgStr["ERR_EMAIL"]="{$MOD.ERR_EMAIL}";
	   MsgStr["ERR_WEBSITE"]="{$MOD.ERR_WEBSITE}";
	   MsgStr["ERR_SLASH_NEED"]="{$MOD.ERR_SLASH_NEED}";
	   
	   MsgStr["LBL_PHONE"]="{$MOD.LBL_PHONE}";
	   MsgStr["LBL_PHONE_FAX"]="{$MOD.LBL_PHONE_FAX}";
	   MsgStr["LBL_EMAIL_ADDRESS"]="{$MOD.LBL_EMAIL_ADDRESS}";
	   MsgStr["LBL_WEBSITE"]="{$MOD.LBL_WEBSITE}";
	   MsgStr["LBL_INN_AND_KPP"]="{$MOD.LBL_INN_AND_KPP}";
	   
      {literal}
	    

		function checkPhone() //функция проверки телефона
		{
			var i=GetValidateIndex("phone");
			if (i!=-1)
			{
				if ((ElementValueLength(validate["EditView"][i][nameIndex])!=0) && (ElementValueLength(validate["EditView"][i][nameIndex])!=11))
				{
					validate["EditView"][i][typeIndex] = "error";
					validate["EditView"][i][msgIndex]=MsgStr["ERR_PHONE_LENGTH"];
				} else {
					validate["EditView"][i][typeIndex] = "int";
					validate["EditView"][i][msgIndex]=MsgStr["LBL_PHONE"];
				}
			}
		}
		
		function checkPhoneFax() //функция проверки факса
		{
			var i=GetValidateIndex("phone_fax");
			if (i!=-1)
			{
				if ((ElementValueLength(validate["EditView"][i][nameIndex])!=0) && (ElementValueLength(validate["EditView"][i][nameIndex])!=11))
				{
					validate["EditView"][i][typeIndex] = "error";
					validate["EditView"][i][msgIndex]=MsgStr["ERR_PHONE_LENGTH"];
				} else {
					validate["EditView"][i][typeIndex] = "int";
					validate["EditView"][i][msgIndex]=MsgStr["LBL_PHONE_FAX"];
				}
			}
		}
		

		
	  	addToValidate(\'EditView\', \'phone\', \'int\', false,MsgStr["LBL_PHONE"]);
		checkPhone();
		addToValidate(\'EditView\', \'phone_fax\', \'int\', false,MsgStr["LBL_PHONE_FAX"]);
		checkPhoneFax();
		addToValidate(\'EditView\', \'email\', \'varchar\', false,  MsgStr["LBL_EMAIL_ADDRESS"] );
		checkEmail();
		addToValidate(\'EditView\', \'website\', \'varchar\', false,  MsgStr["LBL_WEBSITE"] );
		checkWebSite();
		addToValidate(\'EditView\', \'inn_and_kpp\', \'varchar\', false,  MsgStr["LBL_INN_AND_KPP"] );
		checkINNandKPP();
	
		</script>
	  {/literal}
	',
      'includes' => 
      array (
        0 => 
        array (
          'file' => 'modules/Accounts/Account.js',
        ),
      ),
      'useTabs' => false,
    ),
    'panels' => 
    array (
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'title',
            'label' => 'LBL_TITLE',
          ),
          1 => 
          array (
            'name' => 'assigned_user_name',
            'label' => 'LBL_ASSIGNED_TO_NAME',
			'displayParams'=>
			array(
			'required' => true, 
			),
          ),
        ),
      ),
      'lbl_editview_panel2' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'address',
            'label' => 'LBL_ADDRESS',
          ),
          1 => 
          array (
            'name' => 'phone',
            'label' => 'LBL_PHONE',
			'displayParams' => 
            array (
              'field' => 
              array (
                'onChange' => 'checkPhone();',
              ),
            ),
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'phone_fax',
            'comment' => 'The fax phone number of this company',
            'label' => 'LBL_FAX',
			'displayParams' => 
            array (
              'field' => 
              array (
                'onChange' => 'checkPhoneFax();',
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
          0 => 
          array (
            'name' => 'website',
            'comment' => 'URL of website for the company',
            'label' => 'LBL_WEBSITE',
			'customCode' => '<input type=\'text\' name=\'website\' id=\'website\' size=\'30\' 
maxlength=\'255\' value=\'http://\' title=\'\' tabindex=\'106\'  onChange="checkWebSite();">',
			'displayParams' => 
            array (
              'field' => 
              array (
                'onChange' => 'checkWebSite();',
              ),
            ),
          ),
          1 => '',
        ),
      ),
      'lbl_editview_panel5' => 
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
            'name' => 'inn_and_kpp',
            'label' => 'LBL_INN_AND_KPP',
			'displayParams' => 
            array (
              'field' => 
              array (
                'onChange' => 'checkINNandKPP();',
              ),
            ),
          ),
          1 => 
          array (
            'name' => 'address_legal',
            'label' => 'LBL_ADDRESS_LEGAL',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'address_post',
            'label' => 'LBL_ADDRESS_POST',
          ),
          1 => 
          array (
            'name' => 'account_and_bank',
            'label' => 'LBL_ACCOUNT_AND_BANK',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'name_general_director',
            'label' => 'LBL_NAME_GENERAL_DIRECTOR',
          ),
          1 => '',
        ),
      ),
    ),
  ),
);
?>
