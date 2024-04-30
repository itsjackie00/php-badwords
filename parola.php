<?php

$parola = $_POST['parola'];
$frase = $_POST['frase'];
VAR_DUMP($_POST);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>PHP Badwords</title>
</head>

<body>
    <header class="m-2">
        <h3><?php echo $frase ?>, <?php echo $parola ?></h3>
        <p>Lunghezza della frase : <?php echo strlen($frase) ?></p>
    </header>
    <main>
        <h3><?php echo str_replace($parola, '***', $frase) ?></h3>
        <p>Lunghezza della frase : <?php echo strlen($frase)  ?></p>
    </main>
</body>

</html>