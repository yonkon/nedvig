<?php
$subaction = $_REQUEST['subaction'];
if($subaction == '') $subaction = 'List';
if( $subaction == 'Save'){	$content = $this->bean->relate_accounts_agents_save();
};
if( $subaction=='List'){
	$content = $this->bean->relate_accounts_agents_load_list();

};
if( $subaction=='Detail'){
	$content = $this->bean->relate_accounts_agents_load_detail();

};
echo json_encode($content);



?>