<?php

    $filename = 'files/test.txt';
    $data = 'DEF';
    
     echo file_put_contents($filename, $data, FILE_APPEND);
    