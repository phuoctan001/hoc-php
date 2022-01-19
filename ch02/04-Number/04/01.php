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
			<li><span>Round()</span><?php echo round($number);?></li>
			<li><span>Round(n,2)</span><?php echo round($number,2);?></li>
			<li><span>Round</span><?php echo round($number,0 , PHP_ROUND_HALF_UP);?></li>
			<li><span>Round</span><?php echo round($number,0 , PHP_ROUND_HALF_DOWN);?></li>
			<li><span>Round</span><?php echo round($number,0 , PHP_ROUND_HALF_ODD);?></li>
			<li><span>Round</span><?php echo round($number,0 , PHP_ROUND_HALF_EVEN);?></li>
		</ul>
	</div>
</body>
</html>