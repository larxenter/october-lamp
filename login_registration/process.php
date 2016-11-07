<?php
require_once('new-connection.php');
session_start();
$errors = array();
// if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
//   echo("$email is a valid email address");
// } 
// else {
//   echo("$email is not a valid email address");

if (empty($_POST['fname'])) {
	$errors[] = "Enter First Name";

}
else {
	$_SESSION['fname'] = $_POST['fname'];
}
if (empty($_POST['lname'])) {
	$errors[] = "Enter Last Name";
}
// var_dump($errors);
// var_dump($_POST['fname']);
if (count($errors) == 0){
	$users_fname = escape_this_string($_POST['fname']);
	$users_lname = escape_this_string($_POST['lname']);

 // var_dump($users_fname);
 // var_dump($users_lname);

$insert_user = mysqli_query($connection, "INSERT INTO users(first_name, last_name, created_at, updated_at) VALUES ('$users_fname', '$users_lname', NOW(), NOW())");
header('Location: sucess.php');
}
?>