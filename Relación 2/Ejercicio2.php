<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
</head>
<body>
    <h1>Resultado de la Conversión</h1>
    <?php
        $euros = $_POST["euros"];
        
        // Tasa de conversión de euros a pesetas (1 euro = 166.386 pesetas)
        $tasaConversion = 166.386;
        
        // Realizar la conversión
        $pesetas = $euros * $tasaConversion;
        
        echo "$euros euros equivalen a $pesetas pesetas.";
    ?>
    <br>
</body>
</html>
