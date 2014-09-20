<?php

if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');  
header("Content-type: text/xml");
global $app_list_strings;

global $db; 
//require_once('include/database/DBManagerFactory.php');
//$db = DBManagerFactory::getInstance();
if(!empty ($_REQUEST['client_id'])) {
    $client_id = $_REQUEST['client_id'];
}
$sent_objects_query = "SELECT * FROM sphr_object_send_history WHERE client_id = '$client_id'";
$sent_objects_resource = $db->query($sent_objects_query);
$sent_objects = array();
$sent_objects_ids_map = array();
$sent_objects_ids = array();
while(($row = $db->fetchByAssoc($sent_objects_resource)) != null) {
    $sent_objects[] = $row;
}
$sent_total = count($sent_objects);
for( $index=0; $index<$sent_total; $index++) {
    $object = $sent_objects[$index];
    $sent_objects_ids_map[$object['object_id']] = $index;
}
$sent_objects_ids = array_flip($sent_objects_ids_map);
$query = "SELECT sphr_object.id, sphr_object.name, sphr_object.address, sphr_object.region, sphr_object.type, sphr_object.square,
sphr_object_cstm.price_sale_int_c, DATE_FORMAT(sphr_object.date_entered, '%d.%m.%Y'),
CONCAT_WS(' ',users.first_name,users.last_name)
FROM sphr_object
LEFT JOIN sphr_object_cstm ON (sphr_object.id = sphr_object_cstm.id_c)
LEFT OUTER JOIN users ON (sphr_object.assigned_user_id=users.id)
WHERE (sphr_object.deleted = 0)";
if (!empty($_REQUEST['articule']) ) {
    $articules = $_REQUEST['articule'];
    $articules = explode(',', $articules);
    foreach($articules as &$art) {
        $art = '"' . trim($art) . '"';
    }
    $articules = implode(', ', $articules);
   $query .= ' AND sphr_object_cstm.name_eng_c IN (' . $articules. ') ';
} else {
    $query .= ' AND 1=0 '; //не выводим объектов без поиска
}
//LEFT OUTER JOIN - чтобы получить и оъекты без ответсвенных

$result=$db->query($query, true);  
$writer = new XMLWriter();
$writer->openMemory();
$writer->startDocument("1.0","iso-8859-1");
$writer->startElement("rows");
while(($row = $db->fetchByAssoc($result)) != null ) 
{	
 	$writer->startElement("row");
	$writer->writeAttribute('filter_match', 1);
	$writer->writeAttribute('id', $row['id']);
    $oid = $row['id'];
	unset($row['id']);
	$writer->startElement("cell");//пустая ячейка - для флажка
	$writer->endElement();
	foreach ($row as $cell_key => $cell_value)
	{	
		$writer->startElement("cell");			
		
		switch ($cell_key)
		{
			case "type":  $writer->text($app_list_strings['object_type_list'][$cell_value]);
							break;
            case "DATE_FORMAT(sphr_object.date_entered, '%d.%m.%Y')" :
                if(!empty($sent_objects_ids) && in_array($oid, $sent_objects_ids)) {
                    $writer->text(date('d.m.Y', strtotime($sent_objects[$sent_objects_ids_map[$oid]]['send_date'])) ) ;
                }
                break;
			default: 		$writer->text($cell_value);
		}
		$writer->endElement();
	}
    /*if(!empty($sent_objects_ids) && in_array($oid, $sent_objects_ids)) {
        $writer->startElement("cell");
        $writer->text(date('d.m.Y', strtotime($sent_objects[$sent_objects_ids_map[$oid]]['send_date'])) ) ;
        $writer->endElement();
    } else {
        $writer->startElement("cell");
        $writer->text(json_encode($row) );
        $writer->endElement();
    }*/
	$writer->endElement();
} 
$writer->endElement();

ob_clean();
echo $writer->outputMemory();
?>
