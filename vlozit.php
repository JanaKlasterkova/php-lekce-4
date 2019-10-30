<?php
if (!isset($_POST['Jmeno'], $_POST['Vzkaz'])) {
    echo 'Přístup odepřen.';
} elseif ($_POST['Jmeno'] === '' || $_POST['Vzkaz'] === '') {
    echo 'Nebylo vyplněno jméno nebo vzkaz.';
} else {
    $handle = fopen('prispevky.txt', 'a');
    if ($handle === false) {
        echo 'Nepodařilo se otevřít soubor prispevky.txt pro uložení vzkazu!';
    } else {
        fwrite($handle, "<b>". $_POST['Jmeno'] . "</b>" . "<br>\n");
        fwrite($handle,  $_POST['Vzkaz']  . "<br>\n" . "<hr>");
        fclose($handle);
        echo 'Vzkaz byl uložen.';
    }
}
?>

<a href="navstevni-kniha.php">Vrátit se zpět na návštěvní knihu</a>.