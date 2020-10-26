<?php


function selectSort (array $foo)
{
    //数组长度
    $length = count($foo);
    //遍历次数
    for ($i = 0; $i < $length - 1; $i++) {
        //假设一个元素为最小$
        $minIndex = $i;

        for ($j = $i + 1; $j < $length; $j++) {
            //遍历j数组元素是否小于假设最小元素,如果小于当前j数组角标为最小数组元素的角标
            if ($foo[$j] < $foo[$minIndex]) {
                $minIndex = $j;
            }
        }
        //j数组遍历完就找到了最小元素的角标
        //首位元素与中间变量交换
        $temp = $foo[$i];
        //最小元素赋值到首位
        $foo[$i] = $foo[$minIndex];
        $foo[$minIndex] = $temp;

    }
    return $foo;
}

$arr = [3, 5, 7, 4, 9, 1, 2, 8];
print_r(selectSort($arr));