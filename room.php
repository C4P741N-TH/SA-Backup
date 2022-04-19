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
		$floor = $_POST['floor'];
		$sql = "SELECT * FROM $floor WHERE status=0";
		$rres = mysqli_query($link, $sql);

		echo "<form action='detail.php?userid=$userid&floor=$floor' method='post' name='room'>";
    	echo "Please select room ";
		echo "<select name='room'>";
		while($result = mysqli_fetch_array($rres)){ ?>
		    <option value="<?php echo $result[2];?>"><?php echo $result[2];?></option>
    	<?php } ?>
    	</select>
    	<input type="submit" value="Select room">
    </form>
    <form>
  		<button formaction="index.php">Back to main menu</button>
	</form>
</body>
</html>