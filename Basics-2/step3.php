<?php
$var1 = 32;
$var2 = 45;
print "Before swapping:  ". $var1 . ',' . $var2;
list($var1 , $var2) = array($var2 , $var1);
print "\nAfter swapping:  ". $var1 . ',' . $var2."\n";
?>