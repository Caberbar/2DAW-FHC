<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
</head>
<body>
    <h1>Resultado del Cálculo del Salario</h1>
    <?php
        $horas = $_POST["horas"];
        $hora_normal = 12;
        $hora_extra = 16;
        
        if($horas<=40){
            $horas_normales = $horas;
        } else {
            $horas_normales= 40;
        }

        if ($horas <= 40) {
            $horas_extra = 0;
        } else {
            $horas_extra = $horas - 40;
        }
        
        
        $salario_normal = $horas_normales * $hora_normal;
        $salario_extra = $horas_extra * $hora_extra;
        $salario_semanal = $salario_normal + $salario_extra;
        
        echo "Salario normal por $horas_normales horas a $hora_normal euros por hora: $salario_normal euros.<br>";
        echo "Salario extra por $horas_extra horas a $hora_extra euros por hora: $salario_extra euros.<br>";
        echo "El salario semanal total es: $salario_semanal euros.";
    ?>
</body>
</html>
