<?php

    
    $student = array(
        "SV001" => array("name" => "John", "sex" => 1, "Score" => array(4,5,5)),
        "SV002" => array("name" => "Peter", "sex" => 1, "Score" => array(5,6,7)),
        "SV003" => array("name" => "Marry", "sex" => 0, "Score" => array(8,9,10))
    );
    
    $score = array(6,7,5,8);
    $total = 0;
    for ($i = 0; $i < count($score); $i++){
        $total += $score[$i]; 
    }
    
    echo $total."<br/>";
    
    //Tính tổng bằng hàm có sẵn:
    echo $totals = array_sum($score)."<br/>";
    
    //name - sex - point
    
    if (!empty($student)){
        foreach ($student as $key => $value){
            $name = $value["name"];
            $sex = $value["sex"]==1?"Boy":"Girl";
            $score = $value["Score"];
//             for ($i = 0; $i < count($score); $i++){
//                 $total += $score[$i];
//             }
            $total = array_sum($score);
            echo "Name: ".$name." - Sex: ".$sex." - Point: ".$total."<br/>";
        }
    }