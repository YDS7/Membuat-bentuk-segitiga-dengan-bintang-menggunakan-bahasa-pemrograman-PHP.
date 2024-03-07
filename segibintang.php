<?php
$star=7;
for ($y=$star;$y>0;$y--){
    for($d=1; $d<=$y; $d++) {
        echo"&nbsp";
    }
    for ($y1=$star;$y1>=$y;$y1--){
        echo"*";
    }
    echo"<br>";
}
?>