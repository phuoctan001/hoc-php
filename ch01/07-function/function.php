<?php
function sumDigit($number){//232
    $sum = 0;
    while ($number > 0){
        $digit = $number % 10;
        $sum += $digit;
        $number = ($number - $digit) / 10;
        
    }
    return $sum;
}

?>