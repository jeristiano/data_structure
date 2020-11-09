<?php


function countSorted ($arr, $maxValue = null)
{
    if ($maxValue === null) {
        $maxValue = max($arr);
    }
    for ($m = 0; $m < $maxValue + 1; $m++) {
        $bucket[] = null;
    }

    for ($i = 0; $i < count($arr); $i++) {
        print_r($bucket);
        if (!array_key_exists($arr[$i], $bucket)) {
            $bucket[$arr[$i]] = 0;
        }
        $bucket[$arr[$i]]++;
    }
    $sortedIndex = 0;
    $result = [];
    foreach ($bucket as $key => $length) {
        if ($length !== null) {
            for ($j = 0; $j < $length; $j++) {
                $result[$sortedIndex++] = $key;
            }
        }
    }
    return $result;
}


$arr = [10, 10, 1, 3, 4, 5, 6, 5, 1, 2, 3, 4, 3, 7, 8, 9, 3, 4, 5, 6, 0, 0, 0];

countSorted($arr);
