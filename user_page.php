<?php 
session_start()
?>
<!DOCTYPE html>
<html>
<head>
	<title>Welcome User</title>
	<link rel="stylesheet" type="text/css" href="css/layout.css">
		<meta name="audience" content="all"/>
	<meta name="designer" content="Dheeraj kumar sah"/>
</head>
<body>
	<div id="user_container">
		<div id="user_page">
			<div id="l"><img src="images/gg.png" style="width:100%;height:100%;"></div>
			<center><h3><span style="color:#C71585;">Hello<span>,<span style="color:#800000;"><?php echo "".$_SESSION['name'];?></span></h3></center>
			<h2><span style="color:#4B0082;">Name:</span><span style="color:#800000;"><?php echo "".$_SESSION['name'];?></span></h2></center>
			<h2><span style="color:#4B0082;">Email:</span><span style="color:#800000;"><?php echo "".$_SESSION['mail'];?></span></h2></center>
			<h2><span style="color:#4B0082;">Mob:</span><span style="color:#800000;"><?php echo "".$_SESSION['mob'];?></span></h2></center>
			<h2><span style="color:#4B0082;">Address:</span><span style="color:#800000;"><?php echo "".$_SESSION['address'];?></span></h2></center>
			<h2><span style="color:#4B0082;">Barcode:</span><span style="color:#800000;"><?php echo "".$_SESSION['barcode'];?></span></h2></center>
		<center><a href="shop_page.php"><button>Shop Now</button></a></center>
		</div>
	</div>
</body>
</html>