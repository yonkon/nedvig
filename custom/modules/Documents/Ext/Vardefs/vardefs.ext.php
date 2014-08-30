<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2012-04-18 09:35:47
$dictionary["Document"]["fields"]["sphr_client_documents"] = array (
  'name' => 'sphr_client_documents',
  'type' => 'link',
  'relationship' => 'sphr_client_documents',
  'source' => 'non-db',
  'vname' => 'LBL_SPHR_CLIENT_DOCUMENTS_FROM_SPHR_CLIENT_TITLE',
);
$dictionary["Document"]["fields"]["sphr_clientdocuments_name"] = array (
  'name' => 'sphr_clientdocuments_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_SPHR_CLIENT_DOCUMENTS_FROM_SPHR_CLIENT_TITLE',
  'save' => true,
  'id_name' => 'sphr_clien29a0_client_ida',
  'link' => 'sphr_client_documents',
  'table' => 'sphr_client',
  'module' => 'sphr_Client',
  'rname' => 'name',
);
$dictionary["Document"]["fields"]["sphr_clien29a0_client_ida"] = array (
  'name' => 'sphr_clien29a0_client_ida',
  'type' => 'link',
  'relationship' => 'sphr_client_documents',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_SPHR_CLIENT_DOCUMENTS_FROM_DOCUMENTS_TITLE',
);


 // created: 2012-07-17 14:42:23
$dictionary['Document']['fields']['template_type']['reportable']=true;

 

// created: 2012-05-31 11:08:10
$dictionary["Document"]["fields"]["cosib_queries_documents"] = array (
  'name' => 'cosib_queries_documents',
  'type' => 'link',
  'relationship' => 'cosib_queries_documents',
  'source' => 'non-db',
  'vname' => 'LBL_COSIB_QUERIES_DOCUMENTS_FROM_COSIB_QUERIES_TITLE',
);
$dictionary["Document"]["fields"]["cosib_queridocuments_name"] = array (
  'name' => 'cosib_queridocuments_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_COSIB_QUERIES_DOCUMENTS_FROM_COSIB_QUERIES_TITLE',
  'save' => true,
  'id_name' => 'cosib_quer891cqueries_ida',
  'link' => 'cosib_queries_documents',
  'table' => 'cosib_queries',
  'module' => 'cosib_queries',
  'rname' => 'name',
);
$dictionary["Document"]["fields"]["cosib_quer891cqueries_ida"] = array (
  'name' => 'cosib_quer891cqueries_ida',
  'type' => 'link',
  'relationship' => 'cosib_queries_documents',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_COSIB_QUERIES_DOCUMENTS_FROM_DOCUMENTS_TITLE',
);



$dictionary['Document']['fields']['SecurityGroups'] = array (
  	'name' => 'SecurityGroups',
    'type' => 'link',
	'relationship' => 'securitygroups_documents',
	'module'=>'SecurityGroups',
	'bean_name'=>'SecurityGroup',
    'source'=>'non-db',
	'vname'=>'LBL_SECURITYGROUPS',
);






 // created: 2012-07-17 14:47:02
$dictionary['Document']['fields']['category_id']['reportable']=true;

 

// created: 2012-06-14 17:07:29
$dictionary["Document"]["fields"]["accounts_documents"] = array (
  'name' => 'accounts_documents',
  'type' => 'link',
  'relationship' => 'accounts_documents',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_DOCUMENTS_FROM_ACCOUNTS_TITLE',
);
$dictionary["Document"]["fields"]["accounts_documents_name"] = array (
  'name' => 'accounts_documents_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_DOCUMENTS_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'accounts_d13e2ccounts_ida',
  'link' => 'accounts_documents',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["Document"]["fields"]["accounts_d13e2ccounts_ida"] = array (
  'name' => 'accounts_d13e2ccounts_ida',
  'type' => 'link',
  'relationship' => 'accounts_documents',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ACCOUNTS_DOCUMENTS_FROM_DOCUMENTS_TITLE',
);


// created: 2011-07-20 00:16:08
$dictionary["Document"]["fields"]["sphr_object_documents"] = array (
  'name' => 'sphr_object_documents',
  'type' => 'link',
  'relationship' => 'sphr_object_documents',
  'source' => 'non-db',
  'vname' => 'LBL_SPHR_OBJECT_DOCUMENTS_FROM_SPHR_OBJECT_TITLE',
);

?>