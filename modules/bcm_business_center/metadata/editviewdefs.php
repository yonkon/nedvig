<?php
$module_name = 'bcm_business_center';
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
	  		<script type="text/javascript">
		  		function addPhone ()
				{
					var ar_phones_count = $("#ar_phones_count").val();
					var ar_phones_max = $("#ar_phones_max").val();

					$("#phones_list").append(\'<tr id="phoneRow\'+ar_phones_max+\'">\'+\'<td nowrap="NOWRAP"><input type="text" name="phone\'+ar_phones_max+\'" id="phone\'+ar_phones_max+\'" value="" size="30"></td>\'+\'<td><img src="themes/default/images/id-ff-remove.png" onclick="deletePhone(\'+ar_phones_max+\')">\'+\'</td></tr>\');
					
					ar_phones_max++;
					ar_phones_count++;
					$("#ar_phones_max").val(ar_phones_max);
					$("#ar_phones_count").val(ar_phones_count);
				}
							
				function deletePhone (id)
				{
					var ar_phones_count = $("#ar_phones_count").val();
				
					$("#phoneRow"+id).remove();
					ar_phones_count--;
					$("#ar_phones_count").val(ar_phones_count);
				}
			</script>
	  	{/literal}',
      
      'useTabs' => false,
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 'name',
          1 => 'assigned_user_name',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'address_c',
            'studio' => 'visible',
            'label' => 'LBL_ADDRESS_C',
          ),
          1 => array(
          	'name' => 'nothing',
          	'customLabel' => 'Телефоны:',
          	'customCode' => '
          	
          		<span class="id-ff multiple ownline"><button class="button" type="button" onclick="addPhone()" value="Add"><img src="themes/default/images/id-ff-add.png"></button></span>

				<input type="hidden" name="ar_phones_count" id="ar_phones_count" value="{$ar_phones_count}">
	            <input type="hidden" name="ar_phones_max" id="ar_phones_max" value="{$ar_phones_max}">
	            
          		<table id="phones_list">
					{foreach from=$ar_phones item=phone_value key=phone_id}
					<tr id="phoneRow{$phone_id}">
						<td nowrap="NOWRAP">
							<input type="text" name="phone{$phone_id}" id="phone{$phone_id}" value="{$phone_value}" size="30">
						</td>
						<td><img src="themes/default/images/id-ff-remove.png" onclick="deletePhone({$phone_id})"></td>
					</tr>
					{/foreach}
				 </table>'
          ),
        ),
        2 => 
        array (
          0 => 'description',
        ),
      ),
    ),
  ),
);
?>
