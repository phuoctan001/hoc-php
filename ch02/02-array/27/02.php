<?php

    $array = array("name" => "PHP", "time" => 120, "zend", "Joomla");

    function myFunction($value, $key){
        echo $key." : ".$value."<br/>";
    } 
    
    array_walk($array, "myFunction");