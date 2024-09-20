<html>
<body>
    <form method="post" action="act15.php">
        <label for="texto">Escriu una frase</label>
        <input type="text" id="texto" name="text">
        <button button type="submit">Enviar</button>
    </form>
<?php
 if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['text'])) {
    $text = ($_POST['text']); 
    $palabras = explode (" ", $text);
    $contador = array();

    foreach ($palabras as $palabra) {
        if (isset($contador[$palabra])) {
            $contador[$palabra]++;
        } else {
            $contador[$palabra] = 1;
        }
    }

    foreach ($contador as $palabra => $cantidad) {
        echo "$palabra: $cantidad<br>";
    }
}