<?php
$listViewDefs ['Campaigns'] = 
array (
  'TRACK_CAMPAIGN' => 
  array (
    'width' => '1',
    'label' => '&nbsp;',
    'link' => true,
    'customCode' => ' <a title="{$TRACK_CAMPAIGN_TITLE}" href="index.php?action=TrackDetailView&module=Campaigns&record={$ID}"><img border="0" src="{$TRACK_CAMPAIGN_IMAGE}"></a> ',
    'default' => true,
    'studio' => false,
    'nowrap' => true,
    'sortable' => false,
  ),
  'LAUNCH_WIZARD' => 
  array (
    'width' => '1',
    'label' => '&nbsp;',
    'link' => true,
    'customCode' => ' <a title="{$LAUNCH_WIZARD_TITLE}" href="index.php?action=WizardHome&module=Campaigns&record={$ID}"><img border="0" src="{$LAUNCH_WIZARD_IMAGE}"></a>  ',
    'default' => true,
    'studio' => false,
    'nowrap' => true,
    'sortable' => false,
  ),
  'NAME' => 
  array (
    'width' => '20%',
    'label' => 'LBL_LIST_CAMPAIGN_NAME',
    'link' => true,
    'default' => true,
  ),
  'EXPECTED_COST' => 
  array (
    'type' => 'currency',
    'label' => 'LBL_CAMPAIGN_EXPECTED_COST',
    'currency_format' => true,
    'width' => '10%',
    'default' => true,
  ),
  'ACTUAL_COST' => 
  array (
    'type' => 'currency',
    'label' => 'LBL_CAMPAIGN_ACTUAL_COST',
    'currency_format' => true,
    'width' => '10%',
    'default' => true,
  ),
  'START_DATE' => 
  array (
    'type' => 'date',
    'label' => 'LBL_CAMPAIGN_START_DATE',
    'width' => '10%',
    'default' => true,
  ),
  'END_DATE' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LIST_END_DATE',
    'default' => true,
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '8%',
    'label' => 'LBL_LIST_ASSIGNED_USER',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => true,
  ),
  'COST_C' => 
  array (
    'type' => 'int',
    'default' => false,
    'label' => 'LBL_COST',
    'width' => '10%',
  ),
  'CONTENT' => 
  array (
    'type' => 'text',
    'label' => 'LBL_CAMPAIGN_CONTENT',
    'sortable' => false,
    'width' => '10%',
    'default' => false,
  ),
  'PHONE_IN_C' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_PHONE_IN',
    'width' => '10%',
  ),
);
?>
