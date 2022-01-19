<?php
    
    $filename = 'files/abc.txt';
    
    $record = file($filename);
    
    $data = file_get_contents($filename);
    
    preg_match_all('#\S#imsU', $data, $matches);
    preg_match_all('#\S\s\S#imsU', $data, $spaces);
    
    $chaNoPace = count($matches[0]);

     echo '<ul>';
         echo '<li>Tống số dòng: <b>' . count($record) . '</b></li>';
         echo '<li>Tống số từ: <b>' . str_word_count($data) . '</b></li>';
         echo '<li>Tống số khoảng trắng: <b>' . count($spaces[0]) . '</b></li>';
         echo '<li>Tống số kí tự(no pace): <b>' . $chaNoPace . '</b></li>';
         echo '<li>Tống số kí tự(pace): <b>' . $chaNoPace + count($spaces[0]) . '</b></li>';
     
     echo '</ul>';