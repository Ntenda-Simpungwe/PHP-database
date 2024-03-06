
<?php
$db=mysqli_connect("localhost","root","","logindb");



if (isset($_POST["submit"]))
{
    $username = $_POST["username"];
    $password = $_POST["password"];
	$confirm = $_POST["confirm"];
	
	if ($password != $confirm )
	{
		echo "<p style = \"color: red;\">The passwords you entered dont match</p>";
	}
	else
	{
	
	
	if ( !empty($username) && !empty($password))
	{
		$query="INSERT INTO users(Username,Password) VALUES('$username','$password')";    
		mysqli_query($db,$query);
	}
	
	}
    
}



?>

<html>
<header>
<title >
Register
</title>
<link rel='stylesheet' type='text/css' href='Style.css' />
</header>
<body>
<h2 style= "font-size:30px;">Sign Up </h2>
<p style ="margin:8px">Please fill this form to create an account</p><br/>

<form method = "POST">
<label style ="margin:8px" for="username">Username</label><br>
<input  type="text" id="username" name="username" required><br><br/>
<label style ="margin:8px" for="password">Password</label><br>
<input  type="password" id="password" name="password" required><br><br/>
<label style ="margin:8px" for="password">Confirm Password</label><br>
<input  type="password" id="pass" name="confirm" required><br><br><br/>


<input class = "but" style = "margin:10px" type = "submit" name = "submit"/><button type = "reset" class = "but" style = "margin:10px" name = "reset">Reset</button>


</form>

<p> Already have an account?<a href = "Login.php"> Login here</a></p>




</body>
</html>