function toggleVisibleFields(field) {
	if(field) {
		var value;

		if(field.type == 'checkbox') {
			value = (field.checked) ? 1 : 0;
		} else if(field.type == 'select-one' || field.type == 'select-multiple') {
			value = field.value;
		} else if(field.type == 'text') {
			value = (field.value == '') ? 0 : 1;
		}
		
		for(target in visibileFieldsDefs[field.name][value]) {		
			var targetField = document.getElementById(target);
			var targetLabel = document.getElementById(target + '_label');
			//for date
			var targetTrigger = document.getElementById(target + '_trigger');
			//datetime
			var targetDate = document.getElementById(target + '_date');
			var targetTimeSection = document.getElementById(target + '_time_section');
			//relate
			var targetRelateClr = document.getElementById('btn_clr_'+target);
			var targetRelate = document.getElementById('btn_'+target);
			

			if(visibileFieldsDefs[field.name][value][target]['visible'] == 1) {
				targetField.style.display = 'inline';
				targetField.style.visibility = 'visible';
				targetLabel.style.display = 'inline';
				targetLabel.style.visibility = 'visible';
				if(targetTrigger!=null) targetTrigger.style.visibility = 'visible';
				if(targetDate!=null) targetDate.style.visibility = 'visible';
				if(targetTimeSection!=null) targetTimeSection.style.visibility = 'visible';
				if(targetRelate!=null) targetRelate.style.visibility = 'visible';
				if(targetRelateClr!=null) targetRelateClr.style.visibility = 'visible';
			} else {
				targetField.style.display = 'inline';
				targetField.style.visibility = 'hidden';
				targetLabel.style.display = 'inline';
				targetLabel.style.visibility = 'hidden';
				if(targetTrigger!=null) targetTrigger.style.visibility = 'hidden';
				if(targetDate!=null) targetDate.style.visibility = 'hidden';
				if(targetTimeSection!=null) targetTimeSection.style.visibility = 'hidden';
				if(targetRelate!=null) targetRelate.style.visibility = 'hidden';
				if(targetRelateClr!=null) targetRelateClr.style.visibility = 'hidden';
			}
		}
	}
}
