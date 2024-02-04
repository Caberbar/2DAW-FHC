<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
</head>
<body>
    <h1>Resultado del Cálculo del Área</h1>
    <?php
        $base = $_POST["base"];
        $altura = $_POST["altura"];
        
        // Calcular el área del triángulo
        $area = ($base * $altura) / 2;
        
        echo "El área del triángulo con base $base y altura $altura es: $area.";
    ?>
</body>
</html>
