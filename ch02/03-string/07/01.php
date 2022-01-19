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
    $world = "php";

?>
	<div class="content1">
		<h1>Xác định vị trí trong chuỗi</h1>
		<ul class="function">
			<li><span>source</span><?php echo $str;?></li>
			<li><span>world</span><?php echo $world;?></li>
			<li><span>stripos</span><?php echo stripos($str, $world);?></li>
			<li><span>strripos</span><?php echo strripos($str, $world);?></li>
		</ul>
	</div>
</body>
</html>