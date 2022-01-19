<?php

    $path = 'abc/hg';
    
    if (file_exists($path) == false){
        mkdir($path, 0666);
    }else{
        echo 'Thư mục không tồn tại<br/>';
    }
   
    chmod($path, 0555);
    echo substr(sprintf('%o', fileperms($path)), -4);