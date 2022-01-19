<?php
    
    $filename = 'files/abc.txt';
    
    $record = file($filename);
    
    $data = file_get_contents($filename);
    
    $space = substr_count($data, ' ');
     
     echo '<ul>';
         echo '<li>Tống số dòng: <b>' . count($record) . '</b></li>';
         echo '<li>Tống số từ: <b>' . str_word_count($data) . '</b></li>';
         echo '<li>Tống số khoảng trắng: <b>' . $space . '</b></li>';
         echo '<li>Tống số kí tự: <b>' . strlen($data) . '</b></li>';
     
     echo '</ul>';