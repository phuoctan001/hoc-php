<?php

    $str = "This is a test";
    
    $index = substr_count($str, "is");
    $index = substr_count($str, "is", 2); // bất đầu từ kí tự thứ 2
    
    echo $index;
    
    