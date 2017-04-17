<?php
error_reporting(E_ALL);
$x = rand (0,10);
echo 'рандомное число-  ' . $x;
echo '</br>';
$a = 1;
$b = 1;
$c = 0;
while (true) {
    if ($a >  $x){
    echo 'Задуманное число НЕ входит в числовой ряд';
    exit;
    } else if ($a === $x)  {
       echo 'Задуманное число входит в числовой ряд';
        exit;
    } else {
        $c = $a;
        $a = $a + $b;
        $b = $c;
    }
}
?>