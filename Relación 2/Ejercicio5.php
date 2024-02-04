<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultado del Cálculo del Área</title>
</head>
<body>
    <h1>Resultado del Cálculo del Área</h1>
    <?php
        $longitud = $_POST["longitud"];
        $anchura = $_POST["anchura"];
        
        // Calcular el área del rectángulo
        $area = $longitud * $anchura;
        
        echo "El área del rectángulo con longitud $longitud y anchura $anchura es: $area.";
    ?>
</body>
</html>
