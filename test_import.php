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
"data" => "YToxMjk6e3M6MTE6ImlkX29iamVjdF9jIjtpOjIwNDA7czo0OiJuYW1lIjtzOjg0OiLQodGC0LDRgNGL0Lkg0LrQsNC80LXQvdC90YvQuSDQtNC+0Lwg0LIg0JTRg9C/0LjQu9C+LiDQkdCw0YDRgdC60LDRjyDRgNC40LLRjNC10YDQsC4iO3M6NDoidHlwZSI7aToxMTtzOjEwOiJuYW1lX2VuZ19jIjtzOjEyOiIyLjI1LjExLjIwNDAiO3M6MTU6Im9iamVjdF9zdGF0dXNfYyI7czo2OiJec2FsZV4iO3M6MTA6ImNhdGVnb3J5X2MiO3M6MzoibmV3IjtzOjE0OiJzZWFfZGlzdGFuY2VfYyI7czoxNDoibTUwMDBfYW5kX21vcmUiO3M6MjI6ImNvbW1fY2VudGVyX2Rpc3RhbmNlX2MiO3M6NzoibTUwXzMwMCI7czoxMjoidG90YWxfYXJlYV9jIjtpOjIyNTtzOjExOiJhcmVhX2FyZWFfYyI7aTo0MDA7czoxMDoidmlld19zZWFfYyI7YjowO3M6NzoibWViZWxfYyI7YjowO3M6MTY6Im51bWJlcl9iZWRyb29tX2MiO2k6NTtzOjE3OiJudW1iZXJfYmF0aHJvb21fYyI7czoxOiIxIjtzOjg6InBpY3R1cmVzIjtzOjIzNjoiaHR0cDovL3RyYWRlZ29yaWEuY29tL2ltYWdlcy9vYmplY3RzLzIwNDAvNjcxMDI5ZTNmYTY4N2IyNmI2MGFkNjA5MjY1OWYxNDEuanBnLGh0dHA6Ly90cmFkZWdvcmlhLmNvbS9pbWFnZXMvb2JqZWN0cy8yMDQwL2I2OTkzODU4Nzc4NWQ0N2I5OGI3OTRmYWU3ZDg0MTVlLmpwZyxodHRwOi8vdHJhZGVnb3JpYS5jb20vaW1hZ2VzL29iamVjdHMvMjA0MC83MjJiZmNiNjQ3YzkwNTFlZjk3NDg3NGMyNzQyZWY1Mi5qcGciO3M6MTY6InByaWNlX3NhbGVfaW50X2MiO2k6MTAwMDA7czoxNToiY3JlYXRlZF9ieV9uYW1lIjtzOjE1OiJ0YW5qYXRyYWRlZ29yaWEiO3M6MjQ6ImFkZGl0aW9uYWxfZGVzY3JpcHRpb25fYyI7czo0MDI6ItCh0YLQsNGA0YvQuSDQutCw0LzQtdC90L3Ri9C5INC00L7QvCDQsiDQlNGD0L/QuNC70L4uINCR0LDRgNGB0LrQsNGPINGA0LjQstGM0LXRgNCwLg0K0J/Qu9C+0YnQsNC00Ywg0LTQvtC80LAgMjI10LwyLiDQo9GH0LDRgdGC0L7QuiDQt9C10LzQu9C4IDQwMNC8Mi4NCtCU0L7QvCDQvdCw0YXQvtC00LjRgtGB0Y8g0LIg0YHQtdC70YzRgdC60L7QuSDQvNC10YHRgtC90L7RgdGC0LgsINCyMTcg0LrQvCDQvtGCINCf0L7QtNCz0L7RgNC40YbRiy4NCtCSINC00L7QvNC1INCy0L7QtNCwINC4INGN0LvQtdC60YLRgNC40YfQtdGB0YLQstC+LCDQtNC+INC00L7QvNCwINC00L7RgNC+0LPQsC4NCtCU0L7QvCDRgtGA0LXQsdGD0LXRgiDQutCw0L/QuNGC0LDQu9GM0L3QvtCz0L4g0YDQtdC80L7QvdGC0LAuDQrCoCI7czoxMDoicmF3ZGF0YV9pZCI7aToyMDQwO3M6MTU6InJhd2RhdGFfYXJ0aWNsZSI7czoxMjoiMi4yNS4xMS4yMDQwIjtzOjEzOiJyYXdkYXRhX3ByaWNlIjtkOjEwMDAwO3M6MTc6InJhd2RhdGFfb2xkX3ByaWNlIjtkOjA7czoxNDoicmF3ZGF0YV93ZWlnaHQiO2Q6MDtzOjEzOiJyYXdkYXRhX2ltYWdlIjtzOjU3OiIvaW1hZ2VzL29iamVjdHMvMjA0MC82NzEwMjllM2ZhNjg3YjI2YjYwYWQ2MDkyNjU5ZjE0MS5qcGciO3M6MTM6InJhd2RhdGFfdGh1bWIiO3M6NjQ6Ii9pbWFnZXMvb2JqZWN0cy8yMDQwLzEyMng4MC82NzEwMjllM2ZhNjg3YjI2YjYwYWQ2MDkyNjU5ZjE0MS5qcGciO3M6MTQ6InJhd2RhdGFfdmVuZG9yIjtpOjA7czoxNToicmF3ZGF0YV9tYWRlX2luIjtzOjA6IiI7czoxMToicmF3ZGF0YV9uZXciO2I6MDtzOjE1OiJyYXdkYXRhX3BvcHVsYXIiO2I6MDtzOjE2OiJyYXdkYXRhX2Zhdm9yaXRlIjtiOjA7czoxMjoicmF3ZGF0YV90YWdzIjtOO3M6MTM6InJhd2RhdGFfY29sb3IiO047czoxMjoicmF3ZGF0YV9zaXplIjtOO3M6MTQ6InJhd2RhdGFfc291cmNlIjtpOjI7czoxMjoicmF3ZGF0YV9hcmVhIjtpOjIyNTtzOjE4OiJyYXdkYXRhX3BsYWNlX2FyZWEiO2k6NDAwO3M6MTM6InJhd2RhdGFfcm9vbXMiO2k6NTtzOjIwOiJyYXdkYXRhX3NlYV9kaXN0YW5jZSI7aToyMDAwMDtzOjE2OiJyYXdkYXRhX3NlYV92aWV3IjtiOjA7czoxNzoicmF3ZGF0YV9mdXJuaXR1cmUiO2I6MDtzOjE4OiJyYXdkYXRhX2ZpcnN0X2xpbmUiO2I6MDtzOjE1OiJyYXdkYXRhX2Vjb25vbXkiO2I6MDtzOjExOiJyYXdkYXRhX2hvdCI7YjowO3M6MTc6InJhd2RhdGFfZXhjbHVzaXZlIjtiOjA7czoxMjoicmF3ZGF0YV9zb2xkIjtiOjE7czoxMzoicmF3ZGF0YV92aWRlbyI7czowOiIiO3M6MTk6InJhd2RhdGFfb2xkX2FydGljbGUiO3M6MDoiIjtzOjE3OiJyYXdkYXRhX293bmVyX2ZpbyI7czowOiIiO3M6MjI6InJhd2RhdGFfb3duZXJfY29udGFjdHMiO3M6MDoiIjtzOjE1OiJyYXdkYXRhX2NvbW1lbnQiO3M6MDoiIjtzOjE1OiJyYXdkYXRhX3BhcnRuZXIiO3M6MDoiIjtzOjY6InJhd19pZCI7aToyMDQwO3M6ODoicmF3X3R5cGUiO3M6ODoiZG9jdW1lbnQiO3M6MTU6InJhd19jb250ZW50VHlwZSI7czo5OiJ0ZXh0L2h0bWwiO3M6MTM6InJhd19wYWdldGl0bGUiO3M6ODQ6ItCh0YLQsNGA0YvQuSDQutCw0LzQtdC90L3Ri9C5INC00L7QvCDQsiDQlNGD0L/QuNC70L4uINCR0LDRgNGB0LrQsNGPINGA0LjQstGM0LXRgNCwLiI7czoxMzoicmF3X2xvbmd0aXRsZSI7czo4NDoi0KHRgtCw0YDRi9C5INC60LDQvNC10L3QvdGL0Lkg0LTQvtC8INCyINCU0YPQv9C40LvQvi4g0JHQsNGA0YHQutCw0Y8g0YDQuNCy0YzQtdGA0LAuIjtzOjE1OiJyYXdfZGVzY3JpcHRpb24iO3M6MDoiIjtzOjk6InJhd19hbGlhcyI7czo0NToic3Rhcnl5LWthbWVubnl5LWRvbS12LWR1cGlsby4tYmFyc2theWEtcml2ZXJhIjtzOjE5OiJyYXdfbGlua19hdHRyaWJ1dGVzIjtzOjA6IiI7czoxMzoicmF3X3B1Ymxpc2hlZCI7YjoxO3M6MTI6InJhd19wdWJfZGF0ZSI7aTowO3M6MTQ6InJhd191bnB1Yl9kYXRlIjtpOjA7czoxMDoicmF3X3BhcmVudCI7aToxMTtzOjEyOiJyYXdfaXNmb2xkZXIiO2I6MDtzOjEzOiJyYXdfaW50cm90ZXh0IjtzOjA6IiI7czoxMToicmF3X2NvbnRlbnQiO3M6NDQ0OiI8cD7QodGC0LDRgNGL0Lkg0LrQsNC80LXQvdC90YvQuSDQtNC+0Lwg0LIg0JTRg9C/0LjQu9C+LiDQkdCw0YDRgdC60LDRjyDRgNC40LLRjNC10YDQsC48L3A+DQo8cD7Qn9C70L7RidCw0LTRjCDQtNC+0LzQsCAyMjXQvDIuINCj0YfQsNGB0YLQvtC6INC30LXQvNC70LggNDAw0LwyLjwvcD4NCjxwPtCU0L7QvCDQvdCw0YXQvtC00LjRgtGB0Y8g0LIg0YHQtdC70YzRgdC60L7QuSDQvNC10YHRgtC90L7RgdGC0LgsINCyMTcg0LrQvCDQvtGCINCf0L7QtNCz0L7RgNC40YbRiy48L3A+DQo8cD7QkiDQtNC+0LzQtSDQstC+0LTQsCDQuCDRjdC70LXQutGC0YDQuNGH0LXRgdGC0LLQviwg0LTQviDQtNC+0LzQsCDQtNC+0YDQvtCz0LAuPC9wPg0KPHA+0JTQvtC8INGC0YDQtdCx0YPQtdGCINC60LDQv9C40YLQsNC70YzQvdC+0LPQviDRgNC10LzQvtC90YLQsC48L3A+DQo8cD7CoDwvcD4iO3M6MTI6InJhd19yaWNodGV4dCI7YjoxO3M6MTI6InJhd190ZW1wbGF0ZSI7aTo0O3M6MTM6InJhd19tZW51aW5kZXgiO2k6NTQ1O3M6MTQ6InJhd19zZWFyY2hhYmxlIjtiOjE7czoxMzoicmF3X2NhY2hlYWJsZSI7YjoxO3M6MTM6InJhd19jcmVhdGVkYnkiO2k6NDtzOjEzOiJyYXdfY3JlYXRlZG9uIjtzOjE5OiIyMDE0LTA2LTAxIDExOjI0OjEzIjtzOjEyOiJyYXdfZWRpdGVkYnkiO2k6MTtzOjEyOiJyYXdfZWRpdGVkb24iO3M6MTk6IjIwMTQtMTEtMTAgMTU6NDQ6MTUiO3M6MTE6InJhd19kZWxldGVkIjtiOjA7czoxMzoicmF3X2RlbGV0ZWRvbiI7aTowO3M6MTM6InJhd19kZWxldGVkYnkiO2k6MDtzOjE1OiJyYXdfcHVibGlzaGVkb24iO3M6MTk6IjIwMTQtMDYtMDEgMTE6MjU6MDAiO3M6MTU6InJhd19wdWJsaXNoZWRieSI7aTo0O3M6MTM6InJhd19tZW51dGl0bGUiO3M6MDoiIjtzOjExOiJyYXdfZG9udGhpdCI7YjowO3M6MTQ6InJhd19wcml2YXRld2ViIjtiOjA7czoxNDoicmF3X3ByaXZhdGVtZ3IiO2I6MDtzOjE3OiJyYXdfY29udGVudF9kaXNwbyI7aTowO3M6MTI6InJhd19oaWRlbWVudSI7YjowO3M6MTM6InJhd19jbGFzc19rZXkiO3M6OToibXNQcm9kdWN0IjtzOjE1OiJyYXdfY29udGV4dF9rZXkiO3M6Mzoid2ViIjtzOjE2OiJyYXdfY29udGVudF90eXBlIjtpOjE7czo3OiJyYXdfdXJpIjtzOjY4OiJuZWR2aXpoaW1vc3QvZG9tYS9zdGFyeXkta2FtZW5ueXktZG9tLXYtZHVwaWxvLi1iYXJza2F5YS1yaXZlcmEuaHRtbCI7czoxNjoicmF3X3VyaV9vdmVycmlkZSI7aTowO3M6MjU6InJhd19oaWRlX2NoaWxkcmVuX2luX3RyZWUiO2k6MDtzOjE2OiJyYXdfc2hvd19pbl90cmVlIjtpOjA7czoxNDoicmF3X3Byb3BlcnRpZXMiO047czoxMToicmF3X2FydGljbGUiO3M6MTI6IjIuMjUuMTEuMjA0MCI7czo5OiJyYXdfcHJpY2UiO2Q6MTAwMDA7czoxMzoicmF3X29sZF9wcmljZSI7ZDowO3M6MTA6InJhd193ZWlnaHQiO2Q6MDtzOjk6InJhd19pbWFnZSI7czo1NzoiL2ltYWdlcy9vYmplY3RzLzIwNDAvNjcxMDI5ZTNmYTY4N2IyNmI2MGFkNjA5MjY1OWYxNDEuanBnIjtzOjk6InJhd190aHVtYiI7czo2NDoiL2ltYWdlcy9vYmplY3RzLzIwNDAvMTIyeDgwLzY3MTAyOWUzZmE2ODdiMjZiNjBhZDYwOTI2NTlmMTQxLmpwZyI7czoxMDoicmF3X3ZlbmRvciI7aTowO3M6MTE6InJhd19tYWRlX2luIjtzOjA6IiI7czo3OiJyYXdfbmV3IjtiOjA7czoxMToicmF3X3BvcHVsYXIiO2I6MDtzOjEyOiJyYXdfZmF2b3JpdGUiO2I6MDtzOjg6InJhd190YWdzIjtOO3M6OToicmF3X2NvbG9yIjtOO3M6ODoicmF3X3NpemUiO047czoxMDoicmF3X3NvdXJjZSI7aToyO3M6ODoicmF3X2FyZWEiO2k6MjI1O3M6MTQ6InJhd19wbGFjZV9hcmVhIjtpOjQwMDtzOjk6InJhd19yb29tcyI7aTo1O3M6MTY6InJhd19zZWFfZGlzdGFuY2UiO2k6MjAwMDA7czoxMjoicmF3X3NlYV92aWV3IjtiOjA7czoxMzoicmF3X2Z1cm5pdHVyZSI7YjowO3M6MTQ6InJhd19maXJzdF9saW5lIjtiOjA7czoxMToicmF3X2Vjb25vbXkiO2I6MDtzOjc6InJhd19ob3QiO2I6MDtzOjEzOiJyYXdfZXhjbHVzaXZlIjtiOjA7czo4OiJyYXdfc29sZCI7YjoxO3M6OToicmF3X3ZpZGVvIjtzOjA6IiI7czoxNToicmF3X29sZF9hcnRpY2xlIjtzOjA6IiI7czoxMzoicmF3X293bmVyX2ZpbyI7czowOiIiO3M6MTg6InJhd19vd25lcl9jb250YWN0cyI7czowOiIiO3M6MTE6InJhd19jb21tZW50IjtzOjA6IiI7czoxMToicmF3X3BhcnRuZXIiO3M6MDoiIjtzOjc6ImFkZHJlc3MiO3M6Njoi0JHQsNGAIjtzOjE3OiJwcm92aW5jZV9zZWxlY3RfYyI7aToyNTtzOjE0OiJjb2FzdF9zZWxlY3RfYyI7czo2OiIyNV83MDkiO30=",
//"data" => "YToxODp7czoxMToiaWRfb2JqZWN0X2MiO2k6MjE5MDtzOjQ6Im5hbWUiO3M6NzE6IjMt0YUg0Y3RgtCw0LbQvdGL0Lkg0LTQvtC8INCyINCo0YPRiNCw0L3QuCDRgSDQstC40LTQvtC8INC90LAg0LzQvtGA0LUuIjtzOjQ6InR5cGUiO2k6MTE7czoxMDoibmFtZV9lbmdfYyI7czoxMjoiMi4yNS4xMS4yMTkwIjtzOjE1OiJvYmplY3Rfc3RhdHVzX2MiO3M6NjoiXnNhbGVeIjtzOjEwOiJjYXRlZ29yeV9jIjtzOjM6Im5ldyI7czoxNDoic2VhX2Rpc3RhbmNlX2MiO3M6OToibTUwMF8xMDAwIjtzOjIyOiJjb21tX2NlbnRlcl9kaXN0YW5jZV9jIjtzOjc6Im01MF8zMDAiO3M6MTI6InRvdGFsX2FyZWFfYyI7aToyMDA7czoxNjoibnVtYmVyX2JlZHJvb21fYyI7czoxOiIxIjtzOjE3OiJudW1iZXJfYmF0aHJvb21fYyI7czoxOiIxIjtzOjg6InBpY3R1cmVzIjtzOjM5NDoiaHR0cDovL3RyYWRlZ29yaWEuY29tL2ltYWdlcy9vYmplY3RzLzIxOTAvYzk5MWQ4NDU2NWYzZjZiZTc3ZDEyMmRmMzJiZWQ3NTAuanBnLGh0dHA6Ly90cmFkZWdvcmlhLmNvbS9pbWFnZXMvb2JqZWN0cy8yMTkwLzgyYzRiYTA2M2RiZjkyYjViYWFmNTk5YzVjYTM2NmM2LmpwZyxodHRwOi8vdHJhZGVnb3JpYS5jb20vaW1hZ2VzL29iamVjdHMvMjE5MC9hZTRjOTdkNjZjNmRlZWIxYjU3YjQ5MjQ4NDdiMTZjMi5qcGcsaHR0cDovL3RyYWRlZ29yaWEuY29tL2ltYWdlcy9vYmplY3RzLzIxOTAvZjRhNzgyN2NjYTRkZWQ0MjE1YWQ2YzA2ZjcyNjkwMTMuanBnLGh0dHA6Ly90cmFkZWdvcmlhLmNvbS9pbWFnZXMvb2JqZWN0cy8yMTkwLzIyYzdlMzk3YjU0MzA2OGZmZDRhNTQxY2Q3ZmE1ZWNmLmpwZyI7czoxNjoicHJpY2Vfc2FsZV9pbnRfYyI7ZDoxMjAwMDA7czoxNToiY3JlYXRlZF9ieV9uYW1lIjtzOjE1OiJ0YW5qYXRyYWRlZ29yaWEiO3M6MjQ6ImFkZGl0aW9uYWxfZGVzY3JpcHRpb25fYyI7czozMjE6IjMt0YUg0Y3RgtCw0LbQvdGL0Lkg0LTQvtC8INCyINCo0YPRiNCw0L3QuCDRgSDQstC40LTQvtC8INC90LAg0LzQvtGA0LUuDQrQn9C70L7RidCw0LTRjCDQtNC+0LzQsCAyMDDQvDIuINCX0LXQvC7Rg9GH0LDRgdGC0L7QuiAyNTDQvDIuDQrQndCwINGD0YfQsNGB0YLQutC1INGA0L7QtNC90LjQutC+0LLQsNGPINCy0L7QtNCwLiDQldGB0YLRjCDQs9Cw0YDQsNC2INC4INC/0LDRgNC60LjQvdCzINC80LXRgdGC0L4uDQrQktC10LvQuNC60L7Qu9C10L/QvdGL0Lkg0LLQuNC0INC90LAg0LzQvtGA0LUuINCU0L4g0LzQvtGA0Y8gMTAwMCDQvNC10YLRgNC+0LIuDQrCoCI7czo3OiJhZGRyZXNzIjtzOjY6ItCR0LDRgCI7czoxNzoicHJvdmluY2Vfc2VsZWN0X2MiO2k6MjU7czoxNDoiY29hc3Rfc2VsZWN0X2MiO3M6NjoiMjVfNzA5Ijt9",
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

/*
array(129) {
  ["id_object_c"]=>
  int(2040)
  ["name"]=>
  string(84) "Старый каменный дом в Дупило. Барская ривьера."
  ["type"]=>
  int(11)
  ["name_eng_c"]=>
  string(12) "2.25.11.2040"
  ["object_status_c"]=>
  string(6) "^sale^"
  ["category_c"]=>
  string(3) "new"
  ["sea_distance_c"]=>
  string(14) "m5000_and_more"
  ["comm_center_distance_c"]=>
  string(7) "m50_300"
  ["total_area_c"]=>
  int(225)
  ["area_area_c"]=>
  int(400)
  ["view_sea_c"]=>
  bool(false)
  ["mebel_c"]=>
  bool(false)
  ["number_bedroom_c"]=>
  int(5)
  ["number_bathroom_c"]=>
  string(1) "1"
  ["pictures"]=>
  string(236) "http://tradegoria.com/images/objects/2040/671029e3fa687b26b60ad6092659f141.jpg,http://tradegoria.com/images/objects/2040/b69938587785d47b98b794fae7d8415e.jpg,http://tradegoria.com/images/objects/2040/722bfcb647c9051ef974874c2742ef52.jpg"
  ["price_sale_int_c"]=>
  int(10000)
  ["created_by_name"]=>
  string(15) "tanjatradegoria"
  ["additional_description_c"]=>
  string(402) "Старый каменный дом в Дупило. Барская ривьера.
Площадь дома 225м2. Участок земли 400м2.
Дом находится в сельской местности, в17 км от Подгорицы.
В доме вода и электричество, до дома дорога.
Дом требует капитального ремонта.
 "
  ["rawdata_id"]=>
  int(2040)
  ["rawdata_article"]=>
  string(12) "2.25.11.2040"
  ["rawdata_price"]=>
  float(10000)
  ["rawdata_old_price"]=>
  float(0)
  ["rawdata_weight"]=>
  float(0)
  ["rawdata_image"]=>
  string(57) "/images/objects/2040/671029e3fa687b26b60ad6092659f141.jpg"
  ["rawdata_thumb"]=>
  string(64) "/images/objects/2040/122x80/671029e3fa687b26b60ad6092659f141.jpg"
  ["rawdata_vendor"]=>
  int(0)
  ["rawdata_made_in"]=>
  string(0) ""
  ["rawdata_new"]=>
  bool(false)
  ["rawdata_popular"]=>
  bool(false)
  ["rawdata_favorite"]=>
  bool(false)
  ["rawdata_tags"]=>
  NULL
  ["rawdata_color"]=>
  NULL
  ["rawdata_size"]=>
  NULL
  ["rawdata_source"]=>
  int(2)
  ["rawdata_area"]=>
  int(225)
  ["rawdata_place_area"]=>
  int(400)
  ["rawdata_rooms"]=>
  int(5)
  ["rawdata_sea_distance"]=>
  int(20000)
  ["rawdata_sea_view"]=>
  bool(false)
  ["rawdata_furniture"]=>
  bool(false)
  ["rawdata_first_line"]=>
  bool(false)
  ["rawdata_economy"]=>
  bool(false)
  ["rawdata_hot"]=>
  bool(false)
  ["rawdata_exclusive"]=>
  bool(false)
  ["rawdata_sold"]=>
  bool(true)
  ["rawdata_video"]=>
  string(0) ""
  ["rawdata_old_article"]=>
  string(0) ""
  ["rawdata_owner_fio"]=>
  string(0) ""
  ["rawdata_owner_contacts"]=>
  string(0) ""
  ["rawdata_comment"]=>
  string(0) ""
  ["rawdata_partner"]=>
  string(0) ""
  ["raw_id"]=>
  int(2040)
  ["raw_type"]=>
  string(8) "document"
  ["raw_contentType"]=>
  string(9) "text/html"
  ["raw_pagetitle"]=>
  string(84) "Старый каменный дом в Дупило. Барская ривьера."
  ["raw_longtitle"]=>
  string(84) "Старый каменный дом в Дупило. Барская ривьера."
  ["raw_description"]=>
  string(0) ""
  ["raw_alias"]=>
  string(45) "staryy-kamennyy-dom-v-dupilo.-barskaya-rivera"
  ["raw_link_attributes"]=>
  string(0) ""
  ["raw_published"]=>
  bool(true)
  ["raw_pub_date"]=>
  int(0)
  ["raw_unpub_date"]=>
  int(0)
  ["raw_parent"]=>
  int(11)
  ["raw_isfolder"]=>
  bool(false)
  ["raw_introtext"]=>
  string(0) ""
  ["raw_content"]=>
  string(444) "<p>Старый каменный дом в Дупило. Барская ривьера.</p>
<p>Площадь дома 225м2. Участок земли 400м2.</p>
<p>Дом находится в сельской местности, в17 км от Подгорицы.</p>
<p>В доме вода и электричество, до дома дорога.</p>
<p>Дом требует капитального ремонта.</p>
<p> </p>"
  ["raw_richtext"]=>
  bool(true)
  ["raw_template"]=>
  int(4)
  ["raw_menuindex"]=>
  int(545)
  ["raw_searchable"]=>
  bool(true)
  ["raw_cacheable"]=>
  bool(true)
  ["raw_createdby"]=>
  int(4)
  ["raw_createdon"]=>
  string(19) "2014-06-01 11:24:13"
  ["raw_editedby"]=>
  int(1)
  ["raw_editedon"]=>
  string(19) "2014-11-10 15:41:27"
  ["raw_deleted"]=>
  bool(false)
  ["raw_deletedon"]=>
  int(0)
  ["raw_deletedby"]=>
  int(0)
  ["raw_publishedon"]=>
  string(19) "2014-06-01 11:25:00"
  ["raw_publishedby"]=>
  int(4)
  ["raw_menutitle"]=>
  string(0) ""
  ["raw_donthit"]=>
  bool(false)
  ["raw_privateweb"]=>
  bool(false)
  ["raw_privatemgr"]=>
  bool(false)
  ["raw_content_dispo"]=>
  int(0)
  ["raw_hidemenu"]=>
  bool(false)
  ["raw_class_key"]=>
  string(9) "msProduct"
  ["raw_context_key"]=>
  string(3) "web"
  ["raw_content_type"]=>
  int(1)
  ["raw_uri"]=>
  string(68) "nedvizhimost/doma/staryy-kamennyy-dom-v-dupilo.-barskaya-rivera.html"
  ["raw_uri_override"]=>
  int(0)
  ["raw_hide_children_in_tree"]=>
  int(0)
  ["raw_show_in_tree"]=>
  int(0)
  ["raw_properties"]=>
  NULL
  ["raw_article"]=>
  string(12) "2.25.11.2040"
  ["raw_price"]=>
  float(10000)
  ["raw_old_price"]=>
  float(0)
  ["raw_weight"]=>
  float(0)
  ["raw_image"]=>
  string(57) "/images/objects/2040/671029e3fa687b26b60ad6092659f141.jpg"
  ["raw_thumb"]=>
  string(64) "/images/objects/2040/122x80/671029e3fa687b26b60ad6092659f141.jpg"
  ["raw_vendor"]=>
  int(0)
  ["raw_made_in"]=>
  string(0) ""
  ["raw_new"]=>
  bool(false)
  ["raw_popular"]=>
  bool(false)
  ["raw_favorite"]=>
  bool(false)
  ["raw_tags"]=>
  NULL
  ["raw_color"]=>
  NULL
  ["raw_size"]=>
  NULL
  ["raw_source"]=>
  int(2)
  ["raw_area"]=>
  int(225)
  ["raw_place_area"]=>
  int(400)
  ["raw_rooms"]=>
  int(5)
  ["raw_sea_distance"]=>
  int(20000)
  ["raw_sea_view"]=>
  bool(false)
  ["raw_furniture"]=>
  bool(false)
  ["raw_first_line"]=>
  bool(false)
  ["raw_economy"]=>
  bool(false)
  ["raw_hot"]=>
  bool(false)
  ["raw_exclusive"]=>
  bool(false)
  ["raw_sold"]=>
  bool(true)
  ["raw_video"]=>
  string(0) ""
  ["raw_old_article"]=>
  string(0) ""
  ["raw_owner_fio"]=>
  string(0) ""
  ["raw_owner_contacts"]=>
  string(0) ""
  ["raw_comment"]=>
  string(0) ""
  ["raw_partner"]=>
  string(0) ""
  ["address"]=>
  string(6) "Бар"
  ["province_select_c"]=>
  int(25)
  ["coast_select_c"]=>
  string(6) "25_709"
}
[13:39:28] [sessia-online]Артем Зернов: А вот то же самое, только после base64_encode(serialize($data))
[13:39:29] [sessia-online]Артем Зернов: string(7028) "YToxMjk6e3M6MTE6ImlkX29iamVjdF9jIjtpOjIwNDA7czo0OiJuYW1lIjtzOjg0OiLQodGC0LDRgNGL0Lkg0LrQsNC80LXQvdC90YvQuSDQtNC+0Lwg0LIg0JTRg9C/0LjQu9C+LiDQkdCw0YDRgdC60LDRjyDRgNC40LLRjNC10YDQsC4iO3M6NDoidHlwZSI7aToxMTtzOjEwOiJuYW1lX2VuZ19jIjtzOjEyOiIyLjI1LjExLjIwNDAiO3M6MTU6Im9iamVjdF9zdGF0dXNfYyI7czo2OiJec2FsZV4iO3M6MTA6ImNhdGVnb3J5X2MiO3M6MzoibmV3IjtzOjE0OiJzZWFfZGlzdGFuY2VfYyI7czoxNDoibTUwMDBfYW5kX21vcmUiO3M6MjI6ImNvbW1fY2VudGVyX2Rpc3RhbmNlX2MiO3M6NzoibTUwXzMwMCI7czoxMjoidG90YWxfYXJlYV9jIjtpOjIyNTtzOjExOiJhcmVhX2FyZWFfYyI7aTo0MDA7czoxMDoidmlld19zZWFfYyI7YjowO3M6NzoibWViZWxfYyI7YjowO3M6MTY6Im51bWJlcl9iZWRyb29tX2MiO2k6NTtzOjE3OiJudW1iZXJfYmF0aHJvb21fYyI7czoxOiIxIjtzOjg6InBpY3R1cmVzIjtzOjIzNjoiaHR0cDovL3RyYWRlZ29yaWEuY29tL2ltYWdlcy9vYmplY3RzLzIwNDAvNjcxMDI5ZTNmYTY4N2IyNmI2MGFkNjA5MjY1OWYxNDEuanBnLGh0dHA6Ly90cmFkZWdvcmlhLmNvbS9pbWFnZXMvb2JqZWN0cy8yMDQwL2I2OTkzODU4Nzc4NWQ0N2I5OGI3OTRmYWU3ZDg0MTVlLmpwZyxodHRwOi8vdHJhZGVnb3JpYS5jb20vaW1hZ2VzL29iamVjdHMvMjA0MC83MjJiZmNiNjQ3YzkwNTFlZjk3NDg3NGMyNzQyZWY1Mi5qcGciO3M6MTY6InByaWNlX3NhbGVfaW50X2MiO2k6MTAwMDA7czoxNToiY3JlYXRlZF9ieV9uYW1lIjtzOjE1OiJ0YW5qYXRyYWRlZ29yaWEiO3M6MjQ6ImFkZGl0aW9uYWxfZGVzY3JpcHRpb25fYyI7czo0MDI6ItCh0YLQsNGA0YvQuSDQutCw0LzQtdC90L3Ri9C5INC00L7QvCDQsiDQlNGD0L/QuNC70L4uINCR0LDRgNGB0LrQsNGPINGA0LjQstGM0LXRgNCwLg0K0J/Qu9C+0YnQsNC00Ywg0LTQvtC80LAgMjI10LwyLiDQo9GH0LDRgdGC0L7QuiDQt9C10LzQu9C4IDQwMNC8Mi4NCtCU0L7QvCDQvdCw0YXQvtC00LjRgtGB0Y8g0LIg0YHQtdC70YzRgdC60L7QuSDQvNC10YHRgtC90L7RgdGC0LgsINCyMTcg0LrQvCDQvtGCINCf0L7QtNCz0L7RgNC40YbRiy4NCtCSINC00L7QvNC1INCy0L7QtNCwINC4INGN0LvQtdC60YLRgNC40YfQtdGB0YLQstC+LCDQtNC+INC00L7QvNCwINC00L7RgNC+0LPQsC4NCtCU0L7QvCDRgtGA0LXQsdGD0LXRgiDQutCw0L/QuNGC0LDQu9GM0L3QvtCz0L4g0YDQtdC80L7QvdGC0LAuDQrCoCI7czoxMDoicmF3ZGF0YV9pZCI7aToyMDQwO3M6MTU6InJhd2RhdGFfYXJ0aWNsZSI7czoxMjoiMi4yNS4xMS4yMDQwIjtzOjEzOiJyYXdkYXRhX3ByaWNlIjtkOjEwMDAwO3M6MTc6InJhd2RhdGFfb2xkX3ByaWNlIjtkOjA7czoxNDoicmF3ZGF0YV93ZWlnaHQiO2Q6MDtzOjEzOiJyYXdkYXRhX2ltYWdlIjtzOjU3OiIvaW1hZ2VzL29iamVjdHMvMjA0MC82NzEwMjllM2ZhNjg3YjI2YjYwYWQ2MDkyNjU5ZjE0MS5qcGciO3M6MTM6InJhd2RhdGFfdGh1bWIiO3M6NjQ6Ii9pbWFnZXMvb2JqZWN0cy8yMDQwLzEyMng4MC82NzEwMjllM2ZhNjg3YjI2YjYwYWQ2MDkyNjU5ZjE0MS5qcGciO3M6MTQ6InJhd2RhdGFfdmVuZG9yIjtpOjA7czoxNToicmF3ZGF0YV9tYWRlX2luIjtzOjA6IiI7czoxMToicmF3ZGF0YV9uZXciO2I6MDtzOjE1OiJyYXdkYXRhX3BvcHVsYXIiO2I6MDtzOjE2OiJyYXdkYXRhX2Zhdm9yaXRlIjtiOjA7czoxMjoicmF3ZGF0YV90YWdzIjtOO3M6MTM6InJhd2RhdGFfY29sb3IiO047czoxMjoicmF3ZGF0YV9zaXplIjtOO3M6MTQ6InJhd2RhdGFfc291cmNlIjtpOjI7czoxMjoicmF3ZGF0YV9hcmVhIjtpOjIyNTtzOjE4OiJyYXdkYXRhX3BsYWNlX2FyZWEiO2k6NDAwO3M6MTM6InJhd2RhdGFfcm9vbXMiO2k6NTtzOjIwOiJyYXdkYXRhX3NlYV9kaXN0YW5jZSI7aToyMDAwMDtzOjE2OiJyYXdkYXRhX3NlYV92aWV3IjtiOjA7czoxNzoicmF3ZGF0YV9mdXJuaXR1cmUiO2I6MDtzOjE4OiJyYXdkYXRhX2ZpcnN0X2xpbmUiO2I6MDtzOjE1OiJyYXdkYXRhX2Vjb25vbXkiO2I6MDtzOjExOiJyYXdkYXRhX2hvdCI7YjowO3M6MTc6InJhd2RhdGFfZXhjbHVzaXZlIjtiOjA7czoxMjoicmF3ZGF0YV9zb2xkIjtiOjE7czoxMzoicmF3ZGF0YV92aWRlbyI7czowOiIiO3M6MTk6InJhd2RhdGFfb2xkX2FydGljbGUiO3M6MDoiIjtzOjE3OiJyYXdkYXRhX293bmVyX2ZpbyI7czowOiIiO3M6MjI6InJhd2RhdGFfb3duZXJfY29udGFjdHMiO3M6MDoiIjtzOjE1OiJyYXdkYXRhX2NvbW1lbnQiO3M6MDoiIjtzOjE1OiJyYXdkYXRhX3BhcnRuZXIiO3M6MDoiIjtzOjY6InJhd19pZCI7aToyMDQwO3M6ODoicmF3X3R5cGUiO3M6ODoiZG9jdW1lbnQiO3M6MTU6InJhd19jb250ZW50VHlwZSI7czo5OiJ0ZXh0L2h0bWwiO3M6MTM6InJhd19wYWdldGl0bGUiO3M6ODQ6ItCh0YLQsNGA0YvQuSDQutCw0LzQtdC90L3Ri9C5INC00L7QvCDQsiDQlNGD0L/QuNC70L4uINCR0LDRgNGB0LrQsNGPINGA0LjQstGM0LXRgNCwLiI7czoxMzoicmF3X2xvbmd0aXRsZSI7czo4NDoi0KHRgtCw0YDRi9C5INC60LDQvNC10L3QvdGL0Lkg0LTQvtC8INCyINCU0YPQv9C40LvQvi4g0JHQsNGA0YHQutCw0Y8g0YDQuNCy0YzQtdGA0LAuIjtzOjE1OiJyYXdfZGVzY3JpcHRpb24iO3M6MDoiIjtzOjk6InJhd19hbGlhcyI7czo0NToic3Rhcnl5LWthbWVubnl5LWRvbS12LWR1cGlsby4tYmFyc2theWEtcml2ZXJhIjtzOjE5OiJyYXdfbGlua19hdHRyaWJ1dGVzIjtzOjA6IiI7czoxMzoicmF3X3B1Ymxpc2hlZCI7YjoxO3M6MTI6InJhd19wdWJfZGF0ZSI7aTowO3M6MTQ6InJhd191bnB1Yl9kYXRlIjtpOjA7czoxMDoicmF3X3BhcmVudCI7aToxMTtzOjEyOiJyYXdfaXNmb2xkZXIiO2I6MDtzOjEzOiJyYXdfaW50cm90ZXh0IjtzOjA6IiI7czoxMToicmF3X2NvbnRlbnQiO3M6NDQ0OiI8cD7QodGC0LDRgNGL0Lkg0LrQsNC80LXQvdC90YvQuSDQtNC+0Lwg0LIg0JTRg9C/0LjQu9C+LiDQkdCw0YDRgdC60LDRjyDRgNC40LLRjNC10YDQsC48L3A+DQo8cD7Qn9C70L7RidCw0LTRjCDQtNC+0LzQsCAyMjXQvDIuINCj0YfQsNGB0YLQvtC6INC30LXQvNC70LggNDAw0LwyLjwvcD4NCjxwPtCU0L7QvCDQvdCw0YXQvtC00LjRgtGB0Y8g0LIg0YHQtdC70YzRgdC60L7QuSDQvNC10YHRgtC90L7RgdGC0LgsINCyMTcg0LrQvCDQvtGCINCf0L7QtNCz0L7RgNC40YbRiy48L3A+DQo8cD7QkiDQtNC+0LzQtSDQstC+0LTQsCDQuCDRjdC70LXQutGC0YDQuNGH0LXRgdGC0LLQviwg0LTQviDQtNC+0LzQsCDQtNC+0YDQvtCz0LAuPC9wPg0KPHA+0JTQvtC8INGC0YDQtdCx0YPQtdGCINC60LDQv9C40YLQsNC70YzQvdC+0LPQviDRgNC10LzQvtC90YLQsC48L3A+DQo8cD7CoDwvcD4iO3M6MTI6InJhd19yaWNodGV4dCI7YjoxO3M6MTI6InJhd190ZW1wbGF0ZSI7aTo0O3M6MTM6InJhd19tZW51aW5kZXgiO2k6NTQ1O3M6MTQ6InJhd19zZWFyY2hhYmxlIjtiOjE7czoxMzoicmF3X2NhY2hlYWJsZSI7YjoxO3M6MTM6InJhd19jcmVhdGVkYnkiO2k6NDtzOjEzOiJyYXdfY3JlYXRlZG9uIjtzOjE5OiIyMDE0LTA2LTAxIDExOjI0OjEzIjtzOjEyOiJyYXdfZWRpdGVkYnkiO2k6MTtzOjEyOiJyYXdfZWRpdGVkb24iO3M6MTk6IjIwMTQtMTEtMTAgMTU6NDQ6MTUiO3M6MTE6InJhd19kZWxldGVkIjtiOjA7czoxMzoicmF3X2RlbGV0ZWRvbiI7aTowO3M6MTM6InJhd19kZWxldGVkYnkiO2k6MDtzOjE1OiJyYXdfcHVibGlzaGVkb24iO3M6MTk6IjIwMTQtMDYtMDEgMTE6MjU6MDAiO3M6MTU6InJhd19wdWJsaXNoZWRieSI7aTo0O3M6MTM6InJhd19tZW51dGl0bGUiO3M6MDoiIjtzOjExOiJyYXdfZG9udGhpdCI7YjowO3M6MTQ6InJhd19wcml2YXRld2ViIjtiOjA7czoxNDoicmF3X3ByaXZhdGVtZ3IiO2I6MDtzOjE3OiJyYXdfY29udGVudF9kaXNwbyI7aTowO3M6MTI6InJhd19oaWRlbWVudSI7YjowO3M6MTM6InJhd19jbGFzc19rZXkiO3M6OToibXNQcm9kdWN0IjtzOjE1OiJyYXdfY29udGV4dF9rZXkiO3M6Mzoid2ViIjtzOjE2OiJyYXdfY29udGVudF90eXBlIjtpOjE7czo3OiJyYXdfdXJpIjtzOjY4OiJuZWR2aXpoaW1vc3QvZG9tYS9zdGFyeXkta2FtZW5ueXktZG9tLXYtZHVwaWxvLi1iYXJza2F5YS1yaXZlcmEuaHRtbCI7czoxNjoicmF3X3VyaV9vdmVycmlkZSI7aTowO3M6MjU6InJhd19oaWRlX2NoaWxkcmVuX2luX3RyZWUiO2k6MDtzOjE2OiJyYXdfc2hvd19pbl90cmVlIjtpOjA7czoxNDoicmF3X3Byb3BlcnRpZXMiO047czoxMToicmF3X2FydGljbGUiO3M6MTI6IjIuMjUuMTEuMjA0MCI7czo5OiJyYXdfcHJpY2UiO2Q6MTAwMDA7czoxMzoicmF3X29sZF9wcmljZSI7ZDowO3M6MTA6InJhd193ZWlnaHQiO2Q6MDtzOjk6InJhd19pbWFnZSI7czo1NzoiL2ltYWdlcy9vYmplY3RzLzIwNDAvNjcxMDI5ZTNmYTY4N2IyNmI2MGFkNjA5MjY1OWYxNDEuanBnIjtzOjk6InJhd190aHVtYiI7czo2NDoiL2ltYWdlcy9vYmplY3RzLzIwNDAvMTIyeDgwLzY3MTAyOWUzZmE2ODdiMjZiNjBhZDYwOTI2NTlmMTQxLmpwZyI7czoxMDoicmF3X3ZlbmRvciI7aTowO3M6MTE6InJhd19tYWRlX2luIjtzOjA6IiI7czo3OiJyYXdfbmV3IjtiOjA7czoxMToicmF3X3BvcHVsYXIiO2I6MDtzOjEyOiJyYXdfZmF2b3JpdGUiO2I6MDtzOjg6InJhd190YWdzIjtOO3M6OToicmF3X2NvbG9yIjtOO3M6ODoicmF3X3NpemUiO047czoxMDoicmF3X3NvdXJjZSI7aToyO3M6ODoicmF3X2FyZWEiO2k6MjI1O3M6MTQ6InJhd19wbGFjZV9hcmVhIjtpOjQwMDtzOjk6InJhd19yb29tcyI7aTo1O3M6MTY6InJhd19zZWFfZGlzdGFuY2UiO2k6MjAwMDA7czoxMjoicmF3X3NlYV92aWV3IjtiOjA7czoxMzoicmF3X2Z1cm5pdHVyZSI7YjowO3M6MTQ6InJhd19maXJzdF9saW5lIjtiOjA7czoxMToicmF3X2Vjb25vbXkiO2I6MDtzOjc6InJhd19ob3QiO2I6MDtzOjEzOiJyYXdfZXhjbHVzaXZlIjtiOjA7czo4OiJyYXdfc29sZCI7YjoxO3M6OToicmF3X3ZpZGVvIjtzOjA6IiI7czoxNToicmF3X29sZF9hcnRpY2xlIjtzOjA6IiI7czoxMzoicmF3X293bmVyX2ZpbyI7czowOiIiO3M6MTg6InJhd19vd25lcl9jb250YWN0cyI7czowOiIiO3M6MTE6InJhd19jb21tZW50IjtzOjA6IiI7czoxMToicmF3X3BhcnRuZXIiO3M6MDoiIjtzOjc6ImFkZHJlc3MiO3M6Njoi0JHQsNGAIjtzOjE3OiJwcm92aW5jZV9zZWxlY3RfYyI7aToyNTtzOjE0OiJjb2FzdF9zZWxlY3RfYyI7czo2OiIyNV83MDkiO30="*/
