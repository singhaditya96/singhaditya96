<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
require_once('connect.php');
$id=$_SESSION['reg'];
$dbc=mysqli_connect('localhost','root','','database') or die("error connecting");
//$result1=mysql_query("SELECT * from signup where reg='$id'");
 $query="SELECT * FROM signup WHERE reg='$id'";
 $result1=mysqli_query($dbc,$query);
while($row3=mysqli_fetch_assoc($result1))
{
	$name=$row3['name'];
	$reg=$row3['reg'];
	$branch=$row3['branch'];
}
?>
HELLO <?php echo $name?>
</body>
</html>

