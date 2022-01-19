<?php
    
    // Function kiểm tra dữ liệu truyền vào khác rỗng lúc 
    function checkEmpty($value){  
        $flag = false;
        if (!isset($value) || trim($value) == ""){
            $flag = true;
        }
        return $flag;
    }
    
    // Kiểm tra chiều dài dữ liệu truyền vào
    function checkLengt($value, $min, $max){
        $flag = false;
        $length = strlen($value);
        if ($length < $min || $length > $max){
            $flag = true;
        }
        return $flag;
    }
    
    // Function tạo ID tự động (Random tên files)
    function randomString($length = 5){
        
        $arrayCharacter = array_merge(range('A', 'Z'), range('a', 'z'), range('0', '9'));
        $arrayCharacter = implode('', $arrayCharacter);
        $arrayCharacter = str_shuffle($arrayCharacter);
        
        $result = substr($arrayCharacter, 0, $length);
        
        return $result;
        
    }
    
    //Hàm kiểm tra size của file
    function convertSize($size, $totalFigit = 2, $ditance = ' '){
        $units = array('B', 'KB', 'MB', 'GB', 'TB');
        $length = count($units);
        for ($i = 0; $i < $length; $i++){
            if ($size > 1024){
                $size = $size / 1024;
            }else{
                $unit = $units[$i];
                break;
            }
        }
        $result = round($size, $totalFigit) . $ditance. $unit;
        return $result;
    }
    