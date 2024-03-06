<!DOCTYPE html>
<header>
<title>
Login
</title>
<h1>Login</h1>
<link rel='stylesheet' type='text/css' href='Style.css' />
</header>
<body>

<?php

if (isset($_POST["submit"]))
{
	
$username = $_POST["username"];
    $password = $_POST["password"];
$db=mysqli_connect("localhost","root","","logindb");
$sql="SELECT Password FROM users WHERE Username = '".$username."'";
    $result=mysqli_query($db, $sql);
    
	 
    while($row=mysqli_fetch_assoc($result))
    {
        $pass = $row['Password'];
       
    } 
	
	
   if ($pass == $password)
   {
	   header("Location:welcome.php");
   }
   else
   {
	   echo "<p style = \"color: red;\">Incorrect password or Username</p>";
   }
	
}
?>
<p>Please fill in your credentials to login</p>

<form method = "POST">
<label for="username">Username</label><br>
<input type="text" id="username" name="username" required><br>
<label for="password">Password</label><br>
<input  type="password" id="password" name="password" required><br><br>


<input class = "but" type = "submit" name = "submit" value ="Login"/>


</form>


<p> Don't have an account?<a href = "register.php"> Sign up now</a></p>
</body>


<html>