<?php
$module_name = 'cosib_messages';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'date_entered' => 
      array (
        'type' => 'datetime',
        'label' => 'LBL_DATE_ENTERED',
        'width' => '10%',
        'default' => true,
        'name' => 'date_entered',
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
      'sphr_client_messages_name' => 
      array (
        'type' => 'relate',
        'link' => 'sphr_clientcosib_messages',
        'label' => 'LBL_SPHR_CLIENT_COSIB_MESSAGES_FROM_SPHR_CLIENT_TITLE',
        'width' => '10%',
        'default' => true,
        'name' => 'sphr_client_messages_name',
      ),
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'sphr_object_messages_name' => 
      array (
        'type' => 'relate',
        'link' => 'sphr_objectcosib_messages',
        'label' => 'LBL_SPHR_OBJECT_COSIB_MESSAGES_FROM_SPHR_OBJECT_TITLE',
        'width' => '10%',
        'default' => true,
        'name' => 'sphr_object_messages_name',
      ),
    ),
    'advanced_search' => 
    array (
      'date_entered' => 
      array (
        'type' => 'datetime',
        'label' => 'LBL_DATE_ENTERED',
        'width' => '10%',
        'default' => true,
        'name' => 'date_entered',
      ),
      'assigned_user_id' => 
      array (
        'name' => 'assigned_user_id',
        'label' => 'LBL_ASSIGNED_TO',
        'type' => 'enum',
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
      'sphr_client_messages_name' => 
      array (
        'type' => 'relate',
        'link' => 'sphr_clientcosib_messages',
        'label' => 'LBL_SPHR_CLIENT_COSIB_MESSAGES_FROM_SPHR_CLIENT_TITLE',
        'width' => '10%',
        'default' => true,
        'name' => 'sphr_client_messages_name',
      ),
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'sphr_object_messages_name' => 
      array (
        'type' => 'relate',
        'link' => 'sphr_objectcosib_messages',
        'label' => 'LBL_SPHR_OBJECT_COSIB_MESSAGES_FROM_SPHR_OBJECT_TITLE',
        'width' => '10%',
        'default' => true,
        'name' => 'sphr_object_messages_name',
      ),
      'description' => 
      array (
        'type' => 'text',
        'label' => 'LBL_DESCRIPTION',
        'sortable' => false,
        'width' => '10%',
        'default' => true,
        'name' => 'description',
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
