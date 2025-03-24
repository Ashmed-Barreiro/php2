<?php
$db = new SQLite3('diariLocal.db');
$nom = $_GET['titular'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscar por titular parcial</title>
</head>
<body>
    <form action="" method="get">
    <input type="text" id="titular" name="titular">Buscar por titular parcial</input><br><br>
    <input type="submit"  value="Buscar">
    <?php
    if ($nom){
        echo'<p>Buscando coincidencias</p>';
   
    $stmt = $db->prepare("SELECT * FROM noticies where not_titular like :nom_titular");
    $stmt->bindValue(':nom_titular', "%$nom%", SQLITE3_TEXT);
    $resultats = $stmt->execute();
} while ($fila = $resultats->fetchArray(SQLITE3_ASSOC)) {
        echo "ID: ". $fila['not_id'] ." - Titular: ". $fila['not_titular'] ." - Noticia: ". $fila['not_cos'] ." - Fecha: ". $fila['not_data']." - Sección: ". $fila['not_seccio']."<br>";
    }
    ?>
    </form>
    <a href="index.php">Regresar</a>
</body>
</html>
<?php
$db->close();
?>