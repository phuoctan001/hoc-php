<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<?php
    $number = 13;
    $n = $number % 2;
    
    $resultFirst = ($number >= 0) ? "Nguyên Dương" : "Nguyên Âm";
    $resultLast = ($n == 0) ? "Chẵn" : "Lẻ";
    $result = $resultFirst . " " . $resultLast;
     echo $result;