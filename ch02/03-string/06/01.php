<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Chuyển đổi chữ hoa, chữ thường</title>
<link type="text/css" rel="stylesheet" href="../style.css">
</head>
<body>
<?php 
    $str = "php is easy";
    
    $str1 = "PHP is easy";
?>
	<div class="content1">
		<h1>Chuyển đổi chữ hoa, chữ thường</h1>
		<ul class="function">
			<li><span>source</span><?php echo $str;?></li>
			<li><span>strtoupper</span><?php echo strtoupper($str);?></li>
			<li><span>strtolower</span><?php echo strtolower($str);?></li>
			<li><span>ucfirst</span><?php echo ucfirst($str)?></li> 
			<li><span>lcfirst</span><?php echo lcfirst($str1)?></li> 
			<li><span>ucwords</span><?php echo ucwords($str)?></li>
		</ul>
	</div>
</body>
</html>