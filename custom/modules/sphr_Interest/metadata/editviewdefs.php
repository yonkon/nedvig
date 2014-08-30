<?php
$module_name = 'sphr_Interest';
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
		MsgStr["ERR_PAYMENT_NEED"]="{$MOD.ERR_PAYMENT_NEED}";
	    MsgStr["LBL_PAYMENT_OBJECT_FROM"]="{$MOD.LBL_PAYMENT_OBJECT_FROM}";
		MsgStr["LBL_PAYMENT_OBJECT_TO"]="{$MOD.LBL_PAYMENT_OBJECT_TO}";
		MsgStr["LBL_PAYMENT_METER_FROM"]="{$MOD.LBL_PAYMENT_METER_FROM}";
		MsgStr["LBL_PAYMENT_METER_TO"]="{$MOD.LBL_PAYMENT_METER_TO}";		
		{literal}
		
		addToValidate(\'EditView\', \'payment_meter_from_c\', \'varchar\', false,MsgStr["LBL_PAYMENT_METER_FROM"] );
		addToValidate(\'EditView\', \'payment_meter_to_c\', \'varchar\', false,MsgStr["LBL_PAYMENT_METER_TO"] );
		addToValidate(\'EditView\', \'payment_object_from_c\', \'varchar\', false,MsgStr["LBL_PAYMENT_OBJECT_FROM"] );
		addToValidate(\'EditView\', \'payment_object_to_c\', \'varchar\', false,MsgStr["LBL_PAYMENT_OBJECT_TO"] );
		checkPayment2();
		
							
		</script>
	  {/literal}
	  ',
      'useTabs' => false,
    ),
     'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'type_c',
            'studio' => 'visible',
            'label' => 'LBL_TYPE',
          ),
          1 => 
          array (
            'name' => 'country',
            'studio' => 'visible',
            'label' => 'LBL_COUNTRY',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'description_wish',
            'label' => 'LBL_DESCRIPTION_WISH',
          ),
          1 => 
          array (
            'name' => 'discount',
            'label' => 'LBL_DISCOUNT',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'payment_object_from_c',
            'label' => 'LBL_PAYMENT_OBJECT_FROM',
			'displayParams' => 
            array (
              'field' => 
              array (
                'onChange' => 'checkPayment2();',
              ),
            ),
          ),
          1 => 
          array (
            'name' => 'payment_object_to_c',
            'label' => 'LBL_PAYMENT_OBJECT_TO',
			'displayParams' => 
            array (
              'field' => 
              array (
                'onChange' => 'checkPayment2();',
              ),
            ),
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'payment_meter_from_c',
            'label' => 'LBL_PAYMENT_METER_FROM',
			'displayParams' => 
            array (
              'field' => 
              array (
                'onChange' => 'checkPayment2();',
              ),
            ),
          ),
          1 => 
          array (
            'name' => 'payment_meter_to_c',
            'label' => 'LBL_PAYMENT_METER_TO',
			'displayParams' => 
            array (
              'field' => 
              array (
                'onChange' => 'checkPayment2();',
              ),
            ),
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'room_count',
            'studio' => 'visible',
            'label' => 'LBL_ROOM_COUNT',
          ),
          1 => 
          array (
            'name' => 'description_payment_terms',
            'label' => 'LBL_DESCRIPTION_PAYMENT_TERMS',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'square_from_c',
            'label' => 'LBL_SQUARE_FROM',
          ),
          1 => 
          array (
            'name' => 'square_to_c',
            'label' => 'LBL_SQUARE_TO',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'sphr_client_interest_name',
          ),
          1 => 
          array (
            'name' => 'assigned_user_name',
            'label' => 'LBL_ASSIGNED_TO_NAME',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'sphr_object_interest_name',
          ),
        ),
      ),
    ),
  ),
);
?>