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
    	$fres = mysqli_query($link,"SHOW TABLES LIKE '%floor%'");

    	echo "<form action='room.php?userid=$userid' method='post' name='floor'>";
    	echo "Please select ";
		echo "<select name='floor'>";
		while($result = mysqli_fetch_array($fres)){ ?>
		    <option value="<?php echo $result[0];?>"><?php echo $result[0];?></option>
    	<?php } ?>
    	</select>
    	<input type="submit" value="Select floor">
    </form>
    <form>
  		<button formaction="index.php">Back to main menu</button>
	</form>
</body>
</html>
