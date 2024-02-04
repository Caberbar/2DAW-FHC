<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
</head>
<body>
    <h1>Resultado del Cálculo del Volumen</h1>
    <?php
        $radio = $_POST["radio"];
        $altura = $_POST["altura"];
        
        $volumen = (1/3) * pi() * pow($radio, 2) * $altura; //Para sacar pi tambien se puede usar M_PI
        
        echo "El volumen del cono con radio $radio y altura $altura es: $volumen.";
    ?>
</body>
</html>
