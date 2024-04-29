<?php

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
        <h1>PHP Badwords</h1>
        <h4 class="m-3">Questo è il paragrafo lungo che conterra la tua parola inserita in input!</h4>
    </header>
    <main>
    <form action="parola.php" method="POST">
  <div class="m-4 ">
    <label for="frase" class="form-label">Inserisci la tua frase</label>
    <input type="text" name="frase" class="form-control w-25">

    <label for="parola" class="form-label">Inserisci la parola</label>
    <input type="text" name="parola" class="form-control w-25">

  <button type="submit" class="btn btn-primary m-2">Invia</button>
</form>
    </main>
    
</body>
</html>