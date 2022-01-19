<?php

    $filename = 'files/test.txt';
    
    if (file_exists($filename)){
        
        $data = file($filename);
        
        unset($data[2]);
        
        echo file_put_contents($filename, $data);
        
    }else{
        echo 'Tập tin không tồn tại';
    }
    