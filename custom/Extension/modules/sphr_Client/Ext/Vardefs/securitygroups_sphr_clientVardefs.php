<?php

$dictionary['sphr_Client']['fields']['SecurityGroups'] = array (
  	'name' => 'SecurityGroups',
        'type' => 'link',
	'relationship' => 'securitygroups_sphr_client',
	'module'=>'SecurityGroups',
	'bean_name'=>'SecurityGroup',
        'source'=>'non-db',
	'vname'=>'LBL_SECURITYGROUPS',
);


?>

