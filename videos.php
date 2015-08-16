<?php

$conn = mysqli_connect("127.0.0.1","root","root");
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

$query = mysqli_query($conn,"SELECT * FROM `videos`");
while($row = mysqli_fetch_assoc($query))
{
	$id = $row['id'];
	$name = $row['name'];

	echo "<a href='watch.php?id=$id'>$name</a><br />";
}

?>

</body>
</html>