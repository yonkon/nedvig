<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once('include/MVC/View/views/view.edit.php');

class cosib_queriesViewEdit extends ViewEdit {
	private $manager;

    function __construct(){     	$this->useForSubpanel = true;
	     parent::ViewEdit();    }
    function init($bean = null, $view_object_map = array()) {
		parent::init($bean, $view_object_map);

		$this->init_menager();
    }

	function display() {

        if($_REQUEST['to_pdf']==true) //for subpanel without process()
	    	$this->init_menager();

		$this->manager->display();
		$this->ev->process();

		echo $this->ev->display();

		if($_REQUEST['to_pdf']==true)     //for subpanel without process()
			$this->manager->process();
		echo "
		   	<script>
			$('select#settlement_c').change(function() {
				if ( $(this).val()!=''){
	                $('select#province_c option:selected').attr('selected',false);
	             	$('select#coast_c option:selected').attr('selected',false);
	                $('select#settlement_c option:selected').each(function(jj){
	                	val= this.value.substr(0,this.value.lastIndexOf('_'));

	                	$('select#province_c option[value^=\"'+val+'\"]').attr('selected','selected');
	                	$('select#coast_c option[value^=\"'+val+'\"]').attr('selected','selected');
	                });

				}
			});
			</script>
			";
	}

	function process() {
		parent::process();
		$this->manager->process();
	}
	function init_menager(){		require_once('custom/include/utils/DevToolKitManager.php');
		$this->manager = new DevToolKitManager($this);
	}
}
?>
