<?php 

    $dictionaryNumbers = array(
                            0 => "không",
                            1 => "một",
                            2 => "hai",
                            3 => "ba",
                            4 => "bốn",
                            5 => "năm",
                            6 => "sáu",
                            7 => "bảy",
                            8 => "tám",
                            9 => "chín"
                        );
    
    $dictionaryUnits = array(
        0 => " tỷ",
        1 => " triệu",
        2 => " nghìn",
        3 => " đồng"
    );
        function readNumber3Digit($number, $dictionaryNumber, $readFull = true){
        
        
                $number = strval($number);
                $number = str_pad($number, 3, 0, STR_PAD_LEFT);
        
                $digit_0 = substr($number, 2, 1);
                $digit_00 = substr($number, 1, 1);
                $digit_000 = substr($number, 0, 1);
                
                // Đọc hàng trăm
                $str_000 = $dictionaryNumber[$digit_000] . " trăm";
                
                // Đọc hàng chục
                // hàng chục = 0 đọc là linh, nếu là 1 đọc là mười
                $str_00 = " ".$dictionaryNumber[$digit_00] . " mươi";
                if ($digit_00 == 0) $str_00 = " linh ";
                if ($digit_00 == 1) $str_00 = " mười ";
                
                $str_0 = $dictionaryNumber[$digit_0];
                if ($digit_00 > 1 && $digit_0 == 1) $str_0 = " mốt";
                if ($digit_00 > 0 && $digit_0 == 5) $str_0 = " lăm";
                if ($digit_00 == 0 && $digit_0 == 0){
                    $str_0 = "";
                    $str_00 = "";
                }
                if ($digit_0 == 0){
                    $str_0 = "";
                }
                
                if ($readFull == false){
                    if ($digit_000 == 0) $str_000 = "";
                    if ($digit_00 == 0 & $digit_000 == 0) $str_00 = "";
                }
                $result = $str_000 . $str_00 . $str_0;
        
                return $result;
    }
        
        function formatStr($str, $type = null){
            //Chuẩn toàn bộ chuỗi về dạng chữ thường
            $str = strtolower($str);
            //Loại bỏ khoảng trắng 2 đầu của chuỗi
            $str = trim($str);
            //loại bỏ khoảng trắng giữ các từ
            $array = explode(" ", $str);
            
            foreach ($array as $key => $values){
                if (trim($values) == null){
                    unset($array[$key]);
                    continue;
                };
                
                //Xử lý cho danh từ
                if ($type == "danh-tu"){
                    $array[$key] = ucfirst($values);
                }
            }
            $result = implode(" ", $array);
            
            //Gía trị đầu tiên lun là chử hoa
            $result = ucfirst($result);
            return $result;
        }
    
        function readNumber12Diagits($number, $dictionaryUnits, $dictionaryNumbers){
            $number = strval($number);
            
            $number = str_pad($number, 12, 0, STR_PAD_LEFT);
            
            $arrayNumbers = str_split($number, 3);
            
            foreach ($arrayNumbers as $key => $value){
                
                if ($value != "000"){
                    $index = $key;
                    break;
                }
                
                // $result[$key] = readNumber3Digit($value, $dictionaryNumbers, true) . $dictionaryUnits[$key];
            }
            
            foreach ($arrayNumbers as $key => $value){
                
                if ($key >= $index){
                    $readFull = true;
                    if ($key == $index) $readFull = false;
                    $result[$key] = readNumber3Digit($value, $dictionaryNumbers, $readFull) .$dictionaryUnits[$key];
                    
                    
                    
                }
                
            }
            $result = implode(" ", $result); 
            $result = formatStr($result);
            $result = str_replace("không trăm đồng", "đồng", $result);
            $result = str_replace("không đồng", "đồng", $result);
            $result = str_replace("không nghìn đồng", "đồng", $result);
            $result = str_replace("không trăm nghìn đồng", "đồng", $result);
            $result = str_replace("không trăm triệu đồng", "đồng", $result);
            $result = str_replace("không tỷ triệu đồng", "đồng", $result);
            return $result;
        }
        
        $number = 990000000000;
        
        $result = readNumber12Diagits($number, $dictionaryUnits, $dictionaryNumbers);
        
        echo $result;
    
   

    

   