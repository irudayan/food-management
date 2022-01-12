<?php

	include('config.php');

	if(isset($_POST['submit'])){
           
       $username=$_POST['username'];
       $name=$_POST['name'];
       
       $email=$_POST['email'];
       $password =$_POST['password'];
 // print_r($POST);exit;


        $query=mysqli_query($con, "insert into register(username,name,email,password) values('$username',
          '$name','$email','$password')");

       if ($query) 
       {
          echo 'Registration success!';
    
       }
       else
       {
          echo 'try again';
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
	<div id="container">
		<center><h1>Registration</h1></center>	
			<fieldset id="user_login">
				<legend>New Registration</legend>
				<form method="post" action="register.php">
					<table id="user_table">
							<tr>
					<td><label>Username:</label></td>
					<td><input type="text" name="username" placeholder="Enter your name" minlength="5" maxlength="50" required /></td>	
					</tr>
						<tr>
					<td><label>Name:</label></td>
					<td><input type="text" name="name" placeholder="Enter your name" minlength="5" maxlength="50" required /></td>	
					</tr>
					<tr>
						<td><label>Email id:</label></td>
						<td><input type="email" name="email" placeholder="Enter your mail Id" required /></td>
					</tr>
					<tr>
						<td><label>Password:</label></td>
						<td><input type="password" name="password" placeholder="Enter your password" minlength="5" maxlength="50" required /></td>
					</tr>
					<tr>
						<td><label>Confirm Password:</label></td>
						<td><input type="password" name="confirmpassword" placeholder="Repeat password" minlength="5" maxlength="50"required /></td>
					</tr>
					<tr>
						<td><input type="submit" name="submit" id="subbtn" value="submit"></td>
					</tr>
					<tr>
						
						<td><a href="index.php"><center>...Alredy User...</center></a></td>


					</tr>
					</table>
				</form>
			</fieldset>
			
	</div>			
			
	<div id="footer">
		<center>
		<?php 
			echo "<b>Desinged by IRUDAYAN@</b>".date("d/m/yy");
			?>
		</center>
	</div>



</body>
</html>