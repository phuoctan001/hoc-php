<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Làm tròn số</title>
<link type="text/css" rel="stylesheet" href="../style.css">
</head>
<body>
<?php 
    $number = 8.5;
?>
	<div class="content1">
		<h1>Làm tròn số</h1>
		<ul class="function">
			<li><span>Number</span><?php echo $number;?></li>
			<li><span>ceil()</span><?php echo ceil($number);?></li>
			<li><span>floor()</span><?php echo floor($number);?></li>
		</ul>
	</div>
</body>
</html>