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
  'sphr_market_channel_sphr_client' => 
  array (
    'id' => '37340e3c-3438-5686-d67c-4eecfabc15ce',
    'relationship_name' => 'sphr_market_channel_sphr_client',
    'lhs_module' => 'sphr_market_channel',
    'lhs_table' => 'sphr_market_channel',
    'lhs_key' => 'id',
    'rhs_module' => 'sphr_Client',
    'rhs_table' => 'sphr_client',
    'rhs_key' => 'id',
    'join_table' => 'sphr_market_sphr_client_c',
    'join_key_lhs' => 'sphr_marke85efcompany_ida',
    'join_key_rhs' => 'sphr_marke6013_client_idb',
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
  'sphr_market_company_sphr_market_channel' => 
  array (
    'id' => '72880f2c-9b9a-1768-a4cc-4eecfa40277a',
    'relationship_name' => 'sphr_market_company_sphr_market_channel',
    'lhs_module' => 'sphr_market_company',
    'lhs_table' => 'sphr_market_company',
    'lhs_key' => 'id',
    'rhs_module' => 'sphr_market_channel',
    'rhs_table' => 'sphr_market_channel',
    'rhs_key' => 'id',
    'join_table' => 'sphr_marketrket_channel_c',
    'join_key_lhs' => 'sphr_markef954company_ida',
    'join_key_rhs' => 'sphr_marke4757channel_idb',
    'relationship_type' => 'one-to-many',
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
  'sphr_market_channel_sphr_client_1' => 
  array (
    'id' => '84330f73-7cd5-cd95-5e13-4eecfa5c8ed2',
    'relationship_name' => 'sphr_market_channel_sphr_client_1',
    'lhs_module' => 'sphr_market_channel',
    'lhs_table' => 'sphr_market_channel',
    'lhs_key' => 'id',
    'rhs_module' => 'sphr_Client',
    'rhs_table' => 'sphr_client',
    'rhs_key' => 'id',
    'join_table' => 'sphr_marketphr_client_1_c',
    'join_key_lhs' => 'sphr_marke5c2achannel_ida',
    'join_key_rhs' => 'sphr_marke29a6_client_idb',
    'relationship_type' => 'one-to-many',
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
