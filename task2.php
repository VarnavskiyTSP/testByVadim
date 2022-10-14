<?php
    function sum(string $one, string $two): string
    {
	$sum = strtotime($one) + strtotime($two) - strtotime('00:00:00');
	return date('H:i:s', $sum);
    }
    echo sum('10:20:30', '10:20:30');
?>