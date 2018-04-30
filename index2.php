<?php

$sentence = "I love codeing and playing basketball all day and whhite night!";
$sentence1 = 8712789619836;
$sentence2 = True;

function countWords($str) {
    if (is_string($str)) {
        $arr =  explode(" ", $str);
        $newArr = [];

        foreach($arr as $value) {
            if (array_key_exists($value, $newArr)) {
                $newArr[$value] = $newArr[$value] + 1;
                continue;
            }
        $newArr[$value] = 1;
        }
        return $newArr;
    }
    return;
}


print_r(countWords($sentence));
print_r(countWords($sentence1));
print_r(countWords($sentence2));

?>

