<?php

    $array1 = array("name" => "PHP", "time" => 120, "zend", "Joomla");
    $array2 = array("PHP", "time" => 120);
    
    $diff = array_intersect_assoc($array1, $array2);
    
     echo "<pre>";
    print_r($diff);
     echo "<pre/>";

      echo "<pre>";
     print_r($array1);
      echo "<pre/>";
    
       echo "<pre>";
      print_r($array2);
       echo "<pre/>";