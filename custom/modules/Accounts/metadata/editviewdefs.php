<?php
$viewdefs ['Accounts'] =
array (
  'EditView' =>
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
      'lbl_account_information' =>
      array (
        0 =>
        array (
          0 =>
          array (
            'name' => 'name',
            'label' => 'LBL_NAME',
            'displayParams' =>
            array (
              'required' => true,
            ),
          ),
        ),
        1 =>
        array (
          0 =>
          array (
            'name' => 'phone_office',
            'label' => 'LBL_PHONE_OFFICE',
          ),
        ),
        2 =>
        array (
          0 =>
          array (
            'name' => 'phone_alternate',
            'comment' => 'An alternate phone number',
            'label' => 'LBL_PHONE_ALT',
          ),
        ),
        3 =>
        array (
          0 =>
          array (
            'name' => 'email1',
            'studio' => 'false',
            'label' => 'LBL_EMAIL',
          ),
        ),
        4 =>
        array (
          0 =>
          array (
            'name' => 'email2_c',
            'label' => 'LBL_EMAIL2',
          ),

        ),
        5 => array (
            'name' => 'website',
            'type' => 'link',
            'label' => 'LBL_WEBSITE',
          ), 
        6 =>
        array (
          0 => '',
        ),
        7 =>
        array (
          0 =>
          array (
            'name' => 'identification_c',
            'studio' => 'visible',
            'label' => 'LBL_IDENTIFICATION',
          ),
        ),
        8 =>
        array (
          0 =>
          array (
            'name' => 'category_c',
            'studio' => 'visible',
            'label' => 'LBL_CATEGORY',
          ),
          1 =>
          array (
            'name' => 'country_c',
            'studio' => 'visible',
            'label' => 'LBL_COUNTRY',
          ),
        ),
        9 =>
        array (
          0 =>
          array (
            'name' => 'region_c',
            'studio' => 'visible',
            'label' => 'LBL_REGION',
          ),
          1 =>
          array (
            'name' => 'city_c',
            'studio' => 'visible',
            'label' => 'LBL_CITY',
          ),
        ),
        10 =>
        array (
          0 =>
          array (
            'name' => 'assigned_user_name',
            'label' => 'LBL_ASSIGNED_TO',
          ),
        ),
      ),
      'lbl_editview_panel1' =>
      array (
        0 =>
        array (
          0 =>
          array (
            'name' => 'add_agents',
            'label' => 'LBL_ADD_KINDRED',
            'studio' => false,
            'customCode' => '<span id="add_agents_button" class="id-ff multiple ownline"><button class="button" type="button" value="add_agents"><img src="themes/default/images/id-ff-add.png"></button></span>',
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
            'name' => 'additionalBlock_agents',
            'studio' => false,
            'customCode' => '<div id="additionalBlock_agents" style="position: relative; margin-left: -24%;"></div>',
          ),
          1 => '',
        ),
      ),
    ),
  ),
);
?>
