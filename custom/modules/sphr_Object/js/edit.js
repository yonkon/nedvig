$(document).ready(function(){
    $("body").find("input").click(function(){
		val = $(this).val();
		if(val == "Сохранить"){
			var url = "index.php?module=sphr_Object&save_c=f0010b711457fa4bfa543bc3af31d40a_save";
			var html = $.ajax({
                url: url,
                async: false
            }).responseText;
		}		
	});	


	$("#country").change(function(){
        var res;	
		var val = $(this).val();
		var url = "index.php?module=sphr_Object&ajax="+val+"&key=f0010b711457fa4bfa543bc3af31d40a";
		$.get(url,{},function(res){
		    if(res){
			    res=res.split(",");
			    select = "<select name=\"province_select_c\" id=\"province_select_c\">";
			    $.each(res, function(key, value) {
				    value = value.split(":");
				    select += "<option label="+value[1]+" value="+value[0]+">"+value[1]+"</option>";
	            });
			    select += "</select>";
			
			}else{
			    select = "<select name=\"province_select_c\" id=\"province_select_c\">";
		        select += "<option label=\"Любая\" value=\"0\" selected>Любая</option>";
		        select += "</select>";
			}
			$("#province_select_c_label").next().empty();
			$("#province_select_c_label").next().append(select);
			
		});	
		select = "<select name=\"coast_select_c\" id=\"coast_select_c\">";
		select += "<option label=\"Любое\" value=\"0_0\" selected>Любое</option>";
		select += "</select>";
		$("#coast_select_c_label").next().empty();
		$("#coast_select_c_label").next().append(select);
	});
			
			
	$("#province_select_c").live("change", function(){
		var val = $(this).val();
		var country = $("#country").val();
		var url = "index.php?module=sphr_Object&ajax="+val+"&country="+country+"&key=f0010b711457fa4bfa543bc3af31d40a";
				
		$.get(url,{},function(res){
			res=res.split(",");
			select = "<select name=\"coast_select_c\" id=\"coast_select_c\">";
			$.each(res, function(key, value) {
				value = value.split(":");
				select += "<option label="+value[1]+" value="+value[0]+">"+value[1]+"</option>";
	        });
			select += "</select>";
			$("#coast_select_c_label").next().empty();
			$("#coast_select_c_label").next().append(select);
        });
    });
});