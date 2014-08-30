<?php
class market_company_logic_hook
{
    function calc_fields(&$bean, $event, $arguments=null)
    { 
		global $db;
		
		$query = 'SELECT COALESCE(SUM(ch_c.budget_plan_c), 0) AS sum_budget_plan,
		COALESCE(SUM(ch_c.budget_fact_c), 0) AS sum_budget_fact
		FROM sphr_market_channel AS ch
		INNER JOIN sphr_market_channel_cstm AS ch_c ON (ch.id = ch_c.id_c)
		INNER JOIN sphr_marketrket_channel_c AS co_ch ON (co_ch.sphr_marke4757channel_idb = ch.id)
		WHERE (ch.deleted = 0) AND (co_ch.deleted = 0) AND (co_ch.sphr_markef954company_ida = "'.$bean->id.'")';
		$result = $db->query($query);
		if (($row = $db->fetchByAssoc($result)) != null)
		{ 
			$bean->budget_plan = round($row['sum_budget_plan'], 2);
			$bean->budget_fact = round($row['sum_budget_fact'], 2);
		}
    }
}
?>