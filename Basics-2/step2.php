<?php
function greaterFn ( $num ){
    if($num>30){
        return $num ." is grater than 30 \n";
    }elseif($num>20){
        return $num ." is grater than 20 \n";
    }elseif($num>10){
        return $num ." is grater than 10 \n";
    }else{
        return $num ." is less than 10 \n";
    };
    };
  print greaterFn(40);
  print greaterFn(21);
  print greaterFn(12);
  print greaterFn(8);
?>