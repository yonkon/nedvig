<?php
require_once('include/MVC/View/views/view.list.php');

class sphr_ClientViewList extends ViewList
{
    private $manager;
    function sphr_ClientViewList()
    {
        parent::ViewList();
    }

    function init($bean = null, $view_object_map = array()) {
        parent::init($bean, $view_object_map);

        require_once('custom/include/utils/DevToolKitManager.php');

        $this->manager = new DevToolKitManager($this);
    }

    function prepareSearchForm()
    {
        //echo "<pre>"; print_r ($searchdefs); die;
        //$this->searchForm->searchdefs['layout']['advanced_search']['status']['custom code'] = "Только предв. контакт";
        //$this->searchForm->searchdefs['layout']['basic_search']['status']['custom code'] = "Только предв. контакт";
        //$this->searchForm->setup($searchdefs, $searchFields, 'include/SearchForm/tpls/SearchFormGeneric.tpl', $view, $this->listViewDefs);
        //$this->searchForm->lv = $this->lv;

        //foreach($this->searchForm as $search_key=>$search_value) { echo $search_key,"\n"; }
        //$this->searchForm->formData['layout']['advanced_search']['status']=array();
        /*
         if (isCurrentUserOnlyOperator())
            metafiles['sphr_Client']['searchfields'] = 'custom/modules/sphr_Client/metadata/searchdefs_lead.php';
        else
            metafiles['sphr_Client']['searchfields'] = 'custom/modules/sphr_Client/metadata/searchdefs_defs.php';
        */

        parent::prepareSearchForm();
        //echo "<pre>";
        //print_r($this->searchForm->formData);
        //unset($this->searchForm->formData[5]);


    }
    function processSearchForm()
    {
        parent::processSearchForm();


        $where_clauses = $this->searchForm->generateSearchWhere(true, $this->seed->module_dir);
        if (count($where_clauses) > 0 ) {
            $where_clauses_sql = '('. implode(' ) AND ( ', $where_clauses) . ')';
            if (empty($this->where)) {
                $this->where =  $where_clauses_sql;
            } else {
                if (strpos($this->where, $where_clauses_sql) === false) {
                    $this->where  = $this->where . ' AND ' . $where_clauses_sql;
                }
            }
        }

        //#3789
        $this->where = str_replace("first_name like '", "first_name like '%", $this->where);
        $this->where = str_replace("last_name like '", "last_name like '%", $this->where);
        $this->where = str_replace("phone_mobile like '", "phone_mobile like '%", $this->where);
        //---

        $this->manager->process();
        require_once 'custom/include/sphere_modules_utils.php';
        if (isCurrentUserOnlyOperator())
            //window.onload=function() {}
            echo '<script type="text/javascript">
				var sb = document.getElementsByName("status_basic[]").item(0);
				if (sb != null)
				{
					sb.setAttribute("disabled", "disabled");
					sb.setAttribute("style", "color:InactiveCaptionText;background:InactiveCaption");
				}
				var sa = document.getElementsByName("status_advanced[]").item(0);
				if (sa != null)
				{
					sa.setAttribute("disabled", "disabled");
					sa.setAttribute("style", "color:InactiveCaptionText;background:InactiveCaption");
				}
			</script>';

        echo '<script language="javascript" >',file_get_contents('custom/include/javascript/country_region_city_search.js'),'</script>';
        echo '<script>RegionCity.init(\'country_c\',\'region_c\',\'city_c\',\'advanced\');</script>';
    }

    function listViewProcess()
    {
      echo '<script src="/js/client_view.js">';
        require_once 'custom/include/sphere_modules_utils.php';
        global $current_user;
         if (!$current_user->is_admin) {
            if (!empty($this->where)) $this->where .= ' AND ';
          //9a63036b-531f-e1e0-2eab-53e110882bd9 tranio
          $is_tranio = $current_user->id == '9a63036b-531f-e1e0-2eab-53e110882bd9';
          //$is_tranio = true;
          if ($is_tranio) {
            $this->params['custom_from'] = ' JOIN accounts_sphr_client_c ON accounts_sphr_client_c.accounts_s160fccounts_ida = "9a63036b-531f-e1e0-2eab-53e110882bd9" AND accounts_sphr_client_c.accounts_sde91_client_idb = sphr_client.id ';
            $this->params['custom_where'] = $this->params['custom_where'] . ' GROUP BY sphr_client.id ';
            //$this->params['distinct'] = true;
          } else {
            $this->where .= ' (assigned_user_id = "' . $current_user->id . '" OR sphr_client.status = 2 ) ';
        }
        }
        if (isCurrentUserOnlyOperator())
        {
            if (!empty($this->where)) $this->where .= ' AND '; // если уже есть запрос where, то дописываем к нему, а иначе наш запрос единственный
            $this->where .= "sphr_client.status = 'lead' ";

            //если поле поиска "статус" появится - выделим в нем статус "предв. контакт"
            if (($_REQUEST['searchFormTab'] == 'advanced_search' /*AND empty($_REQUEST['status_advanced'])*/)
                OR ($_REQUEST['searchFormTab'] == 'basic_search' /*AND empty($_REQUEST['status_basic'])*/))
            {
                if ($_REQUEST['searchFormTab'] == 'advanced_search')
                {// это расширенный поиск
                    $_REQUEST['status_advanced'] = array ('lead');
                }
                else
                {// это базовый поиск
                    $_REQUEST['status_basic'] = array ('lead');
                }
            }
        }
        //$this->manager->process();
        parent::listViewProcess();
    }
    function process() {
        //$this->manager->process();
        $GLOBALS['log']->info("sphr_ClientViewList->process begin");
        parent::process();
        $GLOBALS['log']->info("sphr_ClientViewList->process end");

    }

    /**
     * @see ViewList::preDisplay()
     */
    public function preDisplay()
    {
        parent::preDisplay();
        $this->lv->targetlist = TRUE;

    }


}
?>
