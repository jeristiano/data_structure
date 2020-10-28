<?php


/*第7次循环后,数组内容为:3 5 4 7 1 2 8 9
第6次循环后,数组内容为:3 4 5 1 2 7 8 9
第5次循环后,数组内容为:3 4 1 2 5 7 8 9
第4次循环后,数组内容为:3 1 2 4 5 7 8 9
第3次循环后,数组内容为:1 2 3 4 5 7 8 9
第2次循环后,数组内容为:1 2 3 4 5 7 8 9
第1次循环后,数组内容为:1 2 3 4 5 7 8 9*/

//优化策略，进入到第3次循环后，其实已经排完了，剩下的两次是多余的，因此可以判断当前循环下是否还有交换，如果没有了就是已经完成了。
//这样就减少了一次循环
/**
 * @param $arr
 */
function bubbleSort ($arr)
{
    $length = count($arr);

    for ($i = $length - 1; $i > 0; $i--) {

        $flag = 0; //标志位置是否发生过交换
        //两个元素比较，大小交换
        for ($j = 0; $j < $i; $j++) {
            if ($arr[$j] > $arr[$j + 1]) {
                $arr = swap($arr, $j, $j + 1);
                $flag = 1;
            }


        }
        echo "第{$i}次循环后,数组内容为:";
        printLoop($arr);

        //如果已经没有交换终止循环
        if ($flag == 0) {
            break;
        }

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

$arr = [3, 5, 7, 4, 9, 1, 2, 8];
bubbleSort($arr);
