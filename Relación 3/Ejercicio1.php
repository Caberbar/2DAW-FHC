<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Asignatura del Día</title>
</head>

<body>
    <h1>Asignatura del Día</h1>
    <?php
    $dia = $_POST["dia"];

    switch (strtoupper($dia)) {
        case "LUNES":
            echo "Diseño";
            break;
        case "MARTES":
            echo "Sistemas";
            break;
        case "MIERCOLES":
        case "MIÉRCOLES":
            echo "Programación";
            break;
        case "JUEVES":
            echo "Mantenimiento";
            break;
        case "VIERNES";
            echo "Prácticas";
            break;
        default:
            echo "$dia no es un día de la semana válido.";
    }
    ?>
</body>

</html>