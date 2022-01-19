<?php
    //$filename = 'files';
    $filename = 'files/abc.txt';
    if (file_exists($filename)){
        echo 'Tồn tại';
    }else{
        echo 'Không tồn tại';
    }