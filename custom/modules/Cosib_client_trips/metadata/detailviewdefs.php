<?php
$module_name = 'Cosib_client_trips';
$viewdefs [$module_name] = 
array (
  'DetailView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'buttons' => 
        array (
          0 => 'EDIT',
          1 => 'DUPLICATE',
          2 => 'DELETE',
        ),
      ),
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'useTabs' => false,
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'cosib_clienhr_client_name',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'status',
            'studio' => 'visible',
            'label' => 'LBL_STATUS',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'date_arrive',
            'label' => 'LBL_DATE_ARRIVE',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'date_departure',
            'label' => 'LBL_DATE_DEPARTURE',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'trip_place',
            'label' => 'LBL_TRIP_PLACE',
          ),
        ),
        5 => 
        array (
          0 => 'name',
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'arrival',
            'label' => 'LBL_ARRIVAL',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'residence',
            'studio' => 'visible',
            'label' => 'LBL_RESIDENCE',
          ),
        ),
        8 => 
        array (
          0 => 'description',
        ),
        9 => 
        array (
          0 => 'assigned_user_name',
        ),
      ),
    ),
  ),
);
?>
