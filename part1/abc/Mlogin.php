<?php
require 'config.php';
?>


<!DOCTYPE html>
<html>
<head>
<title>Login Page</title>
<link rel="stylesheet"  href="Mstyle.css">
</head>
<body>

<form action="Mlogin.php" method="post">

<div    class="container">
<h2>Login Form</h2>
<form>


<div class="myform">
<input type="text" name="username" class="inputvalue" placeholder="Type your name" required/><br><br>




<input type="password" name="password" class="inputvalue"placeholder="Type your password" required/><br><br>
</div>

<input name="submit_btn" type="submit" class="login_btn" value="Login"/><br><br>

<input type="submit" class="reg_btn" value="Register"/><br>

</form>

<?php
if(isset($_POST['submit_btn']))
{
    $username=$_POST['username'];
    $password=$_POST['password'];
	
    	$query="select * from usersm WHERE username='$username' AND password= '$password' ";
		$query_run=mysqli_query($GLOBALS['$conn'],$query);
			if(mysqli_num_rows($query_run)>0)
			{
    			echo '<script type="text/javascript"> alert("Logged in succesful") </script>';	
			}  
			else
            {           
                echo '<script type="text/javascript"> alert("You are NOT registered") </script>';	
        
			}
}
?>
</div>

</body>
</html>