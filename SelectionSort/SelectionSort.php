<?php


/**
 * @param array $foo
 * @return array
 */
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

        echo "第{$i}次循环后,数组内容为:";
        printLoop($foo);

    }
    return $foo;
}

$arr = [3, 5, 7, 4, 9, 1, 2, 8];
selectSort($arr);

//打印结果
//第0次循环后,数组内容为:1 5 7 4 9 3 2 8
//第1次循环后,数组内容为:1 2 7 4 9 3 5 8
//第2次循环后,数组内容为:1 2 3 4 9 7 5 8
//第3次循环后,数组内容为:1 2 3 4 9 7 5 8
//第4次循环后,数组内容为:1 2 3 4 5 7 9 8
//第5次循环后,数组内容为:1 2 3 4 5 7 9 8
//第6次循环后,数组内容为:1 2 3 4 5 7 8 9
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