<?php
$dashletData['cosib_messagesDashlet']['searchFields'] = array (
  'date_entered' => 
  array (
    'default' => '',
  ),
  'assigned_user_name' => 
  array (
    'default' => '',
  ),
  'sphr_client_messages_name' => 
  array (
    'default' => '',
  ),
  'name' => 
  array (
    'default' => '',
  ),
  'sphr_object_messages_name' => 
  array (
    'default' => '',
  ),
);
$dashletData['cosib_messagesDashlet']['columns'] = array (
  'date_entered' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_ENTERED',
    'default' => true,
    'name' => 'date_entered',
  ),
  'assigned_user_name' => 
  array (
    'width' => '8%',
    'label' => 'LBL_LIST_ASSIGNED_USER',
    'name' => 'assigned_user_name',
    'default' => true,
  ),
  'sphr_client_messages_name' => 
  array (
    'type' => 'relate',
    'link' => 'sphr_clientcosib_messages',
    'label' => 'LBL_SPHR_CLIENT_COSIB_MESSAGES_FROM_SPHR_CLIENT_TITLE',
    'width' => '10%',
    'default' => true,
  ),
  'name' => 
  array (
    'width' => '40%',
    'label' => 'LBL_LIST_NAME',
    'link' => true,
    'default' => true,
    'name' => 'name',
  ),
  'sphr_object_messages_name' => 
  array (
    'type' => 'relate',
    'link' => 'sphr_objectcosib_messages',
    'label' => 'LBL_SPHR_OBJECT_COSIB_MESSAGES_FROM_SPHR_OBJECT_TITLE',
    'width' => '10%',
    'default' => true,
  ),
  'date_modified' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_MODIFIED',
    'name' => 'date_modified',
    'default' => false,
  ),
  'created_by' => 
  array (
    'width' => '8%',
    'label' => 'LBL_CREATED',
    'name' => 'created_by',
    'default' => false,
  ),
  'description' => 
  array (
    'type' => 'text',
    'label' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '10%',
    'default' => false,
  ),
);
