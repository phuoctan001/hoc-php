<?php

    
    $student = array(
        "SV001" => array("name" => "John", "sex" => 1, "Score" => array(4,5,5)),
        "SV002" => array("name" => "Peter", "sex" => 1, "Score" => array(5,6,7)),
        "SV003" => array("name" => "Marry", "sex" => 0, "Score" => array(8,9,10))
    );
    
     echo "<pre>";
     print_r($student);
     echo "<pre/>";

     
     echo "<pre>";
     print_r($student["SV002"]);
     echo "<pre/>";
     
     echo $student["SV002"]["name"]."<br/>";
     
     echo $student["SV003"]["Score"][1]."<br/>";
     
     //Thay đổi tên
     $student["SV003"]["name"] = "Anne";
     echo "<pre>";
     print_r($student);
     echo "<pre/>";
     
     //Thay đổi điểm
     $student["SV003"]["Score"][1] = 10;
     echo "<pre>";
     print_r($student);
     echo "<pre/>";