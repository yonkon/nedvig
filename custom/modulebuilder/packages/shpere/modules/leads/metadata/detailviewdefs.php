<?php
$module_name = 'sphr_leads';
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
          3 => 'FIND_DUPLICATES',
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
      'lbl_detailview_panel2' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'title',
            'comment' => 'The title of the contact',
            'label' => 'LBL_TITLE',
          ),
          1 => '',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'last_and_middle_name',
            'label' => 'LBL_LAST_AND_MIDDLE_NAME',
          ),
          1 => 
          array (
            'name' => 'phone_mobile',
            'comment' => 'Mobile phone number of the contact',
            'label' => 'LBL_PHONE_MOBILE',
          ),
        ),
        2 => 
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
        3 => 
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
        4 => 
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
        5 => 
        array (
          0 => '',
          1 => '',
        ),
        6 => 
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
        7 => 
        array (
          0 => 
          array (
            'name' => 'date_entered',
            'comment' => 'Date record created',
            'label' => 'LBL_DATE_ENTERED',
          ),
          1 => 
          array (
            'name' => 'date_modified',
            'comment' => 'Date record last modified',
            'label' => 'LBL_DATE_MODIFIED',
          ),
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
          1 => '',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'first_name',
            'comment' => 'First name of the contact',
            'label' => 'LBL_FIRST_NAME',
          ),
          1 => '',
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
      'lbl_detailview_panel4' => 
      array (
        0 => 
        array (
          0 => '',
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
