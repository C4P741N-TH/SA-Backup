<html>
<body>
<form>
<?php
	session_start();
	if(isset($_SESSION['name']))
	{
		echo "Welcome ".$_SESSION['name']."!"."<br><br>";
		echo "<form><button formaction='logoutaction.php'>Log out</button></form>";
	}
	else{
		echo "<script>alert('Welcome to Widget!')window.location.href='login.html';</script>";
	}
?>
</form>
</body>
</html>