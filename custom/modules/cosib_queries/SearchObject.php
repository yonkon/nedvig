<?php


  $record=(isset($_REQUEST["record"])&&$_REQUEST["record"]!="")?trim($_REQUEST["record"]):false;

  $bean=new sphr_Object();//build_related_in();
  echo "Найдено объектов:".$this->bean->search_objects($record);
 //`sphr_object` print_r($bean);

?>