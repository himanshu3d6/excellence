<?php
/*Find the maximum consecutive 1's in an array of 0's and 1's.*/
$arr = array(0,0,1,1,0,0,0,1,0,0,1,1,1,0); 
$size = count($arr);
echo maxArray($arr, $size); 

function maxArray($arr, $size) 
{ 
    $count = 0; 
    $result = 0;  
    for ($i = 0; $i < $size; $i++) 
    { 
        if ($arr[$i] == 0) 
            $count = 0; 

        else
        { 
            $count++; 
            $result = max($result, $count); 
        } 
    } 
  
    return $result; 
}
?>