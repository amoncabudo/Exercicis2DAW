<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php if(!isset($_POST["name"]) && !isset($_POST["number"])){ ?>

    <div class="container">
        <div>
    <form action="index.php" method="POST">
            <label> Hola com et dius?</label>
            <input type="text" name="name">
        </div>
        <div>
            <label>Quantes vegades</label>
            <input type="text" name="number">
        </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
    </div>

    <?php } else {  
        for($i = 0; $i < $_POST["number"]; $i++){
     ?>

    <div class="container2">
        <?php echo $_POST ["name"] . " " . $i ;
         ?>

    </div>
    <?php }
    }
    ?>

    <?php
    
    echo 'Hola Món';
    
    function primer ($numero,$i) {
        if ($numero == 0 || $numero == 1 || $numero == 4 ) return false;
        for($i = 2; $i < $numero / 2; $i++) {
            if ($numero % $i == 0) echo "El numero no es primer";
        }
        echo "El numero es primer";
    }
    ?>

    
</body>
</html>