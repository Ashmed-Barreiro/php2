<?php
$db = new SQLite3('diariLocal.db');
$seccio = $_GET['seccio'];

$resultats = $db->query("SELECT * FROM noticies WHERE not_seccio = $seccio");

while ($fila = $resultats->fetchArray(SQLITE3_ASSOC)) {
    echo "ID: ". $fila['not_id'] ." - Sección: ". $fila['not_seccio']."<br>";
}
$db->close();

?>