<?php
    $url 	= "http://210.245.126.171/Music/NhacTre/TinhYeu_LyMaiTrang/wma32/06_BienTham_TinhYeu_LyMaiTrang.wma";
    
    /*	URL		: 06_BienTham_TinhYeu_LyMaiTrang.wma
     *  ID		: 06
     *  Name	: Bien Tham
     *  Album	: Tinh Yeu
     *  Singer	: LyMaiTrang
     *  Type	: wma
     */
    
    
    //Cách 1:
    function getInfo01($url){
        $info = explode("/", $url);
        $result = $info[count($info) - 1];
        return $result;
    }
    
    
    //Cách 2:
    function getInfo02($url){
    $arrayUrl = parse_url($url);
    $info = explode("/", $arrayUrl['path']);
    $result = $info[count($info) - 1];
    return $result;
    }
    
    //Cách 3:
    function getInfo03($url){
        $index = strripos($url, "/");
        $result = substr($url, $index + 1);
        echo $result;
       
    }
    
    getInfo03($url);
   