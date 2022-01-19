<?php
    
    //Hiên thị tất cả các thư mục có tên kết thúc là es
    
    $data = glob('*es', GLOB_ONLYDIR);
    
     echo "<pre>";
    print_r($data);
     echo "<pre/>";