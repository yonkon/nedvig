<?php 
 //WARNING: The contents of this file are auto-generated


 // created: 2011-07-28 20:17:20
$dictionary['sphr_Show_object']['fields']['reminder_status']['default']='0';

 

 // created: 2011-07-28 20:12:25
$dictionary['sphr_Show_object']['fields']['date_start']['required']=true;

 

// created: 2011-07-28 21:27:38
$dictionary["sphr_Show_object"]["fields"]["sphr_objecthr_show_object"] = array (
  'name' => 'sphr_objecthr_show_object',
  'type' => 'link',
  'relationship' => 'sphr_object_sphr_show_object',
  'source' => 'non-db',
  'vname' => 'LBL_SPHR_OBJECT_SPHR_SHOW_OBJECT_FROM_SPHR_OBJECT_TITLE',
);
$dictionary["sphr_Show_object"]["fields"]["sphr_objectow_object_name"] = array (
  'name' => 'sphr_objectow_object_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_SPHR_OBJECT_SPHR_SHOW_OBJECT_FROM_SPHR_OBJECT_TITLE',
  'save' => true,
  'id_name' => 'sphr_objecdf1f_object_ida',
  'link' => 'sphr_objecthr_show_object',
  'table' => 'sphr_object',
  'module' => 'sphr_Object',
  'rname' => 'name',
);
$dictionary["sphr_Show_object"]["fields"]["sphr_objecdf1f_object_ida"] = array (
  'name' => 'sphr_objecdf1f_object_ida',
  'type' => 'link',
  'relationship' => 'sphr_object_sphr_show_object',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_SPHR_OBJECT_SPHR_SHOW_OBJECT_FROM_SPHR_SHOW_OBJECT_TITLE',
);


 // created: 2011-07-28 20:11:43
$dictionary['sphr_Show_object']['fields']['duration_minutes']['required']=true;

 

 // created: 2011-07-28 20:12:08
$dictionary['sphr_Show_object']['fields']['duration_hours']['required']=true;

 

// created: 2011-07-23 21:57:17
$dictionary["sphr_Show_object"]["fields"]["sphr_deal_shr_show_object"] = array (
  'name' => 'sphr_deal_shr_show_object',
  'type' => 'link',
  'relationship' => 'sphr_deal_sphr_show_object',
  'source' => 'non-db',
  'vname' => 'LBL_SPHR_DEAL_SPHR_SHOW_OBJECT_FROM_SPHR_DEAL_TITLE',
);
$dictionary["sphr_Show_object"]["fields"]["sphr_deal_sow_object_name"] = array (
  'name' => 'sphr_deal_sow_object_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_SPHR_DEAL_SPHR_SHOW_OBJECT_FROM_SPHR_DEAL_TITLE',
  'save' => true,
  'id_name' => 'sphr_deal_3c7dhr_deal_ida',
  'link' => 'sphr_deal_shr_show_object',
  'table' => 'sphr_deal',
  'module' => 'sphr_Deal',
  'rname' => 'name',
);
$dictionary["sphr_Show_object"]["fields"]["sphr_deal_3c7dhr_deal_ida"] = array (
  'name' => 'sphr_deal_3c7dhr_deal_ida',
  'type' => 'link',
  'relationship' => 'sphr_deal_sphr_show_object',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_SPHR_DEAL_SPHR_SHOW_OBJECT_FROM_SPHR_SHOW_OBJECT_TITLE',
);

?>