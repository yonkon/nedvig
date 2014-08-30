function save_acounts_agent(name){

}

function init_relate_accounts_agent_detail(name){			
			callBackFunction = function(data){	
				res=eval('('+data.responseText+')');
				result_link="";
				
				if(typeof(res.id)!=='undefined'&&res.id!=null&&res.id!=''&&typeof(res.name)!=='undefined'&&res.name!=null&&res.name!=''){					
					$('span#'+name+'_value').html('<a href="index.php?module=Accounts&action=DetailView&record='+res.id+'">'+res.name+'</a>');
				} else{
					if(typeof(res.name)!=='undefined'&&res.name!=''&&res.name!=null){ 
						$('span#'+name+'_value').html(res.name);
					}
					
				}
				ajaxStatus.hideStatus();
				
			}
			action_url='index.php?module=Accounts&action=RelateAgents&subaction=Detail&to_pdf=true&custom_module='+window[name+'_accounts_agent']['module']+'&idfield_name='+window[name+'_accounts_agent']['idfield_name']+'&id_agent='+window[name+'_accounts_agent']['idfield']+'&module_id='+window[name+'_accounts_agent']['module_id'];
			ajaxStatus.showStatus(SUGAR.language.get("app_strings", "LBL_LOADING"));			
			var cObj = YAHOO.util.Connect.asyncRequest("GET",action_url, {success: callBackFunction , failure: callBackFunction,name:name });			
			return this;
}
function load_accounts_agent_list(name){
			callBackFunction = function(data){	
				sel=document.getElementById(name+'_accounts_agent_id');			 	
				for(opt in sel.options){
					if(sel.options.length > 0) {
						for(i = sel.options.length - 1 ; i >= 0; i--) {
							sel.remove(i);
						}
					}
				}
				new_options=eval('('+data.responseText+')');				
				for (i=0;i<new_options.length;i++){				
				     opt = new Option(new_options[i].name,new_options[i].id, new_options[i].selected, new_options[i].selected);
					 sel.options[sel.options.length] = opt;
				}
				ajaxStatus.hideStatus();
				
			}
			action_url='index.php?module=Accounts&action=RelateAgents&subaction=List&to_pdf=true&custom_module='+window[name+'_accounts_agent']['module']+'&idfield_name='+window[name+'_accounts_agent']['idfield_name']+'&id_agent='+document.getElementById(window[name+'_accounts_agent']['idfield_name']).value+'&module_id='+window[name+'_accounts_agent']['module_id'];
			ajaxStatus.showStatus(SUGAR.language.get("app_strings", "LBL_LOADING"));			
			var cObj = YAHOO.util.Connect.asyncRequest("GET",action_url, {success: callBackFunction , failure: callBackFunction,name:name });			
			return this;
}

function init_relate_accounts_agent(name){
	$('select#'+name+'_accounts_agent_id').click(function(){
		if (document.getElementById(window[name+'_accounts_agent']['idfield_name']).value!=window[name+'_accounts_agent']['idfield']){		 
			window[name+'_accounts_agent']['idfield']=document.getElementById(window[name+'_accounts_agent']['idfield_name']).value; 			
			load_accounts_agent_list(name);
			 
		}
	}).after('<input type="hidden" name="accounts_agents_names[]" value="'+name+'"><input type="hidden" name="'+name+'_field" value="'+name+'">');	
	load_accounts_agent_list(name);
}
