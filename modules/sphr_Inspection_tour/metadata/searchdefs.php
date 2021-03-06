<?php
$module_name = 'sphr_Inspection_tour';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'flight' => 
      array (
        'type' => 'enum',
        'default' => true,
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
        'default' => true,
        'name' => 'date_arrival',
      ),
      'date_departure' => 
      array (
        'type' => 'date',
        'label' => 'LBL_DATE_DEPARTURE',
        'width' => '10%',
        'default' => true,
        'name' => 'date_departure',
      ),
      'residence_place' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_RESIDENCE_PLACE',
        'width' => '10%',
        'default' => true,
        'name' => 'residence_place',
      ),
      'transfer_need' => 
      array (
        'type' => 'enum',
        'default' => true,
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
        'default' => true,
        'name' => 'contact_receiving_manager',
      ),
      'preliminary_agreement' => 
      array (
        'type' => 'text',
        'studio' => 'visible',
        'label' => 'LBL_PRELIMINARY_AGREEMENT',
        'sortable' => false,
        'width' => '10%',
        'default' => true,
        'name' => 'preliminary_agreement',
      ),
      'visa_contactor' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_VISA_CONTACTOR',
        'width' => '10%',
        'default' => true,
        'name' => 'visa_contactor',
      ),
      'visa_payment' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_VISA_PAYMENT',
        'width' => '10%',
        'default' => true,
        'name' => 'visa_payment',
      ),
      'visa_document_date_put' => 
      array (
        'type' => 'date',
        'label' => 'LBL_VISA_DOCUMENT_DATE_PUT',
        'width' => '10%',
        'default' => true,
        'name' => 'visa_document_date_put',
      ),
      'visa_document_date_get' => 
      array (
        'type' => 'date',
        'label' => 'LBL_VISA_DOCUMENT_DATE_GET',
        'width' => '10%',
        'default' => true,
        'name' => 'visa_document_date_get',
      ),
      'visa_transfer_client' => 
      array (
        'type' => 'enum',
        'studio' => 'visible',
        'label' => 'LBL_VISA_TRANSFER_CLIENT',
        'sortable' => false,
        'width' => '10%',
        'default' => true,
        'name' => 'visa_transfer_client',
      ),
      'ticket_contactor' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_TICKET_CONTACTOR',
        'width' => '10%',
        'default' => true,
        'name' => 'ticket_contactor',
      ),
      'ticket_payment' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_TICKET_PAYMENT',
        'width' => '10%',
        'default' => true,
        'name' => 'ticket_payment',
      ),
      'ticket_date_arrival' => 
      array (
        'type' => 'date',
        'label' => 'LBL_TICKET_DATE_ARRIVAL',
        'width' => '10%',
        'default' => true,
        'name' => 'ticket_date_arrival',
      ),
      'ticket_date_departure' => 
      array (
        'type' => 'date',
        'label' => 'LBL_TICKET_DATE_DEPARTURE',
        'width' => '10%',
        'default' => true,
        'name' => 'ticket_date_departure',
      ),
      'ticket_flight_number_arrival' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_TICKET_FLIGHT_NUMBER_ARRIVAL',
        'width' => '10%',
        'default' => true,
        'name' => 'ticket_flight_number_arrival',
      ),
      'ticket_flight_number_departure' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_TICKET_FLIGHT_NUMBER_DEPARTURE',
        'width' => '10%',
        'default' => true,
        'name' => 'ticket_flight_number_departure',
      ),
    ),
    'advanced_search' => 
    array (
      'flight' => 
      array (
        'type' => 'enum',
        'default' => true,
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
        'default' => true,
        'name' => 'date_arrival',
      ),
      'date_departure' => 
      array (
        'type' => 'date',
        'label' => 'LBL_DATE_DEPARTURE',
        'width' => '10%',
        'default' => true,
        'name' => 'date_departure',
      ),
      'residence_place' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_RESIDENCE_PLACE',
        'width' => '10%',
        'default' => true,
        'name' => 'residence_place',
      ),
      'transfer_need' => 
      array (
        'type' => 'enum',
        'default' => true,
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
        'default' => true,
        'name' => 'contact_receiving_manager',
      ),
      'preliminary_agreement' => 
      array (
        'type' => 'text',
        'studio' => 'visible',
        'label' => 'LBL_PRELIMINARY_AGREEMENT',
        'sortable' => false,
        'width' => '10%',
        'default' => true,
        'name' => 'preliminary_agreement',
      ),
      'visa_contactor' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_VISA_CONTACTOR',
        'width' => '10%',
        'default' => true,
        'name' => 'visa_contactor',
      ),
      'visa_payment' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_VISA_PAYMENT',
        'width' => '10%',
        'default' => true,
        'name' => 'visa_payment',
      ),
      'visa_document_date_put' => 
      array (
        'type' => 'date',
        'label' => 'LBL_VISA_DOCUMENT_DATE_PUT',
        'width' => '10%',
        'default' => true,
        'name' => 'visa_document_date_put',
      ),
      'visa_document_date_get' => 
      array (
        'type' => 'date',
        'label' => 'LBL_VISA_DOCUMENT_DATE_GET',
        'width' => '10%',
        'default' => true,
        'name' => 'visa_document_date_get',
      ),
      'visa_transfer_client' => 
      array (
        'type' => 'enum',
        'studio' => 'visible',
        'label' => 'LBL_VISA_TRANSFER_CLIENT',
        'sortable' => false,
        'width' => '10%',
        'default' => true,
        'name' => 'visa_transfer_client',
      ),
      'ticket_contactor' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_TICKET_CONTACTOR',
        'width' => '10%',
        'default' => true,
        'name' => 'ticket_contactor',
      ),
      'ticket_payment' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_TICKET_PAYMENT',
        'width' => '10%',
        'default' => true,
        'name' => 'ticket_payment',
      ),
      'ticket_date_arrival' => 
      array (
        'type' => 'date',
        'label' => 'LBL_TICKET_DATE_ARRIVAL',
        'width' => '10%',
        'default' => true,
        'name' => 'ticket_date_arrival',
      ),
      'ticket_date_departure' => 
      array (
        'type' => 'date',
        'label' => 'LBL_TICKET_DATE_DEPARTURE',
        'width' => '10%',
        'default' => true,
        'name' => 'ticket_date_departure',
      ),
      'ticket_flight_number_arrival' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_TICKET_FLIGHT_NUMBER_ARRIVAL',
        'width' => '10%',
        'default' => true,
        'name' => 'ticket_flight_number_arrival',
      ),
      'ticket_flight_number_departure' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_TICKET_FLIGHT_NUMBER_DEPARTURE',
        'width' => '10%',
        'default' => true,
        'name' => 'ticket_flight_number_departure',
      ),
    ),
  ),
  'templateMeta' => 
  array (
    'maxColumns' => '3',
    'widths' => 
    array (
      'label' => '10',
      'field' => '30',
    ),
  ),
);
?>
