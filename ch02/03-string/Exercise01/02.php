<?php
    $url 	= "http://210.245.126.171/Music/NhacTre/TinhYeu_LyMaiTrang/wma32/06_BienTham_TinhYeu_LyMaiTrang.wma";
       
    function format($str){
        //Thêm khoảng trắng vào từ LyMaiTrang => Ly Mai Trang
        $result = $str[0];
        for ($i = 1; $i < strlen($str); $i++){
            if (ctype_upper($str[$i]) == true){
                $result .= " " . $str[$i];
            }else {
                $result .= $str[$i];
            }
        }
        return $result;
        
    }
    //Cách 3:
    function getInfo03($url){
        $index = strripos($url, "/");
        $result = substr($url, $index + 1);
        return $result;
        
    }
    
    $info = getInfo03($url);
    
    $result = array();
    $arrayInfo = explode("_", $info);
    
    //lấy được ID
    $result["id"] = $arrayInfo[0];
    
    //Lấy Tyle
    $arrayType = explode(".", $arrayInfo[3]);
    $result["type"] = $arrayType[1];
    
    //Thực hiện thêm khoảng trắng phân biệt giữ các từ
    $arrayInfo[3] = $arrayType[0];

    
    $result["Singer"] = format($arrayInfo[3]);
    $result["Name"] = format($arrayInfo[1]);
    $result["Album"] = format($arrayInfo[2]);
    
     echo "<pre>";
     print_r($result);
     echo "<pre/>";
