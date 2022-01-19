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
	$value = "ABC";
	function createBox($content, $width = 150, $height = 50){
	    $result = '<div style="width: '.$width.'px; height:'.$height.'px;">';
	    $result .= '<p>'.$content.' <span>('.$width.'x'.$height.')</span></p>';
	    $result .= '</div>';
	    /* 
	     * Cách gọi biến toàn cục trong hàm (Cách 1)
	     * global $value;
	    echo $value; */
	    /*cách 2  */
	    echo $GLOBALS["value"];
	    return $result;
	}
	$result = createBox("Box A");
	echo $result;
	?>
	</div>
</body>
</html>