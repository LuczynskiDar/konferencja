<?php
require 'classes.php';

//$conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME, DB_PORT, DB_SOCKET) or die ('Nie można połączyć z bazą danych' . mysqli_connect_error());

$myDB=new mySQL();
$conn=$myDB->connect();


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
header("Location: ../adduser.php");
exit();


?>