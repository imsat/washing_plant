<?php include("connect.php"); ?>
<?php
$error = "";
	
if(isset($_POST['submit'])){
	$email = $_POST['email'];
	$password = $_POST['password'];
	
	$check = "select * from user where email='$email' AND password ='$password'";
		$check_work= mysqli_query($con,$check);
		if($check_work){
		if(mysqli_num_rows($check_work) > 0 ){
			
			header('Location: add_worker.php');
			}else{
			$error = "User id or password not Correct!!!!";
		}
}
}

?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Login Page</title>
<style>
	body{
padding:0;
margin:0;
background-color:#ccc;

}
#menu{
	
	width:480px;
	margin:0px auto;
	text-align:center;
	border-bottom:1px solid #ccc;
}
#menu a{
	
	text-decoration:none;
	display:inline-block;
	color:#666;
	padding:14px;
	background-color:#F8F8F8;
}
#menu a:hover{
	
	color:#000;
	background-color:#eee;	
}
#wrapper{
width:500px;
background-color:#FFF;
margin:0px auto;
min-height:200px;
margin-top:130px;
border:1px solid #999;
border-bottom:3px solid #999;
border-radius:5px;
padding-bottom:20px;

}
#formDiv{
	width:265px;
	margin:0px auto;
	margin-top:20px;
}
	
</style>	
</head>
<body>	
	<div id="error">
		
	</div>
	<div id="wrapper">
	
	<div id="menu">
	
		<a href="index.html">Login Page</a>
	
	</div>
	
	<div id="formDiv">
	<form method="POST" action="">
	<span style="color:red"><?php echo $error; ?></span>
		<label for="">Email</label><br/>
		<input type="text" name="email"/><br/><br/>
			
		<label for="">Password</label><br/>
		<input type="password" name="password"/><br/><br/>
		
		<input type="checkbox" name="keep" />
		<label for="">Keep me logged in</label><br/><br/>
		
			
		<input type="submit" name="submit" value="login"/><br/>	


		
			
	</form>
	</div>
	</div>
</body>
</html>

