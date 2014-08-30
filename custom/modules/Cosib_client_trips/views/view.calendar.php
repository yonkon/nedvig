<?php
require_once('include/MVC/View/SugarView.php');

class Cosib_client_tripsViewCalendar extends SugarView {

	public function __construct() {

		parent::SugarView();

	}
    function preDisplay() {

       $this->dv->tpl = 'custom/modules/Cosib_client_trips/tpl/ViewCalendar.html';

	}
	function display() {
	    // init calendar;
	    echo file_get_contents('custom/modules/Cosib_client_trips/tpl/InitCalendar.html');

		parent::display();
		$this->ss->display($this->dv->tpl);


	}

}

?>


