<?php
     //cách 3
     $course = array("PHP","Zend Framework","Joomla");
        
      echo "<pre>";
      print_r($course);
      echo "<pre/>";
      
     if (!empty($course)){
        
         foreach ($course as $key => $value){
             echo $value . "<br/>";
         }
         
     }else{
         echo "Mãng rỗng";
     }
    
//      Array
//      (
//          [0] => PHP
//          [1] => Zend Framework
//          [2] => Joomla
//       )