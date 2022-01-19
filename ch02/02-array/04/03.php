<?php

     $courses = array("php" => "PHP", "zend" => "Zend Framework", "joomla" => "Joomla", 0 => "Item1", 1 => "Item2");
      echo "<pre>";
      print_r($courses);
      echo "<pre/>";
        
      /*Array
        (
            [php] => PHP
            [zend] => Zend Framework
            [joomla] => Joomla
            [0] => Item1
            [1] => Item2
        )  */
      if (!empty($courses)){
      foreach ($courses as $key => $value){
          echo $key . " : " .$value . "<br/>";
      }
      }else{
          echo "Mãng rỗng";
      }
     
