<?php

    $path = '/files/abc.txt';
    
    $pathInfo = pathinfo($path);
    
     echo "<pre>";
    print_r($pathInfo);
     echo "<pre/>";
    
     
     /*KẾT QUẢ
      * Array
    (
        [dirname] => /files
        [basename] => abc.txt
        [extension] => txt
        [filename] => abc
    )  */
    
   