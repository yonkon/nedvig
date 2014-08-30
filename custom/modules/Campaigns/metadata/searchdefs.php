<?php
$searchdefs ['Campaigns'] = 
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
      'start_date' => 
      array (
        'type' => 'date',
        'label' => 'LBL_CAMPAIGN_START_DATE',
        'width' => '10%',
        'default' => true,
        'name' => 'start_date',
      ),
      'end_date' => 
      array (
        'type' => 'date',
        'default' => true,
        'width' => '10%',
        'label' => 'LBL_CAMPAIGN_END_DATE',
        'name' => 'end_date',
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
      'expected_cost' => 
      array (
        'type' => 'currency',
        'label' => 'LBL_CAMPAIGN_EXPECTED_COST',
        'currency_format' => true,
        'width' => '10%',
        'default' => true,
        'name' => 'expected_cost',
      ),
      'actual_cost' => 
      array (
        'type' => 'currency',
        'label' => 'LBL_CAMPAIGN_ACTUAL_COST',
        'currency_format' => true,
        'width' => '10%',
        'default' => true,
        'name' => 'actual_cost',
      ),
      'start_date' => 
      array (
        'name' => 'start_date',
        'type' => 'date',
        'displayParams' => 
        array (
          'showFormats' => true,
        ),
        'default' => true,
        'width' => '10%',
      ),
      'end_date' => 
      array (
        'name' => 'end_date',
        'type' => 'date',
        'displayParams' => 
        array (
          'showFormats' => true,
        ),
        'default' => true,
        'width' => '10%',
      ),
      'phone_in_c' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_PHONE_IN',
        'width' => '10%',
        'name' => 'phone_in_c',
      ),
      'content' => 
      array (
        'type' => 'text',
        'label' => 'LBL_CAMPAIGN_CONTENT',
        'sortable' => false,
        'width' => '10%',
        'default' => true,
        'name' => 'content',
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
