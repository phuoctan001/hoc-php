<?php

    $array1 = array("name" => "PHP", "time" => 120, "zend", "Joomla");
    $array2 = array("PHP", 100);
    
    $diff = array_diff($array1, $array2);
    
     echo "<pre>";
    print_r($diff);
     echo "<pre/>";

      echo "<pre>";
     print_r($array1);
      echo "<pre/>";
    
       echo "<pre>";
      print_r($array2);
       echo "<pre/>";