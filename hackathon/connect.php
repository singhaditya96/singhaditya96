<?php
session_start();?>
<?php
$loginuserErr=$loginuser=$loginpassErr=$signpassErr="";
      if(isset($_POST['login'])){
  $dbc=mysqli_connect('localhost','root','','database') or die("error connecting");
 
           if(empty($_POST['reg']))
            $loginuserErr='id cannot be empty';
           else $loginuser=$_POST['reg'];
        if(empty($_POST['Password']))
          $loginpassErr="Password cannot be empty";
        else $loginpass=$_POST['Password'];
  if($loginuserErr=="" and $loginpassErr=="")
        {
            $query="SELECT * FROM signup1 WHERE reg='$loginuser' AND password='$loginpass'";
            $result=mysqli_query($dbc,$query);
            if(mysqli_num_rows($result)==0)
            {
                $loginpassErr="No such username or password";
                echo "you are not logged in ";
            }
  else{
    $row=mysqli_fetch_assoc($result) or die("error");
    $_SESSION['name']=$_POST['Username'];
    $_SESSION['reg']=$row['reg'];
  
  if(isset($_SESSION['name']))
    header('Location:profile1.php');
  
  }
  }     }
   ?> 