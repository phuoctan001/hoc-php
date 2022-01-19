<?php

    $path = '/files/abc.txt';
    
    //Hiển thị tên tập tính có hiển thị phần mở rộng(type file)
    echo basename($path).'<br/>';
    
    //Hiển thị tên tập tính không hiển thị phần mở rộng(type file)
    echo basename($path, '.txt').'<br/>';