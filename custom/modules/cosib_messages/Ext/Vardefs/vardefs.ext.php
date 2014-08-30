<?php 
 //WARNING: The contents of this file are auto-generated


 // created: 2012-06-15 11:24:42
$dictionary['cosib_messages']['fields']['date_entered']['required']=true;
$dictionary['cosib_messages']['fields']['date_entered']['audited']=true;

 

 // created: 2012-06-19 14:16:48
$dictionary['cosib_messages']['fields']['description']['required']=true;
$dictionary['cosib_messages']['fields']['description']['audited']=true;

 

// created: 2012-06-15 11:10:36
$dictionary["cosib_messages"]["fields"]["sphr_objectcosib_messages"] = array (
  'name' => 'sphr_objectcosib_messages',
  'type' => 'link',
  'relationship' => 'sphr_object_cosib_messages',
  'source' => 'non-db',
  'vname' => 'LBL_SPHR_OBJECT_COSIB_MESSAGES_FROM_SPHR_OBJECT_TITLE',
);
$dictionary["cosib_messages"]["fields"]["sphr_object_messages_name"] = array (
  'name' => 'sphr_object_messages_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_SPHR_OBJECT_COSIB_MESSAGES_FROM_SPHR_OBJECT_TITLE',
  'save' => true,
  'id_name' => 'sphr_objecb445_object_ida',
  'link' => 'sphr_objectcosib_messages',
  'table' => 'sphr_object',
  'module' => 'sphr_Object',
  'rname' => 'name',
);
$dictionary["cosib_messages"]["fields"]["sphr_objecb445_object_ida"] = array (
  'name' => 'sphr_objecb445_object_ida',
  'type' => 'link',
  'relationship' => 'sphr_object_cosib_messages',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_SPHR_OBJECT_COSIB_MESSAGES_FROM_COSIB_MESSAGES_TITLE',
);


// created: 2012-06-15 11:09:09
$dictionary["cosib_messages"]["fields"]["sphr_clientcosib_messages"] = array (
  'name' => 'sphr_clientcosib_messages',
  'type' => 'link',
  'relationship' => 'sphr_client_cosib_messages',
  'source' => 'non-db',
  'vname' => 'LBL_SPHR_CLIENT_COSIB_MESSAGES_FROM_SPHR_CLIENT_TITLE',
);
$dictionary["cosib_messages"]["fields"]["sphr_client_messages_name"] = array (
  'name' => 'sphr_client_messages_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_SPHR_CLIENT_COSIB_MESSAGES_FROM_SPHR_CLIENT_TITLE',
  'save' => true,
  'id_name' => 'sphr_clien2679_client_ida',
  'link' => 'sphr_clientcosib_messages',
  'table' => 'sphr_client',
  'module' => 'sphr_Client',
  'rname' => 'name',
);
$dictionary["cosib_messages"]["fields"]["sphr_clien2679_client_ida"] = array (
  'name' => 'sphr_clien2679_client_ida',
  'type' => 'link',
  'relationship' => 'sphr_client_cosib_messages',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_SPHR_CLIENT_COSIB_MESSAGES_FROM_COSIB_MESSAGES_TITLE',
);


 // created: 2012-06-19 14:17:03
$dictionary['cosib_messages']['fields']['name']['audited']=true;

 
?>