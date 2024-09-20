<html>
<body>
    <form method="post" action="act14.php">
        <label for="texto">Escriu una paraula o frase</label>
        <input type="text" id="texto" name="paraula">
        <button button type="submit">Enviar</button>
    </form>
<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['paraula'])) {
        $text = strtolower($_POST['paraula']); 
        $lletres = [];

        for ($i = 0; $i < strlen($text); $i++) {
            $lletra = strtolower($text[$i]);
            
            if (preg_match('/[a-z]/', $lletra)) {
                if (isset($lletres[$lletra])) {
                    $lletres[$lletra]++;
                } else {
                    $lletres[$lletra] = 1;
                }
            }
        }
        
        foreach ($lletres as $lletra => $count) {
            echo "$lletra : $count <br>";
        }
    }
        ?>