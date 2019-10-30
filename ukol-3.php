<?php
aktualniDatum();
sleep(1);
aktualniDatum();

function aktualniDatum(){
    echo date('Y-m-d H:i:s');
    echo "<br>";

}