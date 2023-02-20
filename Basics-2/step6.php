<?php
function sum_digits($num)
{
    $sum = 0;
    for ($i = 0; $i < strlen($num); $i++) {
        $sum += $num[$i];
    }
    return $sum;
}
echo ("The sum of the digits this number 123456 is : ");
print sum_digits("123456") . "\n";
echo ("The sum of the digits this number 456789 is : ");
print sum_digits("456789") . "\n";
?>