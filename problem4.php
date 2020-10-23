<?php
/*You are given an array of values, (positive, negative values both, but only integers) and a value. You have to print all the pairs whose sum is the given value. Write a function to do this.
*/

$arr = array(2,6,4,5,-2,3,5,1,2);
$size = count($arr);
$value = 5;
result($arr, $size, $value);

function result($arr, $size, $value)
{
    $count = 0;
    for($i = 0; $i < $size; $i++)
        for( $j = $i + 1; $j < $size; $j++)
            if($arr[$i] + $arr[$j] == $value)
            echo "(", $arr[$i], ",", $arr[$j], ")", "\n";
}


?>