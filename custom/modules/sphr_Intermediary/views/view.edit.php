<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once('include/MVC/View/views/view.edit.php');

class sphr_IntermediaryViewEdit extends ViewEdit {

 	function sphr_IntermediaryViewEdit(){
 		parent::ViewEdit();
 	}
 	
 	function display() {
		global $app_list_strings;
 		global $mod_strings; 
		
 	    $this->ev->process();  
        $admin = new Administration();
        $admin->retrieveSettings();
        
        // готовим список кампаний
        $ar_campaigns = array();
        if(isset($this->bean->source)) 
        {
			$query_campaigns ="SELECT id,name,deleted FROM campaigns";
        	$result_campaigns = $this->bean->db->query($query_campaigns);
            
            while(($row = $this->bean->db->fetchByAssoc($result_campaigns)) != null ) 
			{
				if ($row['deleted'] == 1)
				{
					if ((strcmp($row['id'],$this->bean->source))==0) $ar_campaigns [$row['id']] = $row['name'] . $mod_strings['ERR_DELETED']; 
				} else {
					$ar_campaigns [$row['id']] = $row['name']; 
				}
			}
            
            $this->ss->assign("ar_campaigns", $ar_campaigns);
			$this->ss->assign("ar_campaign_id", $this->bean->source);
        }
        
        //====================================================================================================
        echo $this->ev->display($this->showTitle);
 	}
}
?>