<?php

    /*Tính giai thừa
     * Ví dụ:
     * 4! = 4 * 3 * 2 * 1
     * 5! = 5 * 4 * 3 * 2 * 1
     * 0! = 1
     * 1! = 1 * 1 = 1  */
    
    //Sử dụng hàm đệ quy
    function factorial($number){
        $result = 1;
        if ($number>= 1){
            $result = $number * factorial($number - 1);
        }
        return $result;
    }
    $number = 5;
    $str = '';
    for ($i = $number; $i >= 1; $i--){
        $str .= $i . " * ";
    }
    $result = factorial($number);
    $str = substr($str, 0, strlen($str) - 2);
    echo "$number! = $str => $number! = $result ";