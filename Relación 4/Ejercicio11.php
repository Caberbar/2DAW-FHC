<?php 
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if(isset($_POST['numero'])){
            $numero = $_POST['numero'];
            echo "<table><tr><td>n</td><td>n<sup>2</sup></td><td>n<sup>3</sup></td></tr>";
            for($i = $numero; $i < $numero + 5; $i++){
                echo "<tr><td>$i</td><td>".$i*$i."</td><td>".$i*$i*$i."</td></tr>";
            }
            echo "</table>";
        }else{
           header("location: Ejercicio11.html");
        }
    }else{
        header("location: Ejercicio11.html");
    }
?>