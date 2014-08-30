function updateDropdownFieldsValues(field) {
	for(targetFieldName in updateDropdownFieldsValuesDefs[field.name][field.value]) {			
		var targetField = document.getElementById(targetFieldName);	
		targetField.value=updateDropdownFieldsValuesDefs[field.name][field.value][targetFieldName];
				
		
	}
}
