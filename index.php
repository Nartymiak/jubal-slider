<?php
include 'php/globals.php';
?>

<!DOCTYPE html>
	<html>
		<head>
			<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
			<meta name=viewport content="width=device-width, initial-scale=1"> 
			<title>New Britain Museum of American Art</title>
			<link rel="stylesheet" href="<?php echo $GLOBALS['root'];?>/bootstrap/bootstrap-3.3.7/css/bootstrap.min.css">
			<link rel="stylesheet" href="<?php echo $GLOBALS['root'];?>/css/nbmaa4.css">
			<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
			<script type="text/javascript" src="<?php echo $GLOBALS['root'];?>/js/jquery-3.1.1.min.js"></script>
			<script type="text/javascript" src="<?php echo $GLOBALS['root'];?>/bootstrap/bootstrap-3.3.7/js/bootstrap.min.js"></script>
			<script type="text/javascript" src="<?php echo $GLOBALS['root'];?>/js/pageManager.js"></script>
			<script type="text/javascript" src="<?php echo $GLOBALS['root'];?>/js/jubal-slider/jubal.js"></script>
			<style>

			</style>

		</head>
		<body> 
			<div class='jubalSlider'>
				<img src="images/cisneros-exhibition-1.jpg">
				<img src="images/pissarro.jpg">
				<img src="images/ciccareli.jpg">
				<img src="images/goering.jpg">
				<img src="images/bush.jpg">
				<img src="images/bellermann.jpg">
				<img src="images/palliere.jpg">
			</div>
			<script>
				$(document).ready(function(){
  					$('.jubalSlider').jubalSlider();
				});
			</script>
		</body>
	</html>