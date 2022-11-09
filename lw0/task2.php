<?php
function sum(string $one, string $two): string
{
    if (!strtotime($one) || !strtotime($two)) {
        return 'Incorrect input';
    }
    return date('H:i:s', strtotime($one) + strtotime($two));
}
echo sum('10:20:30', '10:20:30');
