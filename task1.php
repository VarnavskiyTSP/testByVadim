<?php
function calculator(string $a): string
{
    $checklistSymbols = ['+', '-', '*', '/'];
    $checklistNumbers = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9'];
    $result = '';

    if (strpos($a, '/0')) {
        return 'Incorrect input';
    } else {
        $numericalExpressionArray = str_split($a);
    }

    foreach ($numericalExpressionArray as $keyArray) {
        if (!(in_array($keyArray, $checklistSymbols) && in_array($keyArray, $checklistNumbers))) {
            $result .= $keyArray;
        } else {
            return 'Incorrect input';
        }
    }
    return eval('return ' . $result . ';');
}


echo calculator('1+1*6/3');
