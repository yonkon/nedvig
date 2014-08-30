<?php
$module_name = 'sphr_Owner';
$viewdefs [$module_name] = 
array (
  'DetailView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'buttons' => 
        array (
          0 => 'EDIT',
          1 => 'DUPLICATE',
          2 => 'DELETE',
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
      'useTabs' => false,
    ),
    'panels' => 
    array (
      'lbl_detailview_panel4' => 
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
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'first_and_middle_name',
            'label' => 'LBL_FIRST_AND_MIDDLE_NAME',
          ),
          1 => 
          array (
            'name' => 'assigned_user_name',
            'label' => 'LBL_ASSIGNED_TO_NAME',
          ),
        ),
      ),
      'lbl_detailview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'phone_mobile_c',
            'label' => 'LBL_PHONE_MOBILE_C',
          ),
          1 => 
          array (
            'name' => 'phone_home_c',
            'label' => 'LBL_PHONE_HOME',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'phone_work_c',
            'label' => 'LBL_PHONE_WORK',
          ),
          1 => 
          array (
            'name' => 'email',
            'label' => 'LBL_EMAIL',
          ),
        ),
        2 => 
        array (
          0 => '',
          1 => '',
        ),
      ),
      'lbl_detailview_panel2' => 
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
      'lbl_detailview_panel3' => 
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
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'passport_first_name',
            'label' => 'LBL_PASSPORT_FIRST_NAME',
          ),
          1 => 
          array (
            'name' => 'passport_middle_name',
            'label' => 'LBL_PASSPORT_MIDDLE_NAME',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'passport_series_c',
            'label' => 'LBL_PASSPORT_SERIES',
          ),
          1 => 
          array (
            'name' => 'passport_number_c',
            'label' => 'LBL_PASSPORT_NUMBER',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'passport_foreigner_ser_and_num',
            'label' => 'LBL_PASSPORT_FOREIGNER_SER_AND_NUM',
          ),
          1 => '',
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'passport_issue_date',
            'label' => 'LBL_PASSPORT_ISSUE_DATE',
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
          ),
          1 => '',
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'address_temporary',
            'label' => 'LBL_ADDRESS_TEMPORARY',
          ),
          1 => 
          array (
            'name' => 'address_permanent',
            'label' => 'LBL_ADDRESS_PERMANENT',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'address_actual',
            'label' => 'LBL_ADDRESS_ACTUAL',
          ),
          1 => '',
        ),
      ),
    ),
  ),
);
?>
