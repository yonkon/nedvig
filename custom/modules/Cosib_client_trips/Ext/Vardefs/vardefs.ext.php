<?php 
 //WARNING: The contents of this file are auto-generated


 // created: 2012-08-16 14:50:00
$dictionary['Cosib_client_trips']['fields']['trip_place']['required']=false;

 

 $dictionary["Cosib_client_trips"]["fields"]['date_arrive']['validation']= array('type' => 'isbefore', 'compareto' => 'date_departure', 'blank' => true);// created: 2012-07-09 10:00:54

 

 // created: 2012-07-09 10:00:44

 

 // created: 2012-08-16 14:49:45
$dictionary['Cosib_client_trips']['fields']['arrival']['required']=false;

 

// created: 2012-06-29 10:15:46
$dictionary["Cosib_client_trips"]["fields"]["cosib_clienps_sphr_object"] = array (
  'name' => 'cosib_clienps_sphr_object',
  'type' => 'link',
  'relationship' => 'cosib_client_trips_sphr_object',
  'source' => 'non-db',
  'vname' => 'LBL_COSIB_CLIENT_TRIPS_SPHR_OBJECT_FROM_SPHR_OBJECT_TITLE',
);


// created: 2012-06-29 10:15:46
$dictionary["Cosib_client_trips"]["fields"]["cosib_clienps_sphr_client"] = array (
  'name' => 'cosib_clienps_sphr_client',
  'type' => 'link',
  'relationship' => 'cosib_client_trips_sphr_client',
  'source' => 'non-db',
  'vname' => 'LBL_COSIB_CLIENT_TRIPS_SPHR_CLIENT_FROM_SPHR_CLIENT_TITLE',
);
$dictionary["Cosib_client_trips"]["fields"]["cosib_clienhr_client_name"] = array (
  'name' => 'cosib_clienhr_client_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_COSIB_CLIENT_TRIPS_SPHR_CLIENT_FROM_SPHR_CLIENT_TITLE',
  'save' => true,
  'id_name' => 'cosib_cliee6e0_client_ida',
  'link' => 'cosib_clienps_sphr_client',
  'table' => 'sphr_client',
  'module' => 'sphr_Client',
  'rname' => 'name',
);
$dictionary["Cosib_client_trips"]["fields"]["cosib_cliee6e0_client_ida"] = array (
  'name' => 'cosib_cliee6e0_client_ida',
  'type' => 'link',
  'relationship' => 'cosib_client_trips_sphr_client',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_COSIB_CLIENT_TRIPS_SPHR_CLIENT_FROM_COSIB_CLIENT_TRIPS_TITLE',
);


 // created: 2012-08-16 14:50:14
$dictionary['Cosib_client_trips']['fields']['residence']['required']=false;

 

 // created: 2012-06-29 10:03:46

 

 // created: 2012-08-16 14:48:56
$dictionary['Cosib_client_trips']['fields']['name']['required']=false;

 

 // created: 2012-06-29 10:10:26

 
?>