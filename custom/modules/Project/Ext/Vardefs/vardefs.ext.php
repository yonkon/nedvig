<?php 
 //WARNING: The contents of this file are auto-generated



$dictionary['Project']['fields']['SecurityGroups'] = array (
  	'name' => 'SecurityGroups',
    'type' => 'link',
	'relationship' => 'securitygroups_project',
	'module'=>'SecurityGroups',
	'bean_name'=>'SecurityGroup',
    'source'=>'non-db',
	'vname'=>'LBL_SECURITYGROUPS',
);






// created: 2011-07-15 18:26:51
$dictionary["Project"]["fields"]["sphr_deal_project"] = array (
  'name' => 'sphr_deal_project',
  'type' => 'link',
  'relationship' => 'sphr_deal_project',
  'source' => 'non-db',
  'vname' => 'LBL_SPHR_DEAL_PROJECT_FROM_SPHR_DEAL_TITLE',
);
$dictionary["Project"]["fields"]["sphr_deal_project_name"] = array (
  'name' => 'sphr_deal_project_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_SPHR_DEAL_PROJECT_FROM_SPHR_DEAL_TITLE',
  'save' => true,
  'id_name' => 'sphr_deal_67fehr_deal_ida',
  'link' => 'sphr_deal_project',
  'table' => 'sphr_deal',
  'module' => 'sphr_Deal',
  'rname' => 'name',
);
$dictionary["Project"]["fields"]["sphr_deal_67fehr_deal_ida"] = array (
  'name' => 'sphr_deal_67fehr_deal_ida',
  'type' => 'link',
  'relationship' => 'sphr_deal_project',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_SPHR_DEAL_PROJECT_FROM_PROJECT_TITLE',
);

?>