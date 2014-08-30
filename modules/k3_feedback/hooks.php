<?php
//prevents directly accessing this file from a web browser
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');	

class k3_feedback_hooks{
function echoJavaScript($event,$arguments)
{
	if (isset($GLOBALS['k3_feedback_echoJavaScript'])) return; //prevent twice call in after_ui_footer hook
	global $current_language;
	$mod_strings = return_module_language($current_language, 'k3_feedback');
	
	//if ($_REQUEST['module'] == "ModuleBuilder") return; //иначе ломается студия из-за любого вывода в хуке
	if (!empty($_REQUEST['to_pdf'])) return; //выводим, если требуется чистый вывод(ajax запросы) (использует студия)
	if (!empty($_REQUEST['sugar_body_only'])) return; //(использует календарь)
	$action='index.php?module=k3_feedback&action=send&to_pdf=1';
	echo '	
	<div id="feedback">
		<form id="feedback_form" method="POST" action="'.$action.'" enctype="multipart/form-data" target="feedbackAnswerFrame">
		<input type="hidden" name="callback" value="onSend"/>
		<table>
			<tr>
				<td>'.$mod_strings['LBL_SUBJECT'].'&nbsp;</td>
				<td><input type="text" name="feedbackSubject" id="feedbackSubject" size="64"/></td>
			</tr><tr>
				<td>'.$mod_strings['LBL_TEXT'].'&nbsp;</td>
				<td><textarea name="feedbackText" id="feedbackText" cols="60" rows="6"></textarea></td>
			</tr><tr>
				<td>'.$mod_strings['LBL_CONTACT'].'</td>
				<td><textarea name="feedbackContact" id="feedbackContact" cols="60" rows="6"></textarea></td>
			</tr><tr>
				<td>'.$mod_strings['LBL_FILE'].'</td>
				<td>
					<input type="file" name="feedbackFile" id="feedbackFile" size="52"/>	
				</td>
			</tr><tr>
				<td colspan=2>
					<br>
					<input class="button primary" type="submit" value="'.$mod_strings['LBL_SUBMIT'].'" name="feedbackSend" onclick="return checkFeedbackForm();" style="float:right; width:150px"/>
					<input type="reset" value="'.$mod_strings['LBL_RESET'].'" style="float:left; width:150px"/>
				</td>
			</tr>
		</table>
	</div>
	<iframe id="feedbackAnswerFrame" name="feedbackAnswerFrame" style="display: none">  
	</iframe>  
	<script type="text/javascript">
		var feedbackWatchdogInterval;
		var feedbackPanel = new YAHOO.widget.Panel("tcc_pdfPanel",
		{
				width: "500px",	visible : false,
				draggable:true,	modal:true
		});
		feedbackPanel.setBody(document.getElementById("feedback"));
		var loadingMessgPanel = new YAHOO.widget.SimpleDialog("loading",
		{
			width:"400px", close:false,
			modal:true, visible:true, 
			fixedcenter:true, constraintoviewport:true, draggable:false
		});
		function checkFeedbackForm()
		{
			var inputs_names = new Array("feedbackSubject", "feedbackText","feedbackContact");
			var missing_fields = false;
			for (var i=0; i<inputs_names.length; i++)
				if ((document.getElementById(inputs_names[i]) != undefined) && (document.getElementById(inputs_names[i]).value == ""))
				{ missing_fields=true; break; }
			if (missing_fields) { alert("'.$mod_strings['ERR_MISSING_REQUIRED_FIELDS'].'"); return false; }
			showWaitMessage();
			//sendFeeedbackForm();
			feedbackWatchdogInterval = window.setInterval(function(){onSend("'.$mod_strings['ERR_SERVER'].'")}, 30*1000);
			return true;
		}
		
		
		function showWaitMessage()
		{
			loadingMessgPanel.setHeader("'.$mod_strings['LBL_SENDING'].'");
			loadingMessgPanel.setBody(/*SUGAR.language.get("app_strings","LBL_EMAIL_ONE_MOMENT")*/);
			loadingMessgPanel.render(document.body);
			loadingMessgPanel.show();
		}
		function showFeedbackForm()
		{
			feedbackPanel.setHeader("'.$mod_strings['LBL_TITLE'].'");
			feedbackPanel.render(document.body);
			feedbackPanel.center();
			feedbackPanel.show();
		}
		function sendFeeedbackForm()
		{
			YAHOO.util.Connect.setForm("feedback_form", true);
			var uploadHandler = {
			  upload: function(response) {
				onSend(response.responseText);
			  }
			};
			YAHOO.util.Connect.asyncRequest("POST", "'.$action.'", uploadHandler);
		}
		function onSend(answer)
		{
			alert(answer);
			clearInterval(feedbackWatchdogInterval);
			loadingMessgPanel.hide();
			feedbackPanel.hide();
		}
		/*
		var feedback_link = document.getElementById("training_link");
		if (feedback_link != undefined)	
		{
			feedback_link.href = "javascript:void(0)";
			feedback_link.onclick=function() {void(showFeedbackForm());}
		}
		*/
	</script>
	';
	$GLOBALS['k3_feedback_echoJavaScript'] = true;
	}
}
?>
