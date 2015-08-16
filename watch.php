<?php

$conn=mysqli_connect("127.0.0.1","root","root");
mysqli_select_db($conn,"v-u-a-p");

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Video Upload And Playback Tutorial</title>
</head>

<body>

<?php

if(isset($_GET['id']))
{
	$id = $_GET['id'];
	$query = mysqli_query($conn,"SELECT * FROM `videos` WHERE id='$id'");
	while($row = mysqli_fetch_assoc($query))
	{
		$name = $row['name'];
		$url = $row['url'];
	}
	
	echo "You are watching ".$name."<br />";
	echo "<embed src='$url' width='560' height='315'></embed>";
}
else
{
	echo "Error!";
}

?>
</body>
</html>