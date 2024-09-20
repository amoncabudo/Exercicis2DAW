<html>
<body>
    <form method="post" action="act12.php">
        <label for="texto">Escriu una paraula o frase</label>
        <input type="text" id="texto" name="paraula">
        <button button type="submit">Enviar</button>
    </form>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['paraula'])) {
    $paraula = $_POST['paraula'];
}
function palindromo($par)
{
    $minusculas = explode(" ", strtolower($par)); 
    $nuevo="";
    foreach($minusculas as $m)
    {
        $nuevo .= $m; 
    }
    
    if($nuevo == strrev($nuevo))
    {
        return "Es palindromo";
    }
    else {
        return "No es palindromo";
    }
}
echo palindromo($paraula);

?>