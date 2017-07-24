<?php
require 'config.php';

?>

<!DOCTYPE html>
      <html>
              <head>

              <title>Sign-Up Form</title>
              <link rel="stylesheet"  href="Mstyle.css">
              
			  </head>
           <body>

              <form action="RegisterM.php" method="post">
<div  class="container">

<h2>Sign-Up Form</h2>
<form>
<div class="myform">
             <input name="username" type="text"  class="inputvalue" placeholder="Type your name" required /><br><br>
            <input   name="password" type="password"  class="inputvalue"placeholder="Type your password" required/><br><br>
           <input name="cpassword" type="password"  class="inputvalue"placeholder="Re-Type your password" required/><br><br>
</div>

          <input  name="submit_btn" type="submit" class="login_btn"  href="Index.html"
		  value="Sign-Up"/><br><br>
   
  <form action="Mlogin.php" method="get" >
 <input   name="home_btn" type="submit" class="back_btn"  value="Back To Login"/><br>
</form>
</form>

<?php
if(isset($_POST['submit_btn']))
{
$username=$_POST['username'];
$password=$_POST['password'];
$cpassword=$_POST['cpassword'];
	if($password==$cpassword)
	{
		$query="select * from usersm WHERE username='$username' ";
		$query_run=mysqli_query($GLOBALS['$conn'],$query);
			if(mysqli_num_rows($query_run)>0)
			{
					echo '<script type="text/javascript"> alert("User name already present") </script>';	
			}  
			else
			{           
				$query="insert into usersm values('$username','$password')";
				$query_run=mysqli_query($GLOBALS['$conn'],$query);
				if($query_run)
				{
							echo '<script type="text/javascript"> alert("You are registered successfully") </script>';	
				}          
				else 
				{
					echo '<script type="text/javascript"> alert("Error") </script>';
				}
			}

			}
			else {
				
     echo '<script type="text/javascript"> alert("Pass and Confirm pass does not match") </script>';
				
			}
			}
?>
</div>
</body>
</html>