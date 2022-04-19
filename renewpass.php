<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<?php $email = $_GET['email'];	?>
	<h1> Widget </h1>
    Reset password<br><br>
	<form name="renewpass-form" method="post" action='renewpassaction.php?email=<?php echo $email; ?>'>
		Please enter new password<br><br>
		<input type="password" name="renewpass_password" placeholder="Password"><br><br>
		<input type="password" name="renewpass_conpass" placeholder="Confirm Password">
		<br><br><input type="submit" value="Reset password">
	</form>
	<br><br>Back to <a href="login.html">Login</a>
</body>
</html>