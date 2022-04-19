<?php
	require('../../htdocsaccess/link_database.php')
?>
<?php
	session_start();
	$userid = $_GET['userid'];
	$floor = $_GET['floor'];
	$room = $_GET['room'];
	
	$usta = "UPDATE $floor SET status=1 WHERE room='$room'";
	$sqlu = mysqli_query($link,$usta);

	$addrent = "INSERT INTO rent_detail(user_id,floor,room) VALUES('$userid','$floor','$room')"; 
	$sqla = mysqli_query($link,$addrent);

	echo "<script>alert('Rent completed!');window.location.href='index.php';</script>";
?>