<?php
$db = new SQLite3('diariLocal.db');
$nom = $_GET['titular'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
    <input type="text" id="titular" name="titular">Buscar por titular</input><br><br>
    <input type="submit"  value="Buscar">
    <?php
    $stmt = $db->prepare("SELECT * FROM noticies where not_titular Ilike =:nom_titular");
    $stmt->bindValue(':nom_titular', $nom, SQLITE3_TEXT);
    $resultats = $stmt->execute();
    while ($fila = $resultats->fetchArray(SQLITE3_ASSOC)) {
        echo "ID: ". $fila['not_id'] ." - Titular: ". $fila['not_titular'] ." - Noticia: ". $fila['not_cos'] ." - Fecha: ". $fila['not_data']." - Sección: ". $fila['not_seccio']."<br>";
    }
    ?>
    </form>
</body>
</html>
<?php
$db->close();
?>