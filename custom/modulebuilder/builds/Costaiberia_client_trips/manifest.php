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


    $manifest = array (
         'acceptable_sugar_versions' => 
          array (
            
          ),
          'acceptable_sugar_flavors' =>
          array(
            'CE', 'PRO','ENT'
          ),
          'readme'=>'',
          'key'=>'Cosib',
          'author' => 'ap',
          'description' => '',
          'icon' => '',
          'is_uninstallable' => true,
          'name' => 'Costaiberia_client_trips',
          'published_date' => '2012-06-29 06:15:46',
          'type' => 'module',
          'version' => '1340950546',
          'remove_tables' => 'prompt',
          );
$installdefs = array (
  'id' => 'Costaiberia_client_trips',
  'beans' => 
  array (
    0 => 
    array (
      'module' => 'Cosib_client_trips',
      'class' => 'Cosib_client_trips',
      'path' => 'modules/Cosib_client_trips/Cosib_client_trips.php',
      'tab' => true,
    ),
  ),
  'layoutdefs' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/layoutdefs/cosib_client_trips_sphr_client_sphr_Client.php',
      'to_module' => 'sphr_Client',
    ),
    1 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/layoutdefs/cosib_client_trips_sphr_object_sphr_Object.php',
      'to_module' => 'sphr_Object',
    ),
    2 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/layoutdefs/cosib_client_trips_sphr_object_Cosib_client_trips.php',
      'to_module' => 'Cosib_client_trips',
    ),
  ),
  'relationships' => 
  array (
    0 => 
    array (
      'meta_data' => '<basepath>/SugarModules/relationships/relationships/cosib_client_trips_sphr_clientMetaData.php',
    ),
    1 => 
    array (
      'meta_data' => '<basepath>/SugarModules/relationships/relationships/cosib_client_trips_sphr_objectMetaData.php',
    ),
  ),
  'image_dir' => '<basepath>/icons',
  'copy' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/modules/Cosib_client_trips',
      'to' => 'modules/Cosib_client_trips',
    ),
  ),
  'language' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Cosib_client_trips.php',
      'to_module' => 'Cosib_client_trips',
      'language' => 'en_us',
    ),
    1 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Cosib_client_trips.php',
      'to_module' => 'Cosib_client_trips',
      'language' => 'ru_ru',
    ),
    2 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sphr_Client.php',
      'to_module' => 'sphr_Client',
      'language' => 'en_us',
    ),
    3 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sphr_Client.php',
      'to_module' => 'sphr_Client',
      'language' => 'ru_ru',
    ),
    4 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sphr_Object.php',
      'to_module' => 'sphr_Object',
      'language' => 'en_us',
    ),
    5 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sphr_Object.php',
      'to_module' => 'sphr_Object',
      'language' => 'ru_ru',
    ),
    6 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Cosib_client_trips.php',
      'to_module' => 'Cosib_client_trips',
      'language' => 'en_us',
    ),
    7 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Cosib_client_trips.php',
      'to_module' => 'Cosib_client_trips',
      'language' => 'ru_ru',
    ),
    8 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/en_us.lang.php',
      'to_module' => 'application',
      'language' => 'en_us',
    ),
    9 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/ru_ru.lang.php',
      'to_module' => 'application',
      'language' => 'ru_ru',
    ),
  ),
  'vardefs' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/cosib_client_trips_sphr_client_Cosib_client_trips.php',
      'to_module' => 'Cosib_client_trips',
    ),
    1 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/cosib_client_trips_sphr_client_sphr_Client.php',
      'to_module' => 'sphr_Client',
    ),
    2 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/cosib_client_trips_sphr_object_sphr_Object.php',
      'to_module' => 'sphr_Object',
    ),
    3 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/cosib_client_trips_sphr_object_Cosib_client_trips.php',
      'to_module' => 'Cosib_client_trips',
    ),
  ),
  'layoutfields' => 
  array (
    0 => 
    array (
      'additional_fields' => 
      array (
      ),
    ),
  ),
);