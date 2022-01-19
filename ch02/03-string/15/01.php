<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Trích xuất nội dụng của chuỗi</title>
<link type="text/css" rel="stylesheet" href="../style.css">
</head>
<body>
<?php 
    $str = "PHP is easy";

?>
	<div class="content1">
		<h1>Trích xuất nội dụng của chuỗi</h1>
		<ul class="function">
			<li><span>source</span><?php echo $str;?></li>
			<li><span>substr(0,3)</span><?php echo substr($str, 0,3);?></li>
			<li><span>substr(3,3)</span><?php echo substr($str, 3,3);?></li>
			<li><span>substr(3,-3)</span><?php echo substr($str, 3, -3);?></li>
			<li><span>substr(-3,3)</span><?php echo substr($str, -3, 3);?></li>
			<li><span>substr(-3,-3)</span><?php echo substr($str, -3, -3);?></li>
		</ul>
	</div>
</body>
</html>