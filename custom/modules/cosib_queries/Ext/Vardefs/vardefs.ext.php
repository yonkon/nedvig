<?php 
 //WARNING: The contents of this file are auto-generated


 // created: 2012-07-04 09:43:36

 

 // created: 2012-08-14 10:52:02

 

 // created: 2013-07-15 03:26:05

 

 // created: 2013-07-15 03:24:14

 

 // created: 2012-05-31 10:26:06

 

 // created: 2012-06-27 16:13:32

 

 // created: 2012-05-31 08:50:30

 

// created: 2012-05-31 11:07:23
$dictionary["cosib_queries"]["fields"]["cosib_queries_sphr_object"] = array (
  'name' => 'cosib_queries_sphr_object',
  'type' => 'link',
  'relationship' => 'cosib_queries_sphr_object',
  'source' => 'non-db',
  'vname' => 'LBL_COSIB_QUERIES_SPHR_OBJECT_FROM_SPHR_OBJECT_TITLE',
);


 // created: 2012-06-06 08:47:32

 

 // created: 2012-06-01 15:01:04

 

 // created: 2012-06-27 16:14:30

 

 // created: 2012-06-04 17:09:07

 

 // created: 2012-06-04 16:45:50

 

 // created: 2012-06-04 17:00:06

 

 // created: 2012-06-04 17:45:52

 

 // created: 2012-05-31 10:22:52

 

 // created: 2012-06-08 12:23:16

 

 // created: 2012-05-31 10:15:24

 

 // created: 2012-06-04 17:45:36

 

 // created: 2013-07-15 03:25:23

 

 // created: 2012-05-31 09:59:16

 

 // created: 2012-06-06 08:57:07

 

 // created: 2012-06-04 17:44:29

 

// created: 2012-05-31 11:11:41
$dictionary["cosib_queries"]["fields"]["sphr_client_cosib_queries"] = array (
  'name' => 'sphr_client_cosib_queries',
  'type' => 'link',
  'relationship' => 'sphr_client_cosib_queries',
  'source' => 'non-db',
  'vname' => 'LBL_SPHR_CLIENT_COSIB_QUERIES_FROM_SPHR_CLIENT_TITLE',
);
$dictionary["cosib_queries"]["fields"]["sphr_clientb_queries_name"] = array (
  'name' => 'sphr_clientb_queries_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_SPHR_CLIENT_COSIB_QUERIES_FROM_SPHR_CLIENT_TITLE',
  'save' => true,
  'id_name' => 'sphr_clien735b_client_ida',
  'link' => 'sphr_client_cosib_queries',
  'table' => 'sphr_client',
  'module' => 'sphr_Client',
  'rname' => 'name',
);
$dictionary["cosib_queries"]["fields"]["sphr_clien735b_client_ida"] = array (
  'name' => 'sphr_clien735b_client_ida',
  'type' => 'link',
  'relationship' => 'sphr_client_cosib_queries',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_SPHR_CLIENT_COSIB_QUERIES_FROM_COSIB_QUERIES_TITLE',
);


 // created: 2012-08-14 13:01:28

 

 // created: 2012-06-06 08:53:49

 

 // created: 2012-06-04 17:27:22

 

 // created: 2012-06-04 16:59:56

 

 // created: 2012-06-06 08:52:42

 

 // created: 2012-06-04 17:26:43

 


$dictionary['cosib_queries']['fields']['SecurityGroups'] = array (
  	'name' => 'SecurityGroups',
        'type' => 'link',
	'relationship' => 'securitygroups_cosib_queries',
	'module'=>'SecurityGroups',
	'bean_name'=>'SecurityGroup',
        'source'=>'non-db',
	'vname'=>'LBL_SECURITYGROUPS',
);






 // created: 2012-05-30 15:17:27

 

 // created: 2012-06-04 17:44:47

 

 // created: 2012-06-28 13:31:53

 

 // created: 2012-06-27 13:04:09

 

 // created: 2012-06-04 17:26:33

 

 // created: 2012-06-06 15:28:50

 

 // created: 2012-06-04 17:27:10

 

 // created: 2012-06-08 12:54:28

 

// created: 2012-05-31 11:13:42
$dictionary["cosib_queries"]["fields"]["accounts_cosib_queries"] = array (
  'name' => 'accounts_cosib_queries',
  'type' => 'link',
  'relationship' => 'accounts_cosib_queries',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_COSIB_QUERIES_FROM_ACCOUNTS_TITLE',
);
$dictionary["cosib_queries"]["fields"]["accounts_cob_queries_name"] = array (
  'name' => 'accounts_cob_queries_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_COSIB_QUERIES_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'accounts_c3c3bccounts_ida',
  'link' => 'accounts_cosib_queries',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["cosib_queries"]["fields"]["accounts_c3c3bccounts_ida"] = array (
  'name' => 'accounts_c3c3bccounts_ida',
  'type' => 'link',
  'relationship' => 'accounts_cosib_queries',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ACCOUNTS_COSIB_QUERIES_FROM_COSIB_QUERIES_TITLE',
);


// created: 2012-05-31 11:08:10
$dictionary["cosib_queries"]["fields"]["cosib_queries_documents"] = array (
  'name' => 'cosib_queries_documents',
  'type' => 'link',
  'relationship' => 'cosib_queries_documents',
  'source' => 'non-db',
  'side' => 'right',
  'vname' => 'LBL_COSIB_QUERIES_DOCUMENTS_FROM_DOCUMENTS_TITLE',
);


 // created: 2012-06-04 12:10:36
$dictionary['cosib_queries']['fields']['name']['required']=false;

 

 // created: 2012-06-04 12:25:24

 

 // created: 2012-06-06 08:47:43

 

 // created: 2012-05-31 10:45:59

 

 // created: 2013-07-15 03:23:46

 

 // created: 2012-06-04 17:26:59

 
?>