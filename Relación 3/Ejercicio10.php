<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
</head>

<body>
    <h1>Horóscopo</h1>
    <?php
    $dia = $_POST["dia"];
    $mes = $_POST["mes"];
    $horoscopo = "";

    switch ($mes) {
        case 1:
            if ($dia >= 20) {
                $horoscopo = "Acuario";
            } else {
                $horoscopo = "Capricornio";
            }
            break;

        case 2:
            if ($dia >= 19) {
                $horoscopo = "Piscis";
            } else {
                $horoscopo = "Acuario";
            }
            break;

        case 3:
            if ($dia >= 21) {
                $horoscopo = "Aries";
            } else {
                $horoscopo = "Piscis";
            }
            break;

        case 4:
            if ($dia >= 20) {
                $horoscopo = "Tauro";
            } else {
                $horoscopo = "Aries";
            }
            break;

        case 5:
            if ($dia >= 21) {
                $horoscopo = "Géminis";
            } else {
                $horoscopo = "Tauro";
            }
            break;

        case 6:
            if ($dia >= 21) {
                $horoscopo = "Cáncer";
            } else {
                $horoscopo = "Géminis";
            }
            break;

        case 7:
            if ($dia >= 23) {
                $horoscopo = "Leo";
            } else {
                $horoscopo = "Cáncer";
            }
            break;

        case 8:
            if ($dia >= 23) {
                $horoscopo = "Virgo";
            } else {
                $horoscopo = "Leo";
            }
            break;

        case 9:
            if ($dia >= 23) {
                $horoscopo = "Libra";
            } else {
                $horoscopo = "Virgo";
            }
            break;

        case 10:
            if ($dia >= 23) {
                $horoscopo = "Escorpio";
            } else {
                $horoscopo = "Libra";
            }
            break;

        case 11:
            if ($dia >= 22) {
                $horoscopo = "Sagitario";
            } else {
                $horoscopo = "Escorpio";
            }
            break;

        case 12:
            if ($dia >= 22) {
                $horoscopo = "Capricornio";
            } else {
                $horoscopo = "Sagitario";
            }
            break;
            
        default:
            $horoscopo = "Mes inválido";
            break;
    }

    echo "Tu horóscopo es $horoscopo.";
    ?>
</body>

</html>