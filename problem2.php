<?php
/*Suppose you have an array of 101 integers. This array is already sorted and all numbers in this array are consecutive. Each number only occurs once in the array except one number which occurs twice. Write a php code to find the repeated number.
e.g $arr = array(0,1,2,3,4,5,6,7,7,8,9,10...................);*/

$arr = array(0,1,2,3,4,5,6,7,7,8,9,10,11,12,13,14,15,); 
$size = count($arr); 
echo " Repeated Number is "; 
  
    for($i = 0; $i < $size; $i++) 
        for($j = $i + 1; $j < $size; $j++) 
            if($arr[$i] == $arr[$j]) 
                echo $arr[$i], " "; 

?>
