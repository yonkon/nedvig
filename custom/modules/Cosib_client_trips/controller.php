<?

require_once('include/MVC/Controller/SugarController.php');

class Cosib_client_tripsController extends SugarController{
	function sphr_ClientController(){
			parent::SugarController();
	}
     //action for view calendar of clients' trips
	function action_calendar() {

		$this->view = 'calendar';

	}
	// action to load data in calendar of clients_trips
	function action_loadCalendarData(){

        $list_ct = $this->bean->load_list_calendar($_REQUEST['from'],$_REQUEST['to']);
        $list=array();
        if(count($list_ct)>0){        	for($i=0;$i<count($list_ct);$i++){                $list[]=array('start_date'=> $list_ct[$i]['date_arrive'], 'end_date'=> $list_ct[$i]['date_departure'], 'text'=> $this->load_cl_trip_to_calendar_html($list_ct[$i]),'color' => $this->get_trip_color($list_ct[$i]['status']), 'details' => $this->load_cl_trip_to_calendar_html($list_ct[$i],true,true));
        	}        }
         echo json_encode($list);
	}
	// load trip's data to html format
	function load_cl_trip_to_calendar_html($trip,$details=false,$obj_link=false){

		global $mod_strings;
        $html = "<span  id='client_".$trip['id']."' class='cl_trip_client'>
              	<a id='link_".$trip['id']."' href='index.php?module=Cosib_client_trips&offset=1&return_module=Cosib_client_trips&return_action=Calendar&action=DetailView&record=".$trip['id']."' target='_blank'>".$trip['client_name']."</a>
              </span>";
         if($details){ $html.=
             " <p class='cl_trip_client'>".$mod_strings['LBL_TRIPS_OBJECTS'].":</p>";
             if(count($trip['object_list'])>0){
             	$html.= "<ul class='cl_trip_content cl_trip_status_".$trip['status']." cl_trip_object_list'>
			              <li><em>";
				for($i=0;$i<count($trip['object_list']);$i++){
			              $html.= '</em></li><li><em>';
			              $html.=($obj_link)?'<a href="index.php?module=sphr_Object&action=DetailView&record='.$trip['object_list'][$i]['id'].'&parent_module=Cosib_client_trips&parent_id='.$trip['id'].'&return_module=Cosib_client_trips&return_action=Calendar" target="_blank">'.$trip['object_list'][$i]['name'].'</a>':$trip['object_list'][$i]['name'];
			    }
			    $html.= "</em></li></ul>";
        	}else
        	$html.=$mod_strings['LBL_TRIPS_OBJECTS_NO'];
        }
        /*
        html = "<span  id='client_".$trip['id']."' class='cl_trip_client'>
              	<a id='link_".$trip['id']."' href='index.php?module=Cosib_client_trips&offset=1&return_module=Cosib_client_trips&return_action=Calendar&action=DetailView&record=".$trip['id']."' target='_blank'>".$trip['client_name']."</a>
              </span><div id='".$trip['id']."' class='cl_trip_content cl_trip_status_".$trip['status']."'>
              <p>".$mod_strings['LBL_TRIPS_OBJECTS']."</p>
              <ul class='cl_trip_object_list'>
              <li>".implode('</li><li>',$trip['object_list'])."</li>
              </ul>
        </div>";
        */
        return $html;	}
	function get_trip_color($status){		return ($status=='plan')?'#6F6':(($status=='confirm')?'#6FF':(($status=='takeplace')?'#FF9':'#FFF'));
	}
}
?>
