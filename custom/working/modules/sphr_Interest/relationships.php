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
  'sphr_client_sphr_interest' => 
  array (
    'id' => '6ec76f9a-67b6-5e35-80d5-4e484a1e897c',
    'relationship_name' => 'sphr_client_sphr_interest',
    'lhs_module' => 'sphr_Client',
    'lhs_table' => 'sphr_client',
    'lhs_key' => 'id',
    'rhs_module' => 'sphr_Interest',
    'rhs_table' => 'sphr_interest',
    'rhs_key' => 'id',
    'join_table' => 'sphr_clientphr_interest_c',
    'join_key_lhs' => 'sphr_clienc30d_client_ida',
    'join_key_rhs' => 'sphr_clien17ddnterest_idb',
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
  'sphr_interest_sphr_object' => 
  array (
    'id' => '7253f72f-dcbb-9d2a-6ba9-4e484addb392',
    'relationship_name' => 'sphr_interest_sphr_object',
    'lhs_module' => 'sphr_Interest',
    'lhs_table' => 'sphr_interest',
    'lhs_key' => 'id',
    'rhs_module' => 'sphr_Object',
    'rhs_table' => 'sphr_object',
    'rhs_key' => 'id',
    'join_table' => 'sphr_intere_sphr_object_c',
    'join_key_lhs' => 'sphr_inter7d45nterest_ida',
    'join_key_rhs' => 'sphr_inter2e1e_object_idb',
    'relationship_type' => 'many-to-many',
    'relationship_role_column' => NULL,
    'relationship_role_column_value' => NULL,
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => 'default',
    'lhs_subpanel' => 'default',
    'from_studio' => true,
    'is_custom' => true,
    'relationship_only' => false,
    'for_activities' => false,
  ),
);
?>
