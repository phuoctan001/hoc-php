<?php

    $str = 'PHP is easy \n It \is \easy';
    
    echo $str . "<br/>";
    
    $str1 = stripslashes($str);
    
    echo "stripslashes: ".nl2br($str1) . "<br/>";
    
    $str2 = stripcslashes($str);
    
    echo "stripcslashes: ". nl2br($str2);

    