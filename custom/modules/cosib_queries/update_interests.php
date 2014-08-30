<?php
/*
 * обновляет информацию о запросах клиентов в поле Интерес модуля Клиенты
 */
require_once('custom/modules/cosib_queries/Hooks/cosib_queriesHook.php');

global $db;
$lhooks = new cosib_queriesHook();
$res = $db->query("SELECT DISTINCT id FROM sphr_client WHERE deleted= 0 ");
$i = 0;
while ($row  = $db->fetchByAssoc($res)){    
    $lhooks->update_sphr_client_interests($row["id"]);
    $i++;
}

echo "updated ",$i;

?>