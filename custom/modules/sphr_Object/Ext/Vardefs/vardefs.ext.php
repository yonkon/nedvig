<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2011-07-28 21:27:38
$dictionary["sphr_Object"]["fields"]["sphr_objecthr_show_object"] = array (
  'name' => 'sphr_objecthr_show_object',
  'type' => 'link',
  'relationship' => 'sphr_object_sphr_show_object',
  'source' => 'non-db',
  'side' => 'right',
  'vname' => 'LBL_SPHR_OBJECT_SPHR_SHOW_OBJECT_FROM_SPHR_SHOW_OBJECT_TITLE',
);


 // created: 2012-04-23 11:07:59

 

 // created: 2012-04-23 11:23:07

 

 // created: 2012-08-01 19:08:51
$dictionary['sphr_Object']['fields']['name']['required']=false;

 

 // created: 2013-02-05 16:08:38

 

 // created: 2012-04-23 12:02:49

 

 // created: 2011-07-24 16:26:46
$dictionary['sphr_Object']['fields']['country']['required']=true;

 

 // created: 2012-04-23 09:31:29
$dictionary["sphr_Object"]["fields"]["total_area_c"]['type'] = 'minimax';

 

 // created: 2012-04-23 11:13:07

 

// created: 2011-08-02 21:19:01
$dictionary["sphr_Object"]["fields"]["sphr_develoer_sphr_object"] = array (
  'name' => 'sphr_develoer_sphr_object',
  'type' => 'link',
  'relationship' => 'sphr_developer_sphr_object',
  'source' => 'non-db',
  'vname' => 'LBL_SPHR_DEVELOPER_SPHR_OBJECT_FROM_SPHR_DEVELOPER_TITLE',
);
$dictionary["sphr_Object"]["fields"]["sphr_develohr_object_name"] = array (
  'name' => 'sphr_develohr_object_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_SPHR_DEVELOPER_SPHR_OBJECT_FROM_SPHR_DEVELOPER_TITLE',
  'save' => true,
  'id_name' => 'sphr_devel6664veloper_ida',
  'link' => 'sphr_develoer_sphr_object',
  'table' => 'sphr_developer',
  'module' => 'sphr_Developer',
  'rname' => 'name',
);
$dictionary["sphr_Object"]["fields"]["sphr_devel6664veloper_ida"] = array (
  'name' => 'sphr_devel6664veloper_ida',
  'type' => 'link',
  'relationship' => 'sphr_developer_sphr_object',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_SPHR_DEVELOPER_SPHR_OBJECT_FROM_SPHR_OBJECT_TITLE',
);


 // created: 2012-04-23 11:15:05

 

 // created: 2012-04-23 11:55:55

 

 // created: 2012-08-06 18:55:17
$dictionary["sphr_Object"]["fields"]["price_sale_int_c"]['type'] = 'minimax';
//$dictionary["sphr_Object"]["fields"]["accounts_sphr_object_name"] = array (
//  'name' => 'accounts_sphr_object_name',
//  'type' => 'relate',
//  'source' => 'non-db',
//  'vname' => 'LBL_ACCOUNTS_SPHR_OBJECT_FROM_ACCOUNTS_TITLE',
//  'save' => true,
//  'id_name' => 'accounts_sfb36ccounts_ida',
//  'link' => 'accounts_sphr_object',
//  'table' => 'accounts',
//  'module' => 'Accounts',
//  'rname' => 'name',
//);

 

 // created: 2012-04-23 11:20:16

 

 // created: 2012-07-30 19:05:31
$dictionary['sphr_Object']['fields']['type']['required']=true;
$dictionary['sphr_Object']['fields']['type']['default']='';

 

 // created: 2012-04-23 11:47:09

 

 // created: 2014-11-16 02:00:57

 

// created: 2012-06-29 10:15:46
$dictionary["sphr_Object"]["fields"]["cosib_clienps_sphr_object"] = array (
  'name' => 'cosib_clienps_sphr_object',
  'type' => 'link',
  'relationship' => 'cosib_client_trips_sphr_object',
  'source' => 'non-db',
  'vname' => 'LBL_COSIB_CLIENT_TRIPS_SPHR_OBJECT_FROM_COSIB_CLIENT_TRIPS_TITLE',
);


 // created: 2012-04-23 11:44:24

 

// created: 2011-08-02 21:20:35
$dictionary["sphr_Object"]["fields"]["sphr_owner_sphr_object"] = array (
  'name' => 'sphr_owner_sphr_object',
  'type' => 'link',
  'relationship' => 'sphr_owner_sphr_object',
  'source' => 'non-db',
  'vname' => 'LBL_SPHR_OWNER_SPHR_OBJECT_FROM_SPHR_OWNER_TITLE',
);
$dictionary["sphr_Object"]["fields"]["sphr_owner_hr_object_name"] = array (
  'name' => 'sphr_owner_hr_object_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_SPHR_OWNER_SPHR_OBJECT_FROM_SPHR_OWNER_TITLE',
  'save' => true,
  'id_name' => 'sphr_owner9f16r_owner_ida',
  'link' => 'sphr_owner_sphr_object',
  'table' => 'sphr_owner',
  'module' => 'sphr_Owner',
  'rname' => 'name',
);
$dictionary["sphr_Object"]["fields"]["sphr_owner9f16r_owner_ida"] = array (
  'name' => 'sphr_owner9f16r_owner_ida',
  'type' => 'link',
  'relationship' => 'sphr_owner_sphr_object',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_SPHR_OWNER_SPHR_OBJECT_FROM_SPHR_OBJECT_TITLE',
);


 // created: 2012-04-23 08:59:29

 

 // created: 2014-11-16 01:47:22

 

 // created: 2012-04-23 11:57:27

 

// created: 2012-08-08 20:36:01
$dictionary["sphr_Object"]["fields"]["opportunities_sphr_object"] = array (
  'name' => 'opportunities_sphr_object',
  'type' => 'link',
  'relationship' => 'opportunities_sphr_object',
  'source' => 'non-db',
  'vname' => 'LBL_OPPORTUNITIES_SPHR_OBJECT_FROM_OPPORTUNITIES_TITLE',
);


 // created: 2014-05-06 13:09:24
$dictionary['sphr_Object']['fields']['nearest_airport_c']['required'] = false;
 

// created: 2011-07-15 15:47:43
$dictionary["sphr_Object"]["fields"]["sphr_interest_sphr_object"] = array (
  'name' => 'sphr_interest_sphr_object',
  'type' => 'link',
  'relationship' => 'sphr_interest_sphr_object',
  'source' => 'non-db',
  'vname' => 'LBL_SPHR_INTEREST_SPHR_OBJECT_FROM_SPHR_INTEREST_TITLE',
);


 // created: 2012-08-06 18:55:48

 

 // created: 2012-08-27 13:50:14

 

 // created: 2012-04-23 11:03:32

 

 // created: 2012-04-23 09:15:13
$dictionary['sphr_Object']['fields']['address']['required']=true;

 

 // created: 2012-04-23 12:18:10

 

 // created: 2013-02-05 16:07:22

 

 // created: 2014-11-16 01:46:02

 

// created: 2011-07-15 18:26:17
$dictionary["sphr_Object"]["fields"]["sphr_object_notes"] = array (
  'name' => 'sphr_object_notes',
  'type' => 'link',
  'relationship' => 'sphr_object_notes',
  'source' => 'non-db',
  'side' => 'right',
  'vname' => 'LBL_SPHR_OBJECT_NOTES_FROM_NOTES_TITLE',
);


// created: 2011-08-14 20:21:50
$dictionary["sphr_Object"]["fields"]["sphr_object_opportunities"] = array (
  'name' => 'sphr_object_opportunities',
  'type' => 'link',
  'relationship' => 'sphr_object_opportunities',
  'source' => 'non-db',
  'side' => 'right',
  'vname' => 'LBL_SPHR_OBJECT_OPPORTUNITIES_FROM_OPPORTUNITIES_TITLE',
);


 // created: 2012-08-24 14:27:24

 

 // created: 2012-09-05 11:54:38
$dictionary["sphr_Object"]["fields"]["area_area_c"]['type'] = 'minimax';

 

 // created: 2011-07-24 16:27:09
$dictionary['sphr_Object']['fields']['region']['required']=true;

 

 // created: 2012-09-04 13:47:11

 

 // created: 2012-04-23 12:04:02

 

 // created: 2012-04-23 11:18:03

 

 // created: 2012-05-19 17:04:21

 

 // created: 2012-04-23 09:36:03

 

 // created: 2012-05-19 17:01:00

 

 // created: 2012-09-04 13:46:39

 

 // created: 2012-07-30 19:02:08

 

 // created: 2012-04-23 11:34:21

 

 // created: 2012-04-23 12:06:53

 

 // created: 2012-04-23 11:41:02

 

// created: 2011-07-15 18:23:53
$dictionary["sphr_Object"]["fields"]["sphr_object_sphr_deal"] = array (
  'name' => 'sphr_object_sphr_deal',
  'type' => 'link',
  'relationship' => 'sphr_object_sphr_deal',
  'source' => 'non-db',
  'vname' => 'LBL_SPHR_OBJECT_SPHR_DEAL_FROM_SPHR_DEAL_TITLE',
);


 // created: 2012-04-23 11:53:15

 

 // created: 2012-04-23 11:06:45

 

 // created: 2012-04-23 08:40:34

 

 // created: 2012-08-06 18:54:44

 

 // created: 2012-04-23 09:05:26

 

// created: 2012-06-15 11:10:36
$dictionary["sphr_Object"]["fields"]["sphr_objectcosib_messages"] = array (
  'name' => 'sphr_objectcosib_messages',
  'type' => 'link',
  'relationship' => 'sphr_object_cosib_messages',
  'source' => 'non-db',
  'side' => 'right',
  'vname' => 'LBL_SPHR_OBJECT_COSIB_MESSAGES_FROM_COSIB_MESSAGES_TITLE',
);


// created: 2011-07-15 16:55:53
$dictionary["sphr_Object"]["fields"]["sphr_object_sphr_reserve"] = array (
  'name' => 'sphr_object_sphr_reserve',
  'type' => 'link',
  'relationship' => 'sphr_object_sphr_reserve',
  'source' => 'non-db',
  'side' => 'right',
  'vname' => 'LBL_SPHR_OBJECT_SPHR_RESERVE_FROM_SPHR_RESERVE_TITLE',
);


 // created: 2012-08-24 14:32:19

 

 // created: 2012-08-01 20:58:59

 

// created: 2011-08-02 21:19:55
$dictionary["sphr_Object"]["fields"]["sphr_intermry_sphr_object"] = array (
  'name' => 'sphr_intermry_sphr_object',
  'type' => 'link',
  'relationship' => 'sphr_intermediary_sphr_object',
  'source' => 'non-db',
  'vname' => 'LBL_SPHR_INTERMEDIARY_SPHR_OBJECT_FROM_SPHR_INTERMEDIARY_TITLE',
);
$dictionary["sphr_Object"]["fields"]["sphr_intermhr_object_name"] = array (
  'name' => 'sphr_intermhr_object_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_SPHR_INTERMEDIARY_SPHR_OBJECT_FROM_SPHR_INTERMEDIARY_TITLE',
  'save' => true,
  'id_name' => 'sphr_intera323mediary_ida',
  'link' => 'sphr_intermry_sphr_object',
  'table' => 'sphr_intermediary',
  'module' => 'sphr_Intermediary',
  'rname' => 'name',
);
$dictionary["sphr_Object"]["fields"]["sphr_intera323mediary_ida"] = array (
  'name' => 'sphr_intera323mediary_ida',
  'type' => 'link',
  'relationship' => 'sphr_intermediary_sphr_object',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_SPHR_INTERMEDIARY_SPHR_OBJECT_FROM_SPHR_OBJECT_TITLE',
);


 // created: 2014-10-21 16:44:23

 

 // created: 2012-08-06 18:55:04

 

 // created: 2014-10-21 06:03:23

 

// created: 2011-08-15 17:33:05
$dictionary["sphr_Object"]["fields"]["sphr_object_sphr_interest"] = array (
  'name' => 'sphr_object_sphr_interest',
  'type' => 'link',
  'relationship' => 'sphr_object_sphr_interest',
  'source' => 'non-db',
  'side' => 'right',
  'vname' => 'LBL_SPHR_OBJECT_SPHR_INTEREST_FROM_SPHR_INTEREST_TITLE',
);


// created: 2012-07-05 09:07:38
$dictionary["sphr_Object"]["fields"]["cosib_postsle_sphr_object"] = array (
  'name' => 'cosib_postsle_sphr_object',
  'type' => 'link',
  'relationship' => 'cosib_postsale_sphr_object',
  'source' => 'non-db',
  'vname' => 'LBL_COSIB_POSTSALE_SPHR_OBJECT_FROM_COSIB_POSTSALE_TITLE',
);
$dictionary["sphr_Object"]["fields"]["cosib_postshr_object_name"] = array (
  'name' => 'cosib_postshr_object_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_COSIB_POSTSALE_SPHR_OBJECT_FROM_COSIB_POSTSALE_TITLE',
  'save' => true,
  'id_name' => 'cosib_post535aostsale_ida',
  'link' => 'cosib_postsle_sphr_object',
  'table' => 'cosib_postsale',
  'module' => 'Cosib_postsale',
  'rname' => 'name',
);
$dictionary["sphr_Object"]["fields"]["cosib_post535aostsale_ida"] = array (
  'name' => 'cosib_post535aostsale_ida',
  'type' => 'link',
  'relationship' => 'cosib_postsale_sphr_object',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_COSIB_POSTSALE_SPHR_OBJECT_FROM_COSIB_POSTSALE_TITLE',
);


 // created: 2012-04-23 11:05:01

 

 // created: 2012-04-23 12:05:23

 

 // created: 2012-08-24 14:33:46

 

 // created: 2012-04-23 11:16:30

 

// created: 2012-06-14 17:03:32
$dictionary["sphr_Object"]["fields"]["accounts_sphr_object"] = array (
  'name' => 'accounts_sphr_object',
  'type' => 'link',
  'relationship' => 'accounts_sphr_object',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_SPHR_OBJECT_FROM_ACCOUNTS_TITLE',
);
$dictionary["sphr_Object"]["fields"]["accounts_sphr_object_name"] = array (
  'name' => 'accounts_sphr_object_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_SPHR_OBJECT_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'accounts_sfb36ccounts_ida',
  'link' => 'accounts_sphr_object',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["sphr_Object"]["fields"]["accounts_sfb36ccounts_ida"] = array (
  'name' => 'accounts_sfb36ccounts_ida',
  'type' => 'link',
  'relationship' => 'accounts_sphr_object',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ACCOUNTS_SPHR_OBJECT_FROM_SPHR_OBJECT_TITLE',
);


 // created: 2012-05-19 17:05:09

 

 // created: 2012-04-23 11:45:43

 

 // created: 2014-11-16 02:02:16

 

 // created: 2012-08-06 12:44:20

 

 // created: 2014-10-21 16:45:08

 

 // created: 2012-08-27 10:44:41

 

 // created: 2014-10-21 16:41:23

 

 // created: 2012-04-23 14:21:48

 

 // created: 2014-10-21 16:42:48

 

 // created: 2012-08-06 18:55:48

 

 // created: 2014-11-16 01:52:32

 

 // created: 2012-09-04 13:45:38

 


 // created: 2012-08-06 18:54:23

 

 // created: 2012-08-01 21:00:02

 

 // created: 2012-08-06 12:43:51

 

 // created: 2012-04-23 11:51:52

 

 // created: 2012-08-27 20:19:18

 

// created: 2012-05-31 11:07:23
$dictionary["sphr_Object"]["fields"]["cosib_queries_sphr_object"] = array (
  'name' => 'cosib_queries_sphr_object',
  'type' => 'link',
  'relationship' => 'cosib_queries_sphr_object',
  'source' => 'non-db',
  'vname' => 'LBL_COSIB_QUERIES_SPHR_OBJECT_FROM_COSIB_QUERIES_TITLE',
);


 // created: 2012-08-24 15:02:10

 

 // created: 2012-08-27 13:49:16



 // created: 2012-04-23 11:11:18

 

 // created: 2011-07-24 16:27:39
$dictionary['sphr_Object']['fields']['square']['required']=true;

 

 // created: 2012-07-30 18:51:11

 

 // created: 2012-08-06 12:43:25

 

 // created: 2012-08-27 20:19:46
$dictionary["sphr_Object"]["fields"]["sea_distance_c"]['type'] = 'minimax';

 

// created: 2011-07-20 00:16:08
$dictionary["sphr_Object"]["fields"]["sphr_object_documents"] = array (
  'name' => 'sphr_object_documents',
  'type' => 'link',
  'relationship' => 'sphr_object_documents',
  'source' => 'non-db',
  'vname' => 'LBL_SPHR_OBJECT_DOCUMENTS_FROM_DOCUMENTS_TITLE',
);


 // created: 2012-08-24 14:35:29

 

 // created: 2012-08-06 18:54:54

 

 // created: 2012-04-23 11:59:03

 

// created: 2012-04-18 09:33:57
$dictionary["sphr_Object"]["fields"]["sphr_client_sphr_object"] = array (
  'name' => 'sphr_client_sphr_object',
  'type' => 'link',
  'relationship' => 'sphr_client_sphr_object',
  'source' => 'non-db',
  'vname' => 'LBL_SPHR_CLIENT_SPHR_OBJECT_FROM_SPHR_CLIENT_TITLE',
);


 // created: 2012-08-06 18:55:49

 

 // created: 2013-03-29 07:46:32

 

 // created: 2014-07-16 07:13:13
  $dictionary["sphr_Object"]["fields"]["t_end_c"] = array (
   'source' => 'non-db',
 );

 

// created: 2012-06-22 13:11:07
$dictionary["sphr_Object"]["fields"]["sphr_client_sphr_object_1"] = array (
  'name' => 'sphr_client_sphr_object_1',
  'type' => 'link',
  'relationship' => 'sphr_client_sphr_object_1',
  'source' => 'non-db',
  'vname' => 'LBL_SPHR_CLIENT_SPHR_OBJECT_1_FROM_SPHR_CLIENT_TITLE',
);
$dictionary["sphr_Object"]["fields"]["sphr_client_object_1_name"] = array (
  'name' => 'sphr_client_object_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_SPHR_CLIENT_SPHR_OBJECT_1_FROM_SPHR_CLIENT_TITLE',
  'save' => true,
  'id_name' => 'sphr_clienc1ac_client_ida',
  'link' => 'sphr_client_sphr_object_1',
  'table' => 'sphr_client',
  'module' => 'sphr_Client',
  'rname' => 'name',
);
$dictionary["sphr_Object"]["fields"]["sphr_clienc1ac_client_ida"] = array (
  'name' => 'sphr_clienc1ac_client_ida',
  'type' => 'link',
  'relationship' => 'sphr_client_sphr_object_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_SPHR_CLIENT_SPHR_OBJECT_1_FROM_SPHR_OBJECT_TITLE',
);


 // created: 2014-07-16 06:57:14
 $dictionary["sphr_Object"]["fields"]["t_start_c"] = array (
   'source' => 'non-db',
 );

 

 // created: 2013-02-05 16:20:41

 

 // created: 2014-05-30 20:21:11
$dictionary["sphr_Object"]["fields"]["number_bedroom_c"]['type'] = 'minimax';

 

 // created: 2012-08-01 20:59:25

 

 // created: 2012-05-04 15:57:30
$dictionary['sphr_Object']['fields']['status']['required']=true;
$dictionary['sphr_Object']['fields']['status']['default']='';
$dictionary['sphr_Object']['fields']['status']['type']='multienum';

 

 // created: 2012-04-23 11:39:39

 

 // created: 2012-04-23 10:54:13

 

 // created: 2012-04-23 11:51:01

 


$dictionary['sphr_Object']['fields']['SecurityGroups'] = array (
  	'name' => 'SecurityGroups',
    'type' => 'link',
	'relationship' => 'securitygroups_sphr_object',
	'module'=>'SecurityGroups',
	'bean_name'=>'SecurityGroup',
    'source'=>'non-db',
	'vname'=>'LBL_SECURITYGROUPS',
);






 // created: 2012-04-23 11:36:37

 

 // created: 2014-05-30 20:20:18
$dictionary["sphr_Object"]["fields"]["number_bathroom_c"]['type'] = 'minimax';

 

 // created: 2012-04-23 12:01:02

 
?>