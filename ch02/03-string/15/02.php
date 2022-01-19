<meta charset="UTF-8">
<?php
   echo $str = "Kho chứa vải rộng cả nghìn mét vuông cạnh chợ Ninh Hiệp, huyện Gia Lâm, bốc cháy dữ dội từ 17h đến 21h ngày 30/12 chưa được dập tắt.";
     
    function truncateString($str, $maxChart = 50, $holder = "..."){
        $result = $str;
        if (strlen($str) > $maxChart){
            $result = substr($str, 0, $maxChart) . $holder;
        }
        return $result;
    }
    
    $str = truncateString($str, 60, "...");
    
    echo "<br/>".$str

?>
