<?php
$module_name = 'sphr_Client';
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
      'useTabs' => false,
    ),
    'panels' => 
    array (
      'lbl_contact_information' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'type_c',
            'studio' => 'visible',
            'label' => 'LBL_TYPE',
          ),
          1 => '',
        ),
        1 => 
        array (
          0 => 'title',
          1 => 
          array (
            'name' => 'first_name',
            'comment' => 'First name of the contact',
            'label' => 'LBL_FIRST_NAME',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'last_name',
            'comment' => 'Last name of the contact',
            'label' => 'LBL_LAST_NAME',
          ),
          1 => 'phone_mobile',
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'phone_home',
            'comment' => 'Home phone number of the contact',
            'label' => 'LBL_PHONE_HOME',
          ),
          1 => 
          array (
            'name' => 'phone_work',
            'comment' => 'Work phone number of the contact',
            'label' => 'LBL_PHONE_WORK',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'phone_fax',
            'comment' => 'Contact fax number',
            'label' => 'LBL_PHONE_FAX',
          ),
          1 => 
          array (
            'name' => 'email',
            'label' => 'LBL_EMAIL',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'address_post',
            'label' => 'LBL_ADDRESS_POST',
          ),
          1 => 
          array (
            'name' => 'source',
            'studio' => 'visible',
            'label' => 'LBL_SOURCE',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'assigned_user_name',
            'label' => 'LBL_ASSIGNED_TO_NAME',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'status',
            'studio' => 'visible',
            'label' => 'LBL_STATUS',
          ),
          1 => 
          array (
            'name' => 'status_description',
            'label' => 'LBL_STATUS_DESCRIPTION',
          ),
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'sphr_intermhr_client_name',
          ),
          1 => 
          array (
            'name' => 'sphr_inspechr_client_name',
          ),
        ),
      ),
      'lbl_editview_panel1' => 
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
            'name' => 'passport_series',
            'label' => 'LBL_PASSPORT_SERIES',
          ),
          1 => 
          array (
            'name' => 'passport_number',
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
            'name' => 'address_permanent',
            'label' => 'LBL_ADDRESS_PERMANENT',
          ),
          1 => 
          array (
            'name' => 'address_temporary',
            'label' => 'LBL_ADDRESS_TEMPORARY',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'address_actual',
            'label' => 'LBL_ADDRESS_ACTUAL',
          ),
          1 => '',
        ),
      ),
      'lbl_editview_panel2' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'full_name',
            'studio' => 
            array (
              'listview' => false,
            ),
            'label' => 'LBL_NAME',
          ),
          1 => 
          array (
            'name' => 'addressl_legal',
            'label' => 'LBL_ADDRESSL_LEGAL',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'addressl_actual',
            'label' => 'LBL_ADDRESSL_ACTUAL',
          ),
          1 => 
          array (
            'name' => 'phone',
            'label' => 'LBL_PHONE',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'inn_and_kpp',
            'label' => 'LBL_INN_AND_KPP',
          ),
          1 => 
          array (
            'name' => 'account_and_bank',
            'label' => 'LBL_ACCOUNT_AND_BANK',
          ),
        ),
        3 => 
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
