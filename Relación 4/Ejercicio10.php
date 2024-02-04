<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
</head>

<body>
    <h1>CALCULAR MEDIA NÚMEROS</h1>
    <form method="post">
        <label for="numero">Número: </label>
        <input type="number" id="numero" name="numero" required><br><br>
        <input type="submit" value="Agregar" name="agregar">
    </form>
    <?php
    session_start();
    if (!isset($_SESSION['n'])) {
        $_SESSION['n'] = 0;
    }
    if (!isset($_SESSION['contador'])) {
        $_SESSION['contador'] = 0;
    }
    $total = 0;
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        if (isset($_POST['agregar']) && $_POST['numero'] > -1) {
            $_SESSION['n'] += $_POST['numero'];
            echo $_SESSION['n'];
            $_SESSION['contador']++;
        } else if ($_POST['numero'] < 0 && $_SESSION['contador'] < 2) {
            $total = $_SESSION['n'] / $_SESSION['contador'];
            $_SESSION['n'] = 0; $_SESSION['contador']= 0;
            echo "La media de los".$_SESSION['contador']." números, es: $total";
        } else if ($_SESSION['contador'] < 2 && $_POST['numero'] > -1) {
            echo "Primero debes meter dos números positivos mínimo para calcular la media.";
            $_SESSION['n'] = 0; $_SESSION['contador']= 0;
        }
    }
    ?>
</body>

</html>