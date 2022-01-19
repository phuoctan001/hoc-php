<?php
//UCLN
    function UCLN($n1, $n2){
        for ($i = 1; $i <= $n1; $i++){
            if ($n1 % $i == 0) $uclnN1[] = $i;
        }
        for ($i = 1; $i <= $n2; $i++){
            if ($n2 % $i == 0) $uclnN2[] = $i;
        }
        
        $temp = array_intersect($uclnN1, $uclnN2);
        
        $result = max($temp);
        
        return $result;
    }
    //Rút dọn phân số
    function optimizeFraction($fractions){
        //B1: Lấy tử số và mẫu số của phân số
        
        $arrayFraction = explode("/", $fractions);
        
        //B2: Tối dẫn phân số bằng cách tìm ước chung lớn nhất của ts và ms
        $ucln = UCLN($arrayFraction[0], $arrayFraction[1]);
        
        //B3: Chia mẫu số và tử số cho UCLN
        $arrayFraction[0] /= $ucln;
        $arrayFraction[1] /= $ucln;
        return $arrayFraction;
        
        
    }