<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div style="clear:both">
    <center>
    <?php  
    if(isset($_GET['get_pdf'])){
        $pdf = $_GET['get_pdf'];
    }else{
        echo "<h1 align='center' color='red'>No Pdf Found!..</h1>";
    }
    ?>
  <embed src="<?php echo $pdf; ?>" width="800px" height="2100px" />
    </center>
</div>


</body>
</html>