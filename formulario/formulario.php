<!DOCTYPE html>
<html lang="ca">
<head>···
</head>
<body>
    <div class="container">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (!empty($_POST['nom'] or $_POST['Apellidos'] or $_POST['Genero'])or $_POST['Email']or $_POST['Edad']or $_POST['Ciudad']or $_POST['aficiones']or $_POST['motivaciones']) {
                $nom = htmlspecialchars(trim($_POST['nom']));
                $apellido = htmlspecialchars(trim($_POST['Apellido']));
                $genero = htmlspecialchars(trim($_POST['Genero']));
                $email = htmlspecialchars(trim($_POST['Email']));
                $edad = htmlspecialchars(trim($_POST['Edad']));
                $ciudad = htmlspecialchars(trim($_POST['Ciudad']));
                $aficiones = htmlspecialchars(trim($_POST['aficiones']));
                $motivaciones = htmlspecialchars(trim($_POST['motivaciones']));
                echo "<h2>Hola, $nom con apellido $apellido, de genero: $genero, con email: $email, con $edad años, que vive en $ciudad, que le gusta $aficiones, y que lo motiva $motivaciones </h2>";
            } else {
                echo "<h2>Els camps estàn buits. Si us plau, introdueix dades2<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<.</h2>";
            }
            
        } else {
            echo "<h2>Accés no vàlid.</h2>";
        }
        ?>
    </div>
</body>
</html>
