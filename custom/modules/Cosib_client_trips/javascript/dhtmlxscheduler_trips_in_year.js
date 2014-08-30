//for calculate an display count of trips in day in year view;
 scheduler.clients_trips = new Object();
 scheduler.clients_trips.init = true;//first load trips data from server
 scheduler.clients_trips.mode = 'year';
 scheduler.clients_trips.date_count = new Object();		//information about count of trips  per day 
 //make key for scheduler.clients_trips.date_count
 scheduler.clients_trips.date_to_key = function(date){
	 key = date.getFullYear()+"/";
	 key = key + ((date.getMonth()<9)?"0"+(date.getMonth()+1):(date.getMonth()+1))+"/";
	 key = key + ((date.getDate()<10)?"0"+date.getDate():date.getDate());
	 return key;
 };
 //check days scheduler.clients_trips.date_count for 1 trip
scheduler.clients_trips.update = function(start_date,end_date){
	idate = start_date;
	day=24*60*60*1000;
	idate.setHours(0,1,0);	
	while(idate<=end_date){				
			key = this.date_to_key(idate);				
			if(!scheduler.clients_trips.date_count[key]){
			 scheduler.clients_trips.date_count[key]=1;
			}else scheduler.clients_trips.date_count[key]++;			
			idate= new Date(idate.valueOf()+day);
		  }			  
 }	
 //display information about count of trips for every day in scheduler.clients_trips.date_count
 scheduler.clients_trips.show = function (){
	for (d in scheduler.clients_trips.date_count){	   
		   if (scheduler.clients_trips.date_count[d]>1){
				jQuery("div[date='"+d+"']").prepend("<span style='font-size:14px; color:red; font-weight:600; margin-right: 9px;'>"+scheduler.clients_trips.date_count[d]+"</span>");
		   }
		}		
 } 
//when change calendar view need load or display information
 scheduler.attachEvent("onViewChange", function (mode , date){        		
		if(!scheduler.clients_trips.init){
			scheduler.load("index.php?module=Cosib_client_trips&action=LoadCalendarData&to_pdf=true","json");			
		}		
		else{
			scheduler.clients_trips.init=false;		   		
		};
		if (mode == scheduler.clients_trips.mode) {
				scheduler.clients_trips.show();
		};					
});
//read information about trips after loading from server
scheduler.attachEvent("onXLE", function(){
	var evs = scheduler.getEvents(scheduler.getState().min_date,scheduler.getState().max_date);	 
     for (var i=0; i<evs.length; i++){          
		scheduler.clients_trips.update(evs[i].start_date,evs[i].end_date);		  
	  }
	scheduler.clients_trips.show();	 
});


