<?php
    $course = array("PHP", "Joomla","Zend Framework");
    
    echo "<pre>";
    print_r($course);
    echo "<pre/>";
    
    $length = array_unshift($course, "HTML","CSS");
    echo $length;
    
    echo "<pre>";
    print_r($course);
    echo "<pre/>";
