<?php
require_once('custom/include/export/config.php');
require_once('custom/include/export/MysqliExpManager.php');
require_once('custom/include/export/ftpclass.php');
$ftpObj = new FTPClient();
$dbe =  new MysqliExpManager();
$dbe->connect($export_config['dbconfig']);
// *** Connect
if ($ftpObj -> connect( $export_config['ftpconfig']['ftp_host_name'], $export_config['ftpconfig']['ftp_user_name'], $export_config['ftpconfig']['ftp_password'])) {

    echo 'Подключен';
    $result = $dbe->query('select * from inm_inmuebles limit 0,10');

    //$dir = 'photos';
	// *** Make directory
	//$ftpObj->makeDir($dir);
	//$fileFrom = 'zoe.jpg';
	//$fileTo = $dir . '/' . $fileFrom;
	// *** Upload local file to new directory on server
	//$ftpObj -> uploadFile($fileFrom, $fileTo);
	 // *** Change to folder
    $export_config['ftpconfig']['ftp_photo_dir'];
   $ftpObj->changeDir($export_config['ftpconfig']['ftp_photo_dir']);
        // *** Get folder contents
        $contentsArray = $ftpObj->getDirListing();
        // *** Output our array of folder contents
        echo '<pre>';
        print_r(  $ftpObj->getMessages());
        print_r($contentsArray);
        echo '</pre><p>';
   /* $fileFrom = 'zoe.jpg';      // The location on the server
	$fileTo = 'zoe-new.jpg';            // Local dir to save to
	// *** Download file
	$ftpObj->downloadFile($fileFrom, $fileTo);   */
    $ftpObj->__deconstruct();
} else {
    echo 'Не удалось подключиться ';
}


?>