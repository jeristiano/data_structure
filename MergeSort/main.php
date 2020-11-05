<?php

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


//$arr = [3, 4, 5, 7, 9, 1, 2, 6, 8];
//$arr = [4, 1, 5, 7, 9, 3, 2, 6, 8];
$arr = [6, 43, 1];

(mergeSort($arr, 0, 2));


/**
 * @param array $arr
 */
function mergeSort (array &$arr, int $start, int $end)
{
    if ($start >= $end) {
        return [];
    }
    $middle = (int)(($start + $end) / 2);
    //left
    mergeSort($arr, $start, $middle);
    mergeSort($arr, $middle + 1, $end);
    //一遍递归后,形成最小的不可分割元素,做出对比然后合并
    mergeArray($arr, $start, $middle, $end);
    return $arr;
}


/**
 * @param $arr
 * @param $start
 * @param $middle
 * @param $end
 */
function mergeArray (&$arr, $start, $middle, $end)
{

    $i = $start;
    $j = $middle + 1;
    $temp = [];

    while ($i <= $middle && $j <= $end) {
        if ($arr[$i] <= $arr[$j]) {
            $temp[] = $arr[$i];
            $i++;
        } else {
            $temp[] = $arr[$j];
            $j++;
        }

    }
    while ($i <= $middle) {
        $temp[] = $arr[$i];
        $i++;
    }
    while ($j <= $end) {
        $temp[] = $arr[$j];
        $j++;
    }

    $i = $start;


    foreach ($temp as $val) {
        $arr[$i] = $val;
        $i++;
    }
    printLoop($arr);
}