<?php
	require('../../htdocsaccess/link_database.php')
?>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<h1> Widget </h1>
    Book a room<br><br>
	<?php
		session_start();
		$userid = $_GET['userid'];
		$floor = $_GET['floor'];
		$room = $_POST['room'];
		$sql = "SELECT * FROM $floor WHERE room='$room'";
		$dres = mysqli_query($link, $sql);
		while($result = mysqli_fetch_array($dres)){
			echo "This room has " . $result['bed'] . " bed.";
		}
	?>
	<form name="select-room" method="post" action=<?php echo "bookaction.php?userid=". $userid. "&floor=" .$floor."&room=" .$room; ?>>
		<br>Do you want to rent this room?
		<input type="submit" value="Rent this room">
	</form>
  	<button formaction="index.php">Back to main menu</button>
</body>
</html>