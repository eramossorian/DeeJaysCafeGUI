<?php 

$servername="localhost";
$user="eramossorian";
$password="Qog0_dud";
$db="deejayscafe";

mysqli_connect($servername,$user,$password);
mysqli_select_db($db);

if(isset($_POST['username'])){
    
    $uname=$_POST['username'];
    $password=$_POST['password'];
    
    $sql="select * from LoginForm where username='".$uname."'AND password='".$password."' limit 1";
    
    $result=mysql_query($sql);
    
    if(mysql_num_rows($result)==1){
        header("location:admin.php");
    }
    else{
        header("location:incorrect.php");
    }
        
}
?>

<!DOCTYPE html>
<html>

<head>
	<title>Deejay's Cafe - Menu & Recipes</title>
	<link rel="stylesheet" href="style.css">
</head>

<body>
	<header>
		<img class="logo" src="djclogo.png" alt="logo" height="70px">
		<nav>
			<ul class="nav_links">
				<li><a href="home.php">Home</a></li>
				<li><a href="menu.php">Menu & Recipes</a></li>
				<li><a href="#">Order Online</a></li>
			</ul>
		</nav>
	</header>
	<div class="container-4">
		<div class="login-1">
		<h3> Admin Login: </h3>
		<form method="POST" action="#">
			<div class="form-input">
				<input type="text" name="username" placeholder="username"/>	
			</div>
			<div class="form-input">
				<input type="password" name="password" placeholder="password"/>
			</div>
			<input type="submit" type="submit" value="LOGIN" class="btn-login"/>
		</form>
		</div>
	</div>	
	
    <footer class="alt-footer">
    	<p>© 2021 DeeJay's Cafe all rights reserved.</p>
	</footer>
</body>

</html>
