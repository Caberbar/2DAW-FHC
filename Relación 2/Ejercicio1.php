<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
</head>
<body>
    <h1>Resultado de la Multiplicación</h1>
    <?php
        $numero1 = $_POST["numero1"];
        $numero2 = $_POST["numero2"];
        
        $resultado = $numero1 * $numero2;
        
        echo "El resultado de la multiplicación de $numero1 y $numero2 es: $resultado";

    ?>
</body>
</html>
