<?php
$con = mysqli_connect("localhost","root","","form");
if(!$con){
	echo "DB connection Errror";
}
?>
<?php

$message = "";
if(isset($_POST['submit'])){
	
    $name 	 = $_POST['name'];
    $email 	 = $_POST['email'];
    $password 	 = $_POST['password'];
   
    
        $insQuery = "INSERT INTO user(name, email, password)  VALUES ('$name ', '$email', '$password')";
        if(mysqli_query($con, $insQuery))
        {
            $message = "successfully";
        }
    
}

?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" href="style.css" />
</head>
<body>
<form  method="post" >
<div class="container">
    <h1>Sign Up</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

<h1 align="center"><span style="color:green; "><?php echo $message; ?></span></h1>
    <label for="email"><b>Name</b></label>
    <input type="text" placeholder="Enter Name" name="name" >
	
	<label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" >

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" >

    <!--<label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" >-->

    <label>
      <input type="checkbox" name="remember" style="margin-bottom:15px"> Remember me
    </label>

    <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

    <div class="clearfix">
      <button type="button" class="cancelbtn">Cancel</button>
	  
      <button type="submit" name="submit" class="signupbtn">Sign Up</button>
    </div>
  </div>
</form>
</body>
</html>