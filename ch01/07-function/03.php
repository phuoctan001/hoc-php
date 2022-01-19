<!DOCTYPE html>
<html>
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<title>Insert title here</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>	
	<div class="content">
	<?php 
	function checkNumber($values){
	    echo $values;
	    if ($values % 2 == 0){
	        return true;
	    }else{
	        return false;
	    }
	}
	   $result  = checkNumber(22);
	   if ($result == true){
	       echo "Số chẵn";
	   }else{
	       echo "Số lẻ";
	   }
	?>
	</div>
</body>
</html>