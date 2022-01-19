<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<?php
    $number = -12;
    
    if ($number >= 0 && $number % 2 == 0){
        $result = "Số nguyên dương chẵn";
    }else if($number >= 0 && $number % 2 != 0){
        $result = "Số nguyên dương lẻ";
    }else if($number < 0 && $number % 2 == 0){
        $result = "Số nguyên âm chẵn";
    }else if($number < 0 && $number % 2 != 0){
        $result = "Số nguyên âm lẻ";
    }
     echo $result;