<?php 
 //WARNING: The contents of this file are auto-generated


 // created: 2011-10-27 10:24:12

 

 // created: 2011-10-27 10:24:12

 


$dictionary["User"]["fields"]["SecurityGroups"] = array (
	'name' => 'SecurityGroups',
	'type' => 'link',
	'relationship' => 'securitygroups_users',
	'source' => 'non-db',
	'module' => 'SecurityGroups',
	'bean_name' => 'SecurityGroup',
	'vname' => 'LBL_SECURITYGROUPS',
);	
		
$dictionary["User"]["fields"]['securitygroup_noninher_fields'] = array (
	'name' => 'securitygroup_noninher_fields',
	'rname' => 'id',
	'relationship_fields'=>array('id' => 'securitygroup_noninherit_id', 'noninheritable' => 'securitygroup_noninheritable'),
	'vname' => 'LBL_USER_NAME',
	'type' => 'relate',
	'link' => 'SecurityGroups',			
	'link_type' => 'relationship_info',
	'source' => 'non-db',
	'Importable' => false,
	'duplicate_merge'=> 'disabled',

);
		
		
$dictionary["User"]["fields"]['securitygroup_noninherit_id'] = array(
	'name' => 'securitygroup_noninherit_id',
	'type' => 'varchar',
	'source' => 'non-db',
	'vname' => 'LBL_securitygroup_noninherit_id',
);

$dictionary["User"]["fields"]['securitygroup_noninheritable'] = array(
	'name' => 'securitygroup_noninheritable',
	'type' => 'bool',
	'source' => 'non-db',
	'vname' => 'LBL_SECURITYGROUP_NONINHERITABLE',
);




 // created: 2011-10-27 10:24:12

 
?>