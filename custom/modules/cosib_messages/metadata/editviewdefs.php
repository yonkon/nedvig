<?php
$module_name = 'cosib_messages';
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
          'label' => '12',
          'field' => '30',
        ),
         1=>
        array (
          'label' => '12',
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
          0 => 'assigned_user_name',
          1 => 'description',
        ),
        1 =>
        array (
          0 =>
          array (
            'name' => 'sphr_client_messages_name',
          ),
          1 => '',
        ),
        2 =>
        array (
          0 => 'name',
          1 => '',
        ),
        3 =>
        array (
          0 =>
          array (
            'name' => 'sphr_object_messages_name',
          ),
          1 => '',
        ),
        4 =>
        array (
          0 => '',
          1 => '',
        ),
      ),
    ),
  ),
);
?>
