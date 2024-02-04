<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
</head>
<body>
    <h1>Resultado</h1>
    <?php
        $numero = $_POST["numero"];
        
        $es_par = ($numero % 2 === 0);
        $es_divisible_por_5 = ($numero % 5 === 0);
        
        if ($es_par && $es_divisible_por_5) {
            echo "El número $numero es par y divisible entre 5.";
        } elseif ($es_par) {
            echo "El número $numero es par pero no es divisible entre 5.";
        } elseif ($es_divisible_por_5) {
            echo "El número $numero no es par pero es divisible entre 5.";
        } else {
            echo "El número $numero no es par ni divisible entre 5.";
        }
    ?>
</body>
</html>
