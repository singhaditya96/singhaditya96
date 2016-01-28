<?php
$loginuserErr=$loginuser=$loginpassErr=$signpassErr="";
      if(isset($_POST['login'])){
  $dbc=mysqli_connect('localhost','root','','database') or die("error connecting");
 
  if(empty($_POST['reg']))
            $loginuserErr='id cannot be empty';
        else $loginuser=$_POST['reg'];
        if(empty($_POST['password']))
            $loginpassErr="Password cannot be empty";
        else $loginpass=SHA1($_POST['password']);
  if($loginuserErr=="" and $loginpassErr=="")
        {
           
           $query=mysqli_query("select from signup where reg='".$_POST['reg']."''and password='".$_POST
            ['password']."'");
           if(mysqli_num_rows($query)==1)
            session_start();
          $_SESSION["Login"]="YES";
          echo "you are not logged in ";
 /* else{
    $row=mysqli_fetch_assoc($result) or die("error");
    $_SESSION['name']=$_GET['username'];
    $_SESSION['reg']=$row['reg'];
   /* if(isset($_SESSION['username']))
    header('Location:home.php');
  
  }*/
  }     }
   ?> 