<?php
include 'connect.php';

$stmt=$conn->prepare("INSERT INTO `konferencja_test`.`users` (`user_login`, `user_password`) 
		VALUES (?,?);");



if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
	$login=$_POST['login'];
	$pass = md5($_POST['password']);
	$stmt->bind_param("ss", $login, $pass);
	
	$stmt->execute();
	
	if(!($stmt->error))
	{
		echo "jest ok";
	}
	else {
		echo("coś poszło nie tak");
		
	}
}
else {
	("Tu już na maxa słabo");
	
}
include 'disconnect.php';



?>