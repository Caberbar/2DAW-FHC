<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
</head>
<body>
    <h1>Resultado de la Conversión</h1>
    <?php
        $pesetas = $_POST["pesetas"];
        
        // Tasa de conversión de pesetas a euros (1 peseta = 0.006 euros)
        $tasaConversion = 0.006;
        
        // Realizar la conversión
        $euros = $pesetas * $tasaConversion;
        
        echo "$pesetas pesetas equivalen a $euros euros.";
    ?>
</body>
</html>
