<?php
    $course = array("PHP", "Joomla","Zend Framework","JQuery");
    
    echo "<pre>";
    print_r($course);
    echo "<pre/>";
    
    $lastItem = array_pop($course);
    echo $lastItem;
    
    echo "<pre>";
    print_r($course);
    echo "<pre/>";