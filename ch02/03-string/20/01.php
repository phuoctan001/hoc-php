<?php

    //Kết quả là số dương chuỗi 1 lớn hơn chuổi 2 bao nhiêu đơn vị
    $str1 = "Php is";
    
    $str2 = "Php";
    
    //Kết quả là số âm chuỗi 1 nhỏ hơn chuổi 2 bao nhiêu đơn vị
    $str1 = "Php is";
    
    $str2 = "Php is easy";
    
    //Có phân biệt hoa thương
    $str1 = "PHp is";
    
    $str2 = "Php is";
    
    $result = strcmp($str1, $str2);
    
    echo $result;
    