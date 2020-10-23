<?php

/*Define an array of numbers (use any random numbers). Write a program in PHP to find the sum of the array of numbers defined. 
Do not use any library functions, need to do via for loops only*/

$arr =array(1, 3, 2, 4); 
$n = sizeof($arr); 
echo "Sum of elements in a given array is ", arraySum($arr, $n); 

function arraySum( $arr, $n) 
{ 
    $sum = 0; 
    for ($i = 0; $i < $n; $i++) 
    $sum += $arr[$i]; 
  
   return $sum; 
 } 
?>