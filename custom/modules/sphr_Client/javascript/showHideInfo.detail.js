toggleClientPanel = function(number){
		var button=$('div#LBL_DETAILVIEW_PANEL'+number+' h4 button');
		if (button.html()=='+'){
			button.html('-');
			$('div#LBL_DETAILVIEW_PANEL'+number+' table').show();
		} else{
			button.html('+');
			$('div#LBL_DETAILVIEW_PANEL'+number+' table').hide();
		}		
	}
toggleClientPanelInit=function(number){
	$('div#LBL_DETAILVIEW_PANEL'+number+' table').hide();
	button = '<button type="button"  style="margin-left:7px;">+</button>'
	$('div#LBL_DETAILVIEW_PANEL'+number+' h4').append(button);
	$('div#LBL_DETAILVIEW_PANEL'+number+' h4 button').click(function(){
		toggleClientPanel(number);
	});	
}

