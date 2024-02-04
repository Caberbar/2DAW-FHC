<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
</head>
<body>
    <h1>Resultado</h1>
    <?php
    $puntuacion = 0;

    for ($i = 1; $i <= 10; $i++) {
        $respuesta = $_POST["respuesta$i"];
        
        if ($respuesta == 'Verdadero') {
            $puntuacion += 3;
        }
    }

    if ($puntuacion >= 0 && $puntuacion <= 10) {
        print("¡Enhorabuena! Tu pareja parece ser totalmente fiel.");
    } elseif ($puntuacion >= 11 && $puntuacion <= 22) {
        print("Quizás exista el peligro de otra persona en su vida o en su mente, aunque seguramente será algo sin importancia. No bajes la guardia.");
    } elseif ($puntuacion >= 23 && $puntuacion <= 30) {
        print("Tu pareja tiene todos los ingredientes para estar viviendo un romance con otra persona. Te aconsejamos que indagues un poco más y averigües qué es lo que está pasando por su cabeza.");
    }

    print("<p>Tu puntuación es: $puntuacion/30</p>");
    ?>
</body>
</html>

