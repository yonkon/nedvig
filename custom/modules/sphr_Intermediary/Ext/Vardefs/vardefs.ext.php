<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2011-08-14 19:41:36
$dictionary["sphr_Intermediary"]["fields"]["opportunitir_intermediary"] = array (
  'name' => 'opportunitir_intermediary',
  'type' => 'link',
  'relationship' => 'opportunities_sphr_intermediary',
  'source' => 'non-db',
  'vname' => 'LBL_OPPORTUNITIES_SPHR_INTERMEDIARY_FROM_OPPORTUNITIES_TITLE',
);
$dictionary["sphr_Intermediary"]["fields"]["opportunitiermediary_name"] = array (
  'name' => 'opportunitiermediary_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_OPPORTUNITIES_SPHR_INTERMEDIARY_FROM_OPPORTUNITIES_TITLE',
  'save' => true,
  'id_name' => 'opportunitd088unities_ida',
  'link' => 'opportunitir_intermediary',
  'table' => 'opportunities',
  'module' => 'Opportunities',
  'rname' => 'name',
);
$dictionary["sphr_Intermediary"]["fields"]["opportunitd088unities_ida"] = array (
  'name' => 'opportunitd088unities_ida',
  'type' => 'link',
  'relationship' => 'opportunities_sphr_intermediary',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_OPPORTUNITIES_SPHR_INTERMEDIARY_FROM_SPHR_INTERMEDIARY_TITLE',
);


// created: 2011-07-15 17:02:16
$dictionary["sphr_Intermediary"]["fields"]["sphr_intermry_sphr_client"] = array (
  'name' => 'sphr_intermry_sphr_client',
  'type' => 'link',
  'relationship' => 'sphr_intermediary_sphr_client',
  'source' => 'non-db',
  'side' => 'right',
  'vname' => 'LBL_SPHR_INTERMEDIARY_SPHR_CLIENT_FROM_SPHR_CLIENT_TITLE',
);


 // created: 2011-07-29 01:23:41
$dictionary['sphr_Intermediary']['fields']['title']['required']=false;

 

 // created: 2011-07-24 16:21:35
$dictionary['sphr_Intermediary']['fields']['date_entered']['required']=true;

 

 // created: 2011-07-24 16:21:22
$dictionary['sphr_Intermediary']['fields']['phone_mobile']['required']=true;

 

 // created: 2011-07-24 16:21:14
$dictionary['sphr_Intermediary']['fields']['first_and_middle_nme']['required']=true;

 

// created: 2011-08-02 21:19:55
$dictionary["sphr_Intermediary"]["fields"]["sphr_intermry_sphr_object"] = array (
  'name' => 'sphr_intermry_sphr_object',
  'type' => 'link',
  'relationship' => 'sphr_intermediary_sphr_object',
  'source' => 'non-db',
  'side' => 'right',
  'vname' => 'LBL_SPHR_INTERMEDIARY_SPHR_OBJECT_FROM_SPHR_OBJECT_TITLE',
);


 // created: 2011-07-16 10:33:45

 

 // created: 2011-07-24 16:21:43
$dictionary['sphr_Intermediary']['fields']['date_modified']['required']=true;

 

 // created: 2011-07-24 16:22:10
$dictionary['sphr_Intermediary']['fields']['source']['required']=true;

 

// created: 2011-07-15 17:02:55
$dictionary["sphr_Intermediary"]["fields"]["sphr_intermiary_sphr_deal"] = array (
  'name' => 'sphr_intermiary_sphr_deal',
  'type' => 'link',
  'relationship' => 'sphr_intermediary_sphr_deal',
  'source' => 'non-db',
  'side' => 'right',
  'vname' => 'LBL_SPHR_INTERMEDIARY_SPHR_DEAL_FROM_SPHR_DEAL_TITLE',
);


 // created: 2011-07-24 16:22:02
$dictionary['sphr_Intermediary']['fields']['status']['default']='Active';
$dictionary['sphr_Intermediary']['fields']['status']['options']=' intermediary_status_list';
$dictionary['sphr_Intermediary']['fields']['status']['required']=true;
$dictionary['sphr_Intermediary']['fields']['status']['audited']=true;

 

// created: 2011-08-14 20:16:47
$dictionary["sphr_Intermediary"]["fields"]["sphr_interm_opportunities"] = array (
  'name' => 'sphr_interm_opportunities',
  'type' => 'link',
  'relationship' => 'sphr_intermediary_opportunities',
  'source' => 'non-db',
  'side' => 'right',
  'vname' => 'LBL_SPHR_INTERMEDIARY_OPPORTUNITIES_FROM_OPPORTUNITIES_TITLE',
);

?>