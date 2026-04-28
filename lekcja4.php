<?php

$a = 3;
$b = 8;

while ($a != $b) {
    if ($a > $b) {
        $a = $a - $b;
    } else {
        $b = $b - $a;
    }
}

echo "NWD = " . $a;
?>
