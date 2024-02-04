<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
</head>
<body>
    <h1>Resultado de Primera Cifra</h1>
    <?php
        $numero = $_POST["numero"];
        
        if (abs($numero) >= 100000) {
            echo "El número tiene más de 5 cifras, no es válido.";
        } else {
            $primera_cifra = abs($numero);
            while ($primera_cifra >= 10) {
                $primera_cifra = (int)($primera_cifra / 10); //Hacer cast, sino sale con decimales
            }
            
            echo "La primera cifra de $numero es $primera_cifra.";
        }
    ?>
</body>
</html>
