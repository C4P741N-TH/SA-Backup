<?php
	require('../../htdocsaccess/link_database.php')
?>
<html>
<body>
<form>
<?php
	session_start();
	$username = $_POST['login_username'];
	$password = $_POST['login_password'];
	$hashpass = md5($password);

	$sql = "SELECT * FROM user WHERE username='$username' AND password='$hashpass'";
	$result = mysqli_query($link,$sql);
	$N=mysqli_num_rows($result);
	if($N == 1)
	{
		$data = mysqli_fetch_array($result);
		$_SESSION['user_id'] = $data['user_id'];
		$_SESSION['name'] = $data['name'];
		$_SESSION['lastname'] = $data['lastname'];
		echo "<script>alert('Login successful!');window.location.href='index.php';</script>";
	}else
	{
		echo "<script>alert('Username or Password incorrect');window.location.href='login.html';</script>";
	}
?>
</form>
</body>
</html>