
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Úkol 2</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>
<br>
<div class="container">
    <form action="vlozit.php" method="POST">
        <div class="form-group">
            <label for="Jmeno">Jméno:</label>
            <input type="text" class="form-control" name="Jmeno">
        </div>
        <div class="form-group">
            <label for="Vzkaz">Vzkaz:</label>
            <textarea class="form-control" rows="3" name="Vzkaz"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Přidat vzkaz</button>
    </form>
    <br>
    <br>
    <?php
    function nactiSoubor($nazev) {
        if (!file_exists($nazev)) {
            return false;
        }
        $data = @file_get_contents($nazev);
        if (!$data) {
            return false;
        }
        return $data;
    }
    // funkce seradi prispevky od nejnovejsiho
    function seradPrispevky($prispevky, $oddelovac) {
        $rozdeleno = explode($oddelovac, $prispevky);
        $serazeno = array_reverse($rozdeleno);
        $spojeno = implode($serazeno, $oddelovac);
        return $spojeno;
    }
    // nacteni souboru s prispevky
    $prispevky = nactiSoubor('prispevky.txt');
    // vypsani prispevku

    if ($prispevky === false) {
        echo 'Žádné příspěvky';
    } else {
        echo seradPrispevky($prispevky, '<hr>');
    }
    ?>

</div>
</body>
</html>

