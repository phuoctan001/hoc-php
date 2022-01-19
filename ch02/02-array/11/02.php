<?php
    $course = array("php" => "PHP","JL" => "Joomla","Zend Framework");
    
    echo "<pre>";
    print_r($course);
    echo "<pre/>";
    
    $newArr= array_flip($course);

    echo "<pre>";
    print_r($newArr);
    echo "<pre/>";
    