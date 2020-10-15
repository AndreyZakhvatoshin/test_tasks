<?php

/**
 * sum of 2 numbers
 * @return string
 */
function sumBigNum(string $num1, string $num2): string
{
    $maxLength = max(strlen($num1), strlen($num2));

    $padNum = str_pad($num1, $maxLength, '0', STR_PAD_LEFT);
    $padNum2 = str_pad($num2, $maxLength, '0', STR_PAD_LEFT);

    $result = '';
    $temp = 0;
    for ($i = $maxLength - 1; $i >= 0; $i--) {
        $x1 = $padNum[$i];
        $x2 = $padNum2[$i];

        $sum = $x1 + $x2 + $temp;

        if ($sum > 9) {
            $temp = 1;
            $sum = $sum % 10;
        }
        $result = $sum . $result;
    }

    return $result;
}
