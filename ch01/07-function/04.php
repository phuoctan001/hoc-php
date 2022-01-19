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
	function createBox($content, $width = 150, $height = 50){
	    $result = '<div style="width: '.$width.'px; height:'.$height.'px;">';
	    $result .= '<p>'.$content.' <span>('.$width.'x'.$height.')</span></p>';
	    $result .= '</div>';
	    return $result;
	}
	$boxa = createBox("Box A", 500,200);
	$boxb = createBox("Box B" );
	echo $boxa;
	echo $boxb;
	?>
	</div>
</body>
</html>