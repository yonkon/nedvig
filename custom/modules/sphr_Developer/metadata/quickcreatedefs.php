<?php
$module_name = 'sphr_Developer';
$_object_name = 'sphr_developer';
$viewdefs [$module_name] = 
array (
  'QuickCreate' => 
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
      'lbl_quickcreate_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'name',
            'comment' => 'Name of the Company',
            'label' => 'LBL_NAME',
          ),
          1 => 
          array (
            'name' => 'assigned_user_name',
            'label' => 'LBL_ASSIGNED_TO_NAME',
          ),
        ),
      ),
      'lbl_quickcreate_panel3' => 
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
          ),
        ),
        1 => 
        array (
          0 => 'phone_fax',
          1 => 
          array (
            'name' => 'email',
            'label' => 'LBL_EMAIL',
          ),
        ),
        2 => 
        array (
          0 => 'website',
          1 => '',
        ),
      ),
      'lbl_quickcreate_panel4' => 
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
          0 => '',
          1 => '',
        ),
        2 => 
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
        3 => 
        array (
          0 => 
          array (
            'name' => 'contract_comission',
            'label' => 'LBL_CONTRACT_COMISSION',
          ),
          1 => '',
        ),
      ),
      'lbl_quickcreate_panel5' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'inn_and_kpp',
            'label' => 'LBL_INN_AND_KPP',
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
