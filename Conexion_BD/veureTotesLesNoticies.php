<?php
$db = new SQLite3('diariLocal.db');

$resultats = $db->query("SELECT * FROM noticies ORDER BY not_data asc ");
 
while ($fila = $resultats->fetchArray(SQLITE3_ASSOC)) {
    echo "ID: ". $fila['not_id'] ." - Titular: ". $fila['not_titular'] ." - Noticia: ". $fila['not_cos'] ." - Fecha: ". $fila['not_data']." - Sección: ". $fila['not_seccio']."<br>";
}
$db->close();

?>