<?php
    $arrayNumber = array(1, -3, 8.5, 8.51, 4 , 9);
    
    sort($arrayNumber);
    
    $sum = 0;
    foreach ($arrayNumber as $value){
        $sum += $value;
        
    }
     
     $min = $arrayNumber[0];
     
     $max = $arrayNumber[count($arrayNumber) - 1];
     
     echo "Min: ".$min."<br/>";
     echo "Max: ".$max."<br/>";
     echo "Sum: ".$sum."<br/>";
     
     