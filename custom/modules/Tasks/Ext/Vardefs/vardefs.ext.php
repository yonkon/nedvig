<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2011-08-14 19:49:27
$dictionary["Task"]["fields"]["opportunities_activities_tasks"] = array (
  'name' => 'opportunities_activities_tasks',
  'type' => 'link',
  'relationship' => 'opportunities_activities_tasks',
  'source' => 'non-db',
);


// created: 2012-04-18 09:36:32
$dictionary["Task"]["fields"]["sphr_client_activities_tasks"] = array (
  'name' => 'sphr_client_activities_tasks',
  'type' => 'link',
  'relationship' => 'sphr_client_activities_tasks',
  'source' => 'non-db',
);


// created: 2011-07-15 18:27:42
$dictionary["Task"]["fields"]["sphr_deal_activities_tasks"] = array (
  'name' => 'sphr_deal_activities_tasks',
  'type' => 'link',
  'relationship' => 'sphr_deal_activities_tasks',
  'source' => 'non-db',
);


// created: 2012-06-14 17:11:25
$dictionary["Task"]["fields"]["accounts_activities_tasks"] = array (
  'name' => 'accounts_activities_tasks',
  'type' => 'link',
  'relationship' => 'accounts_activities_tasks',
  'source' => 'non-db',
);


 // created: 2012-08-15 19:18:37

 


$dictionary['Task']['fields']['SecurityGroups'] = array (
  	'name' => 'SecurityGroups',
    'type' => 'link',
	'relationship' => 'securitygroups_tasks',
	'module'=>'SecurityGroups',
	'bean_name'=>'SecurityGroup',
    'source'=>'non-db',
	'vname'=>'LBL_SECURITYGROUPS',
);





?>