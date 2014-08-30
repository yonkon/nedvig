<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

/*********************************************************************************
 * SugarCRM is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2010 SugarCRM Inc.
 * 
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 * 
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.  See the GNU Affero General Public License for more
 * details.
 * 
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 * 
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 * 
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 * 
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo. If the display of the logo is not reasonably feasible for
 * technical reasons, the Appropriate Legal Notices must display the words
 * "Powered by SugarCRM".
 ********************************************************************************/
/*********************************************************************************

 * Description: This file is used to override the default Meta-data EditView behavior
 * to provide customization specific to the Bugs module.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/

require_once('include/MVC/View/views/view.edit.php');

class bcm_business_centerViewEdit extends ViewEdit {

 	function bcm_business_centerViewEdit(){
 		parent::ViewEdit();
 	}
 	
 	function display() {
 		
 	    $this->ev->process();  
        $admin = new Administration();
        $admin->retrieveSettings();
        
        
        // действия, относящиеся к телефонам ===========================================================================================================
        $ar_phones = array();

        if(isset($this->bean->id)) 
        {
        	$query_phone ="SELECT phone FROM bcm_business_center_phone_c WHERE bcm_business_center_id = '".$this->bean->id."' ORDER BY phone ASC";
        	$result_phone = $this->bean->db->query($query_phone);
            
            $i = 0;
            while(($row = $this->bean->db->fetchByAssoc($result_phone)) != null ) {$ar_phones[$i++] = $row['phone'];}
            
            $this->ss->assign("ar_phones", $ar_phones);
        }
        
        $this->ss->assign("ar_phones_count", count($ar_phones));
        $this->ss->assign("ar_phones_max", count($ar_phones));
        
		
		// ============================================================================================================================================

        echo $this->ev->display($this->showTitle);
 	}
}
?>