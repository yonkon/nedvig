<?php
$module_name = 'sphr_Client';
$viewdefs [$module_name] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'enctype' => 'multipart/form-data',
        'buttons' => 
        array (
          0 => 
          array (
            'customCode' => '<input type="submit" value="Сохранить" name="button" onclick="{literal}if(pressSave() == 0) {return false;} else {this.form.action.value=\'Save\'; return check_form(\'EditView\');}{/literal}" class="button primary" accesskey="S" title="Сохранить [Alt+S]">',
          ),
          1 => 'CANCEL',
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
      'javascript' => '{$MY_JS}',
      'useTabs' => false,
    ),
    'panels' => 
    array (
      'lbl_editview_panel4' => 
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
            'name' => 'country_c',
            'label' => 'LBL_COUNTRY',
          ),
          2 => 
          array (
            'name' => 'photo',
            'studio' => false,
            'customCode' => '<input type="file" name="client_photo" accept="image/jpeg,image/png,image/gif"><div>Разрешены только изображения форматов: JPEG(JPG), GIF, PNG.</div>',
            'label' => 'LBL_FILE_LOAD',
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
          0 => 'phone_mobile',
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
          0 => '',
          1 => '',
          2 => 
          array (
            'name' => 'phone_home',
            'comment' => 'Home phone number of the contact',
            'label' => 'LBL_PHONE_HOME',
          ),
        ),
        6 => 
        array (
          0 => '',
          1 => '',
          2 => 
          array (
            'name' => 'phone_work',
            'comment' => 'Work phone number of the contact',
            'label' => 'LBL_PHONE_WORK',
          ),
        ),
        7 => 
        array (
          0 => '',
          1 => '',
          2 => 
          array (
            'name' => 'email1',
            'studio' => 'false',
            'label' => 'LBL_EMAIL',
          ),
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
          2 => 
          array (
            'name' => 'types_of_queries_c',
            'studio' => 'visible',
            'label' => 'LBL_TYPES_OF_QUERIES_C ',
          ),
        ),
        12 => 
        array (
          0 => 
          array (
            'name' => 'prospects_shr_client_name',
          ),
          1 => 
          array (
            'name' => 'prospects_s_client_1_name',
          ),
          2 => 
          array (
            'name' => 'prospects_s_client_2_name',
          ),
        ),
        13 => 
        array (
          0 => 
          array (
            'name' => 'prospects_s_client_3_name',
          ),
        ),
      ),
      'lbl_editview_panel5' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'zagran_name_c',
            'label' => 'LBL_ZAGRAN_NAME',
          ),
          1 => 
          array (
            'name' => 'zagran_last_name_c',
            'label' => 'LBL_ZAGRAN_LAST_NAME',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'zagran_date_birth_c',
            'label' => 'LBL_ZAGRAN_DATE_BIRTH',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'zagran_number_c',
            'label' => 'LBL_ZAGRAN_NUMBER',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'zagran_date_give_c',
            'label' => 'LBL_ZAGRAN_DATE_GIVE',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'zagran_date_end_c',
            'label' => 'LBL_ZAGRAN_DATE_END',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'zagran_organ_c',
            'studio' => 'visible',
            'label' => 'LBL_ZAGRAN_ORGAN',
          ),
        ),
      ),
      'lbl_editview_panel6' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'add_kindred',
            'label' => 'LBL_ADD_KINDRED',
            'studio' => false,
            'customCode' => '<span id="add_kindred_button" class="id-ff multiple ownline"><button class="button" type="button" value="add_kindred"><img src="themes/default/images/id-ff-add.png"></button></span>',
          ),
          1 => 
          array (
            'name' => 'numBlocks',
            'studio' => false,
            'customCode' => '<input type="hidden" name="numBlocks" id="numBlocks" value="0">',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'additionalBlock_kindred',
            'studio' => false,
            'customCode' => '<div id="additionalBlock_kindred" style="position: relative; margin-left: -43%;"></div>',
          ),
        ),
      ),
    ),
  ),
);
?>
