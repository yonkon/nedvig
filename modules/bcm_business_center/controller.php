<?php
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
 
 Leads -> a001_client
 Prospects -> Leads
 ********************************************************************************/
class bcm_business_centerController extends SugarController{
	function bcm_business_centerController(){
		parent::SugarController();
	}
	
	
	function post_save()
	{
		$db = DBManagerFactory::getInstance();
		
		// действия, относящиеся к телефонам ===========================================================================================================
		
		if (isset($this->bean->id))
		{
	        $query_phones_delete = "DELETE FROM bcm_business_center_phone_c WHERE bcm_business_center_id = '".$this->bean->id."'";
	        $result_phones_delete = $db->query($query_phones_delete, true);
    	}
		
    	$ar_phones_count = isset($_REQUEST['ar_phones_count']) ? $_REQUEST['ar_phones_count'] : 0;
    	$phone_count = 0;
    	$i = 0;
    	
    	while ($phone_count < $ar_phones_count)
    	{
	        if (isset($_REQUEST['phone'.$i])) 
	        {
	            $phone_id = create_guid();
	            
	        	$query_phone_insert = "INSERT INTO bcm_business_center_phone_c VALUES ('".$phone_id."', '".$_REQUEST['phone'.$i]."', '".$this->bean->id."')";
	        	$result_phone_insert = $db->query($query_phone_insert, true);
	    
	            $phone_count++;
	        }
	        $i++;
    	}
    	
    	// ============================================================================================================================================
    	

		parent::post_save();
	}
}
?>