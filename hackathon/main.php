
<html>
<head>
<meta charset="utf-8">
<title>COMPLAINT FORM</title>
<style type="text/css">
body {
background-color: #f4f4f4;
color: #5a5656;
background-image:url("user_background2.jpg");
background-repeat:no-repeat;
background-size:cover;
font-family: 'Open Sans', Arial, Helvetica, sans-serif;
font-size: 16px;
line-height: 1.5em;
}
a { text-decoration: none; }
h1 { font-size: 1em; }
h1, p {
margin-bottom: 10px;
}
strong {
font-weight: bold;
}
.uppercase { text-transform: uppercase; }

/* ---------- LOGIN ---------- */
#login {
margin: 50px auto;

width: 300px;
}
form fieldset input[type="text"], input[type="password"], input[list="type"] ,input[type="id"]{
background-color: #e5e5e5;
border: none;
border-radius: 3px;
-moz-border-radius: 3px;
-webkit-border-radius: 3px;
color: #5a5656;
font-family: 'Open Sans', Arial, Helvetica, sans-serif;
font-size: 14px;
height: 50px;
outline: none;
padding: 0px 10px;
width: 280px;
-webkit-appearance:none;
}
form fieldset input[type="submit"] {
background-color: #008dde;
border: none;
border-radius: 3px;
-moz-border-radius: 3px;
-webkit-border-radius: 3px;
color: #f4f4f4;
cursor: pointer;
font-family: 'Open Sans', Arial, Helvetica, sans-serif;
height: 50px;
text-transform: uppercase;
width: 300px;
-webkit-appearance:none;
}

form fieldset a {
color: #5a5656;
font-size: 10px;
}
form fieldset a:hover { text-decoration: underline; }
.btn-round {
background-color: #5a5656;
border-radius: 50%;
-moz-border-radius: 50%;
-webkit-border-radius: 50%;
color: #f4f4f4;
display: block;
font-size: 12px;
height: 50px;
line-height: 50px;
margin: 30px 125px;
text-align: center;
text-transform: uppercase;
width: 50px;
}
.signup-before {
background-color: #0064ab;
border-radius: 3px 0px 0px 3px;
-moz-border-radius: 3px 0px 0px 3px;
-webkit-border-radius: 3px 0px 0px 3px;
color: #f4f4f4;
display: block;
float: left;
height: 50px;
line-height: 50px;
text-align: center;
width: 50px;
}
.signup {
background-color: #0079ce;
border: none;
border-radius: 0px 3px 3px 0px;
-moz-border-radius: 0px 3px 3px 0px;
-webkit-border-radius: 0px 3px 3px 0px;
color: #f4f4f4;
cursor: pointer;
height: 50px;
text-transform: uppercase;
width: 250px;
}
/*before {
background-color: #189bcb;
border-radius: 3px 0px 0px 3px;
-moz-border-radius: 3px 0px 0px 3px;
-webkit-border-radius: 3px 0px 0px 3px;
color: #f4f4f4;
display: block;
float: left;
height: 50px;
line-height: 50px;
text-align: center;
width: 50px;
}
.twitter {
background-color: #1bb2e9;
border: none;
border-radius: 0px 3px 3px 0px;
-moz-border-radius: 0px 3px 3px 0px;
-webkit-border-radius: 0px 3px 3px 0px;
color: #f4f4f4;
cursor: pointer;
height: 50px;
text-transform: uppercase;
width: 250px;
}*/
</style>
</head>
<body>
<br>
<p style="color:grey;   font-size:500%;  text-align:center; font-family:"Times New Roman"";>Complaint Management System</p><br>
<div id="login">
<h1><strong>Welcome.</strong> Please login.</h1>
<form action="connect.php" method="POST" >
<fieldset>
<p>
<input list="type" name="profile" onBlur="if(this.value=='')this.value='Usertype'" onFocus="if(this.value=='Usertype')this.value='' ">
<datalist id="type" name="profile">
<option value="student"  style="font-size:10px;">student</option>
<option value="admin" >admin</option>
<option value="employee">employee</option>
</datalist></p>
<p><input type="text" required name="Username" value="Username" onBlur="if(this.value=='')this.value='Username'" onFocus="if(this.value=='Username')this.value='' "></p>
<p><input type="text" required name="reg" value="reg" onBlur="if(this.value=='')this.value='reg'" onFocus="if(this.value=='reg')this.value='' "></p>
<p><input type="password" required name="Password" value="Password" onBlur="if(this.value=='')this.value='Password'" onFocus="if(this.value=='Password')this.value='' "></p>

<p><a href="#">Forgot Password?</a></p>
<p><input type="submit" value="login" name="login"></p>
</fieldset>
</form>
<p><span class="btn-round">or</span></p>
<p>
<a class="signup-before"></a>
<form action="signup.php">
<button type="submit"  class="signup" >sign up</button></form>
</p>
</div> <!-- end login -->
<?php
echo $print
?>
</body>
</html>
<script>
public function index()
	{
		$this->load->view('main');
	}
</script>