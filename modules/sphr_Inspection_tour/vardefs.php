<?php
/*********************************************************************************
 * SugarCRM is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2010 SugarCRM Inc.
 * 
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 * 
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.  See the GNU Affero General Public License for more
 * details.
 * 
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 * 
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 * 
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 * 
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo. If the display of the logo is not reasonably feasible for
 * technical reasons, the Appropriate Legal Notices must display the words
 * "Powered by SugarCRM".
 ********************************************************************************/
$dictionary['sphr_Inspection_tour'] = array(
	'table'=>'sphr_inspection_tour',
	'audited'=>true,
	'fields'=>array (
  'flight' => 
  array (
    'required' => false,
    'name' => 'flight',
    'vname' => 'LBL_FLIGHT',
    'type' => 'enum',
    'massupdate' => 0,
    'default' => 'Yourself',
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'reportable' => true,
    'len' => 100,
    'size' => '20',
    'options' => 'Inspection_tour_flight_list',
    'studio' => 'visible',
    'dependency' => false,
  ),
  'date_arrival' => 
  array (
    'required' => false,
    'name' => 'date_arrival',
    'vname' => 'LBL_DATE_ARRIVAL',
    'type' => 'date',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'reportable' => true,
    'size' => '20',
  ),
  'date_departure' => 
  array (
    'required' => false,
    'name' => 'date_departure',
    'vname' => 'LBL_DATE_DEPARTURE',
    'type' => 'date',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'reportable' => true,
    'size' => '20',
  ),
  'residence_place' => 
  array (
    'required' => false,
    'name' => 'residence_place',
    'vname' => 'LBL_RESIDENCE_PLACE',
    'type' => 'varchar',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'reportable' => true,
    'len' => '255',
    'size' => '20',
  ),
  'transfer_need' => 
  array (
    'required' => false,
    'name' => 'transfer_need',
    'vname' => 'LBL_TRANSFER_NEED',
    'type' => 'enum',
    'massupdate' => 0,
    'default' => 'yes',
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'reportable' => true,
    'len' => 100,
    'size' => '20',
    'options' => 'Inspection_tour_transfer_need_list',
    'studio' => 'visible',
    'dependency' => false,
  ),
  'contact_receiving_manager' => 
  array (
    'required' => false,
    'name' => 'contact_receiving_manager',
    'vname' => 'LBL_CONTACT_RECEIVING_MANAGER',
    'type' => 'varchar',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'reportable' => true,
    'len' => '255',
    'size' => '20',
  ),
  'preliminary_agreement' => 
  array (
    'required' => false,
    'name' => 'preliminary_agreement',
    'vname' => 'LBL_PRELIMINARY_AGREEMENT',
    'type' => 'text',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'reportable' => true,
    'size' => '20',
    'studio' => 'visible',
    'rows' => '4',
    'cols' => '20',
  ),
  'visa_contactor' => 
  array (
    'required' => false,
    'name' => 'visa_contactor',
    'vname' => 'LBL_VISA_CONTACTOR',
    'type' => 'varchar',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'reportable' => true,
    'len' => '255',
    'size' => '20',
  ),
  'visa_payment' => 
  array (
    'required' => false,
    'name' => 'visa_payment',
    'vname' => 'LBL_VISA_PAYMENT',
    'type' => 'varchar',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'reportable' => true,
    'len' => '255',
    'size' => '20',
  ),
  'visa_document_date_put' => 
  array (
    'required' => false,
    'name' => 'visa_document_date_put',
    'vname' => 'LBL_VISA_DOCUMENT_DATE_PUT',
    'type' => 'date',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'reportable' => true,
    'size' => '20',
  ),
  'visa_document_date_get' => 
  array (
    'required' => false,
    'name' => 'visa_document_date_get',
    'vname' => 'LBL_VISA_DOCUMENT_DATE_GET',
    'type' => 'date',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'reportable' => true,
    'size' => '20',
  ),
  'visa_transfer_client' => 
  array (
    'required' => false,
    'name' => 'visa_transfer_client',
    'vname' => 'LBL_VISA_TRANSFER_CLIENT',
    'type' => 'enum',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'reportable' => true,
    'len' => 100,
    'size' => '20',
    'options' => 'inspection_tour_transfer_client_list',
    'studio' => 'visible',
    'dependency' => false,
  ),
  'ticket_contactor' => 
  array (
    'required' => false,
    'name' => 'ticket_contactor',
    'vname' => 'LBL_TICKET_CONTACTOR',
    'type' => 'varchar',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'reportable' => true,
    'len' => '255',
    'size' => '20',
  ),
  'ticket_payment' => 
  array (
    'required' => false,
    'name' => 'ticket_payment',
    'vname' => 'LBL_TICKET_PAYMENT',
    'type' => 'varchar',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'reportable' => true,
    'len' => '255',
    'size' => '20',
  ),
  'ticket_date_arrival' => 
  array (
    'required' => false,
    'name' => 'ticket_date_arrival',
    'vname' => 'LBL_TICKET_DATE_ARRIVAL',
    'type' => 'date',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'reportable' => true,
    'size' => '20',
  ),
  'ticket_date_departure' => 
  array (
    'required' => false,
    'name' => 'ticket_date_departure',
    'vname' => 'LBL_TICKET_DATE_DEPARTURE',
    'type' => 'date',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'reportable' => true,
    'size' => '20',
  ),
  'ticket_flight_number_arrival' => 
  array (
    'required' => false,
    'name' => 'ticket_flight_number_arrival',
    'vname' => 'LBL_TICKET_FLIGHT_NUMBER_ARRIVAL',
    'type' => 'varchar',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'reportable' => true,
    'len' => '255',
    'size' => '20',
  ),
  'ticket_flight_number_departure' => 
  array (
    'required' => false,
    'name' => 'ticket_flight_number_departure',
    'vname' => 'LBL_TICKET_FLIGHT_NUMBER_DEPARTURE',
    'type' => 'varchar',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'reportable' => true,
    'len' => '255',
    'size' => '20',
  ),
),
	'relationships'=>array (
),
	'optimistic_locking'=>true,
);
if (!class_exists('VardefManager')){
        require_once('include/SugarObjects/VardefManager.php');
}
VardefManager::createVardef('sphr_Inspection_tour','sphr_Inspection_tour', array('basic','assignable'));