<?php
$viewdefs ['Tasks'] =
array (
  'QuickCreate' =>
  array (
    'templateMeta' =>
    array (
      'form' =>
      array (
        'hidden' =>
        array (
          0 => '<input type="hidden" name="isSaveAndNew" value="false">',
        ),
        'buttons' =>
        array (
          0 => 'SAVE',
          1 => 'CANCEL',
          2 =>
          array (
            'customCode' => '{if $fields.status.value != "Completed"}<input title="{$APP.LBL_CLOSE_AND_CREATE_BUTTON_TITLE}" accessKey="{$APP.LBL_CLOSE_AND_CREATE_BUTTON_KEY}" class="button" onclick="document.getElementById(\'status\').value=\'Completed\'; this.form.action.value=\'Save\'; this.form.return_module.value=\'Tasks\'; this.form.isDuplicate.value=true; this.form.isSaveAndNew.value=true; this.form.return_action.value=\'EditView\'; this.form.return_id.value=\'{$fields.id.value}\'; return check_form(\'EditView\');" type="submit" name="button" value="{$APP.LBL_CLOSE_AND_CREATE_BUTTON_LABEL}">{/if}',
          ),
        ),
      ),
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
      'default' =>
      array (
       0 =>
        array (
          0 =>
          array (
            'name' => 'name',
            'displayParams' =>
            array (
              'required' => true,
            ),
          ),
          1 =>
          array (
            'name' => 'status',
            'displayParams' =>
            array (
              'required' => true,
            ),
          ),
          2 =>  array (
            'name' => 'parent_name',
            'label' => 'LBL_LIST_RELATED_TO',
          ),
        ),
        1 =>
        array (
          0 =>
          array (
            'name' => 'date_start',
            'type' => 'datetimecombo',
            'displayParams' =>
            array (
              'showNoneCheckbox' => true,
              'showFormats' => true,
            ),
          ),
          1 =>
          array (
            'name' => 'description',
            'displayParams' =>
            array (
              'rows' => 4,
              'cols' => 40,
            ),
          ),
          2 => '',

        ),
        2 =>
        array (
          0 =>
          array (
            'name' => 'date_due',
            'type' => 'datetimecombo',
            'displayParams' =>
            array (
              'showNoneCheckbox' => true,
              'showFormats' => true,
            ),
          ),
          1 => '',
          2 => '',
        ),
        3 =>
        array (
          0 =>
          array (
            'name' => 'priority',
            'displayParams' =>
            array (
              'required' => true,
            ),
          ),
          1 => '',
          2 => '',
        ),
       /* 0 =>
        array (
          0 =>
          array (
            'name' => 'name',
            'displayParams' =>
            array (
              'required' => true,
            ),
          ),
          1 =>
          array (
            'name' => 'status',
            'displayParams' =>
            array (
              'required' => true,
            ),
          ),
        ),
        1 =>
        array (
          0 =>
          array (
            'name' => 'date_due',
            'type' => 'datetimecombo',
            'displayParams' =>
            array (
              'showNoneCheckbox' => true,
              'showFormats' => true,
            ),
          ),
          1 =>
          array (
            'name' => 'parent_name',
            'label' => 'LBL_LIST_RELATED_TO',
          ),
        ),
        2 =>
        array (
          0 =>
          array (
            'name' => 'date_start',
            'type' => 'datetimecombo',
            'displayParams' =>
            array (
              'showNoneCheckbox' => true,
              'showFormats' => true,
            ),
          ),
        ),
        3 =>
        array (
          0 =>
          array (
            'name' => 'priority',
            'displayParams' =>
            array (
              'required' => true,
            ),
          ),
        ),
        4 =>
        array (
          0 =>
          array (
            'name' => 'assigned_user_name',
            'label' => 'LBL_ASSIGNED_TO_NAME',
          ),
        ),
        5 =>
        array (
          0 =>
          array (
            'name' => 'description',
            'displayParams' =>
            array (
              'rows' => 8,
              'cols' => 60,
            ),
          ),
        ),*/
      ),
    ),
  ),
);
?>
