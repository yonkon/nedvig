function updateDropdownFields(field,searchtype) {

fieldKey = field.id.substr(0,field.id.indexOf(searchtype)); 
var newDropdownOptions = [];

var begin_opt=0;
var g=0;
key='yes';	
first= new Object();
while(g<field.options.length&&key!=''){
//////
 key=field.value; 
 if(field.options[g].selected || field.value ==''){
   if(field.options[g].selected)  key=field.options[g].value;
		for(targetFieldName in updateDropdownFieldsDefs[fieldKey][key]) {	
		
			if(typeof(defaultValuesDefs) != 'undefined' && defaultValuesDefs[targetFieldName]) {
				var defaultValues = defaultValuesDefs[targetFieldName].split("^,^");				
			}

			var targetField = document.getElementById(targetFieldName+searchtype);
			var newDropdownOptions = SUGAR.language.get('app_list_strings', updateDropdownFieldsDefs[fieldKey][key][targetFieldName]);

			if(!first[targetFieldName]&&targetField.options.length > 0) {
				for(i = targetField.options.length - 1 ; i >= 0; i--) {
					targetField.remove(i);
				}
				first[targetFieldName] = true;
			}

			if(newDropdownOptions != 'undefined') {
				for(i in newDropdownOptions) {
					var selectedOption = false;

					if(defaultValues) {
						for(j = 0; j < defaultValues.length; j++) {
						
							if(defaultValues[j] == i) {
								selectedOption = true;
								break;
							}
						}
					}				
							
					opt = new Option(newDropdownOptions[i], i, selectedOption, selectedOption);
					targetField.options[targetField.options.length] = opt;
				}
			}
		}
	}
/////
	g++;
}
}
function initSearchFields(fieldName,searchtype,flagInit){
      find=0;
     if( searchtype == '' ){
		if( find = $("select[name^="+fieldName+"_advanced"+"]").length > 0 ) searchtype = '_advanced';
		else if( find = $("select[name^="+fieldName+"_basic"+"]").length > 0 ) searchtype = '_basic';		
	 } else{
	    find = $("select[name^="+fieldName+searchtype+"]").length ;	 }
		
	 if (searchtype !=''&&find!=0){		 
		 if (flagInit){		     
			  updateDropdownFields($("select[name^="+fieldName+searchtype+"]").attr("id",fieldName+searchtype).change(function(){updateDropdownFields(this,searchtype);})[0],searchtype);		  
		 } else{
			   $("select[name^="+fieldName+searchtype+"]").attr("id",fieldName+searchtype);			  
		 };  
	 } 
	
}
