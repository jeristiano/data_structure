<?php
declare(strict_types=1);


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
function swap (&$arr, $i, $j)
{
    $temp = $arr[$i];
    $arr[$i] = $arr[$j];
    $arr[$j] = $temp;
    return $arr;
}

$arr = [7, 3, 2, 8, 1, 9, 5, 4, 6, 5];
quickSort($arr, 0, count($arr) - 1);


/**
 * @param $array
 */
function quickSort (&$array, $leftBound, $rightBound)
{
    if ($leftBound >= $rightBound) {
        return $array;
    }
    $mid = partition($array, $leftBound, $rightBound);
    quickSort($array, $leftBound, $mid - 1);
    quickSort($array, $mid + 1, $rightBound);
    printLoop($array);
}


/**
 * @param $array
 * @param $leftBound
 * @param $rightBound
 */
function partition (&$array, $leftBound, $rightBound)
{
//找到轴,最右侧
    $pivot = $array[$rightBound];
    $left = $leftBound;
    $right = $rightBound - 1;

    while ($left <= $right) {
        while ($left <= $right && $array[$left] <= $pivot) $left++;
        while ($left <= $right && $array[$right] > $pivot) $right--;
        if ($left < $right) {
//            print_r("数组进行交换: " . $left . ' 数组交换右侧:' . $right);
//            echo PHP_EOL;
            swap($array, $left, $right);
//            printLoop($array);
        }
    }
//    echo '此时左侧指针位置:' . $left . PHP_EOL;
    swap($array, $left, $rightBound);
    return $left;
}