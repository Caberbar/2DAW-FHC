<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
</head>
<body>
    <h1>Resultado</h1>
    <?php
        $numero = $_POST["numero"];
                
        echo "La última cifra de $numero es".$numero % 10;
    ?>
</body>
</html>
