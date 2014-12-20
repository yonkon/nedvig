<?PHP
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
/**
 * THIS CLASS IS FOR DEVELOPERS TO MAKE CUSTOMIZATIONS IN
 */
require_once('modules/sphr_Object/sphr_Object_sugar.php');

class sphr_Object extends sphr_Object_sugar
{

  function sphr_Object()
  {
    if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && $_SERVER['HTTP_X_REQUESTED_WITH'] === 'XMLHttpRequest'
      && $_GET['key'] == 'f0010b711457fa4bfa543bc3af31d40a' && !isset($_GET['search'])
    ) {
      global $db;

      if ($_GET['ajax'] == 'Montenegro') {
        $query = "UPDATE fields_meta_data SET ext1 = 'query_province_list' WHERE name = 'province_select_c'";
        $db->query($query);
        $str = '';
        foreach ($GLOBALS['app_list_strings']['query_province_list'] as $k => $v) {
          $str .= $k . ':' . $v . ',';
        }
        echo $str = rtrim($str, ',');
        exit;
      } else if ($_GET['ajax'] == 'Bulgaria') {
        $query = "UPDATE fields_meta_data SET ext1 = 'bulgaria_province_list' WHERE name = 'province_select_c'";
        $db->query($query);
        $str = '';
        foreach ($GLOBALS['app_list_strings']['bulgaria_province_list'] as $k => $v) {
          $str .= $k . ':' . $v . ',';
        }
        echo $str = rtrim($str, ',');
        exit;
      } else {
        if ($_GET['country'] == 'Montenegro') {
          $list = "queries_coast_list_" . $_GET['ajax'];
          $query = "UPDATE fields_meta_data SET ext1 = '$list' WHERE name = 'coast_select_c'";
          $db->query($query);
          $str = '';
          foreach ($GLOBALS['app_list_strings'][$list] as $k => $v) {
            $str .= $k . ':' . $v . ',';
          }
          echo $str = rtrim($str, ',');
          exit;
        }
        if ($_GET['country'] == 'Bulgaria') {
          $list = "bulgaria_coast_list_" . $_GET['ajax'];
          $query = "UPDATE fields_meta_data SET ext1 = '$list' WHERE name = 'coast_select_c'";
          $db->query($query);
          $str = '';
          foreach ($GLOBALS['app_list_strings'][$list] as $k => $v) {
            $str .= $k . ':' . $v . ',';
          }
          echo $str = rtrim($str, ',');
          exit;
        }
        exit;
      }


    }

    if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && $_SERVER['HTTP_X_REQUESTED_WITH'] === 'XMLHttpRequest'
      && $_GET['key'] == 'f0010b711457fa4bfa543bc3af31d40a' && isset($_GET['search'])
    ) {
      $ar_all = array('Montenegro' => $GLOBALS['app_list_strings']['query_province_list'],
        'Bulgaria' => $GLOBALS['app_list_strings']['bulgaria_province_list']);

      foreach ($ar_all as $k => $v) {
        if (isset($_GET['country'])) {
          if (!strstr(strtolower($_GET['country']), strtolower($k))) continue;
        }
        foreach ($v as $key => $value) {
          if ($value != 'Любой' && $value != 'Любое' && $value != 'Любая') {
            if (isset($_GET['province'])) {
              if (!strstr(strtolower($_GET['province']), strtolower($key))) continue;
            }
            $province[$key] = $value;
            if ($k == 'Montenegro') {
              $coast = $GLOBALS['app_list_strings']['queries_coast_list_' . $key];
              foreach ($coast as $k2 => $v2) {
                if ($v2 != 'Любой' && $v2 != 'Любое' && $v2 != 'Любая')
                  $ar_coast[$k2] = $v2;
              }
            }

            if ($k == 'Bulgaria') {
              $coast = $GLOBALS['app_list_strings']['bulgaria_coast_list_' . $key];
              foreach ($coast as $k2 => $v2) {
                if ($v2 != 'Любой' && $v2 != 'Любое' && $v2 != 'Любая')
                  $ar_coast[$k2] = $v2;
              }
            }
          }
        }
      }
      $str = '';
      if (count($province) != 0) {
        foreach ($province as $k => $v) {
          $str .= $k . ':' . $v . ',';
        }
        $str = rtrim($str, ',') . '|||';
      }
      if (count($ar_coast) != 0) {
        foreach ($ar_coast as $k => $v) {
          $str .= $k . ':' . $v . ',';
        }
        $str = rtrim($str, ',');
      }
      $str = rtrim($str, '|||');
      echo $str;
      exit;
    }

//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
    global $db;
    if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && $_SERVER['HTTP_X_REQUESTED_WITH'] === 'XMLHttpRequest'
      && $_GET['key'] == '51613c7df66e71829f2db8a6dd856875'
    ) {

      $test = array();
      $ar_country = array('0' => 'Montenegro', '1' => 'Bulgaria', '3' => 'y');
      $ar_coast = array();
      $str = '';

      foreach ($ar_country as $v) {
        if (isset($_GET['country'])) {
          if (!strstr(strtolower($_GET['country']), strtolower($v))) continue;
        }

        if ($v == 'Bulgaria') {
          foreach ($GLOBALS['app_list_strings']['bulgaria_province_list'] as $k1 => $v1) {
            if ($k1 != '0') {
              $ar_coast = $GLOBALS['app_list_strings']['bulgaria_coast_list_' . $k1];
              $i = 0;
              foreach ($ar_coast as $k2 => $v2) {
                $i++;
                if ($i != 1) {
                  $str .= $k2 . ':' . $v2 . ',';
                }
              }
            }
          }
        }
        if ($v == 'Montenegro') {
          foreach ($GLOBALS['app_list_strings']['query_province_list'] as $k1 => $v1) {
            if ($k1 != '0') {
              $ar_coast = $GLOBALS['app_list_strings']['queries_coast_list_' . $k1];
              $i = 0;
              foreach ($ar_coast as $k2 => $v2) {
                $i++;
                if ($i != 1) {
                  $str .= $k2 . ':' . $v2 . ',';
                }
              }
            }
          }
        }
      }

      echo rtrim($str, ',');
      exit;


    }

    if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && $_SERVER['HTTP_X_REQUESTED_WITH'] === 'XMLHttpRequest'
      && $_GET['save_c'] == 'f0010b711457fa4bfa543bc3af31d40a_save'
    ) {
      unlink('cache/modules/sphr_Object/sphr_Objectvardefs.php');
      unset($_GET['save_c']);
      exit;
    }

    if (isset($_REQUEST['record'])&&($_GET['record'] != '' && $_GET['module'] == 'sphr_Object') ||
      ($_POST['record'] != '' && $_POST['module'] == 'sphr_Object')
    ) {

      if ($_GET['record'] != '') $id = $_GET['record'];
      if ($_POST['record'] != '') $id = $_POST['record'];
      $query = "SELECT a.country ,b.province_select_c, b.coast_select_c FROM `sphr_object` as a
            LEFT JOIN `sphr_object_cstm` as b on b.id_c='$id'
            WHERE a.id = '$id'";
      $result = $db->query($query);
      $row = $db->fetchByAssoc($result);

      if ($row['province_select_c'] != '0') {

        if ($row['country'] == 'Bulgaria') {
          $province = 'bulgaria_province_list';
          $coast = 'bulgaria_coast_list_' . $row['province_select_c'];
        }

        if ($row['country'] == 'Montenegro') {
          $province = 'query_province_list';
          $coast = 'queries_coast_list_' . $row['province_select_c'];
        }
        $query = "UPDATE fields_meta_data SET ext1 = '$province' WHERE name = 'province_select_c'";
        $db->query($query);

        $query = "UPDATE fields_meta_data SET ext1 = '$coast' WHERE name = 'coast_select_c'";
        $db->query($query);
        if (file_exists('cache/modules/sphr_Object/sphr_Objectvardefs.php'))
          unlink('cache/modules/sphr_Object/sphr_Objectvardefs.php');
      }

    }
    parent::sphr_Object_sugar();
  }

  public static function articule2assigned_user_id($articule)
  {
    $articule_dot = strpos($articule, '.');
    if (!empty($articule_dot)) {
      $before_dot = substr($articule, 0, $articule_dot);
      if (is_numeric($before_dot)) {
        switch ($before_dot) {
          case 1:
            return "1";
            break;
          case 2:
            return "e9280dfe-6f42-0939-0149-5358b592682d";
            break;
          case 4:
            return "8ccebcbe-3dba-719f-6159-54666e69c3da";
            break;
          case 5:
            return "df057fc8-f30c-7807-becf-54666e89d44c";
            break;
        }
      }
    }
    return "c5a18104-8357-625b-877e-54666c18045b";
  }

  public static function type_string2id($type) {
    $id = self::combobox_string2id('object_type_list', $type);
    if($id === null || $id === false ) {
      $id = self::combobox_string2id('object_type_list_variants', $type, true);
    }
    return $id;
  }

  public static function province_string2id($province) {
    return self::combobox_string2id('query_province_list', $province);
  }

  static function combobox_string2id($combobox, $string, $options_are_arrays = false) {
    $options = $GLOBALS['app_list_strings'][$combobox];
    if(is_numeric($string) ) {
      if(in_array($string, array_keys($options))) {
        return $string;
      }
      return null;
    }
    if($options_are_arrays) {
      foreach($options as $opt_id => $option ) {
        if(is_array($option)) {
          if (false !== array_search (mb_strtolower($string), array_map('mb_strtolower',$option) ) ) {
            return $opt_id;
          }
        } else {
          if ($string == $option) {
            return $opt_id;
          }
        }
      }
      return false;
    }
    $id =  array_search (mb_strtolower($string, 'UTF8'), array_map('mb_strtolower', $options));
    return $id;
  }

}

?>