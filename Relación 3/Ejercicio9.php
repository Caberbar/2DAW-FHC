<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
</head>
<body>
    <h1>Ecuación de 2º Grado</h1>
    <?php
        $a = $_POST["a"];
        $b = $_POST["b"];
        $c = $_POST["c"];
        
        $x = $b * $b - 4 * $a * $c;
        
        if ($x > 0) {
            // Dos soluciones reales distintas
            //$x1 = (-$b + sqrt($x)) / (2 * $a);
            //$x2 = (-$b - sqrt($x)) / (2 * $a);
            //echo "Las soluciones son x1 = $x1 y x2 = $x2";
        } elseif ($x == 0) {
            $x1 = -$b / (2 * $a);
            echo "La solución única es x1 = $x1";
        } else {
            echo "No hay soluciones reales.";
        }
    ?>
</body>
</html>

