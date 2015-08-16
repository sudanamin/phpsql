<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">



<?php

$conn = mysqli_connect("127.0.0.1","root","root");
mysqli_select_db($conn,"v-u-a-p");

?>





<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>




<?php

$query = mysqli_query($conn,"SELECT * FROM `videos`");

echo "<table width='160' border='1' align='center'>";
while($row = mysqli_fetch_assoc($query))
{
	$id = $row['id'];
	$name = $row['name'];

echo "<a href='watch.php?id=$id'>$name</a><br />";
$url = "http://localhost/uploaded/".$name;
echo $url."<br />";
echo "<tr>
    <td width='152' height='150'><img src='$url' width='150' height='150' alt='1' /></td> ";



              if($roww = mysqli_fetch_assoc($query))  {
  	$idd = $roww['id'];
	$namee = $roww['name'];

echo "<a href='watch.php?id=$idd'>$namee</a><br />";
$url = "http://localhost/uploaded/".$namee;
echo $url."<br />";
echo "
    <td width='152' height='150'><img src='$url' width='150' height='150' alt='1' /></td>

  ";

    }

  echo "</tr>";
  echo "<tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>";
}
echo "</table>";
?>

</body>
</html>













