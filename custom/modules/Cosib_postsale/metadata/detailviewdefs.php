<?php
$module_name = 'Cosib_postsale';
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
          'label' => '1',
          'field' => '50',
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
            'name' => 'cosib_postshr_client_name',
          ),
          1 => '',
        ),
        1 =>
        array (
          0 =>
          array (
            'name' => 'cosib_postshr_object_name',
          ),
          1 => '',
        ),
        2 =>
        array (
          0 => 'assigned_user_name',
          1 => '',
        ),
        3 =>
        array (
          0 =>
          array (
            'name' => 'date_entered',
            'customCode' => '{$fields.date_entered.value}',
            'label' => 'LBL_DATE_ENTERED',
          ),
          1 => '',
        ),
      ),
      'lbl_detailview_panel1' =>
      array (
        0 =>
        array (
          0 =>
          array (
            'name' => 'keys_storing_c',
            'label' => 'LBL_KEYS_STORING',
          ),
          1 => '',
        ),
        1 =>
        array (
          0 =>
          array (
            'name' => 'taxes_c',
            'label' => 'LBL_TAXES',
          ),
        ),
        2 =>
        array (
          0 =>
          array (
            'name' => 'periodic_visit_c',
            'label' => 'LBL_PERIODIC_VISIT',
          ),
          1 =>
          array (
            'customCode' => '{if $fields.periodic_visit_c.value==1}
           						{$MOD.LBL_DATE_PERIODIC_VISIT_C}:&nbsp;
                                {$fields.date_periodic_visit_c.value}
            					{/if}'
          ),
        ),
        3 =>
        array (
          0 =>
          array (
            'name' => 'noplan_visit_c',
            'label' => 'LBL_NOPLAN_VISIT',
          ),
          1 =>
          array (
            'customCode' => ' {if $fields.noplan_visit_c.value==1}
            					{$MOD.LBL_DATE_NOPLAN_VISIT_C}:&nbsp;
                                {$fields.date_noplan_visit_c.value}

            					{/if}'
          ),
        ),
        4 =>
        array (
          0 =>
          array (
            'name' => 'date_visit_c',
            'label' => 'LBL_DATE_VISIT',
          ),
          1 => '',
        ),
        5 =>
        array (
          0 =>
          array (
            'name' => 'mail_service_c',
            'label' => 'LBL_MAIL_SERVICE',
          ),
          1 => '',
        ),
        6 =>
        array (
          0 =>
          array (
            'name' => 'preparation_realty_c',
            'label' => 'LBL_PREPARATION_REALTY',
          ),
          1 => '',
        ),
        7 =>
        array (
          0 =>
          array (
            'name' => 'loss_c',
            'label' => 'LBL_LOSS',
          ),
          1 => '',
        ),
        8 =>
        array (
          0 =>
          array (
            'name' => 'help_client_c',
            'label' => 'LBL_HELP_CLIENT',
          ),
          1 => '',
        ),
        9 =>
        array (
          0 =>
          array (
            'name' => 'transfer_c',
            'label' => 'LBL_TRANSFER',
          ),
          1 =>
          array (
             'customCode' => '{if $fields.transfer_c.value==1}
                                {$MOD.LBL_TRANSFER_DATE}:&nbsp;
                                {$fields.transfer_date_c.value}
            					{/if}'
          ),
        ),
        10 =>
        array (
          0 =>
          array (
            'name' => 'message_client_c',
            'studio' => 'visible',
            'label' => 'LBL_MESSAGE_CLIENT_C ',
          ),
          1 => '',
        ),
        11 =>
        array (
          0 =>
          array (
            'name' => 'another_c',
            'studio' => 'visible',
            'label' => 'LBL_ANOTHER',
          ),
          1 => '',
        ),
        12 =>
        array (
          0 => 'description',
          1 => '',
        ),
      ),
    ),
  ),
);
?>
