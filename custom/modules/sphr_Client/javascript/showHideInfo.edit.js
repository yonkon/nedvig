toggleClientPanel = function(number){
		var button=$('div#LBL_EDITVIEW_PANEL'+number+' h4 button');
		if (button.html()=='+'){
			button.html('-');
			$('div#LBL_EDITVIEW_PANEL'+number+' table tr:gt(0)').show();
		} else{
			button.html('+');
			$('div#LBL_EDITVIEW_PANEL'+number+' table tr:gt(0)').hide();
		}		
	}
toggleClientPanelInit=function(number){
	$('div#LBL_EDITVIEW_PANEL'+number+' table tr:gt(0)').hide();
	button = '<button type="button" style="margin-left:7px;">+</button>'
	$('div#LBL_EDITVIEW_PANEL'+number+' h4').append(button);
	$('div#LBL_EDITVIEW_PANEL'+number+' h4 button').click(function(){
		toggleClientPanel(number);
	});	
}

