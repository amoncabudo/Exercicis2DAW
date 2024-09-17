<html>

    <body>
    <a href="act3.php">Reiniciar</a>
            <form action="act3.php" method="post">
                <label for="number">Numero1</label>
                <input type="text" name="num1"></input><br>
                <label for="number">Numero2</label>
                <input type="text" name="num2"></input><br>
                <label for="number">Sumar = 1 | Multiplicar = 2</label>
                <input type="text" name="operacio"></input><br>
                <button>Enviar</button>

            </form>
           
    </body>

</html>

<?php 
 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $operacio = $_POST['operacio'];
    $n1 = $_POST['num1'];
    $n2 = $_POST['num2'];

    if($operacio == 1){
       $sumult = $n1 + $n2;
       echo "el resultat de la suma es ". $sumult;
    }else if($operacio == 2){
        $sumult = $n1 * $n2;  
        echo "el resultat de la multiplicació
         es ". $sumult;
    }

}    
?>