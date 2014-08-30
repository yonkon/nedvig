<?php
$module_name = 'sphr_Client';
$listViewDefs [$module_name] = 
array (
  'FIRST_NAME' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_FIRST_NAME',
    'width' => '10%',
    'default' => true,
    'link' => true,
  ),
  'PHONE_MOBILE' => 
  array (
    'type' => 'phone',
    'label' => 'LBL_PHONE_MOBILE',
    'width' => '10%',
    'default' => true,
  ),
  'EMAIL1' => 
  array (
    'width' => '15%',
    'label' => 'LBL_EMAIL_ADDRESS',
    'sortable' => false,
    'link' => true,
    'customCode' => '{$EMAIL1_LINK}{$EMAIL1}</a>',
    'default' => true,
  ),
  'BUDGET_C' => array(
    'type' => 'enum',
    'default' => true,
    'label' => 'LBL_BUDGET',
    ),
  'OBJECT_TYPE_C' => array(
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_OBJECT_TYPE',
    ),
  'ASSIGNED_USER_NAME' => 
  array (
    'link' => 'assigned_user_link',
    'type' => 'relate',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'width' => '10%',
    'default' => true,
  ),
  'STATUS' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_STATUS',
    'width' => '10%',
  ),
  'ACTIVITIES' => 
  array (
    'label' => 'LBL_ACTIVITIES',
    'sortable' => true,
    'default' => true,
  ),
  'TYPES_OF_QUERIES_C' => 
  array (
    'type' => 'multienum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_BONUS',
    'width' => '10%',
  ),
);
?>
