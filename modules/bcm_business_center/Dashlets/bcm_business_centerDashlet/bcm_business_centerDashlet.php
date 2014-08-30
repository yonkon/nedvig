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

 * Description:  Defines the English language pack for the base application.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/

require_once('include/Dashlets/DashletGeneric.php');
require_once('modules/bcm_business_center/bcm_business_center.php');

class bcm_business_centerDashlet extends DashletGeneric { 
    function bcm_business_centerDashlet($id, $def = null) {
		global $current_user, $app_strings;
		require('modules/bcm_business_center/metadata/dashletviewdefs.php');

        parent::DashletGeneric($id, $def);

        if(empty($def['title'])) $this->title = translate('LBL_HOMEPAGE_TITLE', 'bcm_business_center');

        $this->displayTpl = 'modules/bcm_business_center/Dashlets/bcm_business_centerDashlet/tpls/DashletGenericDisplayBC.tpl';
        
        $this->searchFields = $dashletData['bcm_business_centerDashlet']['searchFields'];
        $this->columns = $dashletData['bcm_business_centerDashlet']['columns'];

        
        $this->seedBean = new bcm_business_center();        
    }
    
    
    
    function process($lvsParams = array()) {
    	$db = DBManagerFactory::getInstance();
    	
        $currentSearchFields = array();
        $configureView = true; // configure view or regular view
        $query = false;
        $whereArray = array();
        $lvsParams['massupdate'] = false;

        $this->addCustomFields();
        // apply filters
        if(isset($this->filters) || $this->myItemsOnly) {
            $whereArray = $this->buildWhere();
        }

        $this->lvs->export = false;
        $this->lvs->multiSelect = false;
        // columns
        $displayColumns = array();
        if(!empty($this->displayColumns)) { // use user specified columns
        	foreach($this->displayColumns as $name => $val) {
                $displayColumns[strtoupper($val)] = $this->columns[$val];
                $displayColumns[strtoupper($val)]['label'] = trim($displayColumns[strtoupper($val)]['label'], ':');// strip : at the end of headers
            } 
        }
        else if (isset($this->columns)){ 
           // use the default
            foreach($this->columns as $name => $val) {
                if(!empty($val['default']) && $val['default']) {
                    $displayColumns[strtoupper($name)] = $val;
                    $displayColumns[strtoupper($name)]['label'] = trim($displayColumns[strtoupper($name)]['label'], ':');
                }
            }
        }
        $this->lvs->displayColumns = $displayColumns;
        
        // так как не получилось ни при каких обстоятельствах выяснить откуда-же Sugar берет перечень столбцов, то определяем его принудительно тут
        $this->lvs->displayColumns = array (
		        		"NAME" => Array ( "width" => 40,  "label" => "LBL_LIST_NAME", "link" => 1, "default" => 1 ),
		         		"PHONE_C" => Array ( "width" => 50, "label" => "Телефоны", "default" => 1 ), 
	         		);
	         		

        $this->lvs->lvd->setVariableName($this->seedBean->object_name, array());
        $lvdOrderBy = $this->lvs->lvd->getOrderBy(); // has this list been ordered, if not use default
        if(empty($lvdOrderBy['orderBy'])) {
            foreach($displayColumns as $colName => $colParams) {
                if(!empty($colParams['defaultOrderColumn'])) {
                    $lvsParams['overrideOrder'] = true;
                    $lvsParams['orderBy'] = $colName;
                    $lvsParams['sortOrder'] = $colParams['defaultOrderColumn']['sortOrder'];
                }
            }
        }


        if(!empty($this->displayTpl))
        {
        	//MFH BUG #14296
            $where = '';
            if(!empty($whereArray)){
                $where = '(' . implode(') AND (', $whereArray) . ')';
            }            
            $this->lvs->setup($this->seedBean, $this->displayTpl, $where , $lvsParams, 0, $this->displayRows/*, $filterFields*/);
            if(in_array('CREATED_BY', array_keys($displayColumns))) { // handle the created by field
                foreach($this->lvs->data['data'] as $row => $data) {
                    $this->lvs->data['data'][$row]['CREATED_BY'] = get_assigned_user_name($data['CREATED_BY']);
                }
            }
            // assign a baseURL w/ the action set as DisplayDashlet
            foreach($this->lvs->data['pageData']['urls'] as $type => $url) {
            	// awu Replacing action=DisplayDashlet with action=DynamicAction&DynamicAction=DisplayDashlet
                if($type == 'orderBy')
                    $this->lvs->data['pageData']['urls'][$type] = preg_replace('/(action=.*&)/Ui', 'action=DynamicAction&DynamicAction=displayDashlet&', $url);
                else
                    $this->lvs->data['pageData']['urls'][$type] = preg_replace('/(action=.*&)/Ui', 'action=DynamicAction&DynamicAction=displayDashlet&', $url) . '&sugar_body_only=1&id=' . $this->id;
            }

            
            foreach($this->lvs->data['data'] as $row => $data) {
            	
            	$query_phones_list = "SELECT phone FROM bcm_business_center_phone_c WHERE bcm_business_center_id = '".$this->lvs->data['data'][$row]['ID']."'";
            	$result_phones_list = $db->query($query_phones_list, true);
            		
				$rows_phones_list =  $db->getRowCount($result_phones_list);
				
				if ($rows_phones_list == 0) $this->lvs->data['data'][$row]['PHONE_C'] = "";
				else 
				{
					while ($row_phones_list = $db->fetchByAssoc($result_phones_list)) {$this->lvs->data['data'][$row]['PHONE_C'] .= ", ".$row_phones_list["phone"];}
					$this->lvs->data['data'][$row]['PHONE_C'] = substr($this->lvs->data['data'][$row]['PHONE_C'], 2);
				}
           }
            
            
            $this->lvs->ss->assign('dashletId', $this->id);

        }
    }
   
}