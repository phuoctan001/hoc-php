<?php
    $subject = 'PHP /PHP/ is easy';
    $pattern = '#/PHP/#';
    if(preg_match($pattern, $subject, $match) == true){
        echo 'Tìm thấy';
    }else{
        echo 'Không tìm thấy';
    }
    
     echo "<pre>";
     print_r($match);
     echo "<pre/>";