<?php
$loginuserErr=$loginuser=$loginpassErr=$signpassErr=$loginpassErr2=$loginpassErr3=$loginpassErr4=$loginpass1=$loginpass2=$loginpass3=$loginpass4="";
		$loginpassErr5=$loginpass5="";

      if(isset($_POST['register'])){
  $dbc=mysqli_connect('localhost','root','','database') or die("error connecting");
 
       if(empty($_POST['name']))
        $loginuserErr='Username cannot be empty';
        else $loginuser=$_POST['name'];
        if(empty($_POST['email']))
            $loginpassErr1="email cannot be empty";
        else $loginpass1=SHA1($_POST['email']);
         if(empty($_POST['reg']))
            $loginpassErr2="registration no cannot be empty";
        else $loginpass2=SHA1($_POST['reg']);
         if(empty($_POST['branch']))
            $loginpassErr3="branch cannot be empty";
        else $loginpass3=SHA1($_POST['branch']);
         if(empty($_POST['password']))
            $loginpassErr4="Password cannot be empty";
        else $loginpass4=SHA1($_POST['password']);
        if(empty($_POST['type']))
            $loginpassErr5="User-type cannot be empty";
        else $loginpass5=SHA1($_POST['type']);
  /*if($loginuserErr=="" and $loginpassErr=="")
        {
           
            $query="SELECT * FROM login WHERE username='$loginuser' AND password='$loginpass'";
            $result=mysqli_query($dbc,$query);
            if(mysqli_num_rows($result)==0)
            {
                $loginpassErr="No such username or password";
            }
  }

           if(isset($_POST['register']))

{*/
}
else
{
   $conn = mysqli_connect('localhost', 'root','','database');
            
            if(! $conn )
            {
               die('Could not connect: ' . mysqli_error($conn));
            }
            echo "you are successfully registered .";
            
         $email= $_GET['email'];
         $name = $_GET['name'];
         $reg =$_GET['reg'];
         $psw = $_GET['password'];
         $branch = $_GET['branch'];
         $type=$_GET['type'];

$sql="INSERT INTO signup1(email,name,password,reg,type,branch) VALUES ('$email','$name','$psw','$reg','$type','$branch')"; 
              // var_dump($sql);

      echo $sql;
            $retval = mysqli_query($conn,$sql);
		  
}

      ?>