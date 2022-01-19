<?php
    
    //Hiên thị tất cả các thư mục có tên kết thúc là es
    
    $dir = opendir('.');
    $result = array();
    while (($file = readdir($dir)) != false){
          if (is_dir($file)){
              if (preg_match('#es$#imsU', $file)){
                  $result[] = $file;
              }
          }
    }
     echo "<pre>";
    print_r($result);
     echo "<pre/>";
    closedir($dir);