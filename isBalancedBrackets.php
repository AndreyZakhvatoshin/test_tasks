<?php

function isBalancedBrackets(string $str)
{
    $brackets = '**(){}[]';
    $stack = [];

    for ($i = 0; $i < strlen($str); $i++) {

        $item = $str[$i];
        $findChar = strpos($brackets, $item);

        if ($findChar) {
            if (($findChar % 2 === 1)) {
                if (empty($stack)) {
                    return false;
                }
                $lastBracket = array_pop($stack);
                if (strpos($brackets, $lastBracket) % 2 == 1) {
                    return false;
                }
            } else {
                array_push($stack, $item);
            }
        }
    }
    return empty($stack);
}
