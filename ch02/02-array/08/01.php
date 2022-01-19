<?php
    $course = array("PHP", "Joomla","Zend Framework","JQuery", "php", "Joomla");
    
    echo "<pre>";
    print_r($course);
    echo "<pre/>";
    
    $newArray = array_unique($course);
    
    echo "<pre>";
    print_r($newArray);
    echo "<pre/>";