<body>
    <html>
        <form method="post" action="act9.php">
            <label for="numero">Escriu un número:</label>
            <input type="number" id="numero" name="numero">
            <button type="submit">Enviar</button>
        </form>
    <?php
            function calcularFactorial($numero) {
            if ($numero < 0) {
                return "No pots utilitzar numeros negatius";
        }
            $factorial = 1;
            for ($i = 1; $i <= $numero; $i++) {
                $factorial *= $i;
        }

            return $factorial;
        }

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $numero = isset($_POST['numero']) ? $_POST['numero'] : 0;
            if ($numero >= 0) {
                $resultat = calcularFactorial($numero);
                echo "El factorial de $numero es: $resultat";
            }
        }
        ?>
</body>
</html>