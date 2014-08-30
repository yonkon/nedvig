<?php
$viewdefs ['Notes'] =
array (
  'EditView' =>
  array (
    'templateMeta' =>
    array (
      'form' =>
      array (
        'enctype' => 'multipart/form-data',
        'headerTpl' => 'modules/Notes/tpls/EditViewHeader.tpl',
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
      'javascript' => '<script type="text/javascript" src="include/javascript/dashlets.js?s={$SUGAR_VERSION}&c={$JS_CUSTOM_VERSION}"></script>
<script>
function deleteAttachmentCallBack(text)
	{literal} { {/literal}
	if(text == \'true\') {literal} { {/literal}
		document.getElementById(\'new_attachment\').style.display = \'\';
		ajaxStatus.hideStatus();
		document.getElementById(\'old_attachment\').innerHTML = \'\';
	{literal} } {/literal} else {literal} { {/literal}
		document.getElementById(\'new_attachment\').style.display = \'none\';
		ajaxStatus.flashStatus(SUGAR.language.get(\'Notes\', \'ERR_REMOVING_ATTACHMENT\'), 2000);
	{literal} } {/literal}
{literal} } {/literal}
</script>
<script>toggle_portal_flag(); function toggle_portal_flag()  {literal} { {/literal} {$TOGGLE_JS} {literal} } {/literal} </script>
',
    ),
    'panels' =>
    array (
      'lbl_note_information' =>
      array (
        0 =>
        array (
          0 =>  array (
            'name' => 'assigned_user_name',
            'label' => 'LBL_ASSIGNED_TO',
          ),
          1 => 'parent_name',
          2 =>  array (
            'name' => 'filename',
            'customCode' => '<span id=\'new_attachment\' style=\'display:{if !empty($fields.filename.value)}none{/if}\'>
        									 <input name="uploadfile" tabindex="3" type="file" size="30"/>
        									 </span>
											 <span id=\'old_attachment\' style=\'display:{if empty($fields.filename.value)}none{/if}\'>
		 									 <input type=\'hidden\' name=\'deleteAttachment\' value=\'0\'>
		 									 {$fields.filename.value}<input type=\'hidden\' name=\'old_filename\' value=\'{$fields.filename.value}\'/><input type=\'hidden\' name=\'old_id\' value=\'{$fields.id.value}\'/>
											 <input type=\'button\' class=\'button\' value=\'{$APP.LBL_REMOVE}\' onclick=\'ajaxStatus.showStatus(SUGAR.language.get("Notes", "LBL_REMOVING_ATTACHMENT"));this.form.deleteAttachment.value=1;this.form.action.value="EditView";SUGAR.dashlets.postForm(this.form, deleteAttachmentCallBack);this.form.deleteAttachment.value=0;this.form.action.value="";\' >
											 </span>',
          ),
        ),
        1 =>
        array (
          0 =>
          array (
            'name' => 'name',
            'displayParams' =>
            array (
              'size' => 30,
            ),
          ),
          1 =>  array (
            'name' => 'sphr_object_notes_name',
          ),
          2 =>'',
        ),
        2 =>
        array (
          0 => array (
            'name' => 'description',
            'label' => 'LBL_NOTE_STATUS',
          ),
          1 => '',
          2 => '',

        ),
        3 =>
        array (
          0 => '',

          1 =>
          array (
            'name' => 'sphr_client_activities_notes_name',
          ),
        ),/*
        4 =>
        array (
          0 => '',

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
        ), */
      ),
     /* 'LBL_PANEL_ASSIGNMENT' =>
      array (
        0 =>
        array (
          0 => '',

        ),
      ),*/
    ),
  ),
);
?>
