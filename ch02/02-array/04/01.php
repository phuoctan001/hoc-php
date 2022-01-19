<?php

    $courses = array();
     $courses["php"] = "PHP";
     $courses["zend"] = "Zend Framework";
     $courses["joomla"] = "Joomla";
     $courses[] = "Item 1";
     $courses[] = "Item 2";
       
      echo "<pre>";
      print_r($courses);
      echo "<pre/>";

       echo $courses[1];
     
