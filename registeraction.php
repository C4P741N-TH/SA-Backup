<?php
	require('../../htdocsaccess/link_database.php')
?>
<html>
<body>
<form>
<?php
	$name = $_POST['reg_name'];
	$lastname = $_POST['reg_lastname'];
	$ctz_id = $_POST['reg_ctz-id'];
	$phone = $_POST['reg_phone'];
	$email = $_POST['reg_email'];
	$username = $_POST['reg_username'];
	$password = $_POST['reg_pass1'];
	$confirmpass = $_POST['reg_pass2'];
	$hashctz = md5($ctz_id);
	$hashpass = md5($password);

	//Check Citizen ID -> Username -> Email
	$ctzext = mysqli_query($link, "SELECT * FROM user WHERE citizen_id = '$hashctz'");
	$userext = mysqli_query($link, "SELECT * FROM user WHERE username = '$username'");
	$emailext = mysqli_query($link, "SELECT * FROM user WHERE email = '$email'");
	if(mysqli_num_rows($ctzext)){
    	echo "<script>alert('This Citizen ID already exists');window.location.href='login.html';</script>";
	}
	else{
		if(mysqli_num_rows($userext)){
			echo "<script>alert('This Username already exists');window.location.href='register.html';</script>";
		}
		else{
			if(mysqli_num_rows($emailext)){
				echo "<script>alert('This Email already exists');window.location.href='register.html';</script>";
			}
			else{
				if($password === $confirmpass){
					$sql = "INSERT INTO user VALUES (null, '$name', '$lastname', '$hashctz', '$phone', '$email', '$username', '$hashpass')";
					$result = mysqli_query($link, $sql);
				}
				else{
					echo "<script>alert('Password do not match');window.location.href='register.html';</script>";
				}
				if(!$result){
					echo "<script>alert('Failed');window.location.href='login.html';</script>";
				}
				else{
					echo "<script>alert('Registeration Completed');window.location.href='login.html';</script>";
				}
			}
		}
	}
?>
</form>
</body>
</html>