<?php
	require('../../htdocsaccess/link_database.php')
?>
<html>
<body>
<?php
	$email = $_POST['fgp_email'];
	$ctzid = $_POST['fgp_ctz-id'];
	$hashctz = md5($ctzid);

	$result = mysqli_query($link,"SELECT * FROM user WHERE email='$email' AND citizen_id='$hashctz'");
	if($data = mysqli_fetch_array($result)){

	}
	if(mysqli_num_rows($result)){
		header("Location:renewpass.php?email={$data['email']}");
	}
	else{
		echo "<script>alert('This Email or Citizen ID does not match or does not exists!');window.location.href='forgotpassword.html';</script>";
	}
?>
</body>
</html>