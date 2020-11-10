<?php


function radixSort ($arr)
{
    $counter = [];
    $mod = 10;
    $dev = 1;
    $maxDigit = getMaxDigits($arr);
    for ($i = 0; $i < $maxDigit; $i++) {
        for ($j = 0; $j < count($arr); $j++) {
            $bucket = intval(($arr[$j] % $mod) / $dev);
            $counter[$bucket][] = $arr[$j];
        }
        $length = count($counter);
        $pos = 0;
        for ($m = 0; $m <= $length; $m++) {
            $value = null;
            $counter[$m] = $counter[$m] ?? [];

            while (($value = array_shift($counter[$m])) !== null) {
                $arr[$pos++] = $value;
            }
        }
        $mod *= 10;
        $dev *= 10;
    }
    return $arr;
}

$array = [20, 67, 123, 2, 34, 78, 33, 11, 15, 88];
$res = radixSort($array);
print_r($res);

/**
 * @param $array
 * @return int
 */
function getMaxDigits ($array)
{
    $maxDigit = 0;
    for ($i = 0; $i < count($array); $i++) {
        $leg = strlen((string)$array[$i]);

        if ($leg > $maxDigit) {
            $maxDigit = $leg;
        }
    }
    return $maxDigit;
}
