<?php
$searchdefs ['Accounts'] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'phone_office' => 
      array (
        'type' => 'phone',
        'label' => 'LBL_PHONE_OFFICE',
        'width' => '10%',
        'default' => true,
        'name' => 'phone_office',
      ),
      'phone_alternate' => 
      array (
        'type' => 'phone',
        'label' => 'LBL_PHONE_ALT',
        'width' => '10%',
        'default' => true,
        'name' => 'phone_alternate',
      ),
      'email1' => 
      array (
        'type' => 'varchar',
        'studio' => 
        array (
          'editField' => true,
        ),
        'label' => 'LBL_EMAIL',
        'width' => '10%',
        'default' => true,
        'name' => 'email1',
      ),
      'email2_c' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_EMAIL2',
        'width' => '10%',
        'name' => 'email2_c',
      ),
      'category_c' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_CATEGORY',
        'sortable' => false,
        'width' => '10%',
        'name' => 'category_c',
      ),
      'accounts_agents' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_ACCOUNTS_AGENTS',
        'sortable' => false,
        'width' => '10%',
        'name' => 'accounts_agents',
      ),
      'assigned_user_name' => 
      array (
        'link' => 'assigned_user_link',
        'type' => 'relate',
        'label' => 'LBL_ASSIGNED_TO_NAME',
        'width' => '10%',
        'default' => true,
        'name' => 'assigned_user_name',
      ),
    ),
    'advanced_search' => 
    array (
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'phone_office' => 
      array (
        'type' => 'phone',
        'label' => 'LBL_PHONE_OFFICE',
        'width' => '10%',
        'default' => true,
        'name' => 'phone_office',
      ),
      'phone_alternate' => 
      array (
        'type' => 'phone',
        'label' => 'LBL_PHONE_ALT',
        'width' => '10%',
        'default' => true,
        'name' => 'phone_alternate',
      ),
      'email1' => 
      array (
        'type' => 'varchar',
        'studio' => 
        array (
          'editField' => true,
        ),
        'label' => 'LBL_EMAIL',
        'width' => '10%',
        'default' => true,
        'name' => 'email1',
      ),
      'email2_c' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_EMAIL2',
        'width' => '10%',
        'name' => 'email2_c',
      ),
      'identification_c' => 
      array (
        'type' => 'text',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_IDENTIFICATION',
        'sortable' => false,
        'width' => '10%',
        'name' => 'identification_c',
      ),
      'country_c' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_COUNTRY',
        'sortable' => false,
        'width' => '10%',
        'name' => 'country_c',
      ),
      'region_c' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_REGION',
        'sortable' => false,
        'width' => '10%',
        'name' => 'region_c',
      ),
      'city_c' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_CITY',
        'sortable' => false,
        'width' => '10%',
        'name' => 'city_c',
      ),
      'category_c' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_CATEGORY',
        'sortable' => false,
        'width' => '10%',
        'name' => 'category_c',
      ),
      'accounts_agents' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_ACCOUNTS_AGENTS',
        'sortable' => false,
        'width' => '10%',
        'name' => 'accounts_agents',
      ),
      'assigned_user_id' => 
      array (
        'name' => 'assigned_user_id',
        'type' => 'enum',
        'label' => 'LBL_ASSIGNED_TO',
        'function' => 
        array (
          'name' => 'get_user_array',
          'params' => 
          array (
            0 => false,
          ),
        ),
        'default' => true,
        'width' => '10%',
      ),
    ),
  ),
  'templateMeta' => 
  array (
    'maxColumns' => '3',
    'widths' => 
    array (
      'label' => '10',
      'field' => '30',
    ),
  ),
);
?>
