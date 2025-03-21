<?php
$db = new SQLite3('diariLocal.db');

$resultats = $db->query("SELECT *,count(*) FROM noticies WHERE strftime('%m',not_data) = '02'");
 
while ($fila = $resultats->fetchArray(SQLITE3_ASSOC)) {
    echo "Cantidad de noticias de febrero ". $fila['count(*)']."<br>";
}
$db->close();
?>