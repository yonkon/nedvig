<?php 
 //WARNING: The contents of this file are auto-generated


 // created: 2011-07-24 16:15:13
$dictionary['sphr_Interest']['fields']['room_count']['required']=true;
$dictionary['sphr_Interest']['fields']['room_count']['audited']=true;

 

 // created: 2011-08-31 16:19:21

 

 // created: 2011-08-31 16:11:20
$dictionary['sphr_Interest']['fields']['square']['required']=false;
$dictionary['sphr_Interest']['fields']['square']['audited']=true;

 

 // created: 2011-08-31 16:17:34

 

 // created: 2011-08-31 16:19:13

 

 // created: 2011-08-31 16:16:42

 

 // created: 2011-08-31 16:13:54

 

 // created: 2011-08-19 12:56:46

 

 // created: 2011-07-24 16:14:56
$dictionary['sphr_Interest']['fields']['country']['required']=true;
$dictionary['sphr_Interest']['fields']['country']['audited']=true;

 

// created: 2011-07-15 15:47:43
$dictionary["sphr_Interest"]["fields"]["sphr_interest_sphr_object"] = array (
  'name' => 'sphr_interest_sphr_object',
  'type' => 'link',
  'relationship' => 'sphr_interest_sphr_object',
  'source' => 'non-db',
  'vname' => 'LBL_SPHR_INTEREST_SPHR_OBJECT_FROM_SPHR_OBJECT_TITLE',
);


 // created: 2011-07-24 16:15:43
$dictionary['sphr_Interest']['fields']['discount']['audited']=true;

 

 // created: 2011-07-24 16:15:35
$dictionary['sphr_Interest']['fields']['description_payment_terms']['audited']=true;

 

// created: 2011-07-15 11:43:49
$dictionary["sphr_Interest"]["fields"]["sphr_client_sphr_interest"] = array (
  'name' => 'sphr_client_sphr_interest',
  'type' => 'link',
  'relationship' => 'sphr_client_sphr_interest',
  'source' => 'non-db',
  'vname' => 'LBL_SPHR_CLIENT_SPHR_INTEREST_FROM_SPHR_CLIENT_TITLE',
);
$dictionary["sphr_Interest"]["fields"]["sphr_client_interest_name"] = array (
  'name' => 'sphr_client_interest_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_SPHR_CLIENT_SPHR_INTEREST_FROM_SPHR_CLIENT_TITLE',
  'save' => true,
  'id_name' => 'sphr_clienc30d_client_ida',
  'link' => 'sphr_client_sphr_interest',
  'table' => 'sphr_client',
  'module' => 'sphr_Client',
  'rname' => 'name',
);
$dictionary["sphr_Interest"]["fields"]["sphr_clienc30d_client_ida"] = array (
  'name' => 'sphr_clienc30d_client_ida',
  'type' => 'link',
  'relationship' => 'sphr_client_sphr_interest',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_SPHR_CLIENT_SPHR_INTEREST_FROM_SPHR_INTEREST_TITLE',
);


 // created: 2011-08-31 16:14:51

 

 // created: 2011-07-24 16:16:09
$dictionary['sphr_Interest']['fields']['payment_object']['audited']=true;

 

 // created: 2011-07-24 16:16:02
$dictionary['sphr_Interest']['fields']['payment_meter']['audited']=true;

 

 // created: 2011-07-24 16:12:17
$dictionary['sphr_Interest']['fields']['name']['required']=true;
$dictionary['sphr_Interest']['fields']['name']['audited']=true;

 

 // created: 2011-07-24 16:15:54
$dictionary['sphr_Interest']['fields']['description_wish']['audited']=true;

 

// created: 2011-08-15 17:33:05
$dictionary["sphr_Interest"]["fields"]["sphr_object_sphr_interest"] = array (
  'name' => 'sphr_object_sphr_interest',
  'type' => 'link',
  'relationship' => 'sphr_object_sphr_interest',
  'source' => 'non-db',
  'vname' => 'LBL_SPHR_OBJECT_SPHR_INTEREST_FROM_SPHR_OBJECT_TITLE',
);
$dictionary["sphr_Interest"]["fields"]["sphr_object_interest_name"] = array (
  'name' => 'sphr_object_interest_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_SPHR_OBJECT_SPHR_INTEREST_FROM_SPHR_OBJECT_TITLE',
  'save' => true,
  'id_name' => 'sphr_objec2883_object_ida',
  'link' => 'sphr_object_sphr_interest',
  'table' => 'sphr_object',
  'module' => 'sphr_Object',
  'rname' => 'name',
);
$dictionary["sphr_Interest"]["fields"]["sphr_objec2883_object_ida"] = array (
  'name' => 'sphr_objec2883_object_ida',
  'type' => 'link',
  'relationship' => 'sphr_object_sphr_interest',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_SPHR_OBJECT_SPHR_INTEREST_FROM_SPHR_INTEREST_TITLE',
);

?>