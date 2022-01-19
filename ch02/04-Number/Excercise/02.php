<?php
    require_once 'fractions.php';
    
    $fractions1 = "52/6";
    $fractions2 = "34/7";
    
    echo "Input: <br/>";
    echo "Phân số 01: ". $fractions1."<br/>";
    echo "Phân số 02: ". $fractions2."<br/>";
    
    $fractions1 = optimizeFraction($fractions1);
    $fractions2 = optimizeFraction($fractions2);
    
    echo "<hr/> Tối giản: <br/>";
    echo "Phân số 01: ". implode("/", $fractions1) ."<br/>";
    echo "Phân số 02: ". implode("/", $fractions2)."<br/>";
    
    $result[0] = $fractions1[0] * $fractions2[0];
    $result[1] = $fractions1[1] * $fractions2[1];
    
    echo "Tích: ". implode("/", $result)."<br/>";
    
    $result = optimizeFraction(implode("/", $result));
    echo "Tích tối giản: ". implode("/", $result)."<br/>";
    
    echo "<hr/> Tổng 2 phần số: <br/>";
    if ($fractions1[1] == $fractions2[1]){
        $result[0] = $fractions1[0] + $fractions2[0];
        $result[1] = $fractions1[1];
        echo "Tổng: ". implode("/", $result)."<br/>";
        $result = optimizeFraction(implode("/", $result));
        echo "Tổng tối giản: ". implode("/", $result)."<br/>";
    }else{
        $ts1 = $fractions1[0] * $fractions2[1];
        $ts2 = $fractions2[0] * $fractions1[1];
        $result[0] = $ts1 + $ts2;
        $result[1] = $fractions1[1] * $fractions2[1];
        echo "Tổng: ". implode("/", $result)."<br/>";
        $result = optimizeFraction(implode("/", $result));
        echo "Tổng tối giản: ". implode("/", $result)."<br/>";
    }
    
    
    echo "<hr/>Hiệu 2 phần số: <br/>";
    if ($fractions1[1] == $fractions2[1]){
        $result[0] = $fractions1[0] - $fractions2[0];
        $result[1] = $fractions1[1];
        echo "Hiệu: ". implode("/", $result)."<br/>";
        $result = optimizeFraction(implode("/", $result));
        echo "Hiệu tối giản: ". implode("/", $result)."<br/>";
    }else{
        $ts1 = $fractions1[0] * $fractions2[1];
        $ts2 = $fractions2[0] * $fractions1[1];
        $result[0] = $ts1 - $ts2;
        $result[1] = $fractions1[1] * $fractions2[1];
        echo "Hiệu: ". implode("/", $result)."<br/>";
        $result = optimizeFraction(implode("/", $result));
        echo "Hiệu tối giản: ". implode("/", $result)."<br/>";
    }
    
    echo "<hr/>Thương 2 phân số: <br/>";
    $result[0] = $fractions1[0] * $fractions2[1];
    $result[1] = $fractions1[1] * $fractions2[0];
    
    echo "Thương: ". implode("/", $result)."<br/>";
    
    $result = optimizeFraction(implode("/", $result));
    echo "Thương tối giản: ". implode("/", $result)."<br/>";
    
    
    
    
    
     
     
     
     
     