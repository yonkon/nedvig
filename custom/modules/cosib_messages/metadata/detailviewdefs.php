<?php
$module_name = 'cosib_messages';
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
      'maxColumns' => '1',
      'widths' =>
      array (
        0 =>
        array (
          'label' => '12',
          'field' => '30',
        ),
        1 =>
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
          0 =>
          array (
            'name' => 'date_entered',
            'customCode' => '{$fields.date_entered.value} ',
            'label' => 'LBL_DATE_ENTERED',
          ),
          1 => 'description',
        ),
        1 =>
        array (
          0 => 'assigned_user_name',
          1 =>'',
        ),
        2 =>
        array (
          0 =>
          array (
            'name' => 'sphr_client_messages_name',
          ),
          1 =>'',
        ),
        3 =>
        array (
          0 => 'name',
          1 =>'',
        ),
        4 =>
        array (
          0 =>
          array (
            'name' => 'sphr_object_messages_name',
          ),
          1 =>'',
        ),
        5 =>
        array (
          0 => '',
          1 =>'',
        ),
      ),
      'lbl_detailview_panel1' =>
      array (
        0 =>
        array (
          0 =>
          array (
            'customCode' => file_get_contents('custom/modules/cosib_messages/tmpls/answers.html'),

          ),
        ),
      ),
    ),
  ),
);
?>
