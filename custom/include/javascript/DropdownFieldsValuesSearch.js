function updateDropdownFieldsValues(field,searchtype) {
	fieldKey = field.id.substr(0,field.id.indexOf(searchtype)); 
	first=true;
optClear=new Object()	;
	for (i=0;i<field.options.length;i++){
		if(field.options[i].selected){		
			for(targetFieldName in updateDropdownFieldsValuesDefs[fieldKey][field.options[i].value]) {		
				var targetField = document.getElementById(targetFieldName+searchtype);				
				 for(g=0;g<targetField.options.length;g++)	{	
					if(!optClear[targetFieldName]) {
						targetField.options[g].selected=false;						
					}			 
				   if(targetField.options[g].value == updateDropdownFieldsValuesDefs[fieldKey][field.options[i].value][targetFieldName]) targetField.options[g].selected=true;
				}
				optClear[targetFieldName]=true;
			}
		}
	}
}
function initSearchFieldsValues(fieldName,searchtype,flagInit){
      find=0;
     if( searchtype == '' ){
		if( find = $("select[name^="+fieldName+"_advanced"+"]").length > 0 ) searchtype = '_advanced';
		else if( find = $("select[name^="+fieldName+"_basic"+"]").length > 0 ) searchtype = '_basic';		
	 } else{
	    find = $("select[name^="+fieldName+searchtype+"]").length ;	 }
		
	 if (searchtype !=''&&find!=0){		 
		 if (flagInit){
			  updateDropdownFieldsValues($("select[name^="+fieldName+searchtype+"]").attr("id",fieldName+searchtype).change(function(){updateDropdownFieldsValues(this,searchtype);})[0],searchtype);		  
		 } else{
			   $("select[name^="+fieldName+searchtype+"]").attr("id",fieldName+searchtype);			  
		 };  
	 } 
	
}