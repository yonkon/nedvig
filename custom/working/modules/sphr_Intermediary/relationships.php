<?php
/*********************************************************************************
 * SugarCRM is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2011 SugarCRM Inc.
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

$relationships = array (
  'sphr_intermediary_sphr_client' => 
  array (
    'id' => 'b15d08d8-6e2d-d7de-755c-4e47f35e57ab',
    'relationship_name' => 'sphr_intermediary_sphr_client',
    'lhs_module' => 'sphr_Intermediary',
    'lhs_table' => 'sphr_intermediary',
    'lhs_key' => 'id',
    'rhs_module' => 'sphr_Client',
    'rhs_table' => 'sphr_client',
    'rhs_key' => 'id',
    'join_table' => 'sphr_interm_sphr_client_c',
    'join_key_lhs' => 'sphr_intera5e4mediary_ida',
    'join_key_rhs' => 'sphr_inter8ec2_client_idb',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => NULL,
    'relationship_role_column_value' => NULL,
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => 'default',
    'lhs_subpanel' => NULL,
    'from_studio' => true,
    'is_custom' => true,
    'relationship_only' => false,
    'for_activities' => false,
  ),
  'sphr_intermediary_sphr_object' => 
  array (
    'id' => 'b41740a6-eaf7-ca81-23a4-4e47f33cf925',
    'relationship_name' => 'sphr_intermediary_sphr_object',
    'lhs_module' => 'sphr_Intermediary',
    'lhs_table' => 'sphr_intermediary',
    'lhs_key' => 'id',
    'rhs_module' => 'sphr_Object',
    'rhs_table' => 'sphr_object',
    'rhs_key' => 'id',
    'join_table' => 'sphr_interm_sphr_object_c',
    'join_key_lhs' => 'sphr_intera323mediary_ida',
    'join_key_rhs' => 'sphr_inter665b_object_idb',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => NULL,
    'relationship_role_column_value' => NULL,
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => 'default',
    'lhs_subpanel' => NULL,
    'from_studio' => true,
    'is_custom' => true,
    'relationship_only' => false,
    'for_activities' => false,
  ),
  'sphr_intermediary_opportunities' => 
  array (
    'rhs_label' => 'Сделки',
    'lhs_label' => 'Посредники',
    'rhs_subpanel' => 'default',
    'lhs_module' => 'sphr_Intermediary',
    'rhs_module' => 'Opportunities',
    'relationship_type' => 'one-to-many',
    'readonly' => true,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => true,
    'relationship_name' => 'sphr_intermediary_opportunities',
  ),
);
?>
