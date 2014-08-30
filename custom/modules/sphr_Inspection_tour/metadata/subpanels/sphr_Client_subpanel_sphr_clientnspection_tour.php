<?php
// created: 2012-03-12 01:34:15
$subpanel_layout['list_fields'] = array (
  'flight' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_FLIGHT',
    'sortable' => false,
    'width' => '10%',
	'widget_class' => 'SubPanelDetailViewLink',
  ),
  'ticket_date_arrival' => 
  array (
    'type' => 'date',
    'vname' => 'LBL_TICKET_DATE_ARRIVAL',
    'width' => '10%',
    'default' => true,
  ),
  'ticket_date_departure' => 
  array (
    'type' => 'date',
    'vname' => 'LBL_TICKET_DATE_DEPARTURE',
    'width' => '10%',
    'default' => true,
  ),
  'residence_place' => 
  array (
    'type' => 'varchar',
    'vname' => 'LBL_RESIDENCE_PLACE',
    'width' => '10%',
    'default' => true,
  ),
  'transfer_need' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_TRANSFER_NEED',
    'sortable' => false,
    'width' => '10%',
  ),
  'edit_button' => 
  array (
    'widget_class' => 'SubPanelEditButton',
    'module' => 'sphr_Inspection_tour',
    'width' => '4%',
    'default' => true,
  ),
  'remove_button' => 
  array (
    'widget_class' => 'SubPanelRemoveButton',
    'module' => 'sphr_Inspection_tour',
    'width' => '5%',
    'default' => true,
  ),
);
?>
