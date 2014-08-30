<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once('include/MVC/View/views/view.detail.php');

class cosib_queriesViewDetail extends ViewDetail {
	private $manager;

    function init($bean = null, $view_object_map = array()) {
		parent::init($bean, $view_object_map);

		require_once('custom/include/utils/DevToolKitManager.php');

		$this->manager = new DevToolKitManager($this);
    }

	function display() {
		$this->manager->display();
		$this->dv->process();

		echo $this->dv->display();
	}

	function process() {
		$this->manager->process();
		parent::process();
	}
}
?>
