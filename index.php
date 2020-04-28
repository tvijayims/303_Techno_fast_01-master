
<?php

define("db_name",'localhost');
define("user","root");
define("password", "");
define("db","smart_trolly_system");
$conn=mysqli_connect(db_name,user,password,db);
	if (isset($_POST['submit'])) 
	{
		$barcode=$_POST['text'];
		$query=mysqli_query($conn,"select * from user where user_barcode='$_POST[barcode]'");
		$row=mysqli_fetch_array($query);
 		$name=$row[0];
 		$mail=$row[1];
 		$mob=$row[2];
 		$address=$row[3];
 		$barcode=$row[4];
 			session_start();
 		 $_SESSION['name']=$name;
 		 $_SESSION['mail']=$mail;
 		 $_SESSION['mob']=$mob;
 		 $_SESSION['address']=$address;
 		 $_SESSION['barcode']=$barcode;
		if (mysqli_num_rows($query)==1)
		 {
			header('location:user_page.php');
		}
		else 
		{
						echo "<script>alert('Sorry,You are unauthorized user!')</script>";

		}
	
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Smart trolly system</title>
		<meta name="author"   content="Dheeraj kumar sah"/>
	<meta name="audience" content="all"/>
	<meta name="designer" content="Dheeraj kumar sah"/>
	<link rel="stylesheet" type="text/css" href="css/layout.css">
</head>
<body>
	<div id="container">
		<div id="logo">
			<img src="images/ss.JPEG " style="width:100%;height:100%;border-radius:150px;">
		</div>
		<br>
		<div id="text_box">
			<form action="#"method="post">
			<input type="text" name="barcode" id="text_input" placeholder="Enter Barcode">
			<input type="submit" name="submit" class="ab" value="Login">
			</form>
		</div>
	</div>
	<?php 

	?>
</body>
</html>