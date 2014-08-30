<?php

class cosib_messagesLogicHook{
    function answers_Delete(SugarBean $bean, $event, $arguments){
    	$bean->answers_DeleteRestore(1);    }
    function answers_Restore(SugarBean $bean, $event, $arguments){
    	$bean->answers_DeleteRestore(0);
    }
}

?>