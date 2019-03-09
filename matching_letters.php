<?php
/* 
 * Implementation of matching letters exercise.
 * The purpose of the function is to get the matching letters 
 * of both arrays and return them in the order they appear.
 */
$arr1 = ["A","B","A","D"];
$arr2 =  ["A","C","B","C","A","D", "B"];

function matchingLetters($arr1, $arr2)
{
    $tmp = "";
    foreach ($arr2 as $arr)
    {
        if (in_array($arr, $arr1))
        {
            if (!strpos($tmp, $arr))
            {
                $tmp .= $arr;
            }
        }
    }
    return $tmp;
}

echo matchingLetters($arr1, $arr2);
