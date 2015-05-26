
<?php
require 'classes.php';

// $conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME, DB_PORT, DB_SOCKET) or die ('Nie można połączyć z bazą danych' . mysqli_connect_error());

$myDB = new mySQL ();
$conn = $myDB->connect ();

$login = $_POST ["login"];
$password = $query = "SELECT * FROM users where user_login='$login';";
// $query="SELECT * FROM users";
$result = mysqli_query ( $conn, $query );

if (mysqli_num_rows ( $result ) == 1) {
	$row = mysqli_fetch_assoc ( $result );
	if ($row ["user_password"] == md5($_POST ["password"])) {
		$row = null;
		$result = null;
		session_start ();
		$_SESSION ["logged"] = $login;
		session_write_close ();
		header('Location: ../userindex.php');
	}
} else {
	echo "0 results";
	header('Location: ../userindex.php');
}
exit();
?>
