
<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Custom Login Form</title>
    
    
    
    
        <link rel="stylesheet" href="style.css">

    
    
    
  </head>

  <body>

    

    <div id="wrapper">
	<div class="join">This is the end of your problems</div><br><br>
    
        <div class="join1">JOIN IN</div>
        <div class="lock"></div>
	        <div class="clr"></div>
    	    	
        <div class="forms">
         <form action="connect1.php" name="register">
          <p>Name:</p>
           <br>
          <input required name="name" type="text" onBlur="if(this.value=='')this.value='name'" onFocus="if(this.value=='name')this.value='' " value="name" size="70" onClick="border: 1px solid #30a8da;"  id="username"/>
           <p>Email id:</p>
           <br>
        <input  required name="email" type="text"  onBlur="if(this.value=='')this.value='email'" onFocus="if(this.value=='email')this.value='' "  value="email" size="70" onClick="border: 1px solid #30a8da;" id="mail"/>

    
        <p>Registratrion no:</p>
        <br>
        <input required name="reg" type="text"  
        value="reg" size="70" onBlur="if(this.value=='')this.value='reg'" onFocus="if(this.value=='reg')this.value='' "onClick="border: 1px solid #30a8da;" id="reg"/>
        <p>User-type:</p>
         <br>
         <input list="type" name="type" onBlur="if(this.value=='')this.value='Usertype'" onFocus="if(this.value=='Usertype')this.value='' ">
        <datalist id="type" name="type">
         <option value="student"  style="font-size:10px;">student</option>
         <option value="admin" >admin</option>
         <option value="employee">employee</option>
         </datalist></p>
        <p>Branch:</p>
         <br>
         <input required name="branch" type="text"   onBlur="if(this.value=='')this.value='branch'" onFocus="if(this.value=='branch')this.value='' "value="branch" size="70" onClick="border: 1px solid #30a8da;" id="branch"/>
         <p>Password:</p>
         <br>
           <input required name="password" type="password" value="password" size="70" onBlur="if(this.value=='')this.value='password'" onFocus="if(this.value=='password')this.value='' "onClick="border: 1px solid #30a8da;" id="password"/>
           <p><input type="submit" class="create-acc" value="register" name="register"></p>
             </form>
            </div>
</div>

    
    
    
    
    
  </body>
</html>