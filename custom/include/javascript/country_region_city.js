//for city,region of country relate
RegionCity = new Object();

RegionCity.init = function(country,region,city){
  this.country=country;
  this.region = region;
  this. city =  city; 
  jQuery(function($){     
	$('select#'+RegionCity.city).change(function(){ RegionCity.CityHandler()});
	$('select#'+RegionCity.region).change(function(){RegionCity.RegionHandler()});	
  });  
}
//city onchange
RegionCity.CityHandler = function (){	
	reg = document.getElementById(this.region);
	city = document.getElementById(this.city);
	
	if(city.value!=''){		
		reg.value = city.value.substr(0,city.value.indexOf('_city'));
	} 
	
}
//region onchange
RegionCity.RegionHandler = function (){
	reg = document.getElementById(this.region).value;
	city = document.getElementById(this.city);
	country = document.getElementById(this.country).value;	
	 city_list = SUGAR.language.get('app_list_strings', updateDropdownFieldsDefs[this.country][country][this.city]);
	 if(city.options.length > 0) {
			for(i = city.options.length - 1 ; i >= 0; i--) {
				city.remove(i);
			}
	}
	 if(city_list != 'undefined') {
		select = false;
		for(i in city_list) {	
			selectedOption =  false;			
			if (i==''||i.indexOf(reg+'_')>=0){
			    
				if (!select){
					if ((i == '' && reg == '')||(i!= '' && reg!= '')) {
						select = true; selectedOption =  true;
					}					
				} 				
				opt = new Option(city_list[i], i, selectedOption, selectedOption);
				city.options[city.options.length] = opt;
			}
		}
	}	
    if(city.options.length==0)	{
		opt = new Option("", "", true, true);
				city.options[city.options.length] = opt;
	}
	 
}