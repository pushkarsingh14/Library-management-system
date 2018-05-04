<html>
<head>
<title>
login form
</title>
<link rel="stylesheet" href="login.css">
<style type="text/css">
.
</style>
</head>
<body>
<div class="one">
<h1 style"..."><center>LIBRARY MANAGEMENT SYSTEM</center></h1>
</div>
<div class="login">
<form name="form" action="" method="post">
<h1>user login form</h1>
<div>
<input type="text" name="username" placeholder="username" class="two" required=""/>
</div>
<div>
<input type="password" name="password" placeholder="password" class="two" required=""/>
</div><br/>
<div>
<input type="submit" name="submit" value="login" class="three"> 
<a href="#" class="lost">forgot password</a>
</div>
<div class="seperator">
<p class="new">new to site?
<a href="registration.php">create account</a>
</p>
</div>
</form>
</div>

<?php
if(isset($_POST["submit"]))
{
	$count=0;
	$link=mysqli_connect("localhost","root","","lms");
	$result=mysqli_query($link,"SELECT *FROM students_registration WHERE username='$_POST[username]' && password='$_POST[password]'&&status='yes'");
	$count=mysqli_num_rows($result);
	
	
	
	if($count==0)
	{
		
		?>
		<div id="q">
<center><strong style="color:red">INVALID </strong>username or password</center>
</div>
<?php
	}
else
{
	echo "found valid user:";
	echo $count;
}	
}
?>

</body>
</html>