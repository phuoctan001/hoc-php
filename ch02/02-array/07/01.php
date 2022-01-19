<?php
    $course = array("PHP", "Joomla","Zend Framework","JQuery");
    
    echo "<pre>";
    print_r($course);
    echo "<pre/>";
    
    $firstItem = array_shift($course);
    echo $firstItem;
    
    echo "<pre>";
    print_r($course);
    echo "<pre/>";