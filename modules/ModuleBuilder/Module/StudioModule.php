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


require_once 'modules/ModuleBuilder/parsers/relationships/DeployedRelationships.php' ;
require_once 'modules/ModuleBuilder/parsers/constants.php' ;

class StudioModule
{
    public $name ;
    private $popups = array ( ) ;
    public $module ;
    public $fields ;
    public $seed;

    function __construct ($module)
    {
	   	$this->sources = array (	'editviewdefs.php' => array ( 'name' => translate ('LBL_EDITVIEW') , 'type' => MB_EDITVIEW , 'image' => 'EditView' ) ,
        							'detailviewdefs.php' => array ( 'name' => translate('LBL_DETAILVIEW') , 'type' => MB_DETAILVIEW , 'image' => 'DetailView' ) ,
        							'listviewdefs.php' => array ( 'name' => translate('LBL_LISTVIEW') , 'type' => MB_LISTVIEW , 'image' => 'ListView' ) ) ;

        $moduleNames = array_change_key_case ( $GLOBALS [ 'app_list_strings' ] [ 'moduleList' ] ) ;
        $this->name = isset ( $moduleNames [ strtolower ( $module ) ] ) ? $moduleNames [ strtolower ( $module ) ] : strtolower ( $module ) ;
        $this->module = $module ;
        $class = $GLOBALS [ 'beanList' ] [ $this->module ] ;
        require_once $GLOBALS [ 'beanFiles' ] [ $class ] ;
        $this->seed = new $class ( ) ;
        $this->fields = $this->seed->field_defs ;
        //$GLOBALS['log']->debug ( get_class($this)."->__construct($module): ".print_r($this->fields,true) ) ;
    }

     /*
     * Gets the name of this module. Some modules have naming inconsistencies such as Bug Tracker and Bugs which causes warnings in Relationships
     * Added to resolve bug #20257
     */
    function getModuleName()
    {
    	$modules_with_odd_names = array(
    	'Bug Tracker'=>'Bugs'
    	);
    	if ( isset ( $modules_with_odd_names [ $this->name ] ) )
    		return ( $modules_with_odd_names [ $this->name ] ) ;

    	return $this->name;
    }

    /*
     * Attempt to determine the type of a module, for example 'basic' or 'company'
     * These types are defined by the SugarObject Templates in /include/SugarObjects/templates
     * Custom modules extend one of these standard SugarObject types, so the type can be determined from their parent
     * Standard module types can be determined simply from the module name - 'bugs' for example is of type 'issue'
	 * If all else fails, fall back on type 'basic'...
	 * @return string Module's type
     */
    function getType ()
    {
    	// first, get a list of a possible parent types
    	$templates = array () ;
    	$d = dir ( 'include/SugarObjects/templates' ) ;
		while ( $filename = $d->read() )
		{
			if ( substr($filename,0,1) != '.' )
				$templates [ strtolower ( $filename) ] = strtolower ( $filename ) ;
		}

		// If a custom module, then its type is determined by the parent SugarObject that it extends
		$type = $GLOBALS [ 'beanList' ] [ $this->module ] ;
        require_once $GLOBALS [ 'beanFiles' ] [ $type ] ;

        do
        {
        	$seed = new $type () ;
        	$type = get_parent_class ($seed) ;
        } while ( ! in_array ( strtolower ( $type ) , $templates ) && $type != 'SugarBean' ) ;

        if ( $type != 'SugarBean' )
        {
        	return strtolower ( $type ) ;
        }

    	// If a standard module then just look up its type - type is implicit for standard modules. Perhaps one day we will make it explicit, just as we have done for custom modules...
		$types = array (
		'Accounts' => 'company' , 
		'Bugs' => 'issue' , 
		'Cases' => 'issue' , 
		'Contacts' => 'person' , 
		'Documents' => 'file' , 
		'Leads' => 'person' , 
		'Opportunities' => 'sale'
		) ;
		if ( isset ( $types [ $this->module ] ) )
			return $types [ $this->module ] ;

    	return "basic" ;
    }

    /*
     * Return the fields for this module as sourced from the SugarBean
     * @return	Array of fields
     */

    function getFields ()
    {
    	return $this->fields ;
    }

    function getNodes ()
    {
        return array ( 'name' => $this->name , 'module' => $this->module , 'type' => 'StudioModule' , 'action' => "module=ModuleBuilder&action=wizard&view_module={$this->module}" , 'children' => $this->getModule() ) ;
    }

    function getModule ()
    {
    	$sources = array (	translate('LBL_LABELS') => array ( 'action' => "module=ModuleBuilder&action=editLabels&view_module={$this->module}" , 'imageTitle' => 'Labels' , 'help' => 'labelsBtn' ) ,
        					translate('LBL_FIELDS') => array ( 'action' => "module=ModuleBuilder&action=modulefields&view_package=studio&view_module={$this->module}" , 'imageTitle' => 'Fields' , 'help' => 'fieldsBtn'  ) ,
        					translate('LBL_RELATIONSHIPS') => array ( 'action' => "get_tpl=true&module=ModuleBuilder&action=relationships&view_module={$this->module}" , 'imageTitle' => 'Relationships' , 'help' => 'relationshipsBtn' ) ,

							/* BEGIN - SECURITY GROUPS */         					
							/*
        					translate('LBL_LAYOUTS') => array ( 'children' => 'getLayouts' , 'action' => "module=ModuleBuilder&action=wizard&view=layouts&view_module={$this->module}" , 'imageTitle' => 'Layouts' , 'help' => 'layoutsBtn' ) ,
							*/
							translate('LBL_LAYOUTS') => array ( 'children' => 'getGroupLayouts' , 'action' => "module=ModuleBuilder&action=addlayout&view=layouts&view_module={$this->module}" , 'imageTitle' => 'Layouts' , 'help' => 'layoutsBtn' ) ,
							/* END - SECURITY GROUPS */ 
        					translate('LBL_SUBPANELS') => array ( 'children' => 'getSubpanels' , 'action' => "module=ModuleBuilder&action=wizard&view=subpanels&view_module={$this->module}" , 'imageTitle' => 'Subpanels' , 'help' => 'subpanelsBtn' ) ) ;

        $nodes = array () ;
        foreach ( $sources as $source => $def )
        {
        	$nodes [ $source ] = $def ;
        	$nodes [ $source ] [ 'name' ] = translate ( $source ) ;
        	if ( isset ( $def [ 'children' ] ) )
        	{
        		$childNodes = $this->$def [ 'children' ] () ;
        		if ( !empty ( $childNodes ) )
        		{
        			$nodes [ $source ] [ 'type' ] = 'Folder' ;
        			$nodes [ $source ] [ 'children' ] = $childNodes ;
        		}
        		else
        			unset ( $nodes [ $source ] ) ;
        	}
        }

        return $nodes ;
    }
    
    function getViews() {
        $views = array () ;
        foreach ( $this->sources as $file => $def )
        {
            if (file_exists ( "modules/{$this->module}/metadata/$file" ))
            {
                $views [ str_replace ( '.php', '' , $file) ] = $def ;
            }
        }
        return $views;
    }

    function getLayouts()
    {
    	$views = $this->getViews();

        // Now add in the QuickCreates - quickcreatedefs can be created by Studio from editviewdefs if they are absent, so just add them in regardless of whether the quickcreatedefs file exists

        $hideQuickCreateForModules = array ( 'kbdocuments' , 'projecttask' , 
            'campaigns'
            ) ;
        // Some modules should not have a QuickCreate form at all, so do not add them to the list
        if (! in_array ( strtolower ( $this->module ), $hideQuickCreateForModules ))
            $views [ 'quickcreatedefs' ] = array ( 'name' => translate('LBL_QUICKCREATE') , 'type' => MB_QUICKCREATE , 'image' => 'QuickCreate' ) ;

        $layouts = array ( ) ;
		/* BEGIN - SECURITY GROUPS */ 
		$groupLayout = "";
		if(!empty($_REQUEST['grpLayout'])) $groupLayout = $_REQUEST['grpLayout'];
		$groupLayoutParams = "";
		if(!empty($groupLayout)) { $groupLayoutParams = "&grpLayout=".$groupLayout; }
		/* END - SECURITY GROUPS */ 
        foreach ( $views as $def )
        {
        	//SECURITY GROUPS - added $groupLayoutParams to the end of the action url
            /*
            $layouts [ $def['name'] ] = array ( 'name' => $def['name'] , 'action' => "module=ModuleBuilder&action=editLayout&view={$def['type']}&view_module={$this->module}" , 'imageTitle' => $def['image'] , 'help' => "viewBtn{$def['type']}" , 'size' => '48' ) ;
            */
			$layouts [ $def['name'] ] = array ( 'name' => $def['name'] , 'action' => "module=ModuleBuilder&action=editLayout&view={$def['type']}&view_module={$this->module}".$groupLayoutParams , 'imageTitle' => $def['image'] , 'help' => "viewBtn{$def['type']}" , 'size' => '48' ) ;
        }

        if($this->isValidDashletModule($this->module)){
			$dashlets = array( );
        	//SECURITY GROUPS - added $groupLayoutParams to the end of the action url
	        /*
	        $dashlets [] = array('name' => translate('LBL_DASHLETLISTVIEW') , 'type' => 'dashlet' , 'action' => 'module=ModuleBuilder&action=editLayout&view=dashlet&view_module=' . $this->module );
			$dashlets [] = array('name' => translate('LBL_DASHLETSEARCHVIEW') , 'type' => 'dashletsearch' , 'action' => 'module=ModuleBuilder&action=editLayout&view=dashletsearch&view_module=' . $this->module );
			$layouts [ translate('LBL_DASHLET') ] = array ( 'name' => translate('LBL_DASHLET') , 'type' => 'Folder', 'children' => $dashlets,  'imageTitle' => 'Dashlet',  'action' => 'module=ModuleBuilder&action=wizard&view=dashlet&view_module=' . $this->module);        	
			*/
	        $dashlets [] = array('name' => translate('LBL_DASHLETLISTVIEW') , 'type' => 'dashlet' , 'action' => 'module=ModuleBuilder&action=editLayout&view=dashlet&view_module=' . $this->module .$groupLayoutParams );
	        $dashlets [] = array('name' => translate('LBL_DASHLETSEARCHVIEW') , 'type' => 'dashletsearch' , 'action' => 'module=ModuleBuilder&action=editLayout&view=dashletsearch&view_module=' . $this->module .$groupLayoutParams );
	        $layouts [ translate('LBL_DASHLET') ] = array ( 'name' => translate('LBL_DASHLET') , 'type' => 'Folder', 'children' => $dashlets,  'imageTitle' => 'Dashlet',  'action' => 'module=ModuleBuilder&action=wizard&view=dashlet&view_module=' . $this->module.$groupLayoutParams );        	
        }
		
        //For popup tree node
        $popups = array( );
        //SECURITY GROUPS - added $groupLayoutParams to the end of the action url
        /*
        $popups [] = array('name' => translate('LBL_POPUPLISTVIEW') , 'type' => 'popuplistview' , 'action' => 'module=ModuleBuilder&action=editLayout&view=popuplist&view_module=' . $this->module );
		$popups [] = array('name' => translate('LBL_POPUPSEARCH') , 'type' => 'popupsearch' , 'action' => 'module=ModuleBuilder&action=editLayout&view=popupsearch&view_module=' . $this->module );
		$layouts [ translate('LBL_POPUP') ] = array ( 'name' => translate('LBL_POPUP') , 'type' => 'Folder', 'children' => $popups, 'imageTitle' => 'Popup',  'imageName' => 'icon_Popup.gif', 'action' => 'module=ModuleBuilder&action=wizard&view=popup&view_module=' . $this->module);  
		*/
		$popups [] = array('name' => translate('LBL_POPUPLISTVIEW') , 'type' => 'popuplistview' , 'action' => 'module=ModuleBuilder&action=editLayout&view=popuplist&view_module=' . $this->module .$groupLayoutParams );
		$popups [] = array('name' => translate('LBL_POPUPSEARCH') , 'type' => 'popupsearch' , 'action' => 'module=ModuleBuilder&action=editLayout&view=popupsearch&view_module=' . $this->module .$groupLayoutParams );
		$layouts [ translate('LBL_POPUP') ] = array ( 'name' => translate('LBL_POPUP') , 'type' => 'Folder', 'children' => $popups, 'imageTitle' => 'Popup',  'imageName' => 'icon_Popup.gif', 'action' => 'module=ModuleBuilder&action=wizard&view=popup&view_module=' . $this->module.$groupLayoutParams );  
					
        $nodes = $this->getSearch () ;
        if ( !empty ( $nodes ) )
        {
        	//SECURITY GROUPS - added $groupLayoutParams to the end of the action url
			/*
        	$layouts [ translate('LBL_SEARCH') ] = array ( 'name' => translate('LBL_SEARCH') , 'type' => 'Folder' , 'children' => $nodes , 'action' => "module=ModuleBuilder&action=wizard&view=search&view_module={$this->module}" , 'imageTitle' => 'SearchForm' , 'help' => 'searchBtn' , 'size' => '48') ;
			*/
			$layouts [ translate('LBL_SEARCH') ] = array ( 'name' => translate('LBL_SEARCH') , 'type' => 'Folder' , 'children' => $nodes , 'action' => "module=ModuleBuilder&action=wizard&view=search&view_module={$this->module}".$groupLayoutParams , 'imageTitle' => 'SearchForm' , 'help' => 'searchBtn' , 'size' => '48') ;
        }

    	return $layouts ;

    }

	function isValidDashletModule($moduleName){
		$fileName = "My{$moduleName}Dashlet";
		$customFileName = "{$moduleName}Dashlet";
		if (file_exists ( "modules/{$moduleName}/Dashlets/{$fileName}/{$fileName}.php" )
			|| file_exists ( "custom/modules/{$moduleName}/Dashlets/{$fileName}/{$fileName}.php" ) 
			|| file_exists ( "modules/{$moduleName}/Dashlets/{$customFileName}/{$customFileName}.php" )
			|| file_exists ( "custom/modules/{$moduleName}/Dashlets/{$customFileName}/{$customFileName}.php" ))
        {
        	return true;
        }
        return false;
	}
	

	/* BEGIN - SECURITY GROUPS */ 
    function getGroupLayouts()
    {
    	$views = $this->getViews();

            //$defaultLayout [] = array ( 'name' => translate('LBL_DEFAULT') , 'type' => 'Folder' , 'children' => $layouts , 'action' => 'module=ModuleBuilder&action=wizard&layouts=1&view_module=' . $this->module ) ;
//$layout_nodes[] = array ( 'name' => translate($groupFocus->name) , 'type' => 'Folder' , 'children' => $group_layouts , 'action' => 'module=ModuleBuilder&action=wizard&layouts=1&view_module=' . $this->module . "&grpLayout=".$groupFocus->id ) ;
									
							//translate('LBL_LAYOUTS') => array ( 'children' => 'getLayouts' , 'action' => "module=ModuleBuilder&action=wizard&view=layouts&view_module={$this->module}" , 'imageTitle' => 'Layouts' , 'help' => 'layoutsBtn' ) ,
			$defaultLayout [] = array ( 'name' => translate('LBL_DEFAULT') , 'type' => 'Folder', 'children' => $this->getLayouts() , 'action' => "module=ModuleBuilder&action=wizard&view=layouts&view_module={$this->module}" , 'imageTitle' => 'Layouts' , 'help' => 'layoutsBtn') ;
			$layout_nodes = array();
			$layout_nodes = $defaultLayout;
    		//get security group nodes...in metadata directory in a folder named with the guid of the security group
        	$custDirectory = "custom/modules/".$this->module."/metadata/";
    		if(is_dir($custDirectory)) {		
    			require_once('modules/SecurityGroups/SecurityGroup.php');
				$groupFocus = new SecurityGroup();
				$d = dir($custDirectory);
				while( $f = $d->read() ) {
					if( $f == "." || $f == ".." ){
						continue;
					}

					if( is_dir( "$custDirectory/$f" ) ) {
						//see if $f is a guid for a security group
						$groupFocus = new SecurityGroup();
						$groupFocus->retrieve($f);
						if(!empty($groupFocus->id) && isset($groupFocus->id)) {
							//found existing group layout...create node
							$GLOBALS['log']->debug("Found Security Group Layout for: ".$groupFocus->name);
							
							$group_layouts = array ( ) ;
							//remove group layout option
							$group_layouts[] = array('name'=> translate('LBL_REMOVE_LAYOUT'), 'action' => "module=ModuleBuilder&action=removeGroupLayoutPrompt&view_module={$this->module}". "&grpLayout=".$groupFocus->id);
        
							foreach ( $views as $def )
							{
								$group_layouts [ $def['name'] ] = array ( 'name' => $def['name'] , 'action' => "module=ModuleBuilder&action=editLayout&view={$def['type']}&view_module={$this->module}&grpLayout=".$groupFocus->id , 'imageTitle' => $def['image'] , 'help' => "viewBtn{$def['type']}" , 'size' => '48' ) ;
							}

							if($this->isValidDashletModule($this->module)){
								$dashlets = array( );
								$dashlets [] = array('name' => translate('LBL_DASHLETLISTVIEW') , 'type' => 'dashlet' , 'action' => 'module=ModuleBuilder&action=editLayout&view=dashlet&view_module=' . $this->module . "&grpLayout=".$groupFocus->id);
								$dashlets [] = array('name' => translate('LBL_DASHLETSEARCHVIEW') , 'type' => 'dashletsearch' , 'action' => 'module=ModuleBuilder&action=editLayout&view=dashletsearch&view_module=' . $this->module . "&grpLayout=".$groupFocus->id);
								$group_layouts [ translate('LBL_DASHLET') ] = array ( 'name' => translate('LBL_DASHLET') , 'type' => 'Folder', 'children' => $dashlets,  'imageTitle' => 'Dashlet',  'action' => 'module=ModuleBuilder&action=wizard&view=dashlet&view_module=' . $this->module. "&grpLayout=".$groupFocus->id);        	
							}

							//For popup tree node
							$popups = array( );
							$popups [] = array('name' => translate('LBL_POPUPLISTVIEW') , 'type' => 'popuplistview' , 'action' => 'module=ModuleBuilder&action=editLayout&view=popuplist&view_module=' . $this->module . "&grpLayout=".$groupFocus->id);
							$popups [] = array('name' => translate('LBL_POPUPSEARCH') , 'type' => 'popupsearch' , 'action' => 'module=ModuleBuilder&action=editLayout&view=popupsearch&view_module=' . $this->module . "&grpLayout=".$groupFocus->id);
							$group_layouts [ translate('LBL_POPUP') ] = array ( 'name' => translate('LBL_POPUP') , 'type' => 'Folder', 'children' => $popups, 'imageTitle' => 'Popup',  'imageName' => 'icon_Popup.gif', 'action' => 'module=ModuleBuilder&action=wizard&view=popup&view_module=' . $this->module. "&grpLayout=".$groupFocus->id);  
							
							$nodes = $this->getSearch ($groupFocus->id) ;
							if ( !empty ( $nodes ) )
							{
								$group_layouts [ translate('LBL_SEARCH') ] = array ( 'name' => translate('LBL_SEARCH') , 'type' => 'Folder' , 'children' => $nodes , 'action' => "module=ModuleBuilder&action=wizard&view=search&view_module={$this->module}&grpLayout=".$groupFocus->id , 'imageTitle' => 'SearchForm' , 'help' => 'searchBtn' , 'size' => '48') ;
							}
							
							$layout_nodes[] = array ( 'name' => translate($groupFocus->name) , 'type' => 'Folder' , 'children' => $group_layouts , 'action' => 'module=ModuleBuilder&action=wizard&&view=layouts&view_module=' . $this->module . "&grpLayout=".$groupFocus->id ) ;
						}
					}


				} //end while files/dirs
    		} //end if directory exists
    		
    		//$layouts [ translate('LBL_LAYOUTS') ] = array ( 'name' => translate('LBL_LAYOUTS') , 'type' => 'Folder' , 'children' => $layout_nodes , 'action' => "module=ModuleBuilder&action=addlayout&layouts=1&view_module={$this->module}") ;
        

    		//$nodes [ 'children' ] [] = array ( 'name' => translate('LBL_LAYOUTS') , 'type' => 'Folder' , 'children' => $layout_nodes , 'action' => 'module=ModuleBuilder&action=addlayout&layouts=1&view_module=' . $this->module ) ;
        

    	return $layout_nodes ;

    }
	/* END - SECURITY GROUPS */ 

	/* BEGIN - SECURITY GROUPS */ 
    function getSearch ($groupLayout='')
    {
		require_once ('modules/ModuleBuilder/parsers/views/SearchViewMetaDataParser.php') ;

		if(!empty($_REQUEST['grpLayout'])) { $groupLayout = $_REQUEST['grpLayout']; }
		$groupLayoutParams = "";
		if(!empty($groupLayout)) {
			$groupLayoutParams = "&grpLayout=".$groupLayout;	
		}
		$nodes = array () ;
        foreach ( array ( MB_BASICSEARCH => 'LBL_BASIC_SEARCH' , MB_ADVANCEDSEARCH => 'LBL_ADVANCED_SEARCH' ) as $view => $label )
        {
        	try
        	{
        		$parser = new SearchViewMetaDataParser ( $view , $this->module ) ;
        		$title = translate ( $label ) ;
        		if($label == 'LBL_BASIC_SEARCH'){
					$name = 'BasicSearch';
				}elseif($label == 'LBL_ADVANCED_SEARCH'){
					$name = 'AdvancedSearch';
				}else{
					$name = str_replace ( ' ', '', $title ) ;
				}
        		//SECURITY GROUPS - added $groupLayoutParams to the end of the action url
				/*
            	$nodes [ $title ] = array ( 'name' => $title , 'action' => "module=ModuleBuilder&action=editLayout&view={$view}&view_module={$this->module}" , 'imageTitle' => $title , 'imageName' => $name , 'help' => "{$name}Btn" , 'size' => '48' ) ;
				*/
            	$nodes [ $title ] = array ( 'name' => $title , 'action' => "module=ModuleBuilder&action=editLayout&view={$view}&view_module={$this->module}".$groupLayoutParams , 'imageTitle' => $title , 'imageName' => $name , 'help' => "{$name}Btn" , 'size' => '48' ) ;
        	}
        	catch ( Exception $e )
        	{
        		$GLOBALS [ 'log' ]->info( 'No search layout : '. $e->getMessage() ) ;
        	}
        }

        return $nodes ;
    }
	/* END - SECURITY GROUPS */ 

    /*
     * Return an object containing all the relationships participated in by this module
     * @return AbstractRelationships Set of relationships
     */
    function getRelationships ()
    {
        return new DeployedRelationships ( $this->module ) ;
    }


    /**
     * Gets a list of subpanels used by the current module
     */
    function getSubpanels ()
    {
        if(!empty($GLOBALS['current_user']) && empty($GLOBALS['modListHeader']))
            $GLOBALS['modListHeader'] = query_module_access_list($GLOBALS['current_user']);

        require_once ('include/SubPanel/SubPanel.php') ;

        $nodes = array ( ) ;

            $GLOBALS [ 'log' ]->debug ( "StudioModule->getSubpanels(): getting subpanels for " . $this->module ) ;

            foreach ( SubPanel::getModuleSubpanels ( $this->module ) as $name => $label )
            {
                if ($name == 'users')
                    continue ;
                $subname = sugar_ucfirst ( (! empty ( $label )) ? translate ( $label, $this->module ) : $name ) ;
                $nodes [ $subname ] = array ( 
                	'name' => $name , 
                	'label' => $subname , 
                	'action' => "module=ModuleBuilder&action=editLayout&view=ListView&view_module={$this->module}&subpanel={$name}&subpanelLabel={$subname}" , 
                	'imageTitle' => $subname , 
                	'imageName' => 'icon_' . ucfirst($name) . '_32', 
                	'altImageName' => 'Subpanels', 
                	'size' => '48' 
                ) ;
            }

        return $nodes ;

    }

    /**
     * gets a list of subpanels provided to other modules
     *
     *
     */
    function getProvidedSubpanels ()
    {
        require_once 'modules/ModuleBuilder/parsers/relationships/AbstractRelationships.php' ;
    	$this->providedSubpanels = array () ;
        $subpanelDir = 'modules/' . $this->module . '/metadata/subpanels/' ;
        foreach(array($subpanelDir, "custom/$subpanelDir") as $dir)
        {
	        if (is_dir ( $dir ))
	        {
	            foreach(scandir($dir) as $fileName)
	            {
	            	// sanity check to confirm that this is a usable subpanel...
	                if (substr ( $fileName, 0, 1 ) != '.' && substr ( strtolower($fileName), -4 ) == ".php" 
	                	&& AbstractRelationships::validSubpanel ( "$dir/$fileName" ))
	                {
	                    $subname = str_replace ( '.php', '', $fileName ) ;
	                    $this->providedSubpanels [ $subname ] = $subname ;
	                }
	            }
	        }
        }

		return $this->providedSubpanels;
    }

    
    function getParentModulesOfSubpanel($subpanel){
        global $moduleList, $beanFiles, $beanList, $module;
    
        //use tab controller function to get module list with named keys
        require_once("modules/MySettings/TabController.php");
        require_once("include/SubPanel/SubPanelDefinitions.php");
        $modules_to_check = TabController::get_key_array($moduleList);

        //change case to match subpanel processing later on
        $modules_to_check = array_change_key_case($modules_to_check);
    
        $spd = '';
        $spd_arr = array();
        //iterate through modules and build subpanel array  
        foreach($modules_to_check as $mod_name){
            
            //skip if module name is not in bean list, otherwise get the bean class name
            if(!isset($beanList[$mod_name])) continue;
            $class = $beanList[$mod_name];

            //skip if class name is not in file list, otherwise require the bean file and create new class
            if(!isset($beanFiles[$class]) || !file_exists($beanFiles[$class])) continue;
            
            //retrieve subpanels for this bean
            require_once($beanFiles[$class]);
            $bean_class = new $class();

            //create new subpanel definition instance and get list of tabs
            $spd = new SubPanelDefinitions($bean_class) ;
            if ( isset($spd->layout_defs['subpanel_setup'][strtolower($subpanel)]['module']) ){
                $spd_arr[] = $mod_name;
            }
        }
        return  $spd_arr;
    }

    function removeFieldFromLayouts ( $fieldName )
    {
    	require_once("modules/ModuleBuilder/parsers/ParserFactory.php");
    	$GLOBALS [ 'log' ]->info ( get_class ( $this ) . "->removeFieldFromLayouts($fieldName)" ) ;
        $sources = $this->getViewMetadataSources();
        $sources[] = array('type'  => MB_BASICSEARCH);
        $sources[] = array('type'  => MB_ADVANCEDSEARCH);
        
        $GLOBALS [ 'log' ]->debug ( print_r( $sources,true) ) ;
        foreach ( $sources as $name => $defs )
        {
            //If this module type doesn't support a given metadata type, we will get an exception from getParser()
            try {
                $parser = ParserFactory::getParser( $defs [ 'type' ] , $this->module ) ;
                if ($parser->removeField ( $fieldName ) )
                    $parser->handleSave(false) ; // don't populate from $_REQUEST, just save as is...
            } catch(Exception $e){}
        }
        
        //Remove the fields in subpanel
        $data = $this->getParentModulesOfSubpanel($this->module);
        foreach($data as $parentModule){
            //If this module type doesn't support a given metadata type, we will get an exception from getParser()
            try {
                $parser = ParserFactory::getParser( MB_LISTVIEW , $parentModule, null ,  $this->module) ;
                if ($parser->removeField ( $fieldName ) )
                    $parser->handleSave(false) ;
            } catch(Exception $e){}
        }
    }

	
	
	public function getViewMetadataSources() {
		$sources = $this->getViews();
        $sources[] = array('type'  => MB_BASICSEARCH);
        $sources[] = array('type'  => MB_ADVANCEDSEARCH);
        $sources[] = array('type'  => MB_DASHLET);
        $sources[] = array('type'  => MB_DASHLETSEARCH);
        $sources[] = array('type'  => MB_POPUPLIST);
        $sources[] = array('type'  => MB_QUICKCREATE);
		
		return $sources;
	}
	
	
	
}
?>