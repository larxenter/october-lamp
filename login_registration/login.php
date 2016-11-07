<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form id="login" action="process.php" method="post">
    First Name:<input type="text" id="fname" name="fname"/>
    Last Name:<input type="text" id="lname" name="lname"/>
    Email:<input type="text" id="email" name="email" />
    Password:<input type="text" id="password" name="password"/>
    <input type="submit" id="email_button" value="validate" />
	</form>
</body>
</html>
