<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once('include/MVC/View/views/view.edit.php');

class AccountsViewEdit extends ViewEdit {
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
		echo '<script type="text/javascript">var agents_list=',json_encode($this->bean->get_account_agents_list(1)),';</script>';
		echo '<script language="javascript" >',file_get_contents('custom/modules/Accounts/javascript/account_agents_manage.js'),'</script>';

		if($_REQUEST['to_pdf']==true)     //for subpanel without process()
			$this->manager->process();

		echo '<script language="javascript" >',file_get_contents('custom/include/javascript/country_region_city.js'),'</script>';
		echo '<script>RegionCity.init(\'country_c\',\'region_c\',\'city_c\')</script>';
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
