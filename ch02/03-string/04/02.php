<?php

    $str = "Nguyễn Phước Tấn";
    
    // sữ dụng mb_strlen đo độ dài của chuỗi tiếng việt 
    // sữ dụng strlen đo độ dài của chuỗi không phải tiếng việt
    $length = mb_strlen($str, "UTF-8");
    
    echo $length;
    var_dump($str);