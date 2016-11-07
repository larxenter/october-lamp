<?php 
session_start(); 


?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php if(isset($_SESSION['fname'])){ 
	?><h1>Hello <?php echo $_SESSION['fname'];?></h1>
<?php } 
?>
</body>
</html>