<?php 
require('config.php');
session_start();


if(isset($_POST['submit']))
{
	if((isset($_POST['email']) && $_POST['email'] !='') && (isset($_POST['password']) && $_POST['password'] !=''))
	{
		$email = trim($_POST['email']);
		$password = trim($_POST['password']);

		$sqlEmail = "select * from register where email = '".$email."'AND password='".$password."'";
		$rs = mysqli_query($con,$sqlEmail);
		if(mysqli_num_rows($rs))  
		{
			header('location:dashboard.php');
			exit;

		}
		else
		{
			$errorMsg =  "Wrong Email Or Password";
		}
	}
	else
	{
		$errorMsg =  "No User Found";
	}
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>HOTEL MANAGEMENT SYSTEM</title>
</head>

<link rel="stylesheet" type="text/css" href="style.css">
<body>

	<div id="header">

		<img src="image/logo.gif" class="img"/>
		
	</div>
	<div id="nav">
</div>

<div id="container">
<?php
	echo "<b>Desinged by IRUDAYAN@</b>".date("d/m/yy");
?>
	<center><h1>Login page</h1></center>	
	<fieldset id="user_login">
		<legend>User Login</legend>

		<?php 
		if(isset($errorMsg))
		{
			echo "<div class='error-msg'>";
			echo $errorMsg;
			echo "</div>";
			unset($errorMsg);
		}

		if(isset($_GET['logout']))
		{
			echo "<div class='success-msg'>";
			echo "You have successfully logout";
			echo "</div>";

		}



		?>

		<form  action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
			<table id="user_table">
				<tr>
					<td><label>Email:</label></td>
					<td><input type="text" name="email" required placeholder="Enter your email" required/></td>	
				</tr>
				<tr>
					<td><label>Password:</label></td>
					<td><input type="password" name="password" required placeholder="Enter your password" required/></td>
				</tr>
				<tr>
					<td><a href="dashboard.php"><input type="submit" name="submit" id="subbtn" value="login"></td>
					<td><a href="register.php">New User Registration</a></td>

				</form>
			</fieldset>
		</div>			

		<div id="footer">
			<center>
				..No Forget Your Password...
			</center>
		</div>

	</body>
	</html>