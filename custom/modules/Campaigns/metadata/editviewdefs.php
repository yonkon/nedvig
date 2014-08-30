<?php
$viewdefs ['Campaigns'] = 
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
      'javascript' => '<script type="text/javascript" src="include/javascript/popup_parent_helper.js?s=3d1c393a7199f936c4d35ced1d401899&c=1"></script>
<script type="text/javascript">
function type_change() {ldelim}
	type = document.getElementsByName(\'campaign_type\');
	if(type[0].value==\'NewsLetter\') {ldelim}
		document.getElementById(\'freq_label\').style.display = \'\';
		document.getElementById(\'freq_field\').style.display = \'\';
	 {rdelim} else {ldelim}
		document.getElementById(\'freq_label\').style.display = \'none\';
		document.getElementById(\'freq_field\').style.display = \'none\';
	 {rdelim}
 {rdelim}
type_change();

function ConvertItems(id)  {ldelim}
	var items = new Array();

	//get the items that are to be converted
	expected_revenue = document.getElementById(\'expected_revenue\');
	budget = document.getElementById(\'budget\');
	actual_cost = document.getElementById(\'actual_cost\');
	expected_cost = document.getElementById(\'expected_cost\');

	//unformat the values of the items to be converted
	expected_revenue.value = unformatNumber(expected_revenue.value, num_grp_sep, dec_sep);
	expected_cost.value = unformatNumber(expected_cost.value, num_grp_sep, dec_sep);
	budget.value = unformatNumber(budget.value, num_grp_sep, dec_sep);
	actual_cost.value = unformatNumber(actual_cost.value, num_grp_sep, dec_sep);

	//add the items to an array
	items[items.length] = expected_revenue;
	items[items.length] = budget;
	items[items.length] = expected_cost;
	items[items.length] = actual_cost;

	//call function that will convert currency
	ConvertRate(id, items);

	//Add formatting back to items
	expected_revenue.value = formatNumber(expected_revenue.value, num_grp_sep, dec_sep);
	expected_cost.value = formatNumber(expected_cost.value, num_grp_sep, dec_sep);
	budget.value = formatNumber(budget.value, num_grp_sep, dec_sep);
	actual_cost.value = formatNumber(actual_cost.value, num_grp_sep, dec_sep);
 {rdelim}
</script>

<script type="text/javascript" src="custom/include/javascript/sphere_modules_editviews.js"></script>
<script type="text/javascript">
	var MsgStr= new Object();
	//Массив констант для вывода сообщений
	MsgStr["LBL_PHONE_IN"]="{$MOD.LBL_PHONE_IN}";
	MsgStr["ERR_PHONE_LENGTH"]="{$MOD.ERR_PHONE_LENGTH}";
	{literal}
		function checkPhone() //функция проверки телефонного номера
		{	
			var i=GetValidateIndex("phone_in_c"); 
			if (i!=-1) 
			{
				if ((ElementValueLength(validate["EditView"][i][nameIndex])!=0) && (ElementValueLength(validate["EditView"][i][nameIndex])!=11))
				{
					validate["EditView"][i][typeIndex] = "error";
					validate["EditView"][i][msgIndex]=MsgStr["ERR_PHONE_LENGTH"];
				} else {
					validate["EditView"][i][typeIndex] = "varchar";
					validate["EditView"][i][msgIndex]=MsgStr["LBL_PHONE_IN"];
				}
			}
		}	
		//Добавление поля с телефонным номером на проверку
		addToValidate(\'EditView\', \'phone_in_c\', \'varchar\', false,  MsgStr["LBL_PHONE_IN"] );
		checkPhone();
	{/literal}
	</script>
	',
      'useTabs' => false,
    ),
    'panels' => 
    array (
      'lbl_campaign_information' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'name',
          ),
        ),
        1 => 
        array (
          0 => 'expected_cost',
          1 => 'actual_cost',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'start_date',
            'displayParams' => 
            array (
              'required' => false,
              'showFormats' => true,
            ),
          ),
          1 => 
          array (
            'name' => 'end_date',
            'displayParams' => 
            array (
              'showFormats' => true,
            ),
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'phone_in_c',
            'label' => 'LBL_PHONE_IN',
            'displayParams' => 
            array (
              'field' => 
              array (
                'onChange' => 'checkPhone();',
              ),
            ),
          ),
          1 => 
          array (
            'name' => 'content',
            'displayParams' => 
            array (
              'rows' => 8,
              'cols' => 80,
            ),
          ),
        ),
      ),
      'LBL_PANEL_ASSIGNMENT' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'assigned_user_name',
            'label' => 'LBL_ASSIGNED_TO',
          ),
        ),
      ),
    ),
  ),
);
?>
