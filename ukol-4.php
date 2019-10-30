<?php

function maximum($a,$b)
{
    if (!is_numeric($a)||!is_numeric($b)){
        echo "Chyba!";

    }elseif($a>$b) {
        echo $a;
    }else {
        echo $b;
        }
    echo "<br>";
}

maximum (304,560);
maximum (7.2, 7.1);
maximum (23, 23);
maximum (253,"x");