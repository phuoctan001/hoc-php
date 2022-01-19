<?php
    $array1 = array("a","b","c");
    $array2 = array(4,5,6);
    $array3 = array("php" => "PHP", "jl" => "Joomla");
    
    $newarr = array_merge($array1, $array2,$array3);
    
     echo "<pre>";
    print_r($newarr); 
     echo "<pre/>";
    
    