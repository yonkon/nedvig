<?php
$module_name = 'sphr_Show_object';
$viewdefs [$module_name] = 
array (
  'QuickCreate' => 
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
      'useTabs' => false,
    ),
    'panels' => 
    array (
      'lbl_quickcreate_panel1' => 
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
          1 => 
          array (
            'name' => 'description',
            'comment' => 'Full text of the note',
            'studio' => 'visible',
            'label' => 'LBL_DESCRIPTION',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'reminder_status',
            'label' => 'LBL_REMINDER_STATUS',
          ),
          1 => 
          array (
            'name' => 'reminder_time',
            'studio' => 'visible',
            'label' => 'LBL_REMINDER_TIME',
          ),
        ),
      ),
      'lbl_quickcreate_panel3' => 
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
      'lbl_quickcreate_panel2' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'assigned_user_id',
            'comment' => 'User ID assigned to record',
            'studio' => 'visible',
            'label' => 'LBL_ASSIGNED_TO_ID',
          ),
          1 => '',
        ),
      ),
    ),
  ),
);
?>
