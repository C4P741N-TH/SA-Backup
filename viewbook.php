<?php
	require('../../htdocsaccess/link_database.php')
?>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<?php
	session_start();
	echo "<h1> Widget </h1>";
    echo "Rent Detail<br><br>";
	$userid = $_GET['userid'];

	$sql = "SELECT * FROM rent_detail WHERE user_id='$userid'";
	$query = mysqli_query($link,$sql);
	while($data = mysqli_fetch_array($query)){
		echo "<br>";
		echo "Rent ID: ".$data['rent_id'];
		echo "<br><br>";
		echo "Customer ID: ".$data['user_id'];
		echo "<br><br>";
		echo "Room floor: ".$data['floor'];
		echo "<br><br>";
		echo "Room number: ".$data['room'];
	}
?>
	<form>
  		<br><br><button formaction="index.php">Back to main menu</button>
	</form>

	<br><br>If you need assistance, please call us at 087-xxx-xxxx
</body>
</html>