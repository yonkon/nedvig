<?php 
 //WARNING: The contents of this file are auto-generated


 // created: 2011-08-09 12:28:51
$dictionary['Campaign']['fields']['tracker_key']['required']=false;
$dictionary['Campaign']['fields']['tracker_key']['autoinc_next']='1';

 


$dictionary['Campaign']['fields']['SecurityGroups'] = array (
  	'name' => 'SecurityGroups',
    'type' => 'link',
	'relationship' => 'securitygroups_campaigns',
	'module'=>'SecurityGroups',
	'bean_name'=>'SecurityGroup',
    'source'=>'non-db',
	'vname'=>'LBL_SECURITYGROUPS',
);






 // created: 2011-08-09 12:28:43
$dictionary['Campaign']['fields']['end_date']['required']=false;
$dictionary['Campaign']['fields']['end_date']['audited']=false;

 

 // created: 2011-08-09 12:28:26
$dictionary['Campaign']['fields']['start_date']['required']=true;
$dictionary['Campaign']['fields']['start_date']['audited']=false;

 

 // created: 2011-08-09 12:29:37
$dictionary['Campaign']['fields']['campaign_type']['required']=false;
$dictionary['Campaign']['fields']['campaign_type']['audited']=false;

 

// created: 2011-11-27 14:05:26
$dictionary["Campaign"]["fields"]["sphr_phone_pany_campaigns"] = array (
  'name' => 'sphr_phone_pany_campaigns',
  'type' => 'link',
  'relationship' => 'sphr_phone_company_campaigns',
  'source' => 'non-db',
  'vname' => 'LBL_SPHR_PHONE_COMPANY_CAMPAIGNS_FROM_SPHR_PHONE_COMPANY_TITLE',
);
$dictionary["Campaign"]["fields"]["sphr_phone_campaigns_name"] = array (
  'name' => 'sphr_phone_campaigns_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_SPHR_PHONE_COMPANY_CAMPAIGNS_FROM_SPHR_PHONE_COMPANY_TITLE',
  'save' => true,
  'id_name' => 'sphr_phone0cd8company_ida',
  'link' => 'sphr_phone_pany_campaigns',
  'table' => 'sphr_phone_company',
  'module' => 'sphr_phone_company',
  'rname' => 'name',
);
$dictionary["Campaign"]["fields"]["sphr_phone0cd8company_ida"] = array (
  'name' => 'sphr_phone0cd8company_ida',
  'type' => 'link',
  'relationship' => 'sphr_phone_company_campaigns',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_SPHR_PHONE_COMPANY_CAMPAIGNS_FROM_CAMPAIGNS_TITLE',
);


 // created: 2011-08-09 12:15:38

 

 // created: 2011-08-09 12:23:05

 

 // created: 2011-08-09 12:27:42
$dictionary['Campaign']['fields']['status']['required']=false;

 

 // created: 2013-03-29 09:26:53
$dictionary['Campaign']['fields']['name']['len']='200';

 
?>