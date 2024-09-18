<html>

    <body>
            <form action="act8.php" method="post">
                <label for="number">Escriu un numero</label>
                <input type="text" name="numerousu"></input><br>
                <button>Enviar</button>

            </form>
           
    </body>

</html>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numusuari = $_POST['numerousu'];

if ($numusuari < 0) {
    echo ("El número debe ser mayor o igual a 0" + $numusuari);
} else {
    $num0 = 0;
    $num1 = 1;
    $a = 0;

    for ($i = 2; $i <= $numusuari; $i ++) {
        $a = $num0 + $num1;
        $num0 = $num1;
        $num1 = $a;  
    }

        echo ($a);
    }
    }

?>
