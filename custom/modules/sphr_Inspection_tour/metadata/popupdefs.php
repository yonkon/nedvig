<?php
$popupMeta = array (
    'moduleMain' => 'sphr_Inspection_tour',
    'varName' => 'sphr_Inspection_tour',
    'orderBy' => 'sphr_inspection_tour.name',
    'whereClauses' => array (
  'flight' => 'sphr_inspection_tour.flight',
  'date_arrival' => 'sphr_inspection_tour.date_arrival',
  'date_departure' => 'sphr_inspection_tour.date_departure',
  'residence_place' => 'sphr_inspection_tour.residence_place',
  'transfer_need' => 'sphr_inspection_tour.transfer_need',
  'contact_receiving_manager' => 'sphr_inspection_tour.contact_receiving_manager',
  'preliminary_agreement' => 'sphr_inspection_tour.preliminary_agreement',
  'visa_contactor' => 'sphr_inspection_tour.visa_contactor',
  'visa_payment' => 'sphr_inspection_tour.visa_payment',
  'visa_document_date_put' => 'sphr_inspection_tour.visa_document_date_put',
  'visa_document_date_get' => 'sphr_inspection_tour.visa_document_date_get',
  'visa_transfer_client' => 'sphr_inspection_tour.visa_transfer_client',
  'ticket_contactor' => 'sphr_inspection_tour.ticket_contactor',
  'ticket_payment' => 'sphr_inspection_tour.ticket_payment',
  'ticket_date_arrival' => 'sphr_inspection_tour.ticket_date_arrival',
  'ticket_date_departure' => 'sphr_inspection_tour.ticket_date_departure',
  'ticket_flight_number_arrival' => 'sphr_inspection_tour.ticket_flight_number_arrival',
  'ticket_flight_number_departure' => 'sphr_inspection_tour.ticket_flight_number_departure',
  'sphr_clienttion_tour_name' => 'sphr_inspection_tour.sphr_clienttion_tour_name',
  'name' => 'sphr_inspection_tour.name',
),
    'searchInputs' => array (
  4 => 'flight',
  5 => 'date_arrival',
  6 => 'date_departure',
  7 => 'residence_place',
  8 => 'transfer_need',
  9 => 'contact_receiving_manager',
  10 => 'preliminary_agreement',
  11 => 'visa_contactor',
  12 => 'visa_payment',
  13 => 'visa_document_date_put',
  14 => 'visa_document_date_get',
  15 => 'visa_transfer_client',
  16 => 'ticket_contactor',
  17 => 'ticket_payment',
  18 => 'ticket_date_arrival',
  19 => 'ticket_date_departure',
  20 => 'ticket_flight_number_arrival',
  21 => 'ticket_flight_number_departure',
  22 => 'sphr_clienttion_tour_name',
  23 => 'name',
),
    'searchdefs' => array (
  'name' => 
  array (
    'type' => 'name',
    'label' => 'LBL_NAME',
    'width' => '10%',
    'name' => 'name',
  ),
  'sphr_clienttion_tour_name' => 
  array (
    'type' => 'relate',
    'link' => 'sphr_clientnspection_tour',
    'label' => 'LBL_SPHR_CLIENT_SPHR_INSPECTION_TOUR_FROM_SPHR_CLIENT_TITLE',
    'width' => '10%',
    'name' => 'sphr_clienttion_tour_name',
  ),
  'flight' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_FLIGHT',
    'sortable' => false,
    'width' => '10%',
    'name' => 'flight',
  ),
  'date_arrival' => 
  array (
    'type' => 'date',
    'label' => 'LBL_DATE_ARRIVAL',
    'width' => '10%',
    'name' => 'date_arrival',
  ),
  'date_departure' => 
  array (
    'type' => 'date',
    'label' => 'LBL_DATE_DEPARTURE',
    'width' => '10%',
    'name' => 'date_departure',
  ),
  'residence_place' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_RESIDENCE_PLACE',
    'width' => '10%',
    'name' => 'residence_place',
  ),
  'transfer_need' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_TRANSFER_NEED',
    'sortable' => false,
    'width' => '10%',
    'name' => 'transfer_need',
  ),
  'contact_receiving_manager' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_CONTACT_RECEIVING_MANAGER',
    'width' => '10%',
    'name' => 'contact_receiving_manager',
  ),
  'preliminary_agreement' => 
  array (
    'type' => 'text',
    'studio' => 'visible',
    'label' => 'LBL_PRELIMINARY_AGREEMENT',
    'sortable' => false,
    'width' => '10%',
    'name' => 'preliminary_agreement',
  ),
  'visa_contactor' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_VISA_CONTACTOR',
    'width' => '10%',
    'name' => 'visa_contactor',
  ),
  'visa_payment' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_VISA_PAYMENT',
    'width' => '10%',
    'name' => 'visa_payment',
  ),
  'visa_document_date_put' => 
  array (
    'type' => 'date',
    'label' => 'LBL_VISA_DOCUMENT_DATE_PUT',
    'width' => '10%',
    'name' => 'visa_document_date_put',
  ),
  'visa_document_date_get' => 
  array (
    'type' => 'date',
    'label' => 'LBL_VISA_DOCUMENT_DATE_GET',
    'width' => '10%',
    'name' => 'visa_document_date_get',
  ),
  'visa_transfer_client' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_VISA_TRANSFER_CLIENT',
    'sortable' => false,
    'width' => '10%',
    'name' => 'visa_transfer_client',
  ),
  'ticket_contactor' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_TICKET_CONTACTOR',
    'width' => '10%',
    'name' => 'ticket_contactor',
  ),
  'ticket_payment' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_TICKET_PAYMENT',
    'width' => '10%',
    'name' => 'ticket_payment',
  ),
  'ticket_date_arrival' => 
  array (
    'type' => 'date',
    'label' => 'LBL_TICKET_DATE_ARRIVAL',
    'width' => '10%',
    'name' => 'ticket_date_arrival',
  ),
  'ticket_date_departure' => 
  array (
    'type' => 'date',
    'label' => 'LBL_TICKET_DATE_DEPARTURE',
    'width' => '10%',
    'name' => 'ticket_date_departure',
  ),
  'ticket_flight_number_arrival' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_TICKET_FLIGHT_NUMBER_ARRIVAL',
    'width' => '10%',
    'name' => 'ticket_flight_number_arrival',
  ),
  'ticket_flight_number_departure' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_TICKET_FLIGHT_NUMBER_DEPARTURE',
    'width' => '10%',
    'name' => 'ticket_flight_number_departure',
  ),
),
    'listviewdefs' => array (
  'NAME' => 
  array (
    'type' => 'name',
    'label' => 'LBL_NAME',
    'width' => '10%',
    'default' => true,
  ),
  'SPHR_CLIENTTION_TOUR_NAME' => 
  array (
    'type' => 'relate',
    'link' => 'sphr_clientnspection_tour',
    'label' => 'LBL_SPHR_CLIENT_SPHR_INSPECTION_TOUR_FROM_SPHR_CLIENT_TITLE',
    'width' => '10%',
    'default' => true,
    'name' => 'sphr_clienttion_tour_name',
  ),
  'FLIGHT' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_FLIGHT',
    'sortable' => false,
    'width' => '10%',
    'name' => 'flight',
  ),
  'DATE_ARRIVAL' => 
  array (
    'type' => 'date',
    'label' => 'LBL_DATE_ARRIVAL',
    'width' => '10%',
    'default' => true,
    'name' => 'date_arrival',
  ),
  'DATE_DEPARTURE' => 
  array (
    'type' => 'date',
    'label' => 'LBL_DATE_DEPARTURE',
    'width' => '10%',
    'default' => true,
    'name' => 'date_departure',
  ),
  'VISA_DOCUMENT_DATE_PUT' => 
  array (
    'type' => 'date',
    'label' => 'LBL_VISA_DOCUMENT_DATE_PUT',
    'width' => '10%',
    'default' => true,
    'name' => 'visa_document_date_put',
  ),
  'VISA_DOCUMENT_DATE_GET' => 
  array (
    'type' => 'date',
    'label' => 'LBL_VISA_DOCUMENT_DATE_GET',
    'width' => '10%',
    'default' => true,
    'name' => 'visa_document_date_get',
  ),
  'TICKET_DATE_ARRIVAL' => 
  array (
    'type' => 'date',
    'label' => 'LBL_TICKET_DATE_ARRIVAL',
    'width' => '10%',
    'default' => true,
    'name' => 'ticket_date_arrival',
  ),
  'TICKET_DATE_DEPARTURE' => 
  array (
    'type' => 'date',
    'label' => 'LBL_TICKET_DATE_DEPARTURE',
    'width' => '10%',
    'default' => true,
    'name' => 'ticket_date_departure',
  ),
),
);
