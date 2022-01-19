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
    $( "#date-start" ).datepicker({
    	dateFormat: "dd/mm/yy",
    	defaultDate: "+3d",
    	changeYear: true,
    	changeMonth: true,
    	yearRange: "2000:2025"
    });
    $( "#date-end" ).datepicker({
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
<h1>Exercise 06</h1>
    <?php 
         $dateStart = (isset($_POST["date-start"])) ? $_POST["date-start"] : "";
         $dateEnd = (isset($_POST["date-end"])) ? $_POST["date-end"] : "";
    ?>
    <form action="#" method="post" name="mainForm" id="mainForm">
    	<div class="row">
    		<span>Start: </span>
    			<input readonly="readonly" type="text" id="date-start" name="date-start" value="<?php echo $dateStart;?>">
    	</div>
    	<div class="row">
    		<span>End: </span>
    			<input readonly="readonly" type="text" id="date-end" name="date-end" value="<?php echo $dateEnd;?>">
    	</div>
    	<div class="row">
    	<input type="submit" value="Submit">
    	</div>
    </form>
    <div class="result">
    	<?php 
                function compareTwoday($dateStart, $dateEnd){
                    //Start
                    $arrdateStart = date_parse_from_format('d/m/Y', $dateStart);
                    $tsStart = mktime(0,0,0,$arrdateStart['month'],$arrdateStart['day'],$arrdateStart['year']);
                    
                    //End
                    $arrdateEnd = date_parse_from_format('d/m/Y', $dateEnd);
                    $tsEnd = mktime(0,0,0,$arrdateEnd['month'],$arrdateEnd['day'],$arrdateEnd['year']);
                    
                    $result = 0;
                    if ($tsEnd > $tsStart){
                        $result = 1;
                    }else if($tsEnd < $tsStart){
                        $result = -1;
                    }
                    return $result;
                }
    	    if (compareTwoday($dateStart, $dateEnd) == 1){
    	        echo 'End > Start';
    	    }else if(compareTwoday($dateStart, $dateEnd) == -1){
    	        echo 'Start > End';
    	    }else{
    	        echo 'Start = End';
    	    }
    	?>
    </div>
 </div>
</body>
</html>