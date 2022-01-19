<?php
    $username = $_POST["login"];
    $password = $_POST["password"];
    
    $result = ($username == "admin" and $password == "123") ? "Thành công" : "Thất bại" ;
    echo $result;