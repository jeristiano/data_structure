<?php


/**
 * @param array $arr
 */
function insertionSort (array $arr)
{
    //3574
    $length = count($arr);
    for ($i = 1; $i < $length; $i++) {

        $current = $arr[$i];
        $inner = $i;
        while ($inner > 0 && $current <= $arr[$inner - 1]) {
            $arr[$inner] = $arr[$inner - 1];//当前值挪到前一个值去
            $inner--;
        }
        $arr[$inner] = $current;
        printLoop($arr);
    }
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
insertionSort($arr);
