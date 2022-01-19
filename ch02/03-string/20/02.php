<?php

    //Kết quả là số dương chuỗi 1 lớn hơn chuổi 2 bao nhiêu đơn vị
    $str1 = "Php is easy";
    
    $str2 = "Php";

    
    $result = substr_compare($str1, $str2, 0, 3);
    
    echo $result;
    