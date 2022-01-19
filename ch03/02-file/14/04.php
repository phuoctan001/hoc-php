<?php
    
    $dir = dir('images');
    $dir = dir('..');
    
    while (($file = $dir->read()) != false){
        echo 'Filename: '. $file . '<br/>';
    }