<?php

/**
 * @param $arr
 */
function shellSort ($arr){

    //3574

    $len = count($arr);
    $gap = 1;
    while($gap < $len / 3) {
        $gap = $gap * 3 + 1;
    }

    for ($gap; $gap > 0; $gap = floor($gap / 3)) {
        for ($i = $gap; $i < $len; $i++) {
            $temp = $arr[$i];
            for ($j = $i - $gap; $j >= 0 && $arr[$j] > $temp; $j -= $gap) {
                $arr[$j+$gap] = $arr[$j];
            }
            $arr[$j+$gap] = $temp;
        }
        printLoop($arr);
    }
    return $arr;

}


/**
 * @param array $arr
 */
function printLoop (array $arr)
{
    foreach ($arr as $i) {
        echo $i . ' ';
    }
    echo PHP_EOL;
}

/**
 * @param $arr
 * @param $i
 * @param $j
 * @return mixed
 */
function swap ($arr, $i, $j)
{
    $temp = $arr[$i];
    $arr[$i] = $arr[$j];
    $arr[$j] = $temp;
    return $arr; //
}


//$arr = [3, 5, 7, 4, 9, 1, 2, 8, 6];
$arr = [3, 5, 7, 4, 9, 1, 2, 8, 6];
shellSort($arr);
