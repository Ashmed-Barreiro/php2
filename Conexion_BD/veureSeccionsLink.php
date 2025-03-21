<?php
$db = new SQLite3('diariLocal.db');

$resultats = $db->query("SELECT not_seccio FROM noticies");
 
$fila = $resultats->fetchArray(SQLITE3_ASSOC);
    echo " Link: "."<a href='veureSeccions.php?seccio=$fila[not_seccio]'>".$fila['not_seccio']."</a>"."<br>";
$db->close();

?>