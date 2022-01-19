<!DOCTYPE html>
<html>
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<title>Vẽ tam giác</title>
<link type="text/css" href="style.css" rel="stylesheet"/>
</head>
<body>
<div class="content2">
	<h1>Vẽ tam giác</h1>
	<ul>
		<li><a href="02.php?type=1"><img alt="" src="image/01.png"/></a></li>
		<li><a href="02.php?type=2"><img alt="" src="image/02.png"/></a></li>
		<li><a href="02.php?type=3"><img alt="" src="image/03.png"/></a></li>
	</ul>
	<div class="result">
	<?php 
	   $result = "";
	   if (isset($_GET["type"])){
	        $type = $_GET["type"];
	        switch ($type) {
	            case 1:
	                $i = 1;
	                $n = 6;
                while ($i <= $n){
                    $result .= str_repeat("*", $i) . "<br />";
                    $i++;
                }
	            break;
	            case 2:
	                $i = 6;
	                $n = 1;
	                while ($i >= $n){
	                    $result .= str_repeat("*", $i) . "<br />";
	                    $i--;
	                }
	                break;
	            case 3:
	                $i = 1;
	                $n = 6;
	                while ($i <= $n){
	                    $space = str_repeat("&nbsp;&nbsp", $n - $i) ;
	                    $character = str_repeat("*", 2*$i - 1) ;
	                    $result .= $space . $character . "<br />";
	                    $i++;
	                }
	                break;
	        }
	   }
	   echo $result;
	?>
</div>
</div>
</body>
</html>