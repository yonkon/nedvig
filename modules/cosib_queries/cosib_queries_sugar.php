<?PHP
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

/**
 * THIS CLASS IS GENERATED BY MODULE BUILDER
 * PLEASE DO NOT CHANGE THIS CLASS
 * PLACE ANY CUSTOMIZATIONS IN cosib_queries
 */


class cosib_queries_sugar extends Basic {
	var $new_schema = true;
	var $module_dir = 'cosib_queries';
	var $object_name = 'cosib_queries';
	var $table_name = 'cosib_queries';
	var $importable = false;
	var $disable_row_level_security = true ; // to ensure that modules created and deployed under CE will continue to function under team security if the instance is upgraded to PRO
		var $id;
		var $name;
		var $date_entered;
		var $date_modified;
		var $modified_user_id;
		var $modified_by_name;
		var $created_by;
		var $created_by_name;
		var $description;
		var $deleted;
		var $created_by_link;
		var $modified_user_link;
		var $assigned_user_id;
		var $assigned_user_name;
		var $assigned_user_link;
		function cosib_queries_sugar(){
		parent::Basic();
	}

	function bean_implements($interface){
		switch($interface){
			case 'ACL': return true;
		}
		return false;
}
	function search_objects($record=false, $type_query="bylease"){
      if($record!=false){
	       global $db;
	       $area_c=$this->getFieldValue('area_c');
	       if( strlen($area_c)>0 ){
	       		$query_area .=($area_c=='green'||$area_c=='city')? ' AND '.$area_c.'_area_c =1 ': ' AND ( green_area_c =1 OR city_area_c =1) ';
           }
	       $query ='SELECT id_c FROM sphr_object_cstm JOIN sphr_object on sphr_object.id=sphr_object_cstm.id_c WHERE LOCATE(\'arenda\',object_status_c) '.
	       			' AND LOCATE(category_c, \''.$db->quote($this->getFieldValue("category_of_object_c")).'\' ) '
	       			.' AND price_rent_c '.$this->getRange('budget_c','price',true,'000')

	       			.' AND number_bedroom_c >= '.(int)$this->getFieldValue('quantity_of_bedroom_c')
	       			.' AND sea_distance_c '.$this->getRange('remoteness_from_sea_c','m',false)
	       			.' AND comm_center_distance_c '.$this->getRange('remoteness_from_commercial_c','m',false)
	       			//.' AND view_sea_c = '.$this->getFieldValue('view_of_sea_c')
	       			.$query_area
	       			.' AND (  '.$this->getAddressQuery('coast_c','address')
	       			.' OR '.$this->getAddressQuery('province_c','address').' ) ';

        //�����

        $result=$db->query($query);
        $bean=new sphr_Object();
        $i=0;
        while($resArray=$db->fetchByAssoc($result)){
        	$this->set_relationship('cosib_queri_sphr_object_c',array('cosib_quer91b5queries_ida'=>$this->getFieldValue('id'),'cosib_quer4238_object_idb'=>$resArray['id_c']));
        	$i++;
        }
        return $i;
      }


	}

	function getOptionsField($field){
	       global $app_list_strings;
		   $defs = $this->getFieldDefinition($field);
           return $app_list_strings[$defs['options']][$this->getFieldValue($field )]  ;
	}

	function getRange($field,$alias,$more=true,$thouthands=''){
		global $db;
		$dist = explode("_",substr($this->getFieldValue($field ),strlen($alias)));
		if( count($dist)==1 ){
			return (($more)?' >=':' <=').' \''.(float)($dist[0].$thouthands).'\' ';
		}elseif ( count($dist)>1 ) return ' BETWEEN \''.(float)($dist[0].$thouthands).'\' AND \''.(float)($dist[1].$thouthands).'\' ';
		else return '>= 0 ';
	}

	function getAddressQuery($field,$field_search,$separ='/'){
		global $db;
		$query="";
		$dist=explode($separ,$this->getOptionsField($field));

		for($i=0;$i<count($dist);$i++){
		   $tmp=trim($dist[$i]);
		   if(strlen($tmp)>0)
			 $query.=(($i>0)?' OR ':'').' LOCATE(\''.$db->quote($tmp).'\', '.$field_search.') ';
		}
        return $query;



	}

}
?>