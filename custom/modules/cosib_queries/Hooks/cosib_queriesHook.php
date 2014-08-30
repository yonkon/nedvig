<?php

class cosib_queriesHook{

    
    function add_interest(SugarBean &$bean, $event, $arguments){        
    	if($arguments['module'] == 'sphr_Client'||$arguments['related_module'] == 'sphr_Client'){
            
    		$this->update_sphr_client_interests($arguments['related_id']);
    	}
    }
    
    function remove_interest(SugarBean &$bean, $event, $arguments){
    	if($arguments['module'] == 'sphr_Client'||$arguments['related_module'] == 'sphr_Client'){
            
    		$this->update_sphr_client_interests($arguments['related_id']);
    	}
        
    }
    // для обновления интересов при сохранении информации о клиенте (молудь Клинеты - sphr_Client).
    function after_save_sphr_Client(SugarBean &$bean, $event, $arguments){    	
            
    		$this->update_sphr_client_interests($bean->id);   	
        
    }
    
    function update_sphr_client_interests($id){
        /*global $db;
        
        $res = $db->query('SELECT GROUP_CONCAT( DISTINCT qs.type_of_query_c SEPARATOR "^,^" ) AS types_queries
                            FROM  sphr_clientosib_queries_c AS cq  
                            LEFT JOIN  cosib_queries AS q ON q.id = cq.sphr_clien6a3fqueries_idb
                            LEFT JOIN cosib_queries_cstm AS qs ON qs.id_c = q.id
                            WHERE  cq.sphr_clien735b_client_ida = "'.$id.'" AND cq.deleted = 0 AND q.deleted=0 ');
       
       $types = "";
       
       if($db->getRowCount($res)>0) {
           if ($row = $db->fetchByAssoc($res)){
               $types = ($row['types_queries']=='')? '' : '^'.$row['types_queries'].'^' ;
           }
       }
      
       $db->query('UPDATE sphr_client_cstm SET types_of_queries_c = "'.$types.'" WHERE id_c="'.$id.'"');*/
       
    }

    

}

?>