<?php
    $number = '1';
    $numbers = explode('+', $number, 5);
    echo $number + $number, "<br>";
	
    $number2 = '2';
    $numbers = explode('-', $number2, 5);
    echo $number + $number - $number2, "<br>";

    $number3 = '3';
    $numbers = explode('+', $number3, 5);
    $number4 = '4';
    $numbers = explode('+', $number4, 5);
    echo $number4 + $number - $number2 + $number3, "<br>";

    echo $number4 * $number * $number2, "<br>";

    $number5 = 'str';
    echo $number5, "<br>";
?>