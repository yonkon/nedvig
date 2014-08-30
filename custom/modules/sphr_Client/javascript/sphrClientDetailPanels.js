function addShowHide(panel,table){
        var panellabel='LBL_DETAILVIEW_PANEL'+panel;
		var tablelabel='detailpanel_'+table;
		var imglabel='link_show_panel_'+panel;
    	$('div#'+panellabel+' > h4:first').prepend('<a  href="javascript:void(0)"><img id="'+imglabel+'" width="8" height="8" border="0  alt="Показать" src="themes/Sugar5/images/advanced_search.gif"></a>');
		$('div#'+panellabel+' > h4 > a:first').click(function(){      
						$('table#'+tablelabel).toggle();
						img=$('img#link_show_panel_'+panel);
						alt=src=img.attr('alt');
					    alt=(alt=='Показать')?"Скрыть":'Показать';
						img.attr('alt',alt);
						src=img.attr('src');
						src=(src.indexOf("advanced_search.gif")>=0)?"themes/Sugar5/images/basic_search.gif":"themes/Sugar5/images/advanced_search.gif";
						img.attr('src',src);
		});
		$('table#'+tablelabel).hide();	
}
jQuery(function($){
	addShowHide(7,2);
	addShowHide(8,3);

});