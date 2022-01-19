<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>jQuery UI Datepicker - Default functionality</title>
  <link rel="stylesheet" href="../css/jquery-ui.css">
  <link rel="stylesheet" href="../css/style.css">
  <script src="../js/jquery-3.6.0.js"></script>
  <script src="../js/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker({
    	dateFormat: "dd/mm/yy",
    	defaultDate: "+3d",
    	changeYear: true,
    	changeMonth: true,
    	yearRange: "2000:2025"
    });
  } );
  </script>
</head>
<body>
<div class="content">
<h1>Exercise 01</h1>
    <?php 
         $date = (isset($_POST["datepicker"])) ? $_POST["datepicker"] : "";
    ?>
    <form action="#" method="post" name="mainForm" id="mainForm">
    	<div class="row">
    		<span>Date: </span>
    			<input readonly="readonly" type="text" id="datepicker" name="datepicker" value="<?php echo $date;?>">
    	</div>
    	<div class="row">
    	<input type="submit" value="Submit">
    	</div>
    </form>
    <div class="result">
    	<?php echo "Input: ".$date."<br/>";
            	$date = date_parse_from_format('d/m/Y', $date);
            	
            	$timeStampe = mktime(0,0,0,$date['month'],$date['day'],$date['year']);
    	       
                
    	     
            	echo "Output: ".date('d-m-Y', $timeStampe);
    	?>
    </div>
 </div>
</body>
</html>