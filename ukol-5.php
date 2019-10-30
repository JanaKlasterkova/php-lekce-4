<?php


function minimum($a, $b)
{
    if (!is_numeric($a) || !is_numeric($b)) {
        return false;
    } elseif ($a < $b) {
        return $a;
    } else {
        return $b;
    }

}
$minimum=minimum (56,"xy");
if ($minimum==false){
    echo "Chyba";
}else {
    echo $minimum;
}


