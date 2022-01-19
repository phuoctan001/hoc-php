<?php

    $course = array("php" => "PHP", "jl" => "Joomla","zend" => "Zend Framework");
    
    $keyarr = array_rand($course, 2);
    
     echo "<pre>";
     print_r($keyarr); 
     echo "<pre/>";
    
    