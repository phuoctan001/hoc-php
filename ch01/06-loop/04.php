<!DOCTYPE html>
<html>
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<title>Image gallery</title>
<link type="text/css" href="style.css" rel="stylesheet"/>
</head>
<body>
<div class="content3">
	<h1>Image gallery</h1>
	<div class="image">
	<?php 
	   $i = 1;
	   do{
	       echo '<img src="image/nature-0'.$i.'.jpg"/>';
	       $flagshow = 0;
	       if (isset($_GET["show"])){
	           $flagshow = $_GET["show"];
	           $i++;
	       }
	       
	   }while($i <= 4 && $flagshow == 1);
	?>
		<a href="04.php?show=1">Show All</a>
		<a href="04.php?show=0">Close All</a>
	</div>
</div>
</body>
</html>