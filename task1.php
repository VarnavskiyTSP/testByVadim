<?php
    function calculator(string $a): string
    {
    $calculator = ($a);
    return eval ("return $a;");
    }
    echo calculator("1+1"), "<br>";
    echo calculator("1+1-2"), "<br>";
    echo calculator("4+1-2+3"), "<br>";
    echo calculator("4*1*2"), "<br>";
    if ($a = "str") 
    {
    echo "Incorrect input";
    }
    else 
    {
    echo "str";
    }
?>