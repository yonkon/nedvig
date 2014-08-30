<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
require_once('modules/sphr_Object/sphr_Object.php');

class SearchModificator extends sphr_Object
{
	function create_new_list_query ($order_by, $where,$filter=array(),$params=array(), $show_deleted = 0,$join_type='', $return_array = false,$parentbean, $singleSelect = false)
    {
		global $db;
		$ret_array = parent::create_new_list_query($order_by, $where, $filter, $params, $show_deleted, $join_type, $return_array, $parentbean, $singleSelect);

		$where_name = "(sphr_object.name like '";
		$pos = strpos($ret_array['where'], $where_name);
		if ($pos !== false) {
			$name_begin = $pos + strlen($where_name);
			$name_end = strpos($ret_array['where'], "%'", $name_begin);
			$name = substr($ret_array['where'], intval($name_begin), $name_end - $name_begin);

			$ret_array['where'] = str_replace("(sphr_object.name like '".$name."%'", "((sphr_object_cstm.name_rus_c like '".$name."%') OR (sphr_object_cstm.name_eng_c like '".$name."%') OR (sphr_object_cstm.name_sp_c like '".$name."%')", $ret_array['where']);
		}
		$where_name = "(sphr_object_cstm.id_object_c like '";
		$pos = strpos($ret_array['where'], $where_name);
		if ($pos !== false) {
			$name_begin = $pos + strlen($where_name);
			$name_end = strpos($ret_array['where'], "%'", $name_begin);
			$name = substr($ret_array['where'], intval($name_begin), $name_end - $name_begin);

			$ret_array['where'] = str_replace("(sphr_object_cstm.id_object_c like '".$name."%'", "(sphr_object_cstm.id_object_c like '".$name."'", $ret_array['where']);
		}

		//$ret_array['where'] = str_replace("sphr_object_cstm.province_select_c", "sphr_object_cstm.province_c", $ret_array['where']);
		//$ret_array['where'] = str_replace("sphr_object_cstm.coast_select_c", "sphr_object_cstm.coast_c", $ret_array['where']);
		//$ret_array['where'] = str_replace("sphr_object_cstm.community_select_c", "sphr_object_cstm.community_c", $ret_array['where']);

  		 // for search price_sale by budjet_c
		if ( preg_match("/sphr_object_cstm.budjet_c in \('price([0-9_]+?)'\)/",$ret_array['where'],$res) ) {
            $price = explode('_',$res[1]);
            $where_price = 'sphr_object_cstm.price_sale_int_c >='.$price[0]*1000;
            if (isset($price[1]))
            	$where_price.= ' AND sphr_object_cstm.price_sale_int_c <='.$price[1]*1000;
           $ret_array['where'] = str_replace($res[0],$where_price,$ret_array['where']);
		}
		return $ret_array;
	}

}
?>