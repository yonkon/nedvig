<?php
$popupMeta = array (
    'moduleMain' => 'cosib_messages',
    'varName' => 'cosib_messages',
    'orderBy' => 'cosib_messages.name',
    'whereClauses' => array (
  'name' => 'cosib_messages.name',
  'sphr_client_messages_name' => 'cosib_messages.sphr_client_messages_name',
  'sphr_object_messages_name' => 'cosib_messages.sphr_object_messages_name',
),
    'searchInputs' => array (
  1 => 'name',
  4 => 'sphr_client_messages_name',
  5 => 'sphr_object_messages_name',
),
    'searchdefs' => array (
  'name' => 
  array (
    'name' => 'name',
    'width' => '10%',
  ),
  'sphr_client_messages_name' => 
  array (
    'type' => 'relate',
    'link' => 'sphr_clientcosib_messages',
    'label' => 'LBL_SPHR_CLIENT_COSIB_MESSAGES_FROM_SPHR_CLIENT_TITLE',
    'width' => '10%',
    'name' => 'sphr_client_messages_name',
  ),
  'sphr_object_messages_name' => 
  array (
    'type' => 'relate',
    'link' => 'sphr_objectcosib_messages',
    'label' => 'LBL_SPHR_OBJECT_COSIB_MESSAGES_FROM_SPHR_OBJECT_TITLE',
    'width' => '10%',
    'name' => 'sphr_object_messages_name',
  ),
),
    'listviewdefs' => array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
    'name' => 'name',
  ),
  'SPHR_CLIENT_MESSAGES_NAME' => 
  array (
    'type' => 'relate',
    'link' => 'sphr_clientcosib_messages',
    'label' => 'LBL_SPHR_CLIENT_COSIB_MESSAGES_FROM_SPHR_CLIENT_TITLE',
    'width' => '10%',
    'default' => true,
    'name' => 'sphr_client_messages_name',
  ),
  'SPHR_OBJECT_MESSAGES_NAME' => 
  array (
    'type' => 'relate',
    'link' => 'sphr_objectcosib_messages',
    'label' => 'LBL_SPHR_OBJECT_COSIB_MESSAGES_FROM_SPHR_OBJECT_TITLE',
    'width' => '10%',
    'default' => true,
    'name' => 'sphr_object_messages_name',
  ),
),
);
