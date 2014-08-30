<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once('include/MVC/View/views/view.detail.php');

class AccountsViewDetail extends ViewDetail {
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
        echo '<script type="text/javascript">var agents_list=',json_encode($this->bean->get_account_agents_list(0)),';</script>';
		echo '<script type="text/javascript">',file_get_contents('custom/modules/Accounts/javascript/account_agents_detailview.js'),'</script>';
	}

	function process() {
		$this->manager->process();
		parent::process();
	}
}
?>
