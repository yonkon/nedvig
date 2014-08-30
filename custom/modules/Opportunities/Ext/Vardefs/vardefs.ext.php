<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2012-08-08 20:36:01
$dictionary["Opportunity"]["fields"]["opportunities_sphr_object"] = array (
  'name' => 'opportunities_sphr_object',
  'type' => 'link',
  'relationship' => 'opportunities_sphr_object',
  'source' => 'non-db',
  'vname' => 'LBL_OPPORTUNITIES_SPHR_OBJECT_FROM_SPHR_OBJECT_TITLE',
);



$dictionary['Opportunity']['fields']['SecurityGroups'] = array (
  	'name' => 'SecurityGroups',
    'type' => 'link',
	'relationship' => 'securitygroups_opportunities',
	'module'=>'SecurityGroups',
	'bean_name'=>'SecurityGroup',
    'source'=>'non-db',
	'vname'=>'LBL_SECURITYGROUPS',
);






 // created: 2011-08-11 21:24:36

 

// created: 2011-08-14 19:49:27
$dictionary["Opportunity"]["fields"]["opportunities_activities_notes"] = array (
  'name' => 'opportunities_activities_notes',
  'type' => 'link',
  'relationship' => 'opportunities_activities_notes',
  'source' => 'non-db',
);


// created: 2011-08-14 20:21:50
$dictionary["Opportunity"]["fields"]["sphr_object_opportunities"] = array (
  'name' => 'sphr_object_opportunities',
  'type' => 'link',
  'relationship' => 'sphr_object_opportunities',
  'source' => 'non-db',
  'vname' => 'LBL_SPHR_OBJECT_OPPORTUNITIES_FROM_SPHR_OBJECT_TITLE',
);
$dictionary["Opportunity"]["fields"]["sphr_objectrtunities_name"] = array (
  'name' => 'sphr_objectrtunities_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_SPHR_OBJECT_OPPORTUNITIES_FROM_SPHR_OBJECT_TITLE',
  'save' => true,
  'id_name' => 'sphr_objec388d_object_ida',
  'link' => 'sphr_object_opportunities',
  'table' => 'sphr_object',
  'module' => 'sphr_Object',
  'rname' => 'name',
);
$dictionary["Opportunity"]["fields"]["sphr_objec388d_object_ida"] = array (
  'name' => 'sphr_objec388d_object_ida',
  'type' => 'link',
  'relationship' => 'sphr_object_opportunities',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_SPHR_OBJECT_OPPORTUNITIES_FROM_OPPORTUNITIES_TITLE',
);


// created: 2011-08-14 20:16:47
$dictionary["Opportunity"]["fields"]["sphr_interm_opportunities"] = array (
  'name' => 'sphr_interm_opportunities',
  'type' => 'link',
  'relationship' => 'sphr_intermediary_opportunities',
  'source' => 'non-db',
  'vname' => 'LBL_SPHR_INTERMEDIARY_OPPORTUNITIES_FROM_SPHR_INTERMEDIARY_TITLE',
);
$dictionary["Opportunity"]["fields"]["sphr_intermrtunities_name"] = array (
  'name' => 'sphr_intermrtunities_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_SPHR_INTERMEDIARY_OPPORTUNITIES_FROM_SPHR_INTERMEDIARY_TITLE',
  'save' => true,
  'id_name' => 'sphr_interf513mediary_ida',
  'link' => 'sphr_interm_opportunities',
  'table' => 'sphr_intermediary',
  'module' => 'sphr_Intermediary',
  'rname' => 'name',
);
$dictionary["Opportunity"]["fields"]["sphr_interf513mediary_ida"] = array (
  'name' => 'sphr_interf513mediary_ida',
  'type' => 'link',
  'relationship' => 'sphr_intermediary_opportunities',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_SPHR_INTERMEDIARY_OPPORTUNITIES_FROM_OPPORTUNITIES_TITLE',
);


 // created: 2011-08-11 21:21:34

 

$dictionary["Opportunity"]["fields"]['payment_object'] = array 
(
    'required' => false,
    'name' => 'payment_object',
    'vname' => 'LBL_PAYMENT_OBJECT',
    'type' => 'varchar',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'reportable' => true,
    'len' => '100',
    'size' => '20',
);


// created: 2011-08-16 16:19:20
$dictionary["Opportunity"]["fields"]["opportunities_contacts_2"] = array (
  'name' => 'opportunities_contacts_2',
  'type' => 'link',
  'relationship' => 'opportunities_contacts_2',
  'source' => 'non-db',
  'vname' => 'LBL_OPPORTUNITIES_CONTACTS_2_FROM_CONTACTS_TITLE',
);


// created: 2011-08-14 19:49:28
$dictionary["Opportunity"]["fields"]["opportunities_activities_emails"] = array (
  'name' => 'opportunities_activities_emails',
  'type' => 'link',
  'relationship' => 'opportunities_activities_emails',
  'source' => 'non-db',
);


// created: 2012-08-07 16:31:13
$dictionary["Opportunity"]["fields"]["opportunities_sphr_client"] = array (
  'name' => 'opportunities_sphr_client',
  'type' => 'link',
  'relationship' => 'opportunities_sphr_client',
  'source' => 'non-db',
  'vname' => 'LBL_OPPORTUNITIES_SPHR_CLIENT_FROM_SPHR_CLIENT_TITLE',
);


// created: 2011-08-14 19:49:26
$dictionary["Opportunity"]["fields"]["opportunities_activities_meetings"] = array (
  'name' => 'opportunities_activities_meetings',
  'type' => 'link',
  'relationship' => 'opportunities_activities_meetings',
  'source' => 'non-db',
);


// created: 2011-08-14 19:41:36
$dictionary["Opportunity"]["fields"]["opportunitir_intermediary"] = array (
  'name' => 'opportunitir_intermediary',
  'type' => 'link',
  'relationship' => 'opportunities_sphr_intermediary',
  'source' => 'non-db',
  'side' => 'right',
  'vname' => 'LBL_OPPORTUNITIES_SPHR_INTERMEDIARY_FROM_SPHR_INTERMEDIARY_TITLE',
);


// created: 2011-08-14 19:49:56
$dictionary["Opportunity"]["fields"]["opportunities_meetings"] = array (
  'name' => 'opportunities_meetings',
  'type' => 'link',
  'relationship' => 'opportunities_meetings',
  'source' => 'non-db',
  'side' => 'right',
  'vname' => 'LBL_OPPORTUNITIES_MEETINGS_FROM_MEETINGS_TITLE',
);


// created: 2011-08-14 19:49:27
$dictionary["Opportunity"]["fields"]["opportunities_activities_tasks"] = array (
  'name' => 'opportunities_activities_tasks',
  'type' => 'link',
  'relationship' => 'opportunities_activities_tasks',
  'source' => 'non-db',
);


// created: 2011-08-16 16:18:02
$dictionary["Opportunity"]["fields"]["opportunities_contacts_1"] = array (
  'name' => 'opportunities_contacts_1',
  'type' => 'link',
  'relationship' => 'opportunities_contacts_1',
  'source' => 'non-db',
  'vname' => 'LBL_OPPORTUNITIES_CONTACTS_1_FROM_CONTACTS_TITLE',
);


// created: 2011-08-14 19:52:53
$dictionary["Opportunity"]["fields"]["sphr_client_opportunities"] = array (
  'name' => 'sphr_client_opportunities',
  'type' => 'link',
  'relationship' => 'sphr_client_opportunities',
  'source' => 'non-db',
  'vname' => 'LBL_SPHR_CLIENT_OPPORTUNITIES_FROM_SPHR_CLIENT_TITLE',
);
$dictionary["Opportunity"]["fields"]["sphr_clientrtunities_name"] = array (
  'name' => 'sphr_clientrtunities_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_SPHR_CLIENT_OPPORTUNITIES_FROM_SPHR_CLIENT_TITLE',
  'save' => true,
  'id_name' => 'sphr_clien0590_client_ida',
  'link' => 'sphr_client_opportunities',
  'table' => 'sphr_client',
  'module' => 'sphr_Client',
  'rname' => 'name',
);
$dictionary["Opportunity"]["fields"]["sphr_clien0590_client_ida"] = array (
  'name' => 'sphr_clien0590_client_ida',
  'type' => 'link',
  'relationship' => 'sphr_client_opportunities',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_SPHR_CLIENT_OPPORTUNITIES_FROM_OPPORTUNITIES_TITLE',
);


// created: 2011-08-14 19:49:26
$dictionary["Opportunity"]["fields"]["opportunities_activities_calls"] = array (
  'name' => 'opportunities_activities_calls',
  'type' => 'link',
  'relationship' => 'opportunities_activities_calls',
  'source' => 'non-db',
);

?>