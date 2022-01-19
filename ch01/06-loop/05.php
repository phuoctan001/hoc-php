<!DOCTYPE html>
<html>
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<title>Break - Continue</title>
<link type="text/css" href="style.css" rel="stylesheet"/>
</head>
<body>
<?php 
    $n = 0;
    for ($i = 0; $i <= 100; $i+=8){
      if ($n < 3){
        if ($i % 8 == 0 && $i > 0){
            echo $i . "<br/>";
            $n++;
        }
      }else{
          break;
      }
    }
?>
</body>
</html>