<?php 

    //Chuẩn hóa chuổi
        
    $str = "  NguYen    vaN     An  ";
    
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
    
   $result = formatStr($str, "danh-tu");
   echo $result . "<br/>". strlen($result );
?>