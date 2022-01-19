<?php

    $array = array("a", "b", "c","d","e");
    
    
    echo "Input: ";
     echo "<pre>";
     print_r($array);
     echo "<pre/>";
     
     $newArr = array_splice($array, 2,1);
     
     echo "Newarray: ";
      echo "<pre>";
     print_r($newArr);
      echo "<pre/>";
      
      echo "Output: ";
      echo "<pre>";
      print_r($array);
      echo "<pre/>";
    
