<body>
    <html>
        <form method="post" action="act10.php">
            <label for="num">Escriu un número:</label>
            <input type="number" id="numero" name="num" min="1" required>
            <button type="submit">Enviar</button>
        </form>
    </html>

    <?php 
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['num'])) {
        $size = ($_POST['num']); 
        
        $blanco = "____";
        $negro = "███";
        
        echo "<h2>Taulell d'escacs<h2>";
        echo "<table border='1'>";
        
        for ($a = 1; $a <= $size; $a++) {
            echo "<tr>";
            for ($i = 1; $i <= $size; $i++) { 
                if (($a + $i) % 2 == 0) {
                    echo "<td>$negro</td>";
                } else {
                    echo "<td>$blanco</td>";
                }
            }
            echo "</tr>";
        }
        
        echo "</table>";
    }
    ?> 
</body>
