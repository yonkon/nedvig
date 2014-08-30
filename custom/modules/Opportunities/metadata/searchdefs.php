<?php
$searchdefs ['Opportunities'] = 
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
      'discount_apply_c' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_DISCOUNT_APPLY ',
        'width' => '10%',
        'name' => 'discount_apply_c',
      ),
      'status_c' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_STATUS',
        'sortable' => false,
        'width' => '10%',
        'name' => 'status_c',
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
      'discount_apply_c' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_DISCOUNT_APPLY ',
        'width' => '10%',
        'name' => 'discount_apply_c',
      ),
      'status_c' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_STATUS',
        'sortable' => false,
        'width' => '10%',
        'name' => 'status_c',
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
      'sphr_clientrtunities_name' => 
      array (
        'type' => 'relate',
        'link' => 'sphr_client_opportunities',
        'label' => 'LBL_SPHR_CLIENT_OPPORTUNITIES_FROM_SPHR_CLIENT_TITLE',
        'width' => '10%',
        'default' => true,
        'name' => 'sphr_clientrtunities_name',
      ),
      'sphr_objectrtunities_name' => 
      array (
        'type' => 'relate',
        'link' => 'sphr_object_opportunities',
        'label' => 'LBL_SPHR_OBJECT_OPPORTUNITIES_FROM_SPHR_OBJECT_TITLE',
        'width' => '10%',
        'default' => true,
        'name' => 'sphr_objectrtunities_name',
      ),
      'sphr_intermrtunities_name' => 
      array (
        'type' => 'relate',
        'link' => 'sphr_interm_opportunities',
        'label' => 'LBL_SPHR_INTERMEDIARY_OPPORTUNITIES_FROM_SPHR_INTERMEDIARY_TITLE',
        'width' => '10%',
        'default' => true,
        'name' => 'sphr_intermrtunities_name',
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
