<?php
require_once('modules/Accounts/Account.php');

class AccountsAgentsLogicHook{


    function relate_accounts_agents_save(SugarBean $bean, $event, $arguments){    	$account= new Account();        $relates=$_REQUEST['accounts_agents_names'];
        $account->relate_accounts_agents_delete($bean->id,$bean->module_dir);
        for ($i=0;$i<count($relates);$i++){        	$relate_field=$_REQUEST[$relates[$i].'_field'];
        	$id_a=$_REQUEST[$relate_field];
        	$id_aa=$_REQUEST[$relates[$i].'_accounts_agent'];
            $account->relate_accounts_agents_save($bean->id,$bean->module_dir,$id_a,$id_aa);
        }

    }
    function relate_accounts_agents_delete(SugarBean $bean, $event, $arguments){
    	$account= new Account();
    	$account->relate_accounts_agents_delete($bean->id,$bean->module_dir);

    }

}
?>