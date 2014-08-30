<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once('include/MVC/View/views/view.list.php');

class AccountsViewList extends ViewList {
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
		parent::display();
	}
	function processSearchForm() {
	   	parent::processSearchForm();
	   	$this->manager->process();
	   	echo '<script language="javascript" >',file_get_contents('custom/include/javascript/country_region_city_search.js'),'</script>';
		echo '<script>RegionCity.init(\'country_c\',\'region_c\',\'city_c\',\'advanced\');</script>';


    }
}
?>
