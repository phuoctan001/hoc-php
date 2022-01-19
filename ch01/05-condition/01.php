<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<?php
    $number = -22;
    if ($number % 2 == 0){
        $result = "Số chẵn";
    }else{
        $result = "Số lẽ";
    }
    
     $result = ($number % 2 == 0) ? "Số chẵn" : "Số lẽ";
    echo $result;