
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
	<ul id="ulrm">
		<li><a href="dashboard.php">Home</a></li>
		<li><a href="about.php">About us</a></li>
		<li><a href="crud">CustomerRecords</a></li>
		<li><a href="upload.php">Upload</a></li>
		<li><a href="address.php">Address</a></li>
		<li><a href="logout.php">Logout</a></li>
	</ul>
			</div>
	
	<div id="container">
		<h1>What is your favourite food:</h1>
	<center>	
<b color="white">Without food, there is no life. There are so many dishes available in today's world some like Indian foods like Biryani, Dosa, Pav Bhaji, Pani Puri etc whereas some like western foods like Pizza, Burger, Noodles etc. Among the number of food, Pizza is my favourite food because it tastes and smells fabulous<b>&nbsp;&nbsp;
</center>	
	<form action="upload.php" method="post" enctype="multipart/form-data">
<h2 class="h2">you can like any food select and upload pick</h2>&nbsp;&nbsp;
<img src="food.png" width="500px">
<input type="file" name="file" />
<button type="submit" name="upload">upload</button>
</form>

<?php
include_once'config.php';
if(isset($_POST['upload']))
{
	$file=$_FILES['file']['name'];

	$file_loc=$_FILES['file']['tmp_name'];

	$file_size=$_FILES['file']['size'];

	$file_type=$_FILES['file']['type'];

	$folder="upload/";

	$new_size=$file_size/1024;

	$new_file_name=strtolower($file);


	$final_file=str_replace('','-',$new_file_name);  

	if(move_uploaded_file($file_loc,$folder.$final_file))

	{
		$sql="INSERT INTO image(file,type,size) VALUES('$final_file','$file_type','$new_size')";

	mysqli_query($con,$sql);

	}
else
	{
		echo "please try again";
	}
}
?>


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
