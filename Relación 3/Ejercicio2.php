<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
</head>
<body>
    <h1>Saludo Según la Hora</h1>
    <?php

        $hora = $_POST["hora"];
        
        switch (true) {
            case ($hora >= 6 && $hora <= 12):
                echo "Buenos días.";
                break;
            case ($hora > 12 && $hora < 21):
                echo "Buenas tardes.";
                break;
            default:
                echo "Buenas noches.";
                break;
        }
    ?>
</body>
</
