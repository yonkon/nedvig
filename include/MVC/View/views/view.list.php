<?php
/*********************************************************************************
 * SugarCRM is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2011 SugarCRM Inc.
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

require_once('include/MVC/View/SugarView.php');

require_once('include/ListView/ListViewSmarty.php');

require_once('modules/MySettings/StoreQuery.php');
class ViewList extends SugarView{
	var $type ='list';
	var $lv;
	var $searchForm;
	var $use_old_search;
	var $headers;
	var $seed;
	var $params;
	var $listViewDefs;
	var $storeQuery;
	var $where = '';
 	function ViewList(){
 		parent::SugarView();
 	}

 	
 	function oldSearch(){
 		
 	}
 	function newSearch(){
 		
 	}

 	function listViewPrepare(){
        $module = $GLOBALS['module'];
 		/* BEGIN - SECURITY GROUPS */ 
        $metadataFile = null;
        $foundViewDefs = false;
		if(empty($_SESSION['groupLayout'])) {
			//get group ids of current user and check to see if a layout exists for that group
			global $current_user;
			require_once('modules/SecurityGroups/SecurityGroup.php');
			$groupFocus = new SecurityGroup();
			$groupList = $groupFocus->getUserSecurityGroups($current_user->id);
			//reorder by precedence....
		
			foreach($groupList as $groupItem) {
				$GLOBALS['log']->debug("Looking for: ".'custom/modules/' . $this->module . '/metadata/'.$groupItem['id'].'/listviewdefs.php');
				if(file_exists('custom/modules/' . $this->module . '/metadata/'.$groupItem['id'].'/listviewdefs.php')){
					$_SESSION['groupLayout'] = $groupItem['id'];
					$metadataFile = 'custom/modules/' . $this->module . '/metadata/'.$groupItem['id'].'/listviewdefs.php';
					break;
				}			
			}
		} else {
			if(file_exists('custom/modules/' . $this->module . '/metadata/'.$_SESSION['groupLayout'].'/listviewdefs.php')){
				$metadataFile = 'custom/modules/' . $this->module . '/metadata/'.$_SESSION['groupLayout'].'/listviewdefs.php';
			}		
		}
		
 		if(isset($metadataFile)){
 			$foundViewDefs = true;
 		}
 		else {
        $metadataFile = $this->getMetaDataFile();
        }
 		/* END - SECURITY GROUPS */ 
        
        if( !file_exists($metadataFile) )
            sugar_die($GLOBALS['app_strings']['LBL_NO_ACTION'] );
            
        require_once($metadataFile);
        $this->listViewDefs = $listViewDefs;

        if(!empty($this->bean->object_name) && isset($_REQUEST[$module.'2_'.strtoupper($this->bean->object_name).'_offset'])) {//if you click the pagination button, it will poplate the search criteria here
            if(!empty($_REQUEST['current_query_by_page'])) {//The code support multi browser tabs pagination
                $blockVariables = array('mass', 'uid', 'massupdate', 'delete', 'merge', 'selectCount', 'request_data', 'current_query_by_page',$module.'2_'.strtoupper($this->bean->object_name).'_ORDER_BY' );
                if(isset($_REQUEST['lvso'])){
                	$blockVariables[] = 'lvso';
                }
                $current_query_by_page = unserialize(base64_decode($_REQUEST['current_query_by_page']));
                foreach($current_query_by_page as $search_key=>$search_value) {
                    if($search_key != $module.'2_'.strtoupper($this->bean->object_name).'_offset' && !in_array($search_key, $blockVariables)) {
						if (!is_array($search_value)) {
                        	$_REQUEST[$search_key] = $GLOBALS['db']->quoteForEmail($search_value);
						}
                        else {
                    		foreach ($search_value as $key=>&$val) {
                    			$val = $GLOBALS['db']->quoteForEmail($val);
                    		}
                    		$_REQUEST[$search_key] = $search_value;
                        }                        
                    }
                }
            }
        }
        
        if(!empty($_REQUEST['saved_search_select'])) {
            if ($_REQUEST['saved_search_select']=='_none' || !empty($_REQUEST['button'])) {
                $_SESSION['LastSavedView'][$_REQUEST['module']] = '';
                unset($_REQUEST['saved_search_select']);
                unset($_REQUEST['saved_search_select_name']);
                global $current_user;
                //Reset the current display columns to default.
                $current_user->setPreference('ListViewDisplayColumns', array(), 0, $_REQUEST['search_module']);
            }
            else if(empty($_REQUEST['button']) && (empty($_REQUEST['clear_query']) || $_REQUEST['clear_query']!='true')) {
                $this->saved_search = loadBean('SavedSearch');
                $this->saved_search->retrieveSavedSearch($_REQUEST['saved_search_select']);
                $this->saved_search->populateRequest();
            }
        }
        $this->storeQuery = new StoreQuery();
        if(!isset($_REQUEST['query'])){
            $this->storeQuery->loadQuery($this->module);
            $this->storeQuery->populateRequest();
        }else{
            $this->storeQuery->saveFromRequest($this->module);
        }
        
        $this->seed = $this->bean;
        
        $displayColumns = array();
        if(!empty($_REQUEST['displayColumns'])) {
            foreach(explode('|', $_REQUEST['displayColumns']) as $num => $col) {
                if(!empty($this->listViewDefs[$module][$col])) 
                    $displayColumns[$col] = $this->listViewDefs[$module][$col];
            }    
        }
        else {
            foreach($this->listViewDefs[$module] as $col => $this->params) {
                if(!empty($this->params['default']) && $this->params['default'])
                    $displayColumns[$col] = $this->params;
            }
        } 
        $this->params = array('massupdate' => true);
        if(!empty($_REQUEST['orderBy'])) {
            $this->params['orderBy'] = $_REQUEST['orderBy'];
            $this->params['overrideOrder'] = true;
            if(!empty($_REQUEST['sortOrder'])) $this->params['sortOrder'] = $_REQUEST['sortOrder'];
        }
        $this->lv->displayColumns = $displayColumns;

        $this->seed = $this->seed;
        $this->module = $module;
        
        $this->prepareSearchForm();
        
        if(isset($this->options['show_title']) && $this->options['show_title']) {
            $moduleName = isset($this->seed->module_dir) ? $this->seed->module_dir : $GLOBALS['mod_strings']['LBL_MODULE_NAME'];
            echo $this->getModuleTitle(true);
        }
 	}
 	
 	function listViewProcess(){
		$this->processSearchForm();
		$this->lv->searchColumns = $this->searchForm->searchColumns;
		
		if(!$this->headers)
			return;
		if(empty($_REQUEST['search_form_only']) || $_REQUEST['search_form_only'] == false){
			$this->lv->ss->assign("SEARCH",true);
			$this->lv->setup($this->seed, 'include/ListView/ListViewGeneric.tpl', $this->where, $this->params);
			$savedSearchName = empty($_REQUEST['saved_search_select_name']) ? '' : (' - ' . $_REQUEST['saved_search_select_name']);
     /* if (!empty($this->needOrd)) {
        global $db;
        $request = $db->query('SELECT * FRON sphr_client ORDER BY date_entered');
        $fromDB = $db->fetchByAssoc($request);
      }*/
			echo $this->lv->display();
		}
 	}
 	function prepareSearchForm(){
 	$this->searchForm = null;
    
        //search
        $view = 'basic_search';
        if(!empty($_REQUEST['search_form_view']) && $_REQUEST['search_form_view'] == 'advanced_search')
            $view = $_REQUEST['search_form_view'];
        $this->headers = true;
        if(!empty($_REQUEST['search_form_only']) && $_REQUEST['search_form_only'])
            $this->headers = false;
        elseif(!isset($_REQUEST['search_form']) || $_REQUEST['search_form'] != 'false') {
            if(isset($_REQUEST['searchFormTab']) && $_REQUEST['searchFormTab'] == 'advanced_search') {
                $view = 'advanced_search';
            }else {
                $view = 'basic_search';
            }
        }
        
        $this->use_old_search = true;
        if ((file_exists('modules/' . $this->module . '/SearchForm.html')
                && !file_exists('modules/' . $this->module . '/metadata/searchdefs.php'))
            || (file_exists('custom/modules/' . $this->module . '/SearchForm.html')
                && !file_exists('custom/modules/' . $this->module . '/metadata/searchdefs.php'))){
            require_once('include/SearchForm/SearchForm.php');
            $this->searchForm = new SearchForm($this->module, $this->seed);
        }else{
            $this->use_old_search = false;
            require_once('include/SearchForm/SearchForm2.php');
            
            if(file_exists('custom/modules/'.$this->module.'/metadata/metafiles.php')){
                require('custom/modules/'.$this->module.'/metadata/metafiles.php');	
            }elseif(file_exists('modules/'.$this->module.'/metadata/metafiles.php')){
                require('modules/'.$this->module.'/metadata/metafiles.php');
            }
            
/*          if(!empty($metafiles[$this->module]['searchdefs']))
                require_once($metafiles[$this->module]['searchdefs']);
            elseif(file_exists('modules/'.$this->module.'/metadata/searchdefs.php'))
                require_once('modules/'.$this->module.'/metadata/searchdefs.php');
*/

			/* BEGIN - SECURITY GROUPS */ 
			//get group ids of current user and check to see if a layout exists for that group
			global $current_user;
			require_once('modules/SecurityGroups/SecurityGroup.php');
			$groupFocus = new SecurityGroup();
			$groupList = $groupFocus->getUserSecurityGroups($current_user->id);
			//reorder by precedence....

			foreach($groupList as $groupItem) {
				$GLOBALS['log']->debug("Looking for: ".'custom/modules/' . $this->module . '/metadata/'.$groupItem['id'].'/searchdefs.php');
				if(file_exists('custom/modules/' . $this->module . '/metadata/'.$groupItem['id'].'/searchdefs.php')){
					$_SESSION['groupLayout'] = $groupItem['id'];
					$metadataFile = 'custom/modules/' . $this->module . '/metadata/'.$groupItem['id'].'/searchdefs.php';
				}			
			}

			if(isset($metadataFile)){
				$foundViewDefs = true;
                require_once($metadataFile);
			}
			else
			/* END - SECURITY GROUPS */     
			if (file_exists('custom/modules/'.$this->module.'/metadata/searchdefs.php'))
            {
                require_once('custom/modules/'.$this->module.'/metadata/searchdefs.php');
            }
            elseif (!empty($metafiles[$this->module]['searchdefs']))
            {
                require_once($metafiles[$this->module]['searchdefs']);
            }
            elseif (file_exists('modules/'.$this->module.'/metadata/searchdefs.php'))
            {
                require_once('modules/'.$this->module.'/metadata/searchdefs.php');
            }
                
                
            if(!empty($metafiles[$this->module]['searchfields']))
                require_once($metafiles[$this->module]['searchfields']);
            elseif(file_exists('modules/'.$this->module.'/metadata/SearchFields.php'))
                require_once('modules/'.$this->module.'/metadata/SearchFields.php');

            if(file_exists('custom/modules/'.$this->module.'/metadata/SearchFields.php')){
                require_once('custom/modules/'.$this->module.'/metadata/SearchFields.php');
            }
            
        
            $this->searchForm = new SearchForm($this->seed, $this->module, $this->action);
            $this->searchForm->setup($searchdefs, $searchFields, 'include/SearchForm/tpls/SearchFormGeneric.tpl', $view, $this->listViewDefs);
            $this->searchForm->lv = $this->lv;
        }
 	}
 	function processSearchForm(){
        global $current_user;
 	    if(isset($_REQUEST['query']))
        {
            // we have a query
            if(!empty($_SERVER['HTTP_REFERER']) && preg_match('/action=EditView/', $_SERVER['HTTP_REFERER'])) { // from EditView cancel
                $this->searchForm->populateFromArray($this->storeQuery->query);
            }
            else {
                $this->searchForm->populateFromRequest();
            }   

            $where_clauses = $this->searchForm->generateSearchWhere(true, $this->seed->module_dir);

            if (count($where_clauses) > 0 ) {
                $where_clauses_sql = '('. implode(' ) AND ( ', $where_clauses) . ')';
                $this->where = empty($this->where) ? $where_clauses_sql : $this->where . ' AND ' . $where_clauses_sql;
            } elseif (false && $this->module == 'sphr_Object' && $this->action == 'index' && !$current_user->is_admin) {
                $this->where = ' 0=1 '; // убрать false для сокрытия объектов без параметров поиска
            }
            $GLOBALS['log']->info("List View Where Clause: $this->where");
        }
        if($this->use_old_search){
            switch($view) {
                case 'basic_search':
                    $this->searchForm->setup();
                    if (!$current_user->is_admin) {
                        foreach($this->searchForm->formData as $fi => $search_form_field) {
                            if($search_form_field['field']['name'] == 'assigned_user_id_basic') {
                                unset($this->searchForm->formData[$fi]);
                                break;
                            }
                        }
                    }
                    $this->searchForm->displayBasic($this->headers);
                    break;
                 case 'advanced_search':
                    $this->searchForm->setup();
                     if (!$current_user->is_admin) {
                         foreach($this->searchForm->formData as $fi => $search_form_field) {
                             if($search_form_field['field']['name'] == 'assigned_user_id_basic') {
                                 unset($this->searchForm->formData[$fi]);
                                 break;
                             }
                         }
                     }
                     $this->searchForm->displayAdvanced($this->headers);
                    break;
                 case 'saved_views':
                     if (!$current_user->is_admin) {
                         foreach($this->searchForm->formData as $fi => $search_form_field) {
                             if($search_form_field['field']['name'] == 'assigned_user_id_basic') {
                                 unset($this->searchForm->formData[$fi]);
                                 break;
                             }
                         }
                     }
                     echo $this->searchForm->displaySavedViews($this->listViewDefs, $this->lv, $this->headers);
                   break;
            }
        }else{
            if (!$current_user->is_admin) {
                if (!$current_user->is_admin) {
                    foreach($this->searchForm->formData as $fi => $search_form_field) {
                        if($search_form_field['field']['name'] == 'assigned_user_id_basic') {
                            unset($this->searchForm->formData[$fi]);
                            break;
                        }
                    }
                }
            }
            echo $this->searchForm->display($this->headers);
        }
 	}
 	function preDisplay(){
 	    $this->lv = new ListViewSmarty();
 	}
 	function display(){
 	 	if(!$this->bean || !$this->bean->ACLAccess('list')){
            ACLController::displayNoAccess();
        } else {	
 	        $this->listViewPrepare();
 	        $this->listViewProcess();
        }
 	}
}
?>
