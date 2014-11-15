$(document).ready(function(){
    var url = "index.php?module=sphr_Object&key=51613c7df66e71829f2db8a6dd856875";
	$.get(url,{},function(res){
		res = res.split(",");
		select = '';
		$.each(res, function(key, value) {     
			value = value.split(":");
			select += "<option label="+value[1]+" value="+value[0]+">"+value[1]+"</option>";
	    });
		$("select[name='coast_select_c_advanced[]']").empty();
		$("select[name='coast_select_c_advanced[]']").append(select);
		
	});
	
	$("select[name='country_advanced[]']").change(function(){
	    val = $(this).val();
	    var url = "index.php?module=sphr_Object&key=51613c7df66e71829f2db8a6dd856875&country="+val;
		$.get(url,{},function(res){
			res=res.split(",");
		    select = '';
			$.each(res, function(key, value) {     
			    value = value.split(":");
			    select += "<option label="+value[1]+" value="+value[0]+">"+value[1]+"</option>";
	        });
			$("select[name='coast_select_c_advanced[]']").empty();
		    $("select[name='coast_select_c_advanced[]']").append(select);
	    });
    });
});