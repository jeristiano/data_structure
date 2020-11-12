<?php
$array = range(0, 9);
shuffle($array);
echo '生成的随机数组是: ';
print_r($array);

echo '排序结果: ';
print_r(heapSort($array));
function heapSort ($arr)
{
    global $len;
    $len = count($arr);
    buildMaxHeap($arr);

    for ($j = count($arr) - 1; $j >= 0; $j--) {
        swap($arr, 0, $j);
        $len--;
        heapify($arr, 0);
    }
    return $arr;
}

/**
 * 建立最大堆
 * @param $arr
 */
function
buildMaxHeap (&$arr)
{
    global $len;

    for ($i = floor($len / 2); $i >= 0; $i--) {
        heapify($arr, $i);
    }

}


/**
 * @param $arr
 * @param $i
 */
function heapify (&$arr, $i)
{
    global $len;
//    echo '数组长度: ' . $len . PHP_EOL;
    $left = 2 * $i;
    $right = 2 * $i + 1;
    $largest = $i;

    //如果左边大于父节点,交换最大节点
    if ($left < $len && $arr[$left] > $arr[$largest]) {
        $largest = $left;
    }
    //如果右边大于父节点,有部分为父节点
    if ($right < $len && $arr[$right] > $arr[$largest]) {
        $largest = $right;
    }

    //如果发生了交换,此时最大父节点已经不是$i,而是$largest,此时进行交换,并递归的进行交换排序
    if ($largest != $i) {
        echo $i . "发生交换: ".$largest.PHP_EOL;

        swap($arr, $i, $largest);
        heapify($arr, $largest);
        print_r($arr);

    }

}

/**
 * @param $arr
 * @param $i
 * @param $j
 */
function swap (&$arr, $i, $j)
{
    $temp = $arr[$i];
    $arr[$i] = $arr[$j];
    $arr[$j] = $temp;
}
