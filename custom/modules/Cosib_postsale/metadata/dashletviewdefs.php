<?php
$dashletData['Cosib_postsaleDashlet']['searchFields'] = array (
  'cosib_postshr_client_name' => 
  array (
    'default' => '',
  ),
  'cosib_postshr_object_name' => 
  array (
    'default' => '',
  ),
  'assigned_user_name' => 
  array (
    'default' => '',
  ),
  'description' => 
  array (
    'default' => '',
  ),
  'date_entered' => 
  array (
    'default' => '',
  ),
);
$dashletData['Cosib_postsaleDashlet']['columns'] = array (
  'cosib_postshr_client_name' => 
  array (
    'type' => 'relate',
    'link' => 'cosib_postsle_sphr_client',
    'label' => 'LBL_COSIB_POSTSALE_SPHR_CLIENT_FROM_SPHR_CLIENT_TITLE',
    'width' => '10%',
    'default' => true,
  ),
  'cosib_postshr_object_name' => 
  array (
    'type' => 'relate',
    'link' => 'cosib_postsle_sphr_object',
    'label' => 'LBL_COSIB_POSTSALE_SPHR_OBJECT_FROM_SPHR_OBJECT_TITLE',
    'width' => '10%',
    'default' => true,
  ),
  'assigned_user_name' => 
  array (
    'width' => '8%',
    'label' => 'LBL_LIST_ASSIGNED_USER',
    'name' => 'assigned_user_name',
    'default' => true,
  ),
  'date_entered' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_ENTERED',
    'default' => true,
    'name' => 'date_entered',
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
);
