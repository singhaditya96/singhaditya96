


<?<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
<style>
p.capitalize {
    text-transform: capitalize;
}
.create-acc {
    display: inline-block;
    text-align: center;
    vertical-align: right;
    padding: 10px 11px;
    border: 0px solid #b96529;
    border-radius: 8px;
    background: #992828;
    background: -webkit-gradient(linear, left top, left bottom, from(#e77e33), to(#e77e33));
    background: -moz-linear-gradient(top, #e77e33, #e77e33);
    background: linear-gradient(to bottom, #e77e33, #e77e33);
    font-family: 'Open Sans', sans-serif;
	font-weight:700;
    color: #ffffff;
    text-decoration: none;
	height: 31px;
	margin-top: 80px;
}
.create-acc:hover,
.create-acc:focus {
    border: 0px solid #e77e33;
    background: #db7830;
    color: #ffffff;
    text-decoration: none;
}
.create-acc:active {
    background: #982727;
    background: -webkit-gradient(linear, left top, left bottom, from(#8b4c1f), to(#e77e33));
    background: -moz-linear-gradient(top, #8b4c1f, #e77e33);
    background: linear-gradient(to bottom, #8b4c1f, #e77e33);
}
.create-acc:after{
    content:  "\0000a0";
    display: inline-block;
    height: 50px;
    width: 50px;
    line-height: 24px;
    margin: 0 4px -6px -4px;
    position: relative;
	padding-left: 10px;
    top: -10px;
    right: -15px;
    background: url("http://i.imgur.com/ZcP5IpD.png") no-repeat center center #db7830;
    background-size: 8px 11px;
	-webkit-border-radius: 0px 8px 8px 0px;
	-moz-border-radius: 0px 8px 8px 0px;
	-o-border-radius: 0px 8px 8px 0px;
	-ms-border-radius: 0px 8px 8px 0px;
	border-radius: 0px 8px 8px 0px;
}
#header {
    background-color:pink;
    color:blue;
    text-align:center;
    padding:5px;
}
#nav {
    line-height:30px;
    background-color:#eeeeee;
    height:300px;
    width:200px;
    float:left;
    padding:5px;	      
}
#section {
    width:350px;
    float:left;
    padding:10px;	 	 
}
#footer {
    background-color:blue;
    color:black;
    clear:both;
    text-align:center;
   padding:5px;	 	 
}
#boxed{
	border : 1px solid green;
}
</style>
</head>
<body>
<?php
require_once('connect.php');
$id=$_SESSION['reg'];
$dbc=mysqli_connect('localhost','root','','database') or die("error connecting");
//$result1=mysql_query("SELECT * from signup where reg='$id'");
 $query="SELECT * FROM signup1 WHERE reg='$id'";
 $result1=mysqli_query($dbc,$query);
while($row3=mysqli_fetch_assoc($result1))
{
	$name=$row3['name'];
	$reg=$row3['reg'];
	$branch=$row3['branch'];
	$type=$row3['type'];
}
?>
<div id="header">
<h1>Complaint Management :</h1>
</div>

<div id="nav" >

Name:<?php echo ucfirst($name)?><br>
Reg no:<?php echo $reg?><br>
Branch:<?php echo ucfirst($branch)?>
</div>
<br>
<br>
<form  action="complaint.php">
     <textarea rows="10"cols="100" onBlur="if(this.value=='')this.value='Enter your complaint here'" onFocus="if(this.value=='Enter your complaint here')this.value='' ">Enter your complaint here</textarea>
</form>
<p><input type="submit" class="create-acc" value="complaint" name="complaint"></p>
 <form action="logout.php" name="register">
<input type="submit" class="create-acc" value="LOGOUT" name="logout"></p>
 </form>

<div id="footer">
</div>

<div id="section">
$dbc=mysqli_connect('localhost','root','','database') or die("error connecting");
 $query="SELECT * FROM complaint;
 $result2=mysqli_query($dbc,$query);
echo $result2;
</div> 
</body>
</html>
