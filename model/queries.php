<?php
require 'classes.php';

if (! empty ( $_GET ["qt"] )) {
	$choice = $_GET ["qt"];
	echo $choice;
	
	switch ($choice) {
		case "login" :
			login ( $conn = connect () );
			break;
		case "adduser" :
			addUser ( $conn = connect () );
			break;
		
		case "allusers" :
			printAllUsers ( $conn = connect () );
			break;
		default :
			$conn->close ();
	}
}
function connect() {
	$myDB = new mySQL ();
	return $myDB->connect ();
}
function login($conn) {
	$login = $_POST ["login"];
	$query = "SELECT * FROM users where user_login='$login';";
	$result = mysqli_query ( $conn, $query );
	
	if (mysqli_num_rows ( $result ) == 1) {
		$row = mysqli_fetch_assoc ( $result );
		if ($row ["user_password"] == md5 ( $_POST ["password"] )) {
			$row = null;
			$result = null;
			session_start ();
			$_SESSION ["logged"] = $login;
			session_write_close ();
			header ( 'Location: ../userindex.php' );
			$conn->close ();
		}
	} else {
		echo "0 results";
		header ( 'Location: ../userindex.php' );
		$conn->close ();
	}
	exit ();
}
function addUser($conn) {
	$stmt = $conn->prepare ( "INSERT INTO `konferencja_test`.`users` (`user_login`, `user_password`)
		VALUES (?,?);" );
	
	if ($_SERVER ["REQUEST_METHOD"] == "POST") {
		$login = $_POST ['login'];
		$pass = md5 ( $_POST ['password'] );
		$stmt->bind_param ( "ss", $login, $pass );
		
		$stmt->execute ();
		
		if (! ($stmt->error)) {
			echo "jest ok";
		} else {
			echo ("coś poszło nie tak");
		}
	} else {
		("Tu już na maxa słabo");
	}
	include 'disconnect.php';
	header ( "Location: ../adduser.php" );
	exit ();
}
function printAllUsers($conn) {
	$query = "SELECT * FROM users";
	$result = mysqli_query ( $conn, $query );
	$data = array ();
	if (mysqli_num_rows ( $result ) > 0) {
		while ( $row = mysqli_fetch_assoc ( $result ) ) {
			$data [] = $row;
		}
	}
	return $data;
}
?>