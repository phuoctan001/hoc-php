<?php 
    $str = "       PHP      is       easy          ";
    
    //loại bỏ khoảng trăng bên trái và bên phải
    $str = trim($str);
    
    //loại bỏ khoảng trắng giữ các từ
    
    $array = explode(" ", $str);
    
     echo "<pre>";
    print_r($array); 
     echo "<pre/>";
     
     foreach ($array as $key => $values){
         if (trim($values) == null) unset($array[$key]);
     }
      echo "<pre>";
     print_r($array);
      echo "<pre/>"; 
      
      $str = implode(" ", $array);
      echo $str . " Length: ". strlen($str);

