<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<?php
	echo "<h1> Widget </h1>";
    echo "Online Booking<br><br>";
	session_start();
	if(isset($_SESSION['name']))
	{
		echo "Welcome ".$_SESSION['name']." ".$_SESSION['lastname']."!"."<br><br>";
		echo "Customer ID ".$_SESSION['user_id']."<br><br>";
		$userid = $_SESSION['user_id'];
		echo "<form action='book.php?userid=$userid' method='post'><input type='submit' value='Book a room'></form>";
		echo "<form action='viewbook.php?userid=$userid' method='post'><input type='submit' value='View your room'><br><br></form>";
		echo "<form><button formaction='logoutaction.php'>Log out</button></form>";
		echo "<br><br><br>";
		echo "If you need assistance, please call us at 087-xxx-xxxx";
	}
	else{
		echo "<script>alert('Welcome to Widget!');window.location.href='home.html';</script>";
	}
?>
</body>
</html>