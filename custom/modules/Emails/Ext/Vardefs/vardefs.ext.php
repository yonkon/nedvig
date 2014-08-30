<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2012-04-18 09:36:33
$dictionary["Email"]["fields"]["sphr_client_activities_emails"] = array (
  'name' => 'sphr_client_activities_emails',
  'type' => 'link',
  'relationship' => 'sphr_client_activities_emails',
  'source' => 'non-db',
);


// created: 2012-06-14 17:11:26
$dictionary["Email"]["fields"]["accounts_activities_emails"] = array (
  'name' => 'accounts_activities_emails',
  'type' => 'link',
  'relationship' => 'accounts_activities_emails',
  'source' => 'non-db',
);


// created: 2011-07-15 18:27:42
$dictionary["Email"]["fields"]["sphr_deal_activities_emails"] = array (
  'name' => 'sphr_deal_activities_emails',
  'type' => 'link',
  'relationship' => 'sphr_deal_activities_emails',
  'source' => 'non-db',
);



$dictionary['Email']['fields']['SecurityGroups'] = array (
  	'name' => 'SecurityGroups',
    'type' => 'link',
	'relationship' => 'securitygroups_emails',
	'module'=>'SecurityGroups',
	'bean_name'=>'SecurityGroup',
    'source'=>'non-db',
	'vname'=>'LBL_SECURITYGROUPS',
);






//filed
/* relationship collection attributes */
		/* added to support InboundEmail */
 $dictionary['Email']['fields']['sphr_client']	= array (
			'name'			=> 'sphr_client',
			'vname'			=> 'LBL_EMAILS_SPHR_CLIENT_REL',
			'type'			=> 'link',
			'relationship'	=> 'emails_sphr_client_rel',
			'module'		=> 'sphr_Client',
			'bean_name'		=> 'sphr_client',
			'source'		=> 'non-db',
		);


//relationship
$dictionary['Email']['relationships']['emails_sphr_client_rel'] =
  array (
  	'lhs_module' => 'Emails',
    'lhs_table' => 'emails',
    'lhs_key' => 'id',
    'rhs_module' => 'sphr_Client',
    'rhs_table' => 'sphr_client',
    'rhs_key' => 'id',
    'join_table' => 'emails_beans',
    'join_key_lhs' => 'email_id',
    'join_key_rhs' => 'bean_id',
    'relationship_type' => 'many-to-many',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'sphr_Client',
    'reverse' => '0',
    'deleted' => '0',
  );




// created: 2011-08-14 19:49:28
$dictionary["Email"]["fields"]["opportunities_activities_emails"] = array (
  'name' => 'opportunities_activities_emails',
  'type' => 'link',
  'relationship' => 'opportunities_activities_emails',
  'source' => 'non-db',
);

?>