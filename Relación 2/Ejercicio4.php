<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
</head>
<body>
    <h1>Resultado</h1>
    <?php
        $numero1 = $_POST["numero1"];
        $numero2 = $_POST["numero2"];
        $operacion = $_POST["operacion"];
        
        switch ($operacion) {
            case "suma":
                $resultado = $numero1 + $numero2;
                echo "La suma de $numero1 y $numero2 es: $resultado";
                break;
                
            case "resta":
                $resultado = $numero1 - $numero2;
                echo "La resta de $numero1 y $numero2 es: $resultado";
                break;
                
            case "multiplicacion":
                $resultado = $numero1 * $numero2;
                echo "La multiplicación de $numero1 y $numero2 es: $resultado";
                break;
                
            case "division":
                if ($numero2 != 0) {
                    $resultado = $numero1 / $numero2;
                    echo "La división de $numero1 entre $numero2 es: $resultado";
                } else {
                    echo "Error: No es posible dividir por cero.";
                }
                break;
                
            default:
                echo "Operación no válida.";
        }
    ?>
</body>
</html>
