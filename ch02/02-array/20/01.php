<?php

    $course = array("PHp","Joomla","Zend", "JQuery");
    
     echo "<pre>";
    print_r($course);
     echo "<pre/>";
     
     echo "Current: ". current($course)."<br/>";
     echo "Next: ". next($course)."<br/>";
     echo "Current: ". current($course)."<br/>";
     echo "Next: ". next($course)."<br/>";
     echo "Previous: ". prev($course)."<br/>";
     echo "Reset: ". reset($course)."<br/>";
     echo "End: ". end($course)."<br/>";
    