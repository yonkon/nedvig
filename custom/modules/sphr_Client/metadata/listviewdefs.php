<?php
$module_name = 'sphr_Client';
$listViewDefs [$module_name] = 
array (
  'IDN' => array(
    'width' => '10%',
    'type' => 'int',
    'label' => '№ клиента',
    'sortable' => true,
    'link' => true,
//    'customCode' => '{$EMAIL1_LINK}{$EMAIL1}</a>',
    'default' => true,
    'disable_num_format' => '1',
  ),
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
  'BUDGET_C' => 
  array (
    'type' => 'enum',
    'default' => true,
    'label' => 'LBL_BUDGET',
    'width' => '10%',
  ),
  'OBJECT_TYPE_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_OBJECT_TYPE',
    'width' => '10%',
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
    'width' => '10%',
  ),
  'TYPES_OF_QUERIES_C' => 
  array (
    'type' => 'multienum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_BONUS',
    'width' => '10%',
  ),
  'ARRIVAL_DATE_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_ARRIVAL_DATE_C',
    'width' => '10%',
  ),
  'ARRIVAL_DATE_2_C' => 
  array (
    'type' => 'datetimecombo',
    'default' => true,
    'label' => 'LBL_ARRIVAL_DATE_2',
    'width' => '10%',
  ),
);
?>
