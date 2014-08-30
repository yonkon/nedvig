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
			  {if $bean->email == ""} disabled=true{/if}
			  onClick="openObjectListPopup(\'{$bean->id}\')" name="send_objects_btn" value="{$MOD.LBL_SEND_OBJECTS}">',
          ),
        ),
      ),
      'maxColumns' => '2',
      'widths' =>
      array (
        0 =>
        array (
          'label' => '15',
          'field' => '35',
        ),
        1 =>
        array (
          'label' => '15',
          'field' => '35',
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
            'name' => 'photo',
            'studio' => false,
            'label' => 'LBL_PHOTO_CLIENT',
            'customCode' => '<img src="" id="photo_client" title="Фото клиента" style="display: block; position: absolute; width: 200px; height: 200px;">',
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
          1 => '',
        ),
        2 =>
        array (
          0 =>
          array (
            'name' => 'middle_name_c',
            'label' => 'LBL_MIDDLE_NAME',
          ),
          1 => '',
        ),
        3 =>
        array (
          0 =>
          array (
            'name' => 'phone_mobile',
            'comment' => 'Mobile phone number of the contact',
            'label' => 'LBL_PHONE_MOBILE',
          ),
          1 => '',
        ),
        4 =>
        array (
          0 =>
          array (
            'name' => 'phone_mobile_2_c',
            'label' => 'LBL_PHONE_MOBILE_2',
          ),
          1 => '',
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
        ),
        7 =>
        array (
          0 =>
          array (
            'name' => 'email',
            'label' => 'LBL_EMAIL',
          ),
          1 => '',
        ),
        8 =>
        array (
          0 =>
          array (
            'name' => 'email_2_c',
            'label' => 'LBL_EMAIL_2',
          ),
          1 => '',
        ),
        9 =>
        array (
          0 =>
          array (
            'name' => 'phone_fax',
            'label' => 'LBL_PHONE_FAX',
          ),
          1 => '',
        ),
        10 =>
        array (
          0 => '',
          1 => '',
        ),
        11 =>
        array (
          0 =>
          array (
            'name' => 'current_country_c',
            'label' => 'LBL_CURRENT_COUNTRY',
          ),
          1 =>
          array (
            'name' => 'current_city_c',
            'label' => 'LBL_CURRENT_CITY',
          ),
        ),
        12 =>
        array (
          0 =>
          array (
            'name' => 'current_address_c',
            'label' => 'LBL_CURRENT_ADDRESS',
          ),
          1 => '',
        ),
        13 =>
        array (
          0 =>
          array (
            'name' => 'source',
            'studio' => 'visible',
            'label' => 'LBL_SOURCE',
          ),
          1 => '',
        ),
        14 =>
        array (
          0 =>
          array (
            'name' => 'assigned_user_name',
            'label' => 'LBL_ASSIGNED_TO_NAME',
          ),
          1 => '',
        ),
        15 =>
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
        16 =>
        array (
          0 =>
          array (
            'name' => 'sphr_intermhr_client_name',
            'label' => 'LBL_SPHR_INTERMEDIARY_SPHR_CLIENT_FROM_SPHR_INTERMEDIARY_TITLE',
          ),
          1 => '',
        ),
        17 =>
        array (
          0 =>
          array (
            'name' => 'additional_information_c',
            'studio' => 'visible',
            'label' => 'LBL_ADDITIONAL_INFORMATION',
          ),
          1 => '',
        ),
        18 =>
        array (
          0 =>
          array (
            'name' => 'accounts_sphr_client_name',
          ),
          1 =>
          array (
            'name' => 'cosib_postshr_client_name',
          ),
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
          1 =>array(
            'customCode' => '<script type="text/javascript" src="custom/modules/sphr_Client/javascript/sphrClientDetailPanels.js"></script>'
          ),
        ),
        1 =>
        array (
          0 =>
          array (
            'name' => 'zagran_last_name_c',
            'label' => 'LBL_ZAGRAN_LAST_NAME',
          ),
          1 => '',
        ),
        2 =>
        array (
          0 =>
          array (
            'name' => 'zagran_date_birth_c',
            'label' => 'LBL_ZAGRAN_DATE_BIRTH',
          ),
          1 => '',
        ),
        3 =>
        array (
          0 =>
          array (
            'name' => 'zagran_number_c',
            'label' => 'LBL_ZAGRAN_NUMBER',
          ),
          1 => '',
        ),
        4 =>
        array (
          0 =>
          array (
            'name' => 'zagran_date_give_c',
            'label' => 'LBL_ZAGRAN_DATE_GIVE',
          ),
          1 => '',
        ),
        5 =>
        array (
          0 =>
          array (
            'name' => 'zagran_date_end_c',
            'label' => 'LBL_ZAGRAN_DATE_END',
          ),
          1 => '',
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
        ),
      ),
    ),
  ),
);
?>
