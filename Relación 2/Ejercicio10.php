<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
</head>
<body>
    <h1>Resultado de la Conversión</h1>
    <?php
        $mb = $_POST["mb"];
        
        $kb = $mb * 1024;
        
        echo "$mb Megabytes equivalen a $kb Kilobytes.";
    ?>
</body>
</html>
