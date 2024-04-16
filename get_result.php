<?php
declare(strict_types=1);

if(isset($_GET['send'])) {
    $a = (float)$_POST['variable_a'];
    $b = (float)$_POST['variable_b'];
    $c = (float)$_POST['variable_c'];

}

function equation_solution($a, $b, $c)
{
    if ($a == 0) {
        echo "В квадратном уравнении не может быть 'a' равное нулю!";
        $a = 1;
    }

    $D = $b * $b - 4 * $a * $c;

    if ($D < 0) echo "Решения нет!";
    else {
        if ($D == 0) {
            $x1 = (-1) * $b / 2 * $a;
            echo $x1;
        } else {
            $x1 = ((-1) * $b + sqrt($D)) / 2 * $a;
            $x2 = ((-1) * $b - sqrt($D)) / 2 * $a;
            echo $x1;
            echo $x2;
        }
    }
}


