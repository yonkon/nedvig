<?php
$module_name = 'sphr_Inspection_tour';
$listViewDefs [$module_name] = 
array (
  'SPHR_CLIENTTION_TOUR_NAME' => 
  array (
    'type' => 'relate',
    'link' => 'sphr_clientnspection_tour',
    'label' => 'LBL_SPHR_CLIENT_SPHR_INSPECTION_TOUR_FROM_SPHR_CLIENT_TITLE',
    'width' => '10%',
    'default' => true,
  ),
  'FLIGHT' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_FLIGHT',
    'sortable' => false,
    'width' => '10%',
    'link' => true,
  ),
  'DATE_ARRIVAL' => 
  array (
    'type' => 'date',
    'label' => 'LBL_DATE_ARRIVAL',
    'width' => '10%',
    'default' => true,
  ),
  'DATE_DEPARTURE' => 
  array (
    'type' => 'date',
    'label' => 'LBL_DATE_DEPARTURE',
    'width' => '10%',
    'default' => true,
  ),
  'VISA_DOCUMENT_DATE_PUT' => 
  array (
    'type' => 'date',
    'label' => 'LBL_VISA_DOCUMENT_DATE_PUT',
    'width' => '10%',
    'default' => true,
  ),
  'VISA_DOCUMENT_DATE_GET' => 
  array (
    'type' => 'date',
    'label' => 'LBL_VISA_DOCUMENT_DATE_GET',
    'width' => '10%',
    'default' => true,
  ),
  'TICKET_DATE_ARRIVAL' => 
  array (
    'type' => 'date',
    'label' => 'LBL_TICKET_DATE_ARRIVAL',
    'width' => '10%',
    'default' => true,
  ),
  'TICKET_DATE_DEPARTURE' => 
  array (
    'type' => 'date',
    'label' => 'LBL_TICKET_DATE_DEPARTURE',
    'width' => '10%',
    'default' => true,
  ),
  'DATE_ENTERED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_ENTERED',
    'width' => '10%',
    'default' => true,
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => true,
  ),
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => false,
    'link' => true,
  ),
  'RESIDENCE_PLACE' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_RESIDENCE_PLACE',
    'width' => '10%',
    'default' => false,
  ),
  'CONTACT_RECEIVING_MANAGER' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_CONTACT_RECEIVING_MANAGER',
    'width' => '10%',
    'default' => false,
  ),
  'TICKET_PAYMENT' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_TICKET_PAYMENT',
    'width' => '10%',
    'default' => false,
  ),
  'TICKET_FLIGHT_NUMBER_DEPARTURE' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_TICKET_FLIGHT_NUMBER_DEPARTURE',
    'width' => '10%',
    'default' => false,
  ),
  'TICKET_FLIGHT_NUMBER_ARRIVAL' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_TICKET_FLIGHT_NUMBER_ARRIVAL',
    'width' => '10%',
    'default' => false,
  ),
  'TICKET_CONTACTOR' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_TICKET_CONTACTOR',
    'width' => '10%',
    'default' => false,
  ),
  'VISA_TRANSFER_CLIENT' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_VISA_TRANSFER_CLIENT',
    'sortable' => false,
    'width' => '10%',
    'default' => false,
  ),
  'VISA_PAYMENT' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_VISA_PAYMENT',
    'width' => '10%',
    'default' => false,
  ),
  'VISA_CONTACTOR' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_VISA_CONTACTOR',
    'width' => '10%',
    'default' => false,
  ),
  'PRELIMINARY_AGREEMENT' => 
  array (
    'type' => 'text',
    'studio' => 'visible',
    'label' => 'LBL_PRELIMINARY_AGREEMENT',
    'sortable' => false,
    'width' => '10%',
    'default' => false,
  ),
  'TRANSFER_NEED' => 
  array (
    'type' => 'enum',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_TRANSFER_NEED',
    'sortable' => false,
    'width' => '10%',
  ),
);
?>
