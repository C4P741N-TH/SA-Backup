<?php
	session_start();
	unset($_SESSION['user_id']);
	unset($_SESSION['name']);
	echo "<script>alert('Logout done!');window.location.href='login.html';</script>";
?>