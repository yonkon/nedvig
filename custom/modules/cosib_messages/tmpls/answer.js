function  message_answers(id_show_button,id_div_form,id_div_content,id_form){
     this.show_button = document.getElementById(id_show_button);
	 this.div_form = document.getElementById(id_div_form );
	 this.div_content = document.getElementById(id_div_content);
	 this.form = document.getElementById(id_form );	 
	 this.callBackFunction_list = function(data) {
				this.div_content.innerHTML=data.responseText;
				ajaxStatus.hideStatus();
							
	 };
	 this.callBackFunction_save = function(data) {
				this.div_content.innerHTML=data.responseText+this.div_content.innerHTML;
				ajaxStatus.hideStatus();
								
			}
			
     this.load_list = function(){	 
			ajaxStatus.showStatus(SUGAR.language.get("app_strings", "LBL_LOADING"));			
			var cObj = YAHOO.util.Connect.asyncRequest("GET",this.form.action + '&record='+this.form.elements['record'].value, {success: this.callBackFunction_list , failure: this.callBackFunction_list,div_content:this.div_content });			
			return this;
	     	  
	 };
	 
	this.show_hide_form = function (){			
			str= this.show_button.value;
			if( this.div_form.style.display=='none'){
				this.div_form.style.display = 'block';								
				this.show_button.value=str.replace('+','-');
			}else{
				this.div_form.style.display = 'none';				
				this.show_button.value=str.replace('-','+');
			}
			
			
		    return this;
		}
	 this.new_answer = function(){
	   
		
		return this;
	 };	 
	 this.save_form = function(){	  
	     if(this.form.elements['description'].value!='') {
			 ajaxStatus.showStatus(SUGAR.language.get("app_strings", "LBL_LOADING"));			 
			 postData = 'subaction=Save&record='+this.form.elements['record'].value+'&description='+encodeURI(this.form.elements['description'].value);			
			var cObj = YAHOO.util.Connect.asyncRequest("POST",this.form.action, {success: this.callBackFunction_save , failure: this.callBackFunction_save,div_content:this.div_content },postData);
						
			 
	    }
		return this;
	 }
}
var Answers;
jQuery(function ($){
        Answers=new message_answers('show_answer_form','answer_form_div','messages_list','answer_message_form');
		$('#show_answer_form').click(function(){  Answers.show_hide_form(); });
		$('#answer_description_save').click(function(){  Answers.save_form (); });
		$('#detailpanel_2 tbody tr td:gt(1)').remove();
		$('#detailpanel_2 tbody tr td:eq(0)').css('width','1%');
		$('#detailpanel_2 tbody tr td:eq(1)').css('width','99%');
		Answers.load_list();
		
	});