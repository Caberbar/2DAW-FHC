<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
</head>

<body>
    <h1>Calificación</h1>
    <?php
    $puntuacion = 0; // Inicializar la puntuación a 0

    for ($i = 1; $i <= 10; $i++) {
        if(isset($_POST['p'.$i]) && $_POST['p'.$i] == 'Verdadera'){ //isset para verificar que existe
            $puntuacion++;
        }
    }

    echo "Tu puntuación es: $puntuacion/10";
    ?>
</body>

</html>