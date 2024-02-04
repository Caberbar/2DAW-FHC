<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
</head>
<body>
    <h1>Resultado de Contar Dígitos</h1>
    <?php
        $numero = $_POST["numero"];
        
        $numero_absoluto = abs($numero);
        $digitos = 0;

        while ($numero_absoluto > 0) {
            $numero_absoluto = (int)($numero_absoluto / 10);
            $digitos++;
        }
        
        if ($digitos <= 5) {
            echo "El número $numero tiene $digitos dígitos.";
        } else {
            echo "El número $numero tiene más de 5 dígitos, no es válido.";
        }
    ?>
</body>
</html>
