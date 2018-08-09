<?php
	$host="localhost";
	$user="root";
	$password="";
	$db="userdata";



	$con=mysqli_connect($host,$user,$password);



	mysqli_select_db($con,$db);

	//echo '<script type="text/javascript">alert("hello");</script>';

	if (isset($_POST['uName'])) {
		$uName=$_POST['uName'];
		$pass=$_POST['pass'];

		// header("Location: https://www.w3schools.com/");

		$sql="select * from loginform where uName='".$uName."' AND passW='".$pass."' limit 1 ";
		$result=mysqli_query($con,$sql);

		if (mysqli_num_rows($result)==1) {

			echo "Your have successfully logged in";

			exit();

		}
		else{
			echo "You have entered incorrect password";
			exit();
		}
	}
	
?>  

<!DOCTYPE html>
<html>
<head>
  <title>Login form design</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="loginbox">
  <img src="mora.png" class="avatar" >
    <h1>Login Here</h1>
    <form id="login-form" method="post" action="#">
      <p>User Name</p>
      <input type="text" name="uName" placeholder="Enter Username">
      <p>Password</p>
      <input type="Password" name="pass" placeholder="Enter Password">
      <input type="submit" name="" value="Login">
      
      <div class="other">
      <a href="#" >Lost your password?</a><br>

      <a href="#">Dont have an account?</a>
      </div>
    </form>
  </div>


</body>
</html>