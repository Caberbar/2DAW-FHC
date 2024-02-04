<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
</head>
<body>
    <h1>Resultado de la Conversión</h1>
    <?php
        $kb = $_POST["kb"];
        
        $mb = $kb * 0.001;
        
        echo "$kb Kilobytes equivalen a $mb Megabytes.";
    ?>

</body>
</html>
