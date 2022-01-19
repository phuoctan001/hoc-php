<?php 
    $str = "name=Peter&age=23";
    parse_str($str, $output_array);
   
     echo "<pre>";
     print_r($output_array);
     echo "<pre/>";
?>	
