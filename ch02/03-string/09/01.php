<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Xác định vị trí trong chuỗi</title>
<link type="text/css" rel="stylesheet" href="../style.css">
</head>
<body>
<?php 
    $str = "hello php is easy, php is easy";

?>
	<div class="content1">
		<h1>Xác định vị trí trong chuỗi</h1>
		<ul class="function">
			<li><span>source</span><?php echo $str;?></li>
			<li><span>substr(2)</span><?php echo substr($str, 2);?></li>
			<li><span>substr(0,5)</span><?php echo substr($str,0,5);?></li>
			<li><span>substr(2,5)</span><?php echo substr($str,2,5);?></li>
			<li><span>substr(-1)</span><?php echo substr($str,-1);?></li>
			<li><span>substr(-3,2)</span><?php echo substr($str,-3,2);?></li>
		</ul>
	</div>
</body>
</html>