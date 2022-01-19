<?php

    $courses = array();
     $courses[] = "PHP";
     $courses[] = "Zend Framework";
     $courses[] = "Joomla";
    
    $length = count($courses);
    echo $length;
    echo "<br/>";
    
    //Cách 1 kiểm tra mãng có rỗng không
    if ($length > 0){
        echo "Mãng không rỗng";
    }else{
        echo "Mãng rỗng";
    }
    echo "<br/>";
    //Cách 2
    if (!empty($courses)){
        echo "Mãng không rỗng";
    }else{
        echo "Mãng rỗng";
    }
    