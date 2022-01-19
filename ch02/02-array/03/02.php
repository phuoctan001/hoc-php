<?php
     //cách 3
     $course = array("PHP","Zend Framework","Joomla");
        
     if (!empty($course)){
     for ($i = 0; $i < count($course); $i++){
         echo $course[$i] . "<br/>";
     }
     }else{
         echo "Mãng rỗng";
     }
    
