<?php 
 //WARNING: The contents of this file are auto-generated


 // created: 2012-08-13 16:26:17

 

 // created: 2011-07-16 10:17:40
$dictionary['sphr_Client']['fields']['name_general_director']['required']=false;

 

 // created: 2012-10-18 13:06:13

 


$dictionary['sphr_Client']['fields']['SecurityGroups'] = array (
  	'name' => 'SecurityGroups',
        'type' => 'link',
	'relationship' => 'securitygroups_sphr_client',
	'module'=>'SecurityGroups',
	'bean_name'=>'SecurityGroup',
        'source'=>'non-db',
	'vname'=>'LBL_SECURITYGROUPS',
);






 // created: 2012-04-08 14:11:50

 

 // created: 2011-08-11 19:07:47

 

// created: 2011-07-20 00:02:51
$dictionary["sphr_Client"]["fields"]["sphr_clientnspection_tour"] = array (
  'name' => 'sphr_clientnspection_tour',
  'type' => 'link',
  'relationship' => 'sphr_client_sphr_inspection_tour',
  'source' => 'non-db',
  'side' => 'right',
  'vname' => 'LBL_SPHR_CLIENT_SPHR_INSPECTION_TOUR_FROM_SPHR_INSPECTION_TOUR_TITLE',
);


 // created: 2012-08-14 07:56:49

 

 // created: 2012-08-15 10:58:28
$dictionary['sphr_Client']['fields']['phone_fax']['len']='200';

 

// created: 2012-04-18 09:36:31
$dictionary["sphr_Client"]["fields"]["sphr_client_activities_meetings"] = array (
  'name' => 'sphr_client_activities_meetings',
  'type' => 'link',
  'relationship' => 'sphr_client_activities_meetings',
  'source' => 'non-db',
);


$dictionary['sphr_Client']['fields']['emails'] =
  array (
    'name' => 'emails',
    'type' => 'link',
    'relationship' => 'emails_sphr_client_rel', /* reldef in emails */
    'module'=>'Emails',
    'bean_name'=>'Email',
    'source'=>'non-db',
    'vname'=>'LBL_EMAILS',
  );


// created: 2011-07-20 00:03:38
$dictionary["sphr_Client"]["fields"]["sphr_clientpection_tour_3"] = array (
  'name' => 'sphr_clientpection_tour_3',
  'type' => 'link',
  'relationship' => 'sphr_client_sphr_inspection_tour_3',
  'source' => 'non-db',
  'side' => 'right',
  'vname' => 'LBL_SPHR_CLIENT_SPHR_INSPECTION_TOUR_3_FROM_SPHR_INSPECTION_TOUR_TITLE',
);


 // created: 2012-07-02 19:38:49

 

 // created: 2012-04-06 16:02:07

 

 // created: 2011-08-23 20:21:57

 

 // created: 2012-04-18 10:45:34
$dictionary['sphr_Client']['fields']['phone_home']['len']='20';
$dictionary['sphr_Client']['fields']['phone_home']['audited']=true;

 

 // created: 2012-08-13 16:25:21
$dictionary['sphr_Client']['fields']['last_name']['required']=false;
$dictionary['sphr_Client']['fields']['last_name']['len']='200';

 

 // created: 2014-08-06 18:49:13

 

// created: 2012-08-07 16:31:13
$dictionary["sphr_Client"]["fields"]["opportunities_sphr_client"] = array (
  'name' => 'opportunities_sphr_client',
  'type' => 'link',
  'relationship' => 'opportunities_sphr_client',
  'source' => 'non-db',
  'vname' => 'LBL_OPPORTUNITIES_SPHR_CLIENT_FROM_OPPORTUNITIES_TITLE',
);


// created: 2011-07-20 00:03:23
$dictionary["sphr_Client"]["fields"]["sphr_clientpection_tour_2"] = array (
  'name' => 'sphr_clientpection_tour_2',
  'type' => 'link',
  'relationship' => 'sphr_client_sphr_inspection_tour_2',
  'source' => 'non-db',
  'side' => 'right',
  'vname' => 'LBL_SPHR_CLIENT_SPHR_INSPECTION_TOUR_2_FROM_SPHR_INSPECTION_TOUR_TITLE',
);


 // created: 2012-04-18 10:46:00
$dictionary['sphr_Client']['fields']['phone_work']['len']='20';
$dictionary['sphr_Client']['fields']['phone_work']['audited']=true;

 

// created: 2012-08-07 16:26:44
$dictionary["sphr_Client"]["fields"]["sphr_inspecur_sphr_client"] = array (
  'name' => 'sphr_inspecur_sphr_client',
  'type' => 'link',
  'relationship' => 'sphr_inspection_tour_sphr_client',
  'source' => 'non-db',
  'vname' => 'LBL_SPHR_INSPECTION_TOUR_SPHR_CLIENT_FROM_SPHR_INSPECTION_TOUR_TITLE',
);


 // created: 2011-07-24 16:08:17
$dictionary['sphr_Client']['fields']['date_entered']['required']=true;

 

 // created: 2012-08-13 15:39:58

 

 // created: 2012-04-08 14:12:00

 

// created: 2012-04-18 09:36:30
$dictionary["sphr_Client"]["fields"]["sphr_client_activities_calls"] = array (
  'name' => 'sphr_client_activities_calls',
  'type' => 'link',
  'relationship' => 'sphr_client_activities_calls',
  'source' => 'non-db',
);


 // created: 2012-04-04 16:27:14

 

 // created: 2012-04-08 14:11:42

 

 // created: 2014-08-06 18:29:56

 

 // created: 2012-08-21 13:46:36

 

 // created: 2012-06-26 17:25:06

 

// created: 2012-04-18 09:33:57
$dictionary["sphr_Client"]["fields"]["sphr_client_sphr_object"] = array (
  'name' => 'sphr_client_sphr_object',
  'type' => 'link',
  'relationship' => 'sphr_client_sphr_object',
  'source' => 'non-db',
  'vname' => 'LBL_SPHR_CLIENT_SPHR_OBJECT_FROM_SPHR_OBJECT_TITLE',
);


// created: 2011-07-15 12:27:48
$dictionary["sphr_Client"]["fields"]["sphr_client_sphr_deal"] = array (
  'name' => 'sphr_client_sphr_deal',
  'type' => 'link',
  'relationship' => 'sphr_client_sphr_deal',
  'source' => 'non-db',
  'side' => 'right',
  'vname' => 'LBL_SPHR_CLIENT_SPHR_DEAL_FROM_SPHR_DEAL_TITLE',
);


 // created: 2012-04-06 16:02:22
$dictionary['sphr_Client']['fields']['status_description']['audited']=true;
$dictionary['sphr_Client']['fields']['status_description']['cols']='50';
$dictionary['sphr_Client']['fields']['status_description']['rows']='6';

 

// created: 2012-04-18 09:36:32
$dictionary["sphr_Client"]["fields"]["sphr_client_activities_tasks"] = array (
  'name' => 'sphr_client_activities_tasks',
  'type' => 'link',
  'relationship' => 'sphr_client_activities_tasks',
  'source' => 'non-db',
);


// created: 2011-11-27 15:19:25
$dictionary["sphr_Client"]["fields"]["sphr_marketel_sphr_client"] = array (
  'name' => 'sphr_marketel_sphr_client',
  'type' => 'link',
  'relationship' => 'sphr_market_channel_sphr_client',
  'source' => 'non-db',
  'vname' => 'LBL_SPHR_MARKET_CHANNEL_SPHR_CLIENT_FROM_SPHR_MARKET_CHANNEL_TITLE',
);


 // created: 2012-04-18 10:45:49
$dictionary['sphr_Client']['fields']['phone_mobile']['len']='20';
$dictionary['sphr_Client']['fields']['phone_mobile']['audited']=true;

 

// created: 2011-08-14 19:52:53
$dictionary["sphr_Client"]["fields"]["sphr_client_opportunities"] = array (
  'name' => 'sphr_client_opportunities',
  'type' => 'link',
  'relationship' => 'sphr_client_opportunities',
  'source' => 'non-db',
  'side' => 'right',
  'vname' => 'LBL_SPHR_CLIENT_OPPORTUNITIES_FROM_OPPORTUNITIES_TITLE',
);


// created: 2012-06-14 17:02:44
$dictionary["sphr_Client"]["fields"]["accounts_sphr_client"] = array (
  'name' => 'accounts_sphr_client',
  'type' => 'link',
  'relationship' => 'accounts_sphr_client',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_SPHR_CLIENT_FROM_ACCOUNTS_TITLE',
);
$dictionary["sphr_Client"]["fields"]["accounts_sphr_client_name"] = array (
  'name' => 'accounts_sphr_client_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_SPHR_CLIENT_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'accounts_s160fccounts_ida',
  'link' => 'accounts_sphr_client',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["sphr_Client"]["fields"]["accounts_s160fccounts_ida"] = array (
  'name' => 'accounts_s160fccounts_ida',
  'type' => 'link',
  'relationship' => 'accounts_sphr_client',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ACCOUNTS_SPHR_CLIENT_FROM_SPHR_CLIENT_TITLE',
);


 // created: 2011-11-28 09:03:57

 

 // created: 2014-08-06 18:30:11

 

// created: 2012-05-31 11:11:41
$dictionary["sphr_Client"]["fields"]["sphr_client_cosib_queries"] = array (
  'name' => 'sphr_client_cosib_queries',
  'type' => 'link',
  'relationship' => 'sphr_client_cosib_queries',
  'source' => 'non-db',
  'side' => 'right',
  'vname' => 'LBL_SPHR_CLIENT_COSIB_QUERIES_FROM_COSIB_QUERIES_TITLE',
);


// created: 2011-10-31 16:53:17
$dictionary["sphr_Client"]["fields"]["sphr_client_phone_company"] = array (
  'name' => 'sphr_client_phone_company',
  'type' => 'link',
  'relationship' => 'sphr_client_sphr_phone_company',
  'source' => 'non-db',
  'vname' => 'LBL_SPHR_CLIENT_SPHR_PHONE_COMPANY_FROM_SPHR_PHONE_COMPANY_TITLE',
);


// created: 2012-06-22 13:11:07
$dictionary["sphr_Client"]["fields"]["sphr_client_sphr_object_1"] = array (
  'name' => 'sphr_client_sphr_object_1',
  'type' => 'link',
  'relationship' => 'sphr_client_sphr_object_1',
  'source' => 'non-db',
  'side' => 'right',
  'vname' => 'LBL_SPHR_CLIENT_SPHR_OBJECT_1_FROM_SPHR_OBJECT_TITLE',
);


// created: 2012-06-29 10:15:46
$dictionary["sphr_Client"]["fields"]["cosib_clienps_sphr_client"] = array (
  'name' => 'cosib_clienps_sphr_client',
  'type' => 'link',
  'relationship' => 'cosib_client_trips_sphr_client',
  'source' => 'non-db',
  'side' => 'right',
  'vname' => 'LBL_COSIB_CLIENT_TRIPS_SPHR_CLIENT_FROM_COSIB_CLIENT_TRIPS_TITLE',
);


 // created: 2011-08-11 18:45:10
$dictionary['sphr_Client']['fields']['phone']['len']='11';

 

// created: 2012-06-15 11:09:09
$dictionary["sphr_Client"]["fields"]["sphr_clientcosib_messages"] = array (
  'name' => 'sphr_clientcosib_messages',
  'type' => 'link',
  'relationship' => 'sphr_client_cosib_messages',
  'source' => 'non-db',
  'side' => 'right',
  'vname' => 'LBL_SPHR_CLIENT_COSIB_MESSAGES_FROM_COSIB_MESSAGES_TITLE',
);


 // created: 2014-07-16 07:07:28
 $dictionary["sphr_Client"]["fields"]["t_end_c"] = array (
   'source' => 'non-db',
 );

 

// created: 2011-07-20 00:02:59
$dictionary["sphr_Client"]["fields"]["sphr_clientpection_tour_1"] = array (
  'name' => 'sphr_clientpection_tour_1',
  'type' => 'link',
  'relationship' => 'sphr_client_sphr_inspection_tour_1',
  'source' => 'non-db',
  'side' => 'right',
  'vname' => 'LBL_SPHR_CLIENT_SPHR_INSPECTION_TOUR_1_FROM_SPHR_INSPECTION_TOUR_TITLE',
);


 // created: 2012-08-13 16:25:45
$dictionary['sphr_Client']['fields']['email1']['len']='200';

 

 // created: 2012-04-04 16:49:57
$dictionary['sphr_Client']['fields']['description']['cols']='200';

 

 // created: 2012-04-08 15:21:39
$dictionary['sphr_Client']['fields']['address_actual']['required']=false;
$dictionary['sphr_Client']['fields']['address_actual']['len']='200';

 

 // created: 2012-07-02 19:40:13
$dictionary['sphr_Client']['fields']['last_and_middle_name']['required']=true;
$dictionary['sphr_Client']['fields']['last_and_middle_name']['len']='255';

 

 // created: 2011-07-26 21:02:28

 

// created: 2013-03-03 21:04:26
$dictionary["sphr_Client"]["fields"]["sphr_client_prospect_lists"] = array (
  'name' => 'sphr_client_prospect_lists',
  'type' => 'link',
  'relationship' => 'sphr_client_prospect_lists',
  'source' => 'non-db',
  'vname' => 'LBL_SPHR_CLIENT_PROSPECT_LISTS_FROM_PROSPECT_LISTS_TITLE',
);


 // created: 2011-07-24 16:06:32
$dictionary['sphr_Client']['fields']['do_not_call']['audited']=false;

 

 // created: 2012-04-08 14:11:13

 

 // created: 2012-07-02 19:37:49

 

 // created: 2011-11-03 10:48:46

 

// created: 2011-12-18 00:22:36
$dictionary["sphr_Client"]["fields"]["sphr_market_sphr_client_1"] = array (
  'name' => 'sphr_market_sphr_client_1',
  'type' => 'link',
  'relationship' => 'sphr_market_channel_sphr_client_1',
  'source' => 'non-db',
  'vname' => 'LBL_SPHR_MARKET_CHANNEL_SPHR_CLIENT_1_FROM_SPHR_MARKET_CHANNEL_TITLE',
);
$dictionary["sphr_Client"]["fields"]["sphr_market_client_1_name"] = array (
  'name' => 'sphr_market_client_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_SPHR_MARKET_CHANNEL_SPHR_CLIENT_1_FROM_SPHR_MARKET_CHANNEL_TITLE',
  'save' => true,
  'id_name' => 'sphr_marke5c2achannel_ida',
  'link' => 'sphr_market_sphr_client_1',
  'table' => 'sphr_market_channel',
  'module' => 'sphr_market_channel',
  'rname' => 'name',
);
$dictionary["sphr_Client"]["fields"]["sphr_marke5c2achannel_ida"] = array (
  'name' => 'sphr_marke5c2achannel_ida',
  'type' => 'link',
  'relationship' => 'sphr_market_channel_sphr_client_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_SPHR_MARKET_CHANNEL_SPHR_CLIENT_1_FROM_SPHR_CLIENT_TITLE',
);


 // created: 2012-08-13 16:27:22
$dictionary['sphr_Client']['fields']['email']['len']='200';
$dictionary['sphr_Client']['fields']['email']['audited']=true;

 

// created: 2012-04-18 09:35:47
$dictionary["sphr_Client"]["fields"]["sphr_client_documents"] = array (
  'name' => 'sphr_client_documents',
  'type' => 'link',
  'relationship' => 'sphr_client_documents',
  'source' => 'non-db',
  'side' => 'right',
  'vname' => 'LBL_SPHR_CLIENT_DOCUMENTS_FROM_DOCUMENTS_TITLE',
);


// created: 2012-04-18 09:36:33
$dictionary["sphr_Client"]["fields"]["sphr_client_activities_emails"] = array (
  'name' => 'sphr_client_activities_emails',
  'type' => 'link',
  'relationship' => 'sphr_client_activities_emails',
  'source' => 'non-db',
);


// created: 2011-07-15 17:02:16
$dictionary["sphr_Client"]["fields"]["sphr_intermry_sphr_client"] = array (
  'name' => 'sphr_intermry_sphr_client',
  'type' => 'link',
  'relationship' => 'sphr_intermediary_sphr_client',
  'source' => 'non-db',
  'vname' => 'LBL_SPHR_INTERMEDIARY_SPHR_CLIENT_FROM_SPHR_INTERMEDIARY_TITLE',
);
$dictionary["sphr_Client"]["fields"]["sphr_intermhr_client_name"] = array (
  'name' => 'sphr_intermhr_client_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_SPHR_INTERMEDIARY_SPHR_CLIENT_FROM_SPHR_INTERMEDIARY_TITLE',
  'save' => true,
  'id_name' => 'sphr_intera5e4mediary_ida',
  'link' => 'sphr_intermry_sphr_client',
  'table' => 'sphr_intermediary',
  'module' => 'sphr_Intermediary',
  'rname' => 'name',
);
$dictionary["sphr_Client"]["fields"]["sphr_intera5e4mediary_ida"] = array (
  'name' => 'sphr_intera5e4mediary_ida',
  'type' => 'link',
  'relationship' => 'sphr_intermediary_sphr_client',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_SPHR_INTERMEDIARY_SPHR_CLIENT_FROM_SPHR_CLIENT_TITLE',
);


 // created: 2011-07-24 16:08:25
$dictionary['sphr_Client']['fields']['date_modified']['required']=true;

 

 // created: 2012-08-13 16:26:05

 

 // created: 2012-08-13 16:25:05
$dictionary['sphr_Client']['fields']['first_name']['required']=true;
$dictionary['sphr_Client']['fields']['first_name']['len']='200';

 

// created: 2011-11-27 14:30:04
$dictionary["sphr_Client"]["fields"]["sphr_marketny_sphr_client"] = array (
  'name' => 'sphr_marketny_sphr_client',
  'type' => 'link',
  'relationship' => 'sphr_market_company_sphr_client',
  'source' => 'non-db',
  'vname' => 'LBL_SPHR_MARKET_COMPANY_SPHR_CLIENT_FROM_SPHR_MARKET_COMPANY_TITLE',
);


 // created: 2013-03-14 11:34:43
$dictionary['sphr_Client']['fields']['source']['required']=false;
$dictionary['sphr_Client']['fields']['source']['audited']=false;
$dictionary['sphr_Client']['fields']['source']['massupdate']=0;
$dictionary['sphr_Client']['fields']['source']['default']='';

 

 // created: 2012-08-13 19:25:06

 

// created: 2011-07-15 16:54:53
$dictionary["sphr_Client"]["fields"]["sphr_client_sphr_reserve"] = array (
  'name' => 'sphr_client_sphr_reserve',
  'type' => 'link',
  'relationship' => 'sphr_client_sphr_reserve',
  'source' => 'non-db',
  'side' => 'right',
  'vname' => 'LBL_SPHR_CLIENT_SPHR_RESERVE_FROM_SPHR_RESERVE_TITLE',
);


    
$dictionary["sphr_Client"]["relationships"]["prospect_list_sphr_client"] = array (
	'lhs_module' => 'ProspectLists',
	'lhs_table' => 'prospect_lists',
	'lhs_key' => 'id',
	'rhs_module' => 'sphr_Client',
	'rhs_table' => 'sphr_client',
	'rhs_key' => 'id',
	'relationship_type' => 'many-to-many',
	'join_table' => 'prospect_lists_prospects',
	'join_key_lhs' => 'prospect_list_id',
	'join_key_rhs' => 'related_id',
	'relationship_role_column' => 'related_type',
	'relationship_role_column_value' => 'sphr_Client'
);


$dictionary["sphr_Client"]["fields"]["prospect_lists"] = array (
	'name' => 'prospect_lists',
	'type' => 'link',
	'relationship' => 'prospect_list_sphr_client',
    //new
	'module'=>'ProspectLists',
        'source'=>'non-db',
    //new
        'vname'=>'LBL_PROSPECT_LIST',
);




 // created: 2012-08-21 16:15:27

 

// created: 2011-07-15 11:43:49
$dictionary["sphr_Client"]["fields"]["sphr_client_sphr_interest"] = array (
  'name' => 'sphr_client_sphr_interest',
  'type' => 'link',
  'relationship' => 'sphr_client_sphr_interest',
  'source' => 'non-db',
  'side' => 'right',
  'vname' => 'LBL_SPHR_CLIENT_SPHR_INTEREST_FROM_SPHR_INTEREST_TITLE',
);


 // created: 2012-04-18 10:48:19

 

$module = 'sphr_Client';
$dictionary['sphr_Client']['fields']['email1'] = array(
    'name'        => 'email1',
    'vname'        => 'LBL_EMAIL',
    'group'=>'email1',
    'type'        => 'varchar',
    'function'    => array(
    'name'        => 'getEmailAddressWidget',
       'returns'    => 'html'
    ),
    'source'    => 'non-db',
    'studio' => array('editField' => true),
    );

$dictionary['sphr_Client']['fields']['email_addresses_primary'] = array(
    'name' => 'email_addresses_primary',
    'type' => 'link',
    'relationship' => 'sphr_client_email_addresses_primary',
    'source' => 'non-db',
    'vname' => 'LBL_EMAIL_ADDRESS_PRIMARY',
    'duplicate_merge' => 'disabled',
    );

$dictionary['sphr_Client']['fields']['email_addresses'] = array (
    'name' => 'email_addresses',
    'type' => 'link',
    'relationship' => 'sphr_client_email_addresses',
    'source' => 'non-db',
    'vname' => 'LBL_EMAIL_ADDRESSES',
    'reportable'=>false,
    'unified_search' => true,
    'rel_fields' => array('primary_address' => array('type'=>'bool')),
    );

$dictionary['sphr_Client']['relationships']['sphr_client_email_addresses'] = array(
    'lhs_module'=> 'sphr_Client',
    'lhs_table'=> 'sphr_client',
    'lhs_key' => 'id',
    'rhs_module'=> 'EmailAddresses',
    'rhs_table'=> 'email_addresses',
    'rhs_key' => 'id',
    'relationship_type'=>'many-to-many',
    'join_table'=> 'email_addr_bean_rel',
    'join_key_lhs'=>'bean_id',
    'join_key_rhs'=>'email_address_id',
    'relationship_role_column'=>'bean_module',
    'relationship_role_column_value'=>'sphr_Client'
    );

$dictionary['sphr_Client']['relationships']['sphr_client_email_addresses_primary'] = array(
    'lhs_module'=> 'sphr_Client',
    'lhs_table' => 'sphr_client',
    'lhs_key' => 'id',
    'rhs_module' => 'EmailAddresses',
    'rhs_table' => 'email_addresses',
    'rhs_key' => 'id',
    'relationship_type'=>'many-to-many',
    'join_table'=> 'email_addr_bean_rel',
    'join_key_lhs'=>'bean_id',
    'join_key_rhs'=>'email_address_id',
    'relationship_role_column'=>'primary_address',
    'relationship_role_column_value'=>'1'
    );


 // created: 2014-08-11 13:20:18

 


/*full_name*/
$dictionary['sphr_Client']['fields']['name'] =
              array (
                'name' => 'name',
                'rname' => 'name',
                'vname' => 'LBL_NAME',
                'type' => 'name',
                'fields' => array('first_name','last_name'),
                'source' => 'non-db',
                'sort_on' => 'last_name',
                 'db_concat_fields'=> array(0=>'first_name', 1=>'last_name'),
                'len' => '510',
              );



 // created: 2011-07-20 15:47:55
$dictionary['sphr_Client']['fields']['passport_number']['required']=false;

 

 // created: 2014-07-16 07:02:18
 $dictionary["sphr_Client"]["fields"]["t_start_c"] = array (
   'source' => 'non-db',
 );

 

 // created: 2011-08-23 22:25:17
$dictionary['sphr_Client']['fields']['status']['default']='lead';
$dictionary['sphr_Client']['fields']['status']['required']=true;
$dictionary['sphr_Client']['fields']['status']['audited']=true;

 

 // created: 2011-07-24 17:11:40
$dictionary['sphr_Client']['fields']['passport_issue_date']['required']=false;

 

// created: 2012-04-18 09:36:31
$dictionary["sphr_Client"]["fields"]["sphr_client_activities_notes"] = array (
  'name' => 'sphr_client_activities_notes',
  'type' => 'link',
  'relationship' => 'sphr_client_activities_notes',
  'source' => 'non-db',
);


 // created: 2011-08-23 20:23:09

 

// created: 2012-07-05 09:07:38
$dictionary["sphr_Client"]["fields"]["cosib_postsle_sphr_client"] = array (
  'name' => 'cosib_postsle_sphr_client',
  'type' => 'link',
  'relationship' => 'cosib_postsale_sphr_client',
  'source' => 'non-db',
  'vname' => 'LBL_COSIB_POSTSALE_SPHR_CLIENT_FROM_COSIB_POSTSALE_TITLE',
);
$dictionary["sphr_Client"]["fields"]["cosib_postshr_client_name"] = array (
  'name' => 'cosib_postshr_client_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_COSIB_POSTSALE_SPHR_CLIENT_FROM_COSIB_POSTSALE_TITLE',
  'save' => true,
  'id_name' => 'cosib_post666dostsale_ida',
  'link' => 'cosib_postsle_sphr_client',
  'table' => 'cosib_postsale',
  'module' => 'Cosib_postsale',
  'rname' => 'name',
);
$dictionary["sphr_Client"]["fields"]["cosib_post666dostsale_ida"] = array (
  'name' => 'cosib_post666dostsale_ida',
  'type' => 'link',
  'relationship' => 'cosib_postsale_sphr_client',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_COSIB_POSTSALE_SPHR_CLIENT_FROM_COSIB_POSTSALE_TITLE',
);


 // created: 2012-04-18 17:12:46

 
?>