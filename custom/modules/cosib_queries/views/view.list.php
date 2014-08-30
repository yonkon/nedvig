<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once('include/MVC/View/views/view.list.php');

class cosib_queriesViewList extends ViewList {
	private $manager;

    function init($bean = null, $view_object_map = array()) {
		parent::init($bean, $view_object_map);

		require_once('custom/include/utils/DevToolKitManager.php');

		$this->manager = new DevToolKitManager($this);
    }

	function process() {

		parent::process();
	}
	public function display() {
                 //print_r($this->lv->data['data']);
            $this->lv->actionsMenuExtraItems[] = $this->buildTargetList();
            echo '<script>
                function set_return_and_save_targetlist_sphr_clients(popup_reply_data) {
                    var form_name=popup_reply_data.form_name;
                    var name_to_value_array=popup_reply_data.name_to_value_array;
                    var form_index=document.forms.length-1;
                    sugarListView.get_checks();
                    var uids=document.MassUpdate.uid.value;
                    if(uids==\'\'){return false;}
                    for(var the_key in name_to_value_array)
                    {
                            if(the_key==\'toJSON\') {}
                            else
                            {
                                    for(i=form_index;i>=0;i--){
                                            if(form_name==window.document.forms[form_index])
                                            {form_index=i;break;}
                                    }
                                    window.document.forms[form_index].elements[get_element_index(form_index,the_key)].value=name_to_value_array[the_key];
                            }
                    }
                    window.document.forms[form_index].elements[get_element_index(form_index,"return_module")].value=window.document.forms[form_index].elements[get_element_index(form_index,"module")].value;
                    window.document.forms[form_index].elements[get_element_index(form_index,"return_action")].value=\'ListView\';
                    window.document.forms[form_index].elements[get_element_index(form_index,"uids")].value=uids;
                    window.document.forms[form_index].submit();
                }</script>';
		parent::display();
              /*  echo "<script>sphr_client_list = new Object(); ";
                foreach($this->lv->data['data'] as $rec){
                    echo 'sphr_client_list["'.$rec['ID'].'"] = "'.$rec['SPHR_CLIEN735B_CLIENT_IDA'].'"; ';
                    
                }
                echo "alert('",count($this->lv->data['data']),"');";
                echo "</script>";*/
                        
                //print_r($this->lv->data['data']);
                
	}
        protected function buildTargetList() 
	{
        global $app_strings,$mod_strings;
        $current_query_by_page = base64_encode(serialize($_REQUEST));
        
		$js = <<<EOF
            if(sugarListView.get_checks_count() < 1) {
                alert('{$app_strings['LBL_LISTVIEW_NO_SELECTED']}');
                return false;
            }
			if ( document.forms['targetlist_form'] ) {
				var form = document.forms['targetlist_form'];
				form.reset;
			} else
				var form = document.createElement ( 'form' ) ;
			form.setAttribute ( 'name' , 'targetlist_form' );
			form.setAttribute ( 'method' , 'post' ) ;
			form.setAttribute ( 'action' , 'index.php' );
			document.body.appendChild ( form ) ;
			if ( !form.module ) {
			    var input = document.createElement('input');
			    input.setAttribute ( 'name' , 'module' );
			    input.setAttribute ( 'value' , '{$_REQUEST['module']}' );
			    input.setAttribute ( 'type' , 'hidden' );
			    form.appendChild ( input ) ;
			    var input = document.createElement('input');
			    input.setAttribute ( 'name' , 'action' );
			    input.setAttribute ( 'value' , 'TargetListUpdateClientsOfQueries' );
			    input.setAttribute ( 'type' , 'hidden' );
			    form.appendChild ( input ) ;
			}
			if ( !form.uids ) {
			    var input = document.createElement('input');
			    input.setAttribute ( 'name' , 'uids' );
			    input.setAttribute ( 'type' , 'hidden' );
			    form.appendChild ( input ) ;
			}
			if ( !form.prospect_list ) {
			    var input = document.createElement('input');
			    input.setAttribute ( 'name' , 'prospect_list' );
			    input.setAttribute ( 'type' , 'hidden' );
			    form.appendChild ( input ) ;
			}
			if ( !form.return_module ) {
			    var input = document.createElement('input');
			    input.setAttribute ( 'name' , 'return_module' );
                             input.setAttribute ( 'value' , '{$_REQUEST['module']}' );
			    input.setAttribute ( 'type' , 'hidden' );
			    form.appendChild ( input ) ;
			}
			if ( !form.return_action ) {
			    var input = document.createElement('input');
			    input.setAttribute ( 'name' , 'return_action' );
			    input.setAttribute ( 'type' , 'hidden' );
			    form.appendChild ( input ) ;
			}
			if ( !form.select_entire_list ) {
			    var input = document.createElement('input');
			    input.setAttribute ( 'name' , 'select_entire_list' );
			    input.setAttribute ( 'value', document.MassUpdate.select_entire_list.value);
			    input.setAttribute ( 'type' , 'hidden' );
			    form.appendChild ( input ) ;
			}
			if ( !form.current_query_by_page ) {
			    var input = document.createElement('input');
			    input.setAttribute ( 'name' , 'current_query_by_page' );
			    input.setAttribute ( 'value', '{$current_query_by_page}' );
			    input.setAttribute ( 'type' , 'hidden' );
			    form.appendChild ( input ) ;
			}
			open_popup('ProspectLists','600','400','',true,false,{ 'call_back_function':'set_return_and_save_targetlist','form_name':'targetlist_form','field_to_name_array':{'id':'prospect_list'} } );
EOF;
        $js = str_replace(array("\r","\n"),'',$js);
        return "<a href='#' style='width: 150px' class='menuItem' onmouseover='hiliteItem(this,\"yes\");' onmouseout='unhiliteItem(this);' onclick=\"$js\">{$mod_strings['LBL_ADD_TO_PROSPECT_LIST_BUTTON_LABEL']}</a>";
	}
        
	function processSearchForm() {
	   	parent::processSearchForm();
	   	$this->manager->process();

	   	//при выборе населеного пункта фильтруется список провинций и побережий
	   	echo "
	   	<script>
		$('select#settlement_c_advanced').change(function() {
			if ( $(this).val()!=''){
                $('select#province_c_advanced option:selected').attr('selected',false);
             	$('select#coast_c_advanced option:selected').attr('selected',false);
                $('select#settlement_c_advanced option:selected').each(function(jj){
                	val= this.value.substr(0,this.value.lastIndexOf('_'));

                	$('select#province_c_advanced option[value^=\"'+val+'\"]').attr('selected','selected');
                	$('select#coast_c_advanced option[value^=\"'+val+'\"]').attr('selected','selected');
                });

			}
		});
		</script>
		";
		//-------------------------------------------------------------'


    }
}
?>
