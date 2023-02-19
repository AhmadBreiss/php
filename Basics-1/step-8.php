<?php
// Part_a

$items = array("Eggs", "Milk", "Cheese", "Water Pack", "Tissues", "Watermelon");
echo "Hello Sir, do you have " .$items[0]. ", " .$items[1]. ", " .$items[2].
 "? Also if you sell fruits can I find a " .$items[5]. "? \n";

 // Part_b

 $groceryItems = array(
    array('balade', 'mazere3'),
    array ('Fresh', 'Taanayel'),
    array( 'Tanoureen', 'Reem')
);
print "Hey Sir, Please I need 1 pack of {$groceryItems[0][0]} {$items[0]} and 3 {$groceryItems[2][1]} {$items [3]}.\n"
?>