<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
</head>
<body>
    <h1>Resultado del Cálculo del Total</h1>
    <?php

        $base = $_POST["base"];
        $impuesto = $_POST["impuesto"];
        
        // Calcular el total de la factura incluyendo el impuesto
        $total_impuesto = ($base * $impuesto) / 100;
        $total_factura = $base + $total_impuesto;
        
        echo "El total de la factura con una base imponible de $base y un porcentaje de impuesto del $total_impuesto% es: $total_factura euros.";
    ?>
</body>
</html>
