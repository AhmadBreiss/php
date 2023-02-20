<?php
function primeCheck($num)
{
    if ($num == 1)
        return "{$num} is not a prime number";
    for ($i = 2; $i <= $num / 2; $i++) {
        if ($num % $i == 0)
            return "{$num} is not a prime number";
    }
    return "{$num} is a prime number";
}
echo primeCheck(1), "\n";
echo primeCheck(7), "\n";
?>