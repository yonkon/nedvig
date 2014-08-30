<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
 
class OpportunitiesSaveLogicHook {
 
    function updatePaymentObject(&$bean, $event, $arguments) 
	{
		global $db;
		$result = $db->query('SELECT id FROM opportunities WHERE id = "'. $bean->id .'"');
		$new_opp = ($db->getRowCount($result) == 0 );
		$object_changed = false;
		$object_id = $bean->sphr_objec388d_object_ida;
		if (isset($bean->rel_fields_before_value['sphr_objec388d_object_ida']))
		{
			if ($bean->rel_fields_before_value['sphr_objec388d_object_ida'] != $object_id) $object_changed = true;
		}
		if ( !empty($object_id) && ($new_opp || $object_changed)) //если был выбран новый объект
		{
			$result_payment_object = $db->query('SELECT payment_object FROM sphr_object WHERE id = "'.$object_id.'"');
			$row_payment_object = $db->fetchByAssoc($result_payment_object);
			$bean->payment_object = $row_payment_object['payment_object'];
		}
	}
}
?>