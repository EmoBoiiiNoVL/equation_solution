<?php

function eq_roots($a, $b, $c)
{
    if (isset($_GET['send'])) {
        $a = (float)$_POST['variable_a'];
        $b = (float)$_POST['variable_b'];
        $c = (float)$_POST['variable_c'];
    }

    $d = $b * $b - 4 * $a * $c;
    echo $d;

    if ($d < 0) {
        echo "Решения нет!";
    } elseif ($d == 0) {
        echo "x = ";
        echo($b * (-1) / 2 * $a);
    } else {
        echo "x1 = ";
        echo(((-1) * $b + sqrt($d)) / (2 * $a));
        echo "<br>";
        echo "x2 = ";
        echo(((-1) * $b - sqrt($d)) / (2 * $a));
    }
}



