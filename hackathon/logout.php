

<?php
	session_start();
	
		session_unset();
		session_destroy();
		header('Location:main.php');
	/*if(isset($_SESSION['username']))
	{
		session_unset();
		session_destroy();
		header('Location:home.php');
	}
	else
	{
		echo "fjjfnj";
	}*/
	?>