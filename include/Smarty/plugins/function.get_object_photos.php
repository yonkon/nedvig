<?php

/**
 * Smarty plugin
 * @package Smarty
 * @subpackage plugins
 */


/**
 * smarty_function_get_object_photos
 *
 * Type:     function<br>
 * Name:     get_object_photos<br>
 * Input:<br>
 *           - max    (optional) - max photos per object
 *           - html   (optional) - bool default not set
 *           - id     (required) - string object id
 * Purpose:  Prints the list of <option> tags generated from
 *           the passed parameters
 * @link http://smarty.php.net/manual/en/language.function.html.options.php {html_image}
 *      (Smarty online manual)
 * @author Shikon <yonkon dot ru at gmail dot com>
 * @param array
 * @param Smarty
 * @return string
 */
function smarty_function_get_object_photos($params, &$smarty)
{
  /** @var $db MysqliManager */
  $db = $GLOBALS['db'];

  $IMAGE_CLASS = 'image-miniature';
  /** @var $smarty Smarty */
  require_once $smarty->_get_plugin_filepath('shared','escape_special_chars');
  $id = null;
  $html = false;
  $max = '';
  $assign = null;
  if (empty ($params['id'])) {
    $smarty->_trigger_fatal_error('No object id given');
  } else {
    $id = $params['id'];
  }

  $extra = '';

  foreach($params as $_key => $_val) {
    switch($_key) {
      case 'max':
        $$_key = (string)$_val;
        break;
      case 'id':
        break;
      case 'assign':
        $assign = (string)$_val;
        break;
      case 'html':
        $html = !empty($_val) && ($_val != 'false');

      default:
        if(!is_array($_val)) {
          $extra .= ' '.$_key.'="'.smarty_function_escape_special_chars($_val).'"';
        } else {
          $smarty->trigger_error("html_options: extra attribute '$_key' cannot be an array", E_USER_NOTICE);
        }
        break;
    }
  }
  $query = "SELECT id from sphr_object_photo_c WHERE sphr_object_id = '$id' ";
  if(!empty ($max)) {
    $max = intval($max);
    $query .= " LIMIT $max ";
  }
  $resouce = $db->query($query);
//  $resouce = $GLOBALS['db']->mysql_query($query);
//  $images = mysql_fetch_array($resouce);
  while ($imag = $db->fetchByAssoc($resouce)) {
    $images[] = $imag['id'];
  }
  if(!empty($images) ) {
    foreach($images as $i=>$image) {
      $images[$i] = $image = $GLOBALS['sugar_config']['cache_dir'] .'upload/object/' . $image;
      if ($html) {
        $images[$i] = $image  = "<img class=\"{$IMAGE_CLASS}\" src=\"{$image}\">";
      }
    }
  }

  if(!empty($assign)) {
    $smarty->assign($assign, $images);
  }

  return $images;

}

/* vim: set expandtab: */

?>
