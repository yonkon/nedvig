<?php

if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
header("Content-type: text/xml");
global $app_list_strings;

global $db;
//require_once('include/database/DBManagerFactory.php');
//$db = DBManagerFactory::getInstance();

$query = "SELECT sphr_client.id, sphr_client_cstm.type_c, sphr_client.title, sphr_client.first_name, sphr_client.last_name, sphr_client_cstm.middle_name_c,
sphr_client.status, sphr_client.status_description, e.email_address as email,
CONCAT_WS(' ',users.first_name,users.last_name),
DATE_FORMAT(sphr_client.date_entered, '%d.%m.%Y'), DATE_FORMAT(sphr_client.date_modified, '%d.%m.%Y')
FROM sphr_client
INNER JOIN sphr_client_cstm ON (sphr_client.id=sphr_client_cstm.id_c)
LEFT OUTER JOIN users ON (sphr_client.assigned_user_id=users.id)
LEFT JOIN  email_addr_bean_rel AS eb ON eb.bean_id=sphr_client.id
				AND eb.bean_module ='sphr_Client' AND eb.deleted=0 AND primary_address=1
			JOIN  email_addresses AS e ON e.id=eb.email_address_id AND e.deleted=0
WHERE (sphr_client.deleted = 0)";
if(!empty($_REQUEST['search'])) {
  $srch = $_REQUEST['search'];
  if(!empty($srch['first_name_advanced'])) {
    $nm = $srch['first_name_advanced'];
    $query .= " AND (sphr_client.full_name LIKE '%{$nm}%' OR sphr_client.first_name LIKE '%{$nm}%' OR sphr_client.last_name LIKE '%{$nm}%'  )";
  }
  if(!empty($srch['phone_advanced'])) {
    $nm = $srch['phone_advanced'];
    $query .= " AND sphr_client.phone_mobile LIKE '%{$nm}%' ";
  }
  if(!empty($srch['email_advanced'])) {
    $nm = $srch['email_advanced'];
    $query .= " AND e.email_address LIKE '%{$nm}%' ";
  }
  if(!empty($srch['budget_advanced'])) {
    $nm = $srch['budget_advanced'];
    $nm = preg_replace('/^[^\d]*/', '', $nm);
    $minimax = preg_split('/[\s,. -]+/', $nm);
    if(!empty($minimax)) {
      if(!empty($minimax[0]) ) {
        $nm = intval($minimax[0]);
        if(!empty($nm))
          $query .= " AND sphr_client_cstm.budget_c >= $nm ";
      }
      if(!empty($minimax[1]) ) {
        $nm = intval($minimax[1]);
        if(!empty($nm))
          $query .= " AND sphr_client_cstm.budget_c <= $nm ";
      }
    }
  }
  if(!empty($srch['type_c_advanced'])) {
    $nm = $srch['type_c_advanced'];
    $query .= " AND sphr_client_cstm.type_c = '$nm' ";
  }
  if(!empty($srch['status_advanced'])) {
    $nm = $srch['status_advanced'];
    $query .= " AND sphr_client.status = '$nm' ";
  }

}
global $current_user;
if(!$current_user->id) {
    $current_user = new User();
    $current_user->retrieve($_SESSION['authenticated_user_id']);
}
if (!$current_user->is_admin) {
    $query .=  ' AND (sphr_client.assigned_user_id = "' . $current_user->id . '" OR sphr_client.status=2) ';
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
	if (($row['email'] == NULL) || (strlen($row['email']) == 0))
		$writer->writeAttribute('has_email', 0);
	else
		$writer->writeAttribute('has_email', 1);
	unset($row['email']);
	$writer->writeAttribute('id', $row['id']);
	unset($row['id']);
	$writer->startElement("cell");//пустая ячейка - для флажка
	$writer->endElement();
	foreach ($row as $cell_key => $cell_value)
	{
		$writer->startElement("cell");

		switch ($cell_key)
		{
			case "type_c":  $writer->text($app_list_strings['client_type_list'][$cell_value]);
							break;
            case "last_name":
                if (!$current_user->is_admin && $row['status'] == 2) {
                    $writer->text('нет');
                } else {
                    $writer->text($cell_value);
                }
                break;
			case "status":  $writer->text($app_list_strings['client_status_list'][$cell_value]);
							break;
			default: 		$writer->text($cell_value);
		}
		$writer->endElement();
	}
	$writer->endElement();
}
$writer->endElement();

ob_clean();
echo $writer->outputMemory();

/*
echo <<< END
<?xml version='1.0' encoding=''?>
<rows>
	<row id="1">
	<cell> 123 </cell>
	</row>
</rows>
END;
*/
?>
