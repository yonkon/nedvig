<?php
/**
 * Created by PhpStorm.
 * User: shikon
 * Date: 22.09.14
 * Time: 21:12
 */
if(!defined('sugarEntry'))define('sugarEntry', true);

$startTime = microtime(true);
require_once('include/entryPoint.php');
require_once('include/MVC/SugarApplication.php');
$app = new SugarApplication();
$app->startSession();
$url = 'http://nedvig.int/index.php?entryPoint=importObject';
//$url = 'http://nedvig.int/custom/include/importObject/import.php';
$request = array(
    "module" => "Home",
"action" => "multimethod",
"data" => "YToxODp7czoxMToiaWRfb2JqZWN0X2MiO2k6MjE5MDtzOjQ6Im5hbWUiO3M6NzE6IjMt0YUg0Y3RgtCw0LbQvdGL0Lkg0LTQvtC8INCyINCo0YPRiNCw0L3QuCDRgSDQstC40LTQvtC8INC90LAg0LzQvtGA0LUuIjtzOjQ6InR5cGUiO2k6MTE7czoxMDoibmFtZV9lbmdfYyI7czoxMjoiMi4yNS4xMS4yMTkwIjtzOjE1OiJvYmplY3Rfc3RhdHVzX2MiO3M6NjoiXnNhbGVeIjtzOjEwOiJjYXRlZ29yeV9jIjtzOjM6Im5ldyI7czoxNDoic2VhX2Rpc3RhbmNlX2MiO3M6OToibTUwMF8xMDAwIjtzOjIyOiJjb21tX2NlbnRlcl9kaXN0YW5jZV9jIjtzOjc6Im01MF8zMDAiO3M6MTI6InRvdGFsX2FyZWFfYyI7aToyMDA7czoxNjoibnVtYmVyX2JlZHJvb21fYyI7czoxOiIxIjtzOjE3OiJudW1iZXJfYmF0aHJvb21fYyI7czoxOiIxIjtzOjg6InBpY3R1cmVzIjtzOjM5NDoiaHR0cDovL3RyYWRlZ29yaWEuY29tL2ltYWdlcy9vYmplY3RzLzIxOTAvYzk5MWQ4NDU2NWYzZjZiZTc3ZDEyMmRmMzJiZWQ3NTAuanBnLGh0dHA6Ly90cmFkZWdvcmlhLmNvbS9pbWFnZXMvb2JqZWN0cy8yMTkwLzgyYzRiYTA2M2RiZjkyYjViYWFmNTk5YzVjYTM2NmM2LmpwZyxodHRwOi8vdHJhZGVnb3JpYS5jb20vaW1hZ2VzL29iamVjdHMvMjE5MC9hZTRjOTdkNjZjNmRlZWIxYjU3YjQ5MjQ4NDdiMTZjMi5qcGcsaHR0cDovL3RyYWRlZ29yaWEuY29tL2ltYWdlcy9vYmplY3RzLzIxOTAvZjRhNzgyN2NjYTRkZWQ0MjE1YWQ2YzA2ZjcyNjkwMTMuanBnLGh0dHA6Ly90cmFkZWdvcmlhLmNvbS9pbWFnZXMvb2JqZWN0cy8yMTkwLzIyYzdlMzk3YjU0MzA2OGZmZDRhNTQxY2Q3ZmE1ZWNmLmpwZyI7czoxNjoicHJpY2Vfc2FsZV9pbnRfYyI7ZDoxMjAwMDA7czoxNToiY3JlYXRlZF9ieV9uYW1lIjtzOjE1OiJ0YW5qYXRyYWRlZ29yaWEiO3M6MjQ6ImFkZGl0aW9uYWxfZGVzY3JpcHRpb25fYyI7czozMjE6IjMt0YUg0Y3RgtCw0LbQvdGL0Lkg0LTQvtC8INCyINCo0YPRiNCw0L3QuCDRgSDQstC40LTQvtC8INC90LAg0LzQvtGA0LUuDQrQn9C70L7RidCw0LTRjCDQtNC+0LzQsCAyMDDQvDIuINCX0LXQvC7Rg9GH0LDRgdGC0L7QuiAyNTDQvDIuDQrQndCwINGD0YfQsNGB0YLQutC1INGA0L7QtNC90LjQutC+0LLQsNGPINCy0L7QtNCwLiDQldGB0YLRjCDQs9Cw0YDQsNC2INC4INC/0LDRgNC60LjQvdCzINC80LXRgdGC0L4uDQrQktC10LvQuNC60L7Qu9C10L/QvdGL0Lkg0LLQuNC0INC90LAg0LzQvtGA0LUuINCU0L4g0LzQvtGA0Y8gMTAwMCDQvNC10YLRgNC+0LIuDQrCoCI7czo3OiJhZGRyZXNzIjtzOjY6ItCR0LDRgCI7czoxNzoicHJvdmluY2Vfc2VsZWN0X2MiO2k6MjU7czoxNDoiY29hc3Rfc2VsZWN0X2MiO3M6NjoiMjVfNzA5Ijt9",
"user_name" => 'admin',
"password" => '21232f297a57a5a743894a0e4a801fc3', //'e429499077b87116e83bcdfb5cadb588',
);

$postData = '';
//create name value pairs seperated by &
foreach($request as $k => $v)
{
    $postData .= $k . '='.$v.'&';
}
rtrim($postData, '&');

$ch = curl_init();

curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch,CURLOPT_HEADER, false);
curl_setopt($ch, CURLOPT_POST, count($postData));
curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);

curl_setopt($ch,CURLOPT_FOLLOWLOCATION,TRUE);
//curl_setopt($ch,CURLOPT_MAXREDIRS,2);//only 2 redirects

$output=curl_exec($ch);

curl_close($ch);
echo $output;