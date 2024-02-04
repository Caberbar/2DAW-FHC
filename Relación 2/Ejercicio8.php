<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
</head>
<body>
    <h1>Resultado del Cálculo del Salario</h1>
    <?php
        $horas_trabajadas = $_POST["horas_trabajadas"];
        $precio_hora = 12;
        
        $salario_semanal = $horas_trabajadas * $precio_hora;
        
        echo "El salario semanal por trabajar $horas_trabajadas horas a una tarifa de $precio_hora euros por hora es: $salario_semanal euros.";
    ?>
</body>
</html>
