<?php
    $score = array(2,3,5,1,3,5,7,2);
    
    
    echo "<pre>";
    print_r($score);
    echo "<pre/>";
    
    $length = count($score);
    $max = max($score);
    $min = min($score);
    
    $sum = array_sum($score);
    echo "Trung bình cộng của mãng: ".$sum/$length."<br/>"; //Trung bình công của chuỗi
    echo "Tổng của mãng: ".$sum."<br/>";
    echo "Max: ".$max."<br/>";
    echo "Min: ".$min."<br/>";
    
    