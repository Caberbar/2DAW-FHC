<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
</head>
<body>
    <h1>Resultado de Segundos para Medianoche</h1>
    <?php
        $horas = $_POST["horas"];
        $minutos = $_POST["minutos"];
        
        if ($horas >= 0 && $horas <= 23 && $minutos >= 0 && $minutos <= 59) {
            $segundos= (3600 * (23 - $horas)) + (60 * (59 - $minutos));
            echo "Faltan $segundos segundos para medianoche.";
        } else {
            echo "Hora o minutos no válidos.";
        }
    ?>
</body>
</html>
