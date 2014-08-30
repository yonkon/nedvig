<?php 
 //WARNING: The contents of this file are auto-generated



$dictionary['Meeting']['fields']['SecurityGroups'] = array (
  	'name' => 'SecurityGroups',
    'type' => 'link',
	'relationship' => 'securitygroups_meetings',
	'module'=>'SecurityGroups',
	'bean_name'=>'SecurityGroup',
    'source'=>'non-db',
	'vname'=>'LBL_SECURITYGROUPS',
);






// created: 2011-08-14 19:49:56
$dictionary["Meeting"]["fields"]["opportunities_meetings"] = array (
  'name' => 'opportunities_meetings',
  'type' => 'link',
  'relationship' => 'opportunities_meetings',
  'source' => 'non-db',
  'vname' => 'LBL_OPPORTUNITIES_MEETINGS_FROM_OPPORTUNITIES_TITLE',
);
$dictionary["Meeting"]["fields"]["opportuniti_meetings_name"] = array (
  'name' => 'opportuniti_meetings_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_OPPORTUNITIES_MEETINGS_FROM_OPPORTUNITIES_TITLE',
  'save' => true,
  'id_name' => 'opportunit0579unities_ida',
  'link' => 'opportunities_meetings',
  'table' => 'opportunities',
  'module' => 'Opportunities',
  'rname' => 'name',
);
$dictionary["Meeting"]["fields"]["opportunit0579unities_ida"] = array (
  'name' => 'opportunit0579unities_ida',
  'type' => 'link',
  'relationship' => 'opportunities_meetings',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_OPPORTUNITIES_MEETINGS_FROM_MEETINGS_TITLE',
);


 // created: 2011-08-02 19:09:14

 

// created: 2011-08-14 19:49:26
$dictionary["Meeting"]["fields"]["opportunities_activities_meetings"] = array (
  'name' => 'opportunities_activities_meetings',
  'type' => 'link',
  'relationship' => 'opportunities_activities_meetings',
  'source' => 'non-db',
);


// created: 2011-07-15 18:27:42
$dictionary["Meeting"]["fields"]["sphr_deal_activities_meetings"] = array (
  'name' => 'sphr_deal_activities_meetings',
  'type' => 'link',
  'relationship' => 'sphr_deal_activities_meetings',
  'source' => 'non-db',
);


 // created: 2012-08-15 19:19:56

 

// created: 2012-06-14 17:11:23
$dictionary["Meeting"]["fields"]["accounts_activities_meetings"] = array (
  'name' => 'accounts_activities_meetings',
  'type' => 'link',
  'relationship' => 'accounts_activities_meetings',
  'source' => 'non-db',
);


// created: 2012-04-18 09:36:31
$dictionary["Meeting"]["fields"]["sphr_client_activities_meetings"] = array (
  'name' => 'sphr_client_activities_meetings',
  'type' => 'link',
  'relationship' => 'sphr_client_activities_meetings',
  'source' => 'non-db',
);

?>