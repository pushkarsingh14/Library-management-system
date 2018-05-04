<html>
<head>
<title>
registration form
</title>
<link rel="stylesheet" href="registration.css">
</head>
<body>
<h1><center>STUDENT REGISTRATION FORM</center></h1><br/></br>
<form align="center" method="post" action="">
<div class="hello">
<div>
<input type="text" name="firstname" placeholder="first name" class="one" required=""/>
</div>
<div>
<input type="text" name="lastname" placeholder="last name" class="one" required=""/>
</div>
<div>
<input type="text" name="userid" placeholder="username/id" class="one" required=""/>
</div>
<div>
<input type="password" name="password" placeholder="password" class="one" required=""/>
</div>
<div>
<input type="email" name="email" placeholder="email" class="one" required=""/>
</div>
<div>
<input type="tel" name="contact" placeholder="contact" class="one" required=""/>
</div>
<div>
<input type="text" name="sem" placeholder="SEM" class="one" required=""/>
</div>
<div>
<input type="text" name="enrollmentno" placeholder="enrollment no." class="one" required=""/>
</div>
<input type="submit" name="submit" value="register" onclick="http://www.google.com" >
</form>


<?php
if(isset($_POST["submit"]))
{
	$link=mysqli_connect("localhost","root","","lms");
	
	mysqli_query($link,"INSERT INTO students_registration(firstname, lastname, username, password, email, contact, sem, enrollmentno) VALUES ('$_POST[firstname]','$_POST[lastname]','$_POST[userid]','$_POST[password]','$_POST[email]','$_POST[contact]','$_POST[sem]','$_POST[enrollmentno]')");
echo "

<div class='two'>
registered successfully...
</div>

";	
}

?>

</body>
</html>	