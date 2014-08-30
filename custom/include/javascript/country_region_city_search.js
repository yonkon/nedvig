//for city,region of country relate
RegionCity = new Object();

RegionCity.init = function(country,region,city,type){
  this.country=country;
  this.region = region;
  this. city =  city; 
  if(type!='')   this.type = '_'+type; 
   else this.type = '';
  jQuery(function($){     
	$('select#'+RegionCity.city+RegionCity.type).change(function(){ RegionCity.CityHandler()});
	$('select#'+RegionCity.region+RegionCity.type).change(function(){RegionCity.RegionHandler()});	
  });  
}
//city onchange
RegionCity.CityHandler = function (){	
	city = document.getElementById(this.city+this.type);
	if (city.value!=''){
		$('select#'+RegionCity.region+RegionCity.type+ ' option:selected').attr('selected',false);
		$('select#'+RegionCity.city+RegionCity.type+ ' option:selected').each(function(i){
			region = this.value.substr(0,this.value.indexOf('_city'));	
			if (region!='')	
			  $('select#'+RegionCity.region+RegionCity.type+ ' option[value="'+region+'"]').attr('selected','selected');
		}) ;
	}	
	
	
}
//region onchange
RegionCity.RegionHandler = function (){	
	 var city = document.getElementById(this.city+this.type);
	
	 if(city.options.length > 0) {
			for(i = city.options.length - 1 ; i >= 0; i--) {
				city.remove(i);
			}
	}
	$('select#'+RegionCity.country+RegionCity.type+ ' option:selected').each(function(ii){
			var city_list = SUGAR.language.get('app_list_strings', updateDropdownFieldsDefs[RegionCity.country][this.value][RegionCity.city]);
			$('select#'+RegionCity.region+RegionCity.type+ ' option:selected').each(function(jj){
				 reg =  this.value;
				
				 if(city_list != 'undefined') { 				
					for(i in city_list) {	
						selectedOption =  false;		
						if (i==''||i.indexOf(reg+'_')>=0){							
							if(!( i == ''&&$('select#'+RegionCity.city+RegionCity.type+ ' option[value=""]').length>0))	{
								opt = new Option(city_list[i], i, selectedOption, selectedOption);						
								city.options[city.options.length] = opt;
							}	
						}
					}
				}
			});
		});
    if(city.options.length==0)	{
		opt = new Option("", "", true, true);
				city.options[city.options.length] = opt;
	}
	 
}