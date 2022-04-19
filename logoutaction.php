<?php
	session_start();
	unset($_SESSION['user_id']);
	unset($_SESSION['name']);
	unset($_SESSION['lastname']);
	echo "<script>alert('Logout done!');window.location.href='login.html';</script>";
?>