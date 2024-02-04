<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
</head>
<body>
    <h1>Nombre del Día de la Semana</h1>
    <?php
        $numero = $_POST["numero"];
        
        switch ($numero) {
            case 1:
                echo "Lunes";
                break;
            case 2:
                echo "Martes";
                break;
            case 3:
                echo "Miércoles";
                break;
            case 4:
                echo "Jueves";
                break;
            case 5:
                echo "Viernes";
                break;
            case 6:
                echo "Sábado";
                break;
            case 7:
                echo "Domingo";
                break;
            default:
                echo "Número de día inválido.";
                break;
        }
    ?>
</body>
</html>
