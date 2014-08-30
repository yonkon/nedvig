<?php
$module_name = 'Cosib_postsale';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'cosib_postshr_client_name' => 
      array (
        'type' => 'relate',
        'link' => 'cosib_postsle_sphr_client',
        'label' => 'LBL_COSIB_POSTSALE_SPHR_CLIENT_FROM_SPHR_CLIENT_TITLE',
        'width' => '10%',
        'default' => true,
        'name' => 'cosib_postshr_client_name',
      ),
      'cosib_postshr_object_name' => 
      array (
        'type' => 'relate',
        'link' => 'cosib_postsle_sphr_object',
        'label' => 'LBL_COSIB_POSTSALE_SPHR_OBJECT_FROM_SPHR_OBJECT_TITLE',
        'width' => '10%',
        'default' => true,
        'name' => 'cosib_postshr_object_name',
      ),
      'assigned_user_name' => 
      array (
        'link' => 'assigned_user_link',
        'type' => 'relate',
        'studio' => 'visible',
        'label' => 'LBL_ASSIGNED_TO_NAME',
        'width' => '10%',
        'default' => true,
        'name' => 'assigned_user_name',
      ),
      'date_entered' => 
      array (
        'type' => 'datetime',
        'label' => 'LBL_DATE_ENTERED',
        'width' => '10%',
        'default' => true,
        'name' => 'date_entered',
      ),
    ),
    'advanced_search' => 
    array (
      'cosib_postshr_client_name' => 
      array (
        'type' => 'relate',
        'link' => 'cosib_postsle_sphr_client',
        'label' => 'LBL_COSIB_POSTSALE_SPHR_CLIENT_FROM_SPHR_CLIENT_TITLE',
        'width' => '10%',
        'default' => true,
        'name' => 'cosib_postshr_client_name',
      ),
      'cosib_postshr_object_name' => 
      array (
        'type' => 'relate',
        'link' => 'cosib_postsle_sphr_object',
        'label' => 'LBL_COSIB_POSTSALE_SPHR_OBJECT_FROM_SPHR_OBJECT_TITLE',
        'width' => '10%',
        'default' => true,
        'name' => 'cosib_postshr_object_name',
      ),
      'keys_storing_c' => 
      array (
        'type' => 'bool',
        'default' => true,
        'label' => 'LBL_KEYS_STORING',
        'width' => '10%',
        'name' => 'keys_storing_c',
      ),
      'taxes_c' => 
      array (
        'type' => 'bool',
        'default' => true,
        'label' => 'LBL_TAXES',
        'width' => '10%',
        'name' => 'taxes_c',
      ),
      'periodic_visit_c' => 
      array (
        'type' => 'bool',
        'default' => true,
        'label' => 'LBL_PERIODIC_VISIT',
        'width' => '10%',
        'name' => 'periodic_visit_c',
      ),
      'date_periodic_visit_c' => 
      array (
        'type' => 'datetimecombo',
        'default' => true,
        'label' => 'LBL_DATE_PERIODIC_VISIT_C',
        'width' => '10%',
        'name' => 'date_periodic_visit_c',
      ),
      'noplan_visit_c' => 
      array (
        'type' => 'bool',
        'default' => true,
        'label' => 'LBL_NOPLAN_VISIT',
        'width' => '10%',
        'name' => 'noplan_visit_c',
      ),
      'date_noplan_visit_c' => 
      array (
        'type' => 'datetimecombo',
        'default' => true,
        'label' => 'LBL_DATE_NOPLAN_VISIT_C',
        'width' => '10%',
        'name' => 'date_noplan_visit_c',
      ),
      'date_visit_c' => 
      array (
        'type' => 'datetimecombo',
        'default' => true,
        'label' => 'LBL_DATE_VISIT',
        'width' => '10%',
        'name' => 'date_visit_c',
      ),
      'mail_service_c' => 
      array (
        'type' => 'bool',
        'default' => true,
        'label' => 'LBL_MAIL_SERVICE',
        'width' => '10%',
        'name' => 'mail_service_c',
      ),
      'preparation_realty_c' => 
      array (
        'type' => 'bool',
        'default' => true,
        'label' => 'LBL_PREPARATION_REALTY',
        'width' => '10%',
        'name' => 'preparation_realty_c',
      ),
      'loss_c' => 
      array (
        'type' => 'bool',
        'default' => true,
        'label' => 'LBL_LOSS',
        'width' => '10%',
        'name' => 'loss_c',
      ),
      'help_client_c' => 
      array (
        'type' => 'bool',
        'default' => true,
        'label' => 'LBL_HELP_CLIENT',
        'width' => '10%',
        'name' => 'help_client_c',
      ),
      'transfer_c' => 
      array (
        'type' => 'bool',
        'default' => true,
        'label' => 'LBL_TRANSFER',
        'width' => '10%',
        'name' => 'transfer_c',
      ),
      'transfer_date_c' => 
      array (
        'type' => 'date',
        'default' => true,
        'label' => 'LBL_TRANSFER_DATE',
        'width' => '10%',
        'name' => 'transfer_date_c',
      ),
      'message_client_c' => 
      array (
        'type' => 'text',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_MESSAGE_CLIENT_C ',
        'sortable' => false,
        'width' => '10%',
        'name' => 'message_client_c',
      ),
      'another_c' => 
      array (
        'type' => 'text',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_ANOTHER',
        'sortable' => false,
        'width' => '10%',
        'name' => 'another_c',
      ),
      'description' => 
      array (
        'type' => 'text',
        'studio' => 'visible',
        'label' => 'LBL_DESCRIPTION',
        'sortable' => false,
        'width' => '10%',
        'default' => true,
        'name' => 'description',
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
