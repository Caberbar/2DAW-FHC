<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
</head>

<body>
    <h1>Número Capicúa</h1>
    <?php

    $numero = $_POST["numero"];

    $prueba = $numero;
    $invertido = 0;

    for ($i = 0; $i < 5 && $prueba > 0; $i++) {
        $digito = $prueba % 10;
        $invertido = $invertido * 10 + $digito;
        $prueba = (int)($prueba / 10);
    }

    if ($numero === $invertido && $numero >= 0 && $numero <= 99999) {
        echo "El número $numero es capicúa.";
    } else {
        echo "El número $numero no es capicúa o no cumple con las condiciones.";
    }
    ?>
</body>

</html>