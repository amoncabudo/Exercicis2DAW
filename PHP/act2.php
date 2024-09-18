<?php if(!isset($_POST["name"]) && !isset($_POST["number"]) ){ ?>
    <div>
        <form action="index.php" method="post">
            <div>
                <label for="">Hola, com et dius?</label>
                <input type="text" name="name" />
            </div>
            <div>
                <label for="repetir">Quantes vegades?</label>
                <input type="number" name="number">
            </div>
            <button type="submit">Enviar</button>
        </form>
    </div>
    <?php } else {
        for($i = 1; $i <= $_POST["number"]; $i++){
    ?>

    <div>
        <h2><?php echo "Hello  " . $_POST["name"] . " " . $i; ?></h2>
    </div>

    <?php }
    }
    ?>