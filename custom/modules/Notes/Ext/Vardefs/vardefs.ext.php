<?php 
 //WARNING: The contents of this file are auto-generated



$dictionary['Note']['fields']['SecurityGroups'] = array (
  	'name' => 'SecurityGroups',
    'type' => 'link',
	'relationship' => 'securitygroups_notes',
	'module'=>'SecurityGroups',
	'bean_name'=>'SecurityGroup',
    'source'=>'non-db',
	'vname'=>'LBL_SECURITYGROUPS',
);






 // created: 2012-08-15 17:16:30

 

 // created: 2012-08-15 14:13:22
$dictionary['Note']['fields']['description']['cols']='45';
$dictionary['Note']['fields']['description']['rows']='20';

 

// created: 2011-08-14 19:49:27
$dictionary["Note"]["fields"]["opportunities_activities_notes"] = array (
  'name' => 'opportunities_activities_notes',
  'type' => 'link',
  'relationship' => 'opportunities_activities_notes',
  'source' => 'non-db',
);


// created: 2011-07-15 18:26:17
$dictionary["Note"]["fields"]["sphr_object_notes"] = array (
  'name' => 'sphr_object_notes',
  'type' => 'link',
  'relationship' => 'sphr_object_notes',
  'source' => 'non-db',
  'vname' => 'LBL_SPHR_OBJECT_NOTES_FROM_SPHR_OBJECT_TITLE',
);
$dictionary["Note"]["fields"]["sphr_object_notes_name"] = array (
  'name' => 'sphr_object_notes_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_SPHR_OBJECT_NOTES_FROM_SPHR_OBJECT_TITLE',
  'save' => true,
  'id_name' => 'sphr_objec205c_object_ida',
  'link' => 'sphr_object_notes',
  'table' => 'sphr_object',
  'module' => 'sphr_Object',
  'rname' => 'name',
);
$dictionary["Note"]["fields"]["sphr_objec205c_object_ida"] = array (
  'name' => 'sphr_objec205c_object_ida',
  'type' => 'link',
  'relationship' => 'sphr_object_notes',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_SPHR_OBJECT_NOTES_FROM_NOTES_TITLE',
);


// created: 2012-04-18 09:36:31
$dictionary["Note"]["fields"]["sphr_client_activities_notes"] = array (
  'name' => 'sphr_client_activities_notes',
  'type' => 'link',
  'relationship' => 'sphr_client_activities_notes',
  'source' => 'non-db',
);


// created: 2012-06-14 17:11:24
$dictionary["Note"]["fields"]["accounts_activities_notes"] = array (
  'name' => 'accounts_activities_notes',
  'type' => 'link',
  'relationship' => 'accounts_activities_notes',
  'source' => 'non-db',
);


// created: 2011-07-15 18:27:42
$dictionary["Note"]["fields"]["sphr_deal_activities_notes"] = array (
  'name' => 'sphr_deal_activities_notes',
  'type' => 'link',
  'relationship' => 'sphr_deal_activities_notes',
  'source' => 'non-db',
);

?>