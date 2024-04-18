<?php
declare(strict_types=1);

namespace block_equation_solution;

class EqRoot
{
    public static function eq_root(object $data): string
    {
        $a = $data->a;
        if ($a == 0) {
            return "Решения нет!";
        }
        $b = $data->b;
        if ($b == 0) {
            return "Решения нет!";
        }
        $c = $data->c;
        if ($c == 0) {
            return "Решения нет!";
        }


        $x1 = 0;
        $x2 = 0;

        $d = $b * $b - 4 * $a * $c;

        if ($d < 0) {
            $result = "Решения нет!";
        } elseif ($d == 0) {
            $x1 = ($b * (-1) / 2 * $a);
            $result = "x = {$x1}";

        } else {
            $x1 = (((-1) * $b + sqrt($d)) / (2 * $a));
            $result = "x1 = {$x1}<br>";

            $x2 = (((-1) * $b - sqrt($d)) / (2 * $a));
            $result .= "x2 = {$x2}<br>";
        }

        self::WorkWithDataBase($a, $b, $c, $x1, $x2);
        return $result;
    }

    private static function WorkWithDataBase($a, $b, $c, $x1, $x2)
    {
        global $DB;
        $DB->insert_record('block_equation_solution', [
            'a' => $a,
            'b' => $b,
            'c' => $c,
            'x1' => $x1,
            'x2' => $x2,
        ]);
    }
}