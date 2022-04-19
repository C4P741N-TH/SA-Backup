<?php
	require('../../htdocsaccess/link_database.php')
?>
<html>
<body>
<form>
<?php
	$email = $_GET['email'];
	$password = $_POST['renewpass_password'];
	$conpass = $_POST['renewpass_conpass'];
	$hashpass = md5($password);

	if($password === $conpass){
		$sql = "UPDATE user SET password='$hashpass' WHERE email='$email'";
		$result = mysqli_query($link,$sql);
		if(!$result){
			echo "<script>alert('Failed!');window.location.href='renewpass.php';</script>";
		}
		else{
			echo "<script>alert('Password Updated!');window.location.href='login.html';</script>";
		}
	}
	else{
		echo "<script>alert('Password do not match');window.location.href='renewpass.php';</script>";
	}
?>
</form>
</body>
</html>