<?php
$viewdefs ['Meetings'] =
array (
  'EditView' =>
  array (
    'templateMeta' =>
    array (
      'maxColumns' => '3',
      'form' =>
      array (
        'hidden' =>
        array (
          0 => '<input type="hidden" name="isSaveAndNew" value="false">',
        ),
        'buttons' =>
        array (
          0 =>
          array (
            'customCode' => '<input title="{$APP.LBL_SAVE_BUTTON_TITLE}" accessKey="{$APP.LBL_SAVE_BUTTON_KEY}" class="button primary" onclick="fill_invitees();document.forms[\'EditView\'].action.value=\'Save\'; document.forms[\'EditView\'].return_action.value=\'DetailView\'; {if isset($smarty.request.isDuplicate) && $smarty.request.isDuplicate eq "true"}document.forms[\'EditView\'].return_id.value=\'\'; {/if} formSubmitCheck();"type="button" name="button" value="{$APP.LBL_SAVE_BUTTON_LABEL}">',
          ),
          1 => 'CANCEL',
          2 =>
          array (
            'customCode' => '<input title="{$MOD.LBL_SEND_BUTTON_TITLE}" class="button" onclick="document.forms[\'EditView\'].send_invites.value=\'1\';fill_invitees();document.forms[\'EditView\'].action.value=\'Save\';document.forms[\'EditView\'].return_action.value=\'EditView\';document.forms[\'EditView\'].return_module.value=\'{$smarty.request.return_module}\'; formSubmitCheck();"type="button" name="button" value="{$MOD.LBL_SEND_BUTTON_LABEL}">',
          ),
          3 =>
          array (
            'customCode' => '{if $fields.status.value != "Held"}<input title="{$APP.LBL_CLOSE_AND_CREATE_BUTTON_TITLE}" accessKey="{$APP.LBL_CLOSE_AND_CREATE_BUTTON_KEY}" class="button" onclick="fill_invitees(); document.forms[\'EditView\'].status.value=\'Held\'; document.forms[\'EditView\'].action.value=\'Save\'; document.forms[\'EditView\'].return_module.value=\'Meetings\'; document.forms[\'EditView\'].isDuplicate.value=true; document.forms[\'EditView\'].isSaveAndNew.value=true; document.forms[\'EditView\'].return_action.value=\'EditView\'; document.forms[\'EditView\'].return_id.value=\'{$fields.id.value}\'; formSubmitCheck();"type="button" name="button" value="{$APP.LBL_CLOSE_AND_CREATE_BUTTON_LABEL}">{/if}',
          ),
        ),
        'headerTpl' => 'modules/Meetings/tpls/header.tpl',
        'footerTpl' => 'modules/Meetings/tpls/footer.tpl',
      ),
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
      'javascript' => '<script type="text/javascript" src="include/JSON.js?s={$SUGAR_VERSION}&c={$JS_CUSTOM_VERSION}"></script>
<script type="text/javascript" src="include/jsolait/init.js?s={$SUGAR_VERSION}&c={$JS_CUSTOM_VERSION}"></script>
<script type="text/javascript" src="include/jsolait/lib/urllib.js?s={$SUGAR_VERSION}&c={$JS_CUSTOM_VERSION}"></script>
<script type="text/javascript">{$JSON_CONFIG_JAVASCRIPT}</script>
<script type="text/javascript" src="include/javascript/jsclass_base.js?s={$SUGAR_VERSION}&c={$JS_CUSTOM_VERSION}"></script>
<script type="text/javascript" src="include/javascript/jsclass_async.js?s={$SUGAR_VERSION}&c={$JS_CUSTOM_VERSION}"></script>
<script type="text/javascript" src="modules/Meetings/jsclass_scheduler.js?s={$SUGAR_VERSION}&c={$JS_CUSTOM_VERSION}"></script>
<script>toggle_portal_flag();function toggle_portal_flag()  {ldelim} {$TOGGLE_JS} {rdelim}
function formSubmitCheck(){ldelim}if(check_form(\'EditView\') && isValidDuration()){ldelim}document.forms[\'EditView\'].submit();{rdelim}{rdelim}</script>',
      'useTabs' => false,
    ),
    'panels' =>
    array (
      'lbl_meeting_information' =>
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
            'fields' =>
            array (
              0 =>
              array (
                'name' => 'status',
              ),
            ),
          ),
          2 =>
          array (
            'name' => 'parent_name',
            'label' => 'LBL_LIST_RELATED_TO',
          ),
        ),

        1 =>
         array (
          0 =>
          array (
            'name' => 'type_c',
            'studio' => 'visible',
            'label' => 'LBL_TYPE',
          ),
          1 =>
           array (
            'name' => 'description',
            'comment' => 'Full text of the note',
            'label' => 'LBL_DESCRIPTION',
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
            'name' => 'date_start',
            'type' => 'datetimecombo',
            'displayParams' =>
            array (
              'required' => true,
              'updateCallback' => 'SugarWidgetScheduler.update_time();',
            ),
          ),
          1 => '',
          2 => '',

        ),
        3 =>
        array (
          0 =>
          array (
            'name' => 'duration_hours',
            'label' => 'LBL_DURATION',
            'customCode' => '{literal}<script type="text/javascript">function isValidDuration() { form = document.getElementById(\'EditView\'); if ( form.duration_hours.value + form.duration_minutes.value <= 0 ) { alert(\'{/literal}{$MOD.NOTICE_DURATION_TIME}{literal}\'); return false; } return true; }</script>{/literal}<input name="duration_hours" size="2" maxlength="2" type="text" value="{$fields.duration_hours.value}" onkeyup="SugarWidgetScheduler.update_time();"/>{$fields.duration_minutes.value} {$MOD.LBL_HOURS_MINS}',
          ),
          1 => '',
          2 => '',
        ),
        4 =>
        array (
          0 =>
          array (
            'name' => 'reminder_time',
            'customCode' => '{if $fields.reminder_checked.value == "1"}{assign var="REMINDER_TIME_DISPLAY" value="inline"}{assign var="REMINDER_CHECKED" value="checked"}{else}{assign var="REMINDER_TIME_DISPLAY" value="none"}{assign var="REMINDER_CHECKED" value=""}{/if}<input name="reminder_checked" type="hidden" value="0"><input name="reminder_checked" onclick=\'toggleDisplay("should_remind_list");\' type="checkbox" class="checkbox" value="1" {$REMINDER_CHECKED}><div id="should_remind_list" style="display:{$REMINDER_TIME_DISPLAY}">{$fields.reminder_time.value}</div>',
            'label' => 'LBL_REMINDER',
          ),
          1 => '',
          2 => '',

        ),
        5 =>
        array (
           0 =>
          array (
            'name' => 'location',
            'comment' => 'Meeting location',
            'label' => 'LBL_LOCATION',
          ),
          1 => '',
          2 => '',
        ),
        /*
        6 =>
        array (
          0 =>
          array (
            'name' => 'sphr_deal_activities_meetings_name',
          ),
          1 =>
          array (
            'name' => 'sphr_client_activities_meetings_name',
          ),
        ),
        7 =>
        array (
          0 =>
          array (
            'name' => 'opportunities_activities_meetings_name',
          ),
          1 =>
          array (
            'name' => 'opportuniti_meetings_name',
          ),
        ),
        8 =>
        array (
          0 =>
          array (
            'name' => 'sphr_client_activities_meetings_name',
          ),
          1 =>
          array (
            'name' => 'accounts_activities_meetings_name',
          ),
        ),
        9 =>
        array (
          0 =>
          array (
            'name' => 'accounts_activities_meetings_name',
          ),
          1 =>
          array (
            'name' => 'accounts_activities_meetings_name',
          ),
        ),*/
      ),
      'LBL_PANEL_ASSIGNMENT' =>
      array (
        0 =>
        array (
          0 =>
          array (
            'name' => 'assigned_user_name',
            'label' => 'LBL_ASSIGNED_TO_NAME',
          ),
        ),
      ),
    ),
  ),
);
?>
