<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
</head>
<body>
    <h1>Ecuación 1º grado</h1>
    <?php
        $a = $_POST["a"];
        $b = $_POST["b"];
        
        if ($a != 0) {
            $x = -$b / $a;
            echo("La solución de la ecuación $a x + $b = 0 es x = $x.");
        } else {
            echo("La ecuación no es de primer grado (A no puede ser igual a 0).");
        }
    ?>
</body>
</html>
