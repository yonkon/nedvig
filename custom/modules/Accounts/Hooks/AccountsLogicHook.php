<?php

class AccountsLogicHook{
    function accounts_agents_Delete(SugarBean $bean, $event, $arguments){
    	$bean->accounts_agents_delete();    }
    function accounts_agents_Restore(SugarBean $bean, $event, $arguments){
    	$bean->accounts_agents_to_db();
    }
}

?>