<?php

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Password Generator</title>
</head>
<body>
    <div class="p-4">
        <form action="./includes/components/index.php" method="GET"  class="d-flex flex-column align-items-start">
            <label for="">lunghezza password</label>
            <input class="my-2" type="number" name="lunghezza" id="">
            <label for="">Lettere</label>
            <input class="my-2" type="checkbox" name="lettere" id="">
            <label for="">Numeri</label>
            <input class="my-2" type="checkbox" name="numeri" id="">
            <label for="">Simboli</label>
            <input class="my-2" type="checkbox" name="simboli" id="">
            <button type="submit">GENERA</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>