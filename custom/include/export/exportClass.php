<?php
require_once('custom/include/export/config.php');
require_once('custom/include/export/MysqliExpManager.php') ;
require_once('custom/include/export/ftpclass.php');
class ExportObject{
      var $ids = ''; //object id in site
      var $focus; //sphr_Object bean class from $this->id
      var $class_name = 'sphr_Object';
      var $dbe;
      var $config;


function __construct($sourse=''){
	if(is_object($source)&&get_class($source)==$this->class_name){

	$this->db = new MysqliExpManager();
	global $export_config;
	$this->config = $export_config;
	$this->db->connect($this->config['dbconfig']);

function initById($id){

function initByBean($bean){
	 $this->focus = $bean;
	 $this->id = $bean->id;
	 $this->ids = $bean->id_object_c;
}
//export photos
function exportPhotos(){


//export options
function exportOptions(){
//export object
function exportObject(){

//upload photos by ftp
function uploadPhotos(){



}
//remove photos
function removePhotos(){

}

//remove options
function exporOptions(){

}
//remove object
function removeObject(){


}
//delete photos by ftp
function deletePhotos(){



}




} //class


?>