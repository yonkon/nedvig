<?php
$popupMeta = array (
    'moduleMain' => 'Account',
    'varName' => 'ACCOUNT',
    'orderBy' => 'name',
    'whereClauses' => array (
  'name' => 'accounts.name',
  'email1' => 'accounts.email1',
  'category_c' => 'accounts_cstm.category_c',
  'assigned_user_name' => 'accounts.assigned_user_name',
  'phone_office' => 'accounts.phone_office',
  'phone_alternate' => 'accounts.phone_alternate',
  'email2_c' => 'accounts_cstm.email2_c',
  'accounts_agents' => 'accounts.accounts_agents',
),
    'searchInputs' => array (
  0 => 'name',
  4 => 'email1',
  5 => 'category_c',
  7 => 'assigned_user_name',
  8 => 'phone_office',
  9 => 'phone_alternate',
  10 => 'email2_c',
  11 => 'accounts_agents',
),
    'create' => array (
  'formBase' => 'AccountFormBase.php',
  'formBaseClass' => 'AccountFormBase',
  'getFormBodyParams' => 
  array (
    0 => '',
    1 => '',
    2 => 'AccountSave',
  ),
  'createButton' => 'Создать контрагента',
),
    'searchdefs' => array (
  'name' => 
  array (
    'name' => 'name',
    'width' => '10%',
  ),
  'phone_office' => 
  array (
    'type' => 'phone',
    'label' => 'LBL_PHONE_OFFICE',
    'width' => '10%',
    'name' => 'phone_office',
  ),
  'phone_alternate' => 
  array (
    'type' => 'phone',
    'label' => 'LBL_PHONE_ALT',
    'width' => '10%',
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
    'name' => 'email1',
  ),
  'email2_c' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_EMAIL2',
    'width' => '10%',
    'name' => 'email2_c',
  ),
  'category_c' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_CATEGORY',
    'sortable' => false,
    'width' => '10%',
    'name' => 'category_c',
  ),
  'accounts_agents' => 
  array (
    'type' => 'varchar',
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
    'name' => 'assigned_user_name',
  ),
),
    'listviewdefs' => array (
  'NAME' => 
  array (
    'width' => '40%',
    'label' => 'LBL_LIST_ACCOUNT_NAME',
    'link' => true,
    'default' => true,
    'name' => 'name',
  ),
  'PHONE_OFFICE' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LIST_PHONE',
    'default' => true,
    'name' => 'phone_office',
  ),
  'PHONE_ALTERNATE' => 
  array (
    'type' => 'phone',
    'label' => 'LBL_PHONE_ALT',
    'width' => '10%',
    'default' => true,
  ),
  'EMAIL1' => 
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
  'EMAIL2_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_EMAIL2',
    'width' => '10%',
  ),
  'CATEGORY_C' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_CATEGORY',
    'sortable' => false,
    'width' => '10%',
    'name' => 'category_c',
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '2%',
    'label' => 'LBL_LIST_ASSIGNED_USER',
    'default' => true,
    'name' => 'assigned_user_name',
  ),
),
);
