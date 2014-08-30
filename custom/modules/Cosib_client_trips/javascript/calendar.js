function init() {

	scheduler.config.readonly = true;
	scheduler.config.drag_resize = true; 
	scheduler.config.multi_day = true;	
	scheduler.config.xml_date="%Y-%m-%d %H:%i";
	scheduler.config.show_loading=true;		

	scheduler.init('scheduler_here',new Date(),"year");	
	scheduler.setLoadMode("year");
	
	scheduler.load("index.php?module=Cosib_client_trips&action=LoadCalendarData&to_pdf=true","json");
	
	scheduler.templates.tooltip_text = function(start,end,event){
		return event.details;
	}
	scheduler.attachEvent("onMouseMove", function (event_id, native_event_object){
       if(event_id!=null){
			tab=jQuery("div[class='dhx_cal_tab active']");
			
			switch (tab.attr('name')) {
				case "//month_tab": {
					old_ev_style= new Object();		
					ev=jQuery('div:[event_id='+event_id+']');
					old_ev_style['overflow']='hidden';
					old_ev_style['z-index']='auto';		
					old_ev_style['height']='13px';
					old_ev_style['width']=jQuery('div.dhx_month_body').width();			
					ev.css({'z-index':20,'height':'auto','width':'auto'}).mouseleave(function(){ev.css(old_ev_style);});
					break;
				}
				case "week_tab":{
				   
					break;
				}
		  
		 

		  
		}
	   }
  });
  
	jQuery('div#main').css('height','1100px');
}



jQuery(function(){ init();});