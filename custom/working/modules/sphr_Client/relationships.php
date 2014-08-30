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
  'sphr_market_channel_sphr_client_1' => 
  array (
    'id' => '4c730ab7-8b77-de9d-e2d6-51127a59b1f0',
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
    'lhs_subpanel' => NULL,
    'from_studio' => true,
    'is_custom' => true,
    'relationship_only' => false,
    'for_activities' => false,
  ),
  'sphr_client_cosib_queries' => 
  array (
    'id' => '53940b61-b6d8-afee-9bde-51127aa87a6f',
    'relationship_name' => 'sphr_client_cosib_queries',
    'lhs_module' => 'sphr_Client',
    'lhs_table' => 'sphr_client',
    'lhs_key' => 'id',
    'rhs_module' => 'cosib_queries',
    'rhs_table' => 'cosib_queries',
    'rhs_key' => 'id',
    'join_table' => 'sphr_clientosib_queries_c',
    'join_key_lhs' => 'sphr_clien735b_client_ida',
    'join_key_rhs' => 'sphr_clien6a3fqueries_idb',
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
  'sphr_client_sphr_interest' => 
  array (
    'id' => '61f80327-869a-20eb-6c83-51127a232ddf',
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
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'from_studio' => true,
    'is_custom' => true,
    'relationship_only' => false,
    'for_activities' => false,
  ),
  'sphr_client_activities_calls' => 
  array (
    'id' => '77610dbc-3633-a10f-1da7-51127a3fd02f',
    'relationship_name' => 'sphr_client_activities_calls',
    'lhs_module' => 'sphr_Client',
    'lhs_table' => 'sphr_client',
    'lhs_key' => 'id',
    'rhs_module' => 'Calls',
    'rhs_table' => 'calls',
    'rhs_key' => 'parent_id',
    'join_table' => NULL,
    'join_key_lhs' => NULL,
    'join_key_rhs' => NULL,
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'sphr_Client',
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'is_custom' => true,
    'relationship_only' => false,
    'for_activities' => false,
    'from_studio' => false,
  ),
  'sphr_client_sphr_inspection_tour' => 
  array (
    'id' => '858b0fbe-7f73-242a-57b9-51127a769114',
    'relationship_name' => 'sphr_client_sphr_inspection_tour',
    'lhs_module' => 'sphr_Client',
    'lhs_table' => 'sphr_client',
    'lhs_key' => 'id',
    'rhs_module' => 'sphr_Inspection_tour',
    'rhs_table' => 'sphr_inspection_tour',
    'rhs_key' => 'id',
    'join_table' => 'sphr_clientpection_tour_c',
    'join_key_lhs' => 'sphr_clien6152_client_ida',
    'join_key_rhs' => 'sphr_clien26ebon_tour_idb',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => NULL,
    'relationship_role_column_value' => NULL,
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => 'default',
    'from_studio' => true,
    'is_custom' => true,
    'relationship_only' => false,
    'for_activities' => false,
  ),
  'cosib_client_trips_sphr_client' => 
  array (
    'id' => '9b580afc-bb0f-01d6-e2ee-51127ae661a0',
    'relationship_name' => 'cosib_client_trips_sphr_client',
    'lhs_module' => 'sphr_Client',
    'lhs_table' => 'sphr_client',
    'lhs_key' => 'id',
    'rhs_module' => 'Cosib_client_trips',
    'rhs_table' => 'cosib_client_trips',
    'rhs_key' => 'id',
    'join_table' => 'cosib_clien_sphr_client_c',
    'join_key_lhs' => 'cosib_cliee6e0_client_ida',
    'join_key_rhs' => 'cosib_cliea115t_trips_idb',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => NULL,
    'relationship_role_column_value' => NULL,
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => 'default',
    'lhs_subpanel' => NULL,
    'is_custom' => true,
    'relationship_only' => false,
    'for_activities' => false,
    'from_studio' => false,
  ),
  'sphr_market_company_sphr_client' => 
  array (
    'id' => 'c675037d-741c-760b-3abf-51127a281270',
    'relationship_name' => 'sphr_market_company_sphr_client',
    'lhs_module' => 'sphr_market_company',
    'lhs_table' => 'sphr_market_company',
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
    'lhs_subpanel' => NULL,
    'from_studio' => true,
    'is_custom' => true,
    'relationship_only' => false,
    'for_activities' => false,
  ),
  'sphr_client_sphr_object_1' => 
  array (
    'id' => 'cdf80ee2-81d0-1431-4bf6-51127ae5d4bb',
    'relationship_name' => 'sphr_client_sphr_object_1',
    'lhs_module' => 'sphr_Client',
    'lhs_table' => 'sphr_client',
    'lhs_key' => 'id',
    'rhs_module' => 'sphr_Object',
    'rhs_table' => 'sphr_object',
    'rhs_key' => 'id',
    'join_table' => 'sphr_clientphr_object_1_c',
    'join_key_lhs' => 'sphr_clienc1ac_client_ida',
    'join_key_rhs' => 'sphr_clien10fa_object_idb',
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
  'sphr_client_cosib_messages' => 
  array (
    'id' => 'dc6401bd-82cf-4aa1-829f-51127a352b9c',
    'relationship_name' => 'sphr_client_cosib_messages',
    'lhs_module' => 'sphr_Client',
    'lhs_table' => 'sphr_client',
    'lhs_key' => 'id',
    'rhs_module' => 'cosib_messages',
    'rhs_table' => 'cosib_messages',
    'rhs_key' => 'id',
    'join_table' => 'sphr_clientsib_messages_c',
    'join_key_lhs' => 'sphr_clien2679_client_ida',
    'join_key_rhs' => 'sphr_clienaceeessages_idb',
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
  'sphr_client_opportunities' => 
  array (
    'id' => 'e3ad0f41-a784-f8c2-5ec3-51127a86c7be',
    'relationship_name' => 'sphr_client_opportunities',
    'lhs_module' => 'sphr_Client',
    'lhs_table' => 'sphr_client',
    'lhs_key' => 'id',
    'rhs_module' => 'Opportunities',
    'rhs_table' => 'opportunities',
    'rhs_key' => 'id',
    'join_table' => 'sphr_clientpportunities_c',
    'join_key_lhs' => 'sphr_clien0590_client_ida',
    'join_key_rhs' => 'sphr_clien3cd1unities_idb',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => NULL,
    'relationship_role_column_value' => NULL,
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => 'default',
    'from_studio' => true,
    'is_custom' => true,
    'relationship_only' => false,
    'for_activities' => false,
  ),
  'sphr_client_activities_meetings' => 
  array (
    'id' => 'f9c909a1-b9ca-4e3a-4f92-51127abc2626',
    'relationship_name' => 'sphr_client_activities_meetings',
    'lhs_module' => 'sphr_Client',
    'lhs_table' => 'sphr_client',
    'lhs_key' => 'id',
    'rhs_module' => 'Meetings',
    'rhs_table' => 'meetings',
    'rhs_key' => 'parent_id',
    'join_table' => NULL,
    'join_key_lhs' => NULL,
    'join_key_rhs' => NULL,
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'sphr_Client',
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'is_custom' => true,
    'relationship_only' => false,
    'for_activities' => false,
    'from_studio' => false,
  ),
  'sphr_client_sphr_reserve' => 
  array (
    'id' => '10123f21-ef53-31e9-31bc-51127a21234b',
    'relationship_name' => 'sphr_client_sphr_reserve',
    'lhs_module' => 'sphr_Client',
    'lhs_table' => 'sphr_client',
    'lhs_key' => 'id',
    'rhs_module' => 'sphr_Reserve',
    'rhs_table' => 'sphr_reserve',
    'rhs_key' => 'id',
    'join_table' => 'sphr_clientsphr_reserve_c',
    'join_key_lhs' => 'sphr_clienc0d2_client_ida',
    'join_key_rhs' => 'sphr_clien03b8reserve_idb',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => NULL,
    'relationship_role_column_value' => NULL,
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'from_studio' => true,
    'is_custom' => true,
    'relationship_only' => false,
    'for_activities' => false,
  ),
  'sphr_intermediary_sphr_client' => 
  array (
    'id' => '11685739-f89e-57f8-afdf-51127a24c776',
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
  'prospects_sphr_client' => 
  array (
    'id' => '11d9364e-cab5-5cf6-e473-51127a06bbb1',
    'relationship_name' => 'prospects_sphr_client',
    'lhs_module' => 'Prospects',
    'lhs_table' => 'prospects',
    'lhs_key' => 'id',
    'rhs_module' => 'sphr_Client',
    'rhs_table' => 'sphr_client',
    'rhs_key' => 'id',
    'join_table' => 'prospects_sphr_client_c',
    'join_key_lhs' => 'prospects_485fospects_ida',
    'join_key_rhs' => 'prospects_cd3c_client_idb',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => NULL,
    'relationship_role_column_value' => NULL,
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => 'ForProspectLists',
    'lhs_subpanel' => 'default',
    'from_studio' => true,
    'is_custom' => true,
    'relationship_only' => false,
    'for_activities' => false,
  ),
  'accounts_sphr_client' => 
  array (
    'id' => '132b933a-61d5-1178-3d9b-51127af73843',
    'relationship_name' => 'accounts_sphr_client',
    'lhs_module' => 'Accounts',
    'lhs_table' => 'accounts',
    'lhs_key' => 'id',
    'rhs_module' => 'sphr_Client',
    'rhs_table' => 'sphr_client',
    'rhs_key' => 'id',
    'join_table' => 'accounts_sphr_client_c',
    'join_key_lhs' => 'accounts_s160fccounts_ida',
    'join_key_rhs' => 'accounts_sde91_client_idb',
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
  'opportunities_sphr_client' => 
  array (
    'id' => '14fcebf1-5819-5c44-6f46-51127a851600',
    'relationship_name' => 'opportunities_sphr_client',
    'lhs_module' => 'Opportunities',
    'lhs_table' => 'opportunities',
    'lhs_key' => 'id',
    'rhs_module' => 'sphr_Client',
    'rhs_table' => 'sphr_client',
    'rhs_key' => 'id',
    'join_table' => 'opportuniti_sphr_client_c',
    'join_key_lhs' => 'opportunitf5c8unities_ida',
    'join_key_rhs' => 'opportunitf4a8_client_idb',
    'relationship_type' => 'many-to-many',
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
  'sphr_inspection_tour_sphr_client' => 
  array (
    'id' => '1733f0c7-2f8f-d77d-dd53-51127a5daf07',
    'relationship_name' => 'sphr_inspection_tour_sphr_client',
    'lhs_module' => 'sphr_Inspection_tour',
    'lhs_table' => 'sphr_inspection_tour',
    'lhs_key' => 'id',
    'rhs_module' => 'sphr_Client',
    'rhs_table' => 'sphr_client',
    'rhs_key' => 'id',
    'join_table' => 'sphr_inspec_sphr_client_c',
    'join_key_lhs' => 'sphr_inspe351fon_tour_ida',
    'join_key_rhs' => 'sphr_inspe7f78_client_idb',
    'relationship_type' => 'many-to-many',
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
  'sphr_client_activities_notes' => 
  array (
    'id' => '182859a4-8828-c365-4f4f-51127a514661',
    'relationship_name' => 'sphr_client_activities_notes',
    'lhs_module' => 'sphr_Client',
    'lhs_table' => 'sphr_client',
    'lhs_key' => 'id',
    'rhs_module' => 'Notes',
    'rhs_table' => 'notes',
    'rhs_key' => 'parent_id',
    'join_table' => NULL,
    'join_key_lhs' => NULL,
    'join_key_rhs' => NULL,
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'sphr_Client',
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'is_custom' => true,
    'relationship_only' => false,
    'for_activities' => false,
    'from_studio' => false,
  ),
  'sphr_client_activities_tasks' => 
  array (
    'id' => '1913a001-7d6a-1956-43fb-51127ad6e62b',
    'relationship_name' => 'sphr_client_activities_tasks',
    'lhs_module' => 'sphr_Client',
    'lhs_table' => 'sphr_client',
    'lhs_key' => 'id',
    'rhs_module' => 'Tasks',
    'rhs_table' => 'tasks',
    'rhs_key' => 'parent_id',
    'join_table' => NULL,
    'join_key_lhs' => NULL,
    'join_key_rhs' => NULL,
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'sphr_Client',
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'is_custom' => true,
    'relationship_only' => false,
    'for_activities' => false,
    'from_studio' => false,
  ),
  'sphr_client_documents' => 
  array (
    'id' => '1bcb5a1f-a32f-4dea-9f28-51127ab34514',
    'relationship_name' => 'sphr_client_documents',
    'lhs_module' => 'sphr_Client',
    'lhs_table' => 'sphr_client',
    'lhs_key' => 'id',
    'rhs_module' => 'Documents',
    'rhs_table' => 'documents',
    'rhs_key' => 'id',
    'join_table' => 'sphr_client_documents_c',
    'join_key_lhs' => 'sphr_clien29a0_client_ida',
    'join_key_rhs' => 'sphr_clien34c3cuments_idb',
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
  'cosib_postsale_sphr_client' => 
  array (
    'id' => '1e073437-798c-0953-55d2-51127a86b5b0',
    'relationship_name' => 'cosib_postsale_sphr_client',
    'lhs_module' => 'Cosib_postsale',
    'lhs_table' => 'cosib_postsale',
    'lhs_key' => 'id',
    'rhs_module' => 'sphr_Client',
    'rhs_table' => 'sphr_client',
    'rhs_key' => 'id',
    'join_table' => 'cosib_posts_sphr_client_c',
    'join_key_lhs' => 'cosib_post666dostsale_ida',
    'join_key_rhs' => 'cosib_post53f6_client_idb',
    'relationship_type' => 'one-to-one',
    'relationship_role_column' => NULL,
    'relationship_role_column_value' => NULL,
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'is_custom' => true,
    'relationship_only' => false,
    'for_activities' => false,
    'from_studio' => false,
  ),
  'sphr_client_sphr_object' => 
  array (
    'id' => '1e7bc450-9056-ab09-eacc-51127a1dbb34',
    'relationship_name' => 'sphr_client_sphr_object',
    'lhs_module' => 'sphr_Client',
    'lhs_table' => 'sphr_client',
    'lhs_key' => 'id',
    'rhs_module' => 'sphr_Object',
    'rhs_table' => 'sphr_object',
    'rhs_key' => 'id',
    'join_table' => 'sphr_client_sphr_object_c',
    'join_key_lhs' => 'sphr_clien88c3_client_ida',
    'join_key_rhs' => 'sphr_clien826b_object_idb',
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
  'sphr_client_prospects' => 
  array (
    'id' => '1ef224ae-c9a9-1aac-1746-51127a01667b',
    'relationship_name' => 'sphr_client_prospects',
    'lhs_module' => 'sphr_Client',
    'lhs_table' => 'sphr_client',
    'lhs_key' => 'id',
    'rhs_module' => 'Prospects',
    'rhs_table' => 'prospects',
    'rhs_key' => 'id',
    'join_table' => 'sphr_client_prospects_c',
    'join_key_lhs' => 'sphr_clien0411_client_ida',
    'join_key_rhs' => 'sphr_clien0a5eospects_idb',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => NULL,
    'relationship_role_column_value' => NULL,
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => 'default',
    'lhs_subpanel' => 'ForProspectLists',
    'from_studio' => true,
    'is_custom' => true,
    'relationship_only' => false,
    'for_activities' => false,
  ),
);
?>