<?php
    //Đường dẫn thư mục hiện tại D:\xampp\htdocs\php\ch03\02-file\14
    echo getcwd();
    
    chdir('images');
    
    //Chuyển hướng đường dẫn
    echo "<br/>".getcwd();