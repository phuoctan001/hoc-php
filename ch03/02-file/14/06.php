<?php
    
    $path = '.';
    
    //Liệt kê các file trong đường dẫn đang thực thi
    $data = scandir($path);
    
     echo "<pre>";
    print_r($data);
     echo "<pre/>";