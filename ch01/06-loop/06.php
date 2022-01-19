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
    for ($i = 0; $i <= 10; $i++){
        if ($i ==3 || $i == 8) continue;
        echo $i . "<br />";
    }
?>
</body>
</html>