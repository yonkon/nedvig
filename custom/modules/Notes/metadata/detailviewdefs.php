<?php
$viewdefs ['Notes'] =
array (
  'DetailView' =>
  array (
    'templateMeta' =>
    array (
      'maxColumns' => '3',
      'widths' =>
      array (
        0 =>
        array (
          'label' => '11',
          'field' => '23',
        ),
        1 =>
        array (
          'label' => '10',
          'field' => '23',
        ),
        2 =>
        array (
          'label' => '10',
          'field' => '23',
        ),
      ),
      'useTabs' => false,
    ),
    'panels' =>
    array (
      'lbl_note_information' =>
      array (
        0 =>
        array (
          0 => 'assigned_user_name',
          1 =>
          array (
            'name' => 'parent_name',
            'customLabel' => '{sugar_translate label=\'LBL_MODULE_NAME\' module=$fields.parent_type.value}',
          ),
          2 =>
          array (
            'name' => 'filename',
            'type' => 'file',
            'displayParams' =>
            array (
              'id' => 'id',
              'link' => 'filename',
            ),
          ),
        ),
        1 =>
        array (
          0 =>
          array (
            'name' => 'name',
            'label' => 'LBL_SUBJECT',
          ),
          1 =>
          array (
            'name' => 'sphr_object_notes_name',
          ),
          2 => '',
        ),
        2 =>
        array (
          0 =>
          array (
            'name' => 'description',
            'label' => 'LBL_NOTE_STATUS',
          ),
          1 => '',
          2 => '',

        ),
       /* 3 =>
        array (
          0 => '',
          1 =>
          array (
            'name' => 'sphr_client_activities_notes_name',
          ),
        ),
        4 =>
        array (

          1 =>
          array (
            'name' => 'sphr_deal_activities_notes_name',
          ),
        ),
        5 =>
        array (
          0 =>
          array (
            'name' => 'sphr_client_activities_notes_name',
          ),
          1 =>
          array (
            'name' => 'opportunities_activities_notes_name',
          ),
        ),
        6 =>
        array (
          0 =>
          array (
            'name' => 'sphr_client_activities_notes_name',
          ),
          1 =>
          array (
            'name' => 'accounts_activities_notes_name',
          ),
        ),
        7 =>
        array (
          0 =>
          array (
            'name' => 'accounts_activities_notes_name',
          ),
          1 =>
          array (
            'name' => 'accounts_activities_notes_name',
          ),
        ),*/
      ),
      'LBL_PANEL_ASSIGNMENT' =>
      array (
        0 =>
        array (

          0 =>
          array (
            'name' => 'date_modified',
            'label' => 'LBL_DATE_MODIFIED',
            'customCode' => '{$fields.date_modified.value} {$APP.LBL_BY} {$fields.modified_by_name.value}',
          ),
           1 => '',
           2 => '',
        ),
        1 =>
        array (
          0 =>
          array (
            'name' => 'date_entered',
            'customCode' => '{$fields.date_entered.value} {$APP.LBL_BY} {$fields.created_by_name.value}',
          ),
          1 => '',
          2 => '',
        ),
      ),
    ),
  ),
);
?>
