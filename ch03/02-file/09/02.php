<?php

    $path = 'abc/def';
    
    if (file_exists($path) == true){
        rmdir($path);
    }else{
        echo 'Thư mục không tồn tại';
    }
   