<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
</head>
<body>
    <h1>Resultado del Cálculo de Tiempo de Caída</h1>
    <?php
        $altura = $_POST["altura"];
        $g = 9.81;
        
        if ($altura >= 0) {
            $tiempo = pow((2 * $altura / $g), 0.5);
            echo "El objeto tardará aproximadamente $tiempo segundos en caer desde una altura de $altura metros.";
        } else {
            echo "La altura debe ser mayor o igual a cero.";
        }
    ?>
</body>
</html>
