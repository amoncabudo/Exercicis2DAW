<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <style>
        table {
            width: 50%;
            margin-top: 20px;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
            text-align: center;
        }
        th, td {
            padding: 10px;
        }
    </style>
</head>
<body>
    <form method="post" action="">
        <label for="text">Escriu una frase o paraula:</label>
        <input type="text" id="text" name="text" required>
        <button type="submit">Comptar</button>
    </form>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['text'])) {
    $text = strtolower($_POST['text']); 
    $vocals = 0;
    $consonants = 0;

    for ($i = 0; $i < strlen($text); $i++) {
        $lletra = $text[$i];

        if (ctype_alpha($lletra)) {
            if ($lletra == 'a' || $lletra == 'e' || $lletra == 'i' || $lletra == 'o' || $lletra == 'u') {
                $vocals++;
            } else {
                $consonants++;
            }
        }
    }

    echo "<table>
            <tr>
                <th>Tipus</th>
                <th>Comptatge</th>
            </tr>
            <tr>
                <td>Vocals</td>
                <td>$vocals</td>
            </tr>
            <tr>
                <td>Consonants</td>
                <td>$consonants</td>
            </tr>
        </table>";
}
?>

</body>
</html>
