<?php
$module_name = 'Cosib_postsale';
$viewdefs [$module_name] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
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
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => '',
          1 => '',
        ),
        1 => 
        array (
          0 => 'description',
          1 => 
          array (
            'name' => 'cosib_postshr_client_name',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'cosib_postshr_object_name',
          ),
        ),
      ),
    ),
  ),
);
?>
