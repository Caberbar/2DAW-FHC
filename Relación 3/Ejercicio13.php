<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultado de Ordenar Números</title>
</head>
<body>
    <h1>Resultado de Ordenar Números</h1>
    <?php
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $num3 = $_POST["num3"];
        
        if ($num1 <= $num2 && $num1 <= $num3) {
            $min = $num1;
            if ($num2 <= $num3) {
                $medio = $num2;
                $max = $num3;
            } else {
                $medio = $num3;
                $max = $num2;
            }
        } elseif ($num2 <= $num1 && $num2 <= $num3) {
            $min = $num2;
            if ($num1 <= $num3) {
                $medio = $num1;
                $max = $num3;
            } else {
                $medio = $num3;
                $max = $num1;
            }
        } else {
            $min = $num3;
            if ($num1 <= $num2) {
                $medio = $num1;
                $max = $num2;
            } else {
                $medio = $num2;
                $max = $num1;
            }
        }

        echo "Números ordenados: $min, $medio, $max";
    ?>
</body>
</html>
