<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
</head>
<body>
    <h1>Media de notas</h1>
    <?php
        $nota1 = $_POST["nota1"];
        $nota2 = $_POST["nota2"];
        $nota3 = $_POST["nota3"];
        
        $media = ($nota1 + $nota2 + $nota3) / 3;
        
        echo "La media de las tres notas es: $media";
    ?>
</body>
</html>
