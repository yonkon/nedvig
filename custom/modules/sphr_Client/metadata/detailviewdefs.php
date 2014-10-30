<?php
$module_name = 'sphr_Client';
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
          4 => 
          array (
            'customCode' => '<input title="{$MOD.LBL_SEND_OBJECTS}" type="button" class="button"
			  {if $bean->email1 == ""} disabled=true{/if}
			  onClick="openObjectListPopup(\'{$bean->id}\')" name="send_objects_btn" value="{$MOD.LBL_SEND_OBJECTS}">',
          ),
        ),
      ),
      'maxColumns' => '3',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '11',
          'field' => '23',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '23',
        ),
        2 => 
        array (
          'label' => '10',
          'field' => '23',
        ),
      ),
      'javascript' => '{$MY_JSDV}',
      'includes' => 
      array (
        0 => 
        array (
          'file' => 'modules/Leads/Lead.js',
        ),
      ),
      'useTabs' => false,
    ),
    'panels' => 
    array (
      'lbl_detailview_panel6' =>
      array (
        -1 =>
        array (
          'name' => 'date_entered',
          'comment' => 'Registration date',
          'label' => 'LBL_DATE_ENTERED',
        ),
        0 => 
        array (
          0 =>
          array (
            'name' => 'last_name',
            'comment' => 'Last name of the contact',
            'label' => 'LBL_LAST_NAME',
          ),
          1 =>
          array (
            'name' => 'country_c',
            'label' => 'LBL_COUNTRY',
          ),
          2 =>
          array (
            'name' => 'photo',
            'studio' => false,
            'label' => 'LBL_PHOTO_CLIENT',
            'customCode' => '<img src="" id="photo_client" title="Фото клиента" style="display: block; position: relative;">',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'first_name',
            'comment' => 'First name of the contact',
            'label' => 'LBL_FIRST_NAME',
          ),
          1 => 
          array (
            'name' => 'region_c',
            'label' => 'LBL_REGION',
          ),
          2 => '',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'middle_name_c',
            'label' => 'LBL_MIDDLE_NAME',
          ),
          1 => 
          array (
            'name' => 'city_c',
            'label' => 'LBL_CITY',
          ),
          2 => 
          array (
            'name' => 'current_address_c',
            'label' => 'LBL_CURRENT_ADDRESS',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'phone_mobile',
            'label' => 'LBL_PHONE_MOBILE',
          ),
          1 => 'budget_c',
          2 => '',
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'phone_mobile_2_c',
            'label' => 'LBL_PHONE_MOBILE_2',
          ),
          1 => 'object_type_c',
          2 => '',
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'phone_home',
            'comment' => 'Home phone number of the contact',
            'label' => 'LBL_PHONE_HOME',
          ),
          1 => '',
          2 => '',
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'phone_work',
            'comment' => 'Work phone number of the contact',
            'label' => 'LBL_PHONE_WORK',
          ),
          1 => '',
          2 => '',
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'email1',
            'studio' => 'false',
            'label' => 'LBL_EMAIL',
          ),
          1 => '',
          2 => '',
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'phone_fax',
            'label' => 'LBL_PHONE_FAX',
          ),
          1 => 
          array (
            'name' => 'assigned_user_name',
            'label' => 'LBL_ASSIGNED_TO_NAME',
          ),
          2 => '',
        ),
        9 => 
        array (
          0 => 
          array (
            'name' => 'birthday_c',
            'label' => 'LBL_BIRTHDAY',
          ),
          1 => 
          array (
            'name' => 'status',
            'studio' => 'visible',
            'label' => 'LBL_STATUS',
          ),
          2 => 
          array (
            'name' => 'status_description',
            'label' => 'LBL_STATUS_DESCRIPTION',
          ),
        ),
        10 => 
        array (
          0 => 'vip_c',
          1 => 
          array (
            'name' => 'source',
            'studio' => 'visible',
            'label' => 'LBL_SOURCE',
          ),
          2 => '',
        ),
        11 => 
        array (
          0 => 
          array (
            'name' => 'additional_information_c',
            'studio' => 'visible',
            'label' => 'LBL_ADDITIONAL_INFORMATION',
          ),
          1 => 
          array (
            'name' => 'accounts_sphr_client_name',
          ),
          2 => '',
        ),
        12 => 
        array (
          0 => 
          array (
              'name' => 'types_of_queries_c',
              'studio' => 'visible',
              'label' => 'LBL_TYPES_OF_QUERIES_C ',
          ),
        
        ),
        13 => 
        array (
          ),
      ),
      'lbl_detailview_panel7' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'zagran_name_c',
            'label' => 'LBL_ZAGRAN_NAME',
          ),
          1 => '',
          2 => '',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'zagran_last_name_c',
            'label' => 'LBL_ZAGRAN_LAST_NAME',
          ),
          1 => '',
          2 => '',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'zagran_date_birth_c',
            'label' => 'LBL_ZAGRAN_DATE_BIRTH',
          ),
          1 => '',
          2 => '',
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'zagran_number_c',
            'label' => 'LBL_ZAGRAN_NUMBER',
          ),
          1 => '',
          2 => '',
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'zagran_date_give_c',
            'label' => 'LBL_ZAGRAN_DATE_GIVE',
          ),
          1 => '',
          2 => '',
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'zagran_date_end_c',
            'label' => 'LBL_ZAGRAN_DATE_END',
          ),
          1 => '',
          2 => '',
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'zagran_organ_c',
            'studio' => 'visible',
            'label' => 'LBL_ZAGRAN_ORGAN',
          ),
          1 => '',
          2 => '',
        ),
      ),
      'lbl_detailview_panel8' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'additionalBlock_kindred',
            'studio' => false,
            'customCode' => '<div id="additionalBlock_kindred" style="position: relative; margin-left: -43%;"></div>',
          ),
          1 => '',
          2 => '',
        ),
      ),
    ),
  ),
);
?>
