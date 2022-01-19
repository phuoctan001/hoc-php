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
	function createBox(){
	    echo '<div style="width: 200px; height: 50px;">';
	    echo '<p>Box A <span>(200x50)</span></p>';
	    echo '</div>';
	}
	createBox();
	?>
	</div>
</body>
</html>