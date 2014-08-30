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
  'sphr_leads_opportunities' => 
  array (
    'rhs_label' => 'Сделки',
    'lhs_label' => 'Предварит. контакты',
    'rhs_subpanel' => 'default',
    'lhs_module' => 'sphr_leads',
    'rhs_module' => 'Opportunities',
    'relationship_type' => 'one-to-many',
    'readonly' => false,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
    'relationship_name' => 'sphr_leads_opportunities',
  ),
  'sphr_leads_sphr_interest' => 
  array (
    'rhs_label' => 'Интерес',
    'lhs_label' => 'Предварит. контакты',
    'rhs_subpanel' => 'default',
    'lhs_module' => 'sphr_leads',
    'rhs_module' => 'sphr_Interest',
    'relationship_type' => 'one-to-many',
    'readonly' => false,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
    'relationship_name' => 'sphr_leads_sphr_interest',
  ),
  'sphr_leads_notes' => 
  array (
    'rhs_label' => 'Заметки',
    'lhs_label' => 'Предварит. контакты',
    'rhs_subpanel' => 'default',
    'lhs_module' => 'sphr_leads',
    'rhs_module' => 'Notes',
    'relationship_type' => 'one-to-many',
    'readonly' => false,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
    'relationship_name' => 'sphr_leads_notes',
  ),
  'sphr_leads_sphr_inspection_tour' => 
  array (
    'rhs_label' => 'Ознакомительный тур',
    'lhs_label' => 'Предварит. контакты',
    'rhs_subpanel' => 'default',
    'lhs_module' => 'sphr_leads',
    'rhs_module' => 'sphr_Inspection_tour',
    'relationship_type' => 'one-to-many',
    'readonly' => false,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
    'relationship_name' => 'sphr_leads_sphr_inspection_tour',
  ),
  'sphr_leads_calls' => 
  array (
    'rhs_label' => 'Звонки',
    'lhs_label' => 'Предварит. контакты',
    'rhs_subpanel' => 'default',
    'lhs_module' => 'sphr_leads',
    'rhs_module' => 'Calls',
    'relationship_type' => 'one-to-many',
    'readonly' => false,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
    'relationship_name' => 'sphr_leads_calls',
  ),
  'sphr_leads_meetings' => 
  array (
    'rhs_label' => 'Встречи',
    'lhs_label' => 'Предварит. контакты',
    'rhs_subpanel' => 'default',
    'lhs_module' => 'sphr_leads',
    'rhs_module' => 'Meetings',
    'relationship_type' => 'one-to-many',
    'readonly' => false,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
    'relationship_name' => 'sphr_leads_meetings',
  ),
  'sphr_leads_tasks' => 
  array (
    'rhs_label' => 'Задачи',
    'lhs_label' => 'Предварит. контакты',
    'rhs_subpanel' => 'default',
    'lhs_module' => 'sphr_leads',
    'rhs_module' => 'Tasks',
    'relationship_type' => 'one-to-many',
    'readonly' => false,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
    'relationship_name' => 'sphr_leads_tasks',
  ),
  'sphr_leads_sphr_reserve' => 
  array (
    'rhs_label' => 'Резерв',
    'lhs_label' => 'Предварит. контакты',
    'rhs_subpanel' => 'default',
    'lhs_module' => 'sphr_leads',
    'rhs_module' => 'sphr_Reserve',
    'relationship_type' => 'one-to-many',
    'readonly' => false,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
    'relationship_name' => 'sphr_leads_sphr_reserve',
  ),
);
?>
