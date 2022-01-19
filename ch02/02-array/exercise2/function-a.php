
<?php
    $data = file('question.txt') or die("Không thể đọc file");
    
    array_shift($data);
       
     $arrQuesion = array();
     foreach ($data as $key => $value){
           $tmp             = explode("|", $value);
           $id              = $tmp[0];
           $question        = $tmp[1];
           $arrQuesion[$id] = array( "question" => $question); 
           
     }
