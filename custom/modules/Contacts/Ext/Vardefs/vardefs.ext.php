<?php 
 //WARNING: The contents of this file are auto-generated



$dictionary['Contact']['fields']['SecurityGroups'] = array (
  	'name' => 'SecurityGroups',
    'type' => 'link',
	'relationship' => 'securitygroups_contacts',
	'module'=>'SecurityGroups',
	'bean_name'=>'SecurityGroup',
    'source'=>'non-db',
	'vname'=>'LBL_SECURITYGROUPS',
);






// created: 2011-08-16 16:18:02
$dictionary["Contact"]["fields"]["opportunities_contacts_1"] = array (
  'name' => 'opportunities_contacts_1',
  'type' => 'link',
  'relationship' => 'opportunities_contacts_1',
  'source' => 'non-db',
  'vname' => 'LBL_OPPORTUNITIES_CONTACTS_1_FROM_OPPORTUNITIES_TITLE',
);


// created: 2011-08-16 16:48:39
$dictionary["Contact"]["fields"]["contacts_contacts"] = array (
  'name' => 'contacts_contacts',
  'type' => 'link',
  'relationship' => 'contacts_contacts',
  'source' => 'non-db',
  'vname' => 'LBL_CONTACTS_CONTACTS_FROM_CONTACTS_L_TITLE',
);
$dictionary["Contact"]["fields"]["contacts_contacts"] = array (
  'name' => 'contacts_contacts',
  'type' => 'link',
  'relationship' => 'contacts_contacts',
  'source' => 'non-db',
  'vname' => 'LBL_CONTACTS_CONTACTS_FROM_CONTACTS_R_TITLE',
);


// created: 2011-08-16 16:19:20
$dictionary["Contact"]["fields"]["opportunities_contacts_2"] = array (
  'name' => 'opportunities_contacts_2',
  'type' => 'link',
  'relationship' => 'opportunities_contacts_2',
  'source' => 'non-db',
  'vname' => 'LBL_OPPORTUNITIES_CONTACTS_2_FROM_OPPORTUNITIES_TITLE',
);


// created: 2011-08-16 17:50:38
$dictionary["Contact"]["fields"]["sphr_developer_contacts"] = array (
  'name' => 'sphr_developer_contacts',
  'type' => 'link',
  'relationship' => 'sphr_developer_contacts',
  'source' => 'non-db',
  'vname' => 'LBL_SPHR_DEVELOPER_CONTACTS_FROM_SPHR_DEVELOPER_TITLE',
);
$dictionary["Contact"]["fields"]["sphr_develo_contacts_name"] = array (
  'name' => 'sphr_develo_contacts_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_SPHR_DEVELOPER_CONTACTS_FROM_SPHR_DEVELOPER_TITLE',
  'save' => true,
  'id_name' => 'sphr_devel5fa8veloper_ida',
  'link' => 'sphr_developer_contacts',
  'table' => 'sphr_developer',
  'module' => 'sphr_Developer',
  'rname' => 'name',
);
$dictionary["Contact"]["fields"]["sphr_devel5fa8veloper_ida"] = array (
  'name' => 'sphr_devel5fa8veloper_ida',
  'type' => 'link',
  'relationship' => 'sphr_developer_contacts',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_SPHR_DEVELOPER_CONTACTS_FROM_CONTACTS_TITLE',
);

?>