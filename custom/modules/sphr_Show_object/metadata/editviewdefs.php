<?php
$module_name = 'sphr_Show_object';
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
		function checkReminderTime()
		{
			with (document)
			{
				if (getElementById("reminder_status").checked)
				{
					getElementById("reminder_time_label").style.display="block";
					getElementById("reminder_time").style.display="block";
				} else {
					getElementById("reminder_time_label").style.display="none";
					getElementById("reminder_time").style.display="none";
				}
			}
		}
		checkReminderTime();
	  </script>
	  {/literal}
	',
      'useTabs' => false,
    ),
    'panels' => 
    array (
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 'name',
          1 => 
          array (
            'name' => 'status',
            'studio' => 'visible',
            'label' => 'LBL_STATUS',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'duration_hours',
            'label' => 'LBL_DURATION_HOURS',
          ),
          1 => 
          array (
            'name' => 'duration_minutes',
            'label' => 'LBL_DURATION_MINUTES',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'date_start',
            'label' => 'LBL_DATE_START',
          ),
          1 => '',
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'location',
            'label' => 'LBL_LOCATION',
          ),
          1 => 'description',
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'reminder_status',
            'label' => 'LBL_REMINDER_STATUS',
            'displayParams' => 
            array (
              'field' => 
              array (
                'onChange' => 'checkReminderTime();',
              ),
            ),
          ),
          1 => 
          array (
            'name' => 'reminder_time',
            'studio' => 'visible',
            'label' => 'LBL_REMINDER_TIME',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'sphr_deal_sow_object_name',
          ),
          1 => 
          array (
            'name' => 'sphr_objectow_object_name',
          ),
        ),
      ),
      'lbl_editview_panel2' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'assigned_user_name',
            'label' => 'LBL_ASSIGNED_TO_NAME',
          ),
          1 => '',
        ),
      ),
    ),
  ),
);
?>
