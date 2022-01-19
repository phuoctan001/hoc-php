<?php
    
    $dir = opendir('images');
    $dir = opendir('.');
    $dir = opendir('..');
    
    while (($file = readdir($dir)) != false){
        echo 'Filename: '.$file.'<br/>';
    }
    
    closedir($dir);