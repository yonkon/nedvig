<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
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
$module_name = 'sphr_Object';
$searchFields[$module_name] =
	array (
    'price_sale_int_c'=> array(
      'query_type'=>'default',
      'db_field'=>array('price_sale_int_c','price_rent_int_c'),
      'force_unifiedsearch'=>true
    ),
    'name' => array( 'query_type'=>'default'),
    'current_user_only'=> array(
      'query_type'=>'default',
      'db_field'=>array('assigned_user_id'),
      'my_items'=>true,
      'vname' => 'LBL_CURRENT_USER_FILTER',
      'type' => 'bool'
    ),
    'assigned_user_id'=> array('query_type'=>'default'),
    'accounts_agents' => array(
      'query_type' => 'default',
        'operator' => 'subquery',
        'subquery' => 'SELECT aabr.bean_id
                FROM `accounts_agents_bean_rel` AS aabr
                JOIN `accounts_agents` AS aa ON aa.id = aabr.id_aa
                WHERE aa.deleted =0 and aabr.bean_module=\'sphr_Object\'
                AND aa.name LIKE',
        'db_field' => array( 'id', ),
    ),
  );
$searchFields[$module_name] =
  array (
    'name' => array(
      'query_type'=>'default'
    ),

    'price_sale_int_c'=> array(
      'query_type'=>'default',
      'type' => 'minimax'
    ),
    'price_sale_meter_c' => array(
      'type' => 'minimax'
    ),
    'total_area_c' => array(
      'type' => 'minimax'
    ),
    'area_area_c' => array(
      'type' => 'minimax'
    ),
    'number_bedroom_c' => array(
      'type' => 'minimax'
    ),
    'sea_distance_c' => array(
      'type' => 'minimax'
    ),
    'view_sea_c' => array(
      'type' => 'bool'
    ),
    'mebel_c' => array(
      'type' => 'bool'
    ),
    'first_line_c' => array(
      'type' => 'bool'
    ),
    'exclusive_c' => array(
      'type' => 'bool'
    ),
    'economy_c' => array(
      'type' => 'bool'
    ),
    'hot_c' => array(
      'type' => 'bool'
    ),
    'sold_c' => array(
      'type' => 'bool'
    ),
    'type' => array(
      'query_type'=>'default',
    ),
    'category_c' => array(
      'query_type'=>'default',
    ),
    'country' => array(
      'query_type'=>'default',
    ),
    'region' => array(
      'query_type'=>'default',
    ),
    'address' => array(
      'query_type'=>'default',
    ),
    'date_entered_min' => array(
      'db_field'=>array('date_entered'),
      'operator' => '>=',
      'query_type'=>'default',
      'type' => 'string'
    ),
    'date_entered_max' => array(
      'db_field'=>array('date_entered'),
      'operator' => '<=',
      'query_type'=>'default',
      'type' => 'string'
    ),
    'date_modified_min' => array(
      'db_field'=>array('date_modified'),
      'operator' => '>=',
      'query_type'=>'default',
      'type' => 'string'
    ),
    'date_modified_max' => array(
      'db_field'=>array('date_modified'),
      'operator' => '<=',
      'query_type'=>'default',
      'type' => 'string'
    ),
    'name_eng_c' => array(
      'query_type'=>'default',
    ),
    'current_user_only'=> array(
      'query_type'=>'default',
      'db_field'=>array('assigned_user_id'),
      'my_items'=>true,
      'vname' => 'LBL_CURRENT_USER_FILTER',
      'type' => 'bool'
    ),
    'assigned_user_id'=> array('query_type'=>'default'),
    'accounts_agents' => array(
      'query_type' => 'default',
      'operator' => 'subquery',
      'subquery' => 'SELECT aabr.bean_id
                FROM `accounts_agents_bean_rel` AS aabr
                JOIN `accounts_agents` AS aa ON aa.id = aabr.id_aa
                WHERE aa.deleted =0 and aabr.bean_module=\'sphr_Object\'
                AND aa.name LIKE',
      'db_field' => array( 'id', ),
    ),
  );
?>
