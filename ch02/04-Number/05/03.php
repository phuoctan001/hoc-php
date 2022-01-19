<?php

    $strNumber = "1, -3, 8.5, 8.51, 4, 9";
    
    $arrayNumber = explode(",", $strNumber);
    
    $min = min($arrayNumber);
    $max = max($arrayNumber);
    $sum = array_sum($arrayNumber);
    
    echo "Min: ".$min."<br/>";
    echo "Max: ".$max."<br/>";
    echo "Sum: ".$sum."<br/>";
    
    
     
     