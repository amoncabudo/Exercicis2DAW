<html>
<body>
    <form method="post" action="act11.php">
        <label for="texto">Escribe una palabra</label>
        <input type="text" id="texto" name="paraula">
        <button type="submit">Enviar</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['paraula'])) {
        $paraula = $_POST['paraula'];

        function invertirCadena($cad) {
            $nuevaCadena = "";
            for ($i = strlen($cad) - 1; $i >= 0; $i--) {
                $nuevaCadena .= $cad[$i];  
            }
            return $nuevaCadena;
        }
        echo "La palabra invertida : " . invertirCadena($paraula);
    }
    ?>
</body>
</html>
